<?php

namespace Merconis\Core;
use function LeadingSystems\Helpers\ls_getFilePathFromVariableSources;

class ls_shop_apiController_productManagement
{
	protected static $objInstance;

	/** @var \LeadingSystems\Api\ls_apiController $obj_apiReceiver */
	protected $obj_apiReceiver = null;

	protected function __construct() {}

	final private function __clone()
	{
	}

	public static function getInstance()
	{
		if (!is_object(self::$objInstance)) {
			self::$objInstance = new self();
		}

		return self::$objInstance;
	}

	public function processRequest($str_resourceName, $obj_apiReceiver)
	{
		if (!$str_resourceName || !$obj_apiReceiver) {
			return;
		}

		$this->obj_apiReceiver = $obj_apiReceiver;

		/*
		 * If this class has a method that matches the resource name, we call it.
		 * If not, we don't do anything because another class with a corresponding
		 * method might have a hook registered.
		 */
		if (method_exists($this, $str_resourceName)) {
			$this->{$str_resourceName}();
		}
	}

	/**
	 * Returns all contao page aliases that can be used as product categories
	 */
	protected function apiResource_getCategoryAliases()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::getPageAliases());
	}

	/**
	 * Returns the input price type used by Merconis
	 */
	protected function apiResource_getInputPriceType()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data($GLOBALS['TL_CONFIG']['ls_shop_priceType'] == 'brutto' ? 'gross' : 'net');
	}

	/**
	 * Returns the available price and weight modification types that are required to specify a variant price or weight
	 */
	protected function apiResource_getPriceAndWeightModificationTypes()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(array_keys(ls_shop_productManagementApiHelper::$modificationTypesTranslationMap));
	}

	/**
	 * Returns the available scale price types
	 */
	protected function apiResource_getScalePriceTypes()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::$arr_scalePriceTypes);
	}

	/**
	 * Returns the available scale price quantity detection methods
	 */
	protected function apiResource_getScalePriceQuantityDetectionMethods()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::$arr_scalePriceQuantityDetectionMethods);
	}

	/**
	 * Returns the aliases of all existing delivery info types
	 */
	protected function apiResource_getDeliveryInfoTypeAliases()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::getDeliveryInfoTypeAliases());
	}

	/**
	 * Returns the aliases of all existing configurators
	 */
	protected function apiResource_getConfiguratorAliases()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::getConfiguratorAliases());
	}

	/**
	 * Returns the names of all existing product details templates
	 */
	protected function apiResource_getProductDetailsTemplates()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(array_keys(\Controller::getTemplateGroup('template_productDetails_')));
	}

	/**
	 * Returns the aliases of all existing properties and values. The first level keys of the response object represent the property aliases and the second level keys the respective value aliases
	 */
	protected function apiResource_getPropertyAndValueAliases()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::getAttributeAndValueAliasesInRelation());
	}

	/**
	 * Returns the aliases of existing tax classes
	 */
	protected function apiResource_getTaxClassAliases()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_productManagementApiHelper::getTaxClassAliases());
	}

	/**
	 * Returns a list containing the names of all images that are stored in the standard product image folder
	 */
	protected function apiResource_getProductImageNames()
	{
		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(ls_shop_generalHelper::getImagesFromStandardFolder('__ALL_IMAGES__', false));
	}

	/**
	 * Returns an image that is stored in the standard product image folder and that can be identified by its name
	 */
	protected function apiResource_getProductImageByName()
	{
		$arr_dataRows = json_decode($_GET['data'], true);

		if (!count($arr_dataRows)) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message('data parameter missing or empty');
			return;
		}

		$arr_preprocessingResult = ls_shop_productManagementApiPreprocessor::preprocess($arr_dataRows, __FUNCTION__);

		if ($arr_preprocessingResult['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_preprocessingResult['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$arr_dataRows = $arr_preprocessingResult['arr_preprocessedDataRows'];

		$str_filePath = ls_shop_generalHelper::getProductImageByPath(
			ls_getFilePathFromVariableSources($arr_dataRows['image']),
			$arr_dataRows['width'],
			$arr_dataRows['height'],
			$arr_dataRows['resizeMode'],
			$arr_dataRows['forceRefresh']
		);

		if (!$str_filePath) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message('no output file');
			return;
		}

		$obj_file = new \File($str_filePath, true);

		$this->obj_apiReceiver->set_httpResponseCode(200);

		header('Content-Type:'.$obj_file->mime);

		echo $obj_file->getContent();
		exit;
	}

	/**
	 * Inserts product data or updates product data if it already exists. Expects the request details JSON formatted as POST parameter 'data'
	 */
	protected function apiResource_writeProductData()
	{
		$arr_dataRows = json_decode($_POST['data'], true);

		if (!count($arr_dataRows)) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message('data parameter missing or empty');
			return;
		}

		$arr_preprocessingResult = ls_shop_productManagementApiPreprocessor::preprocess($arr_dataRows, __FUNCTION__);

		if ($arr_preprocessingResult['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_preprocessingResult['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$arr_dataRows = $arr_preprocessingResult['arr_preprocessedDataRows'];

		$arr_result = $this->performImport($arr_dataRows);

		ls_shop_generalHelper::saveLastBackendDataChangeTimestamp();

		if ($arr_result['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_result['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(null);
	}

	/**
	 * Deletes product data. Expects the request details JSON formatted as POST parameter 'data'
	 */
	protected function apiResource_deleteProductData()
	{
		$arr_dataRows = json_decode($_POST['data'], true);

		if (!count($arr_dataRows)) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message('data parameter missing or empty');
			return;
		}

		$arr_preprocessingResult = ls_shop_productManagementApiPreprocessor::preprocess($arr_dataRows, __FUNCTION__);

		if ($arr_preprocessingResult['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_preprocessingResult['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$arr_dataRows = $arr_preprocessingResult['arr_preprocessedDataRows'];

		$arr_result = $this->performDeletion($arr_dataRows);

		ls_shop_generalHelper::saveLastBackendDataChangeTimestamp();

		if ($arr_result['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_result['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(null);
	}

	/**
	 * Changes product or variant stock. Expects the request details JSON formatted as POST parameter 'data'
	 */
	protected function apiResource_changeStock()
	{
		$arr_dataRows = json_decode($_POST['data'], true);

		if (!count($arr_dataRows)) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message('data parameter missing or empty');
			return;
		}

		$arr_preprocessingResult = ls_shop_productManagementApiPreprocessor::preprocess($arr_dataRows, __FUNCTION__);

		if ($arr_preprocessingResult['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_preprocessingResult['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$arr_dataRows = $arr_preprocessingResult['arr_preprocessedDataRows'];

		$arr_result = $this->performStockChange($arr_dataRows);

		ls_shop_generalHelper::saveLastBackendDataChangeTimestamp();

		if ($arr_result['bln_hasError']) {
			$this->obj_apiReceiver->error();
			$this->obj_apiReceiver->set_message($arr_result['arr_messages']);
			$this->obj_apiReceiver->set_httpResponseCode(200);
			return;
		}

		$this->obj_apiReceiver->success();
		$this->obj_apiReceiver->set_data(null);
	}

	protected function performStockChange($arr_dataRows) {
		$arr_result = array(
			'bln_hasError' => false,
			'arr_messages' => array()
		);

		foreach (ls_shop_productManagementApiHelper::$dataRowTypesInOrderToProcess as $str_dataRowType) {
			foreach ($arr_dataRows as $int_rowNumber => $arr_dataRow) {
				/*
				 * Since we perform the stock change for one data row type at a time, we skip rows that have the wrong type
				 */
				if ($arr_dataRow['type'] != $str_dataRowType) {
					continue;
				}

				try {
					switch ($str_dataRowType) {
						case 'product':
							ls_shop_productManagementApiHelper::changeStockForProductWithCode($arr_dataRow['productcode'], $arr_dataRow['changeStock']);
							break;

						case 'variant':
							ls_shop_productManagementApiHelper::changeStockForVariantWithCode($arr_dataRow['productcode'], $arr_dataRow['changeStock']);
							break;
					}
				} catch (\Exception $e) {
					$arr_result['bln_hasError'] = true;
					$arr_result['arr_messages'][$int_rowNumber + 1] = $e->getMessage();
				}
			}
		}

		return $arr_result;
	}

	protected function performDeletion($arr_dataRows) {
		$arr_result = array(
			'bln_hasError' => false,
			'arr_messages' => array()
		);

		foreach (ls_shop_productManagementApiHelper::$dataRowTypesInOrderToProcess as $str_dataRowType) {
			foreach ($arr_dataRows as $int_rowNumber => $arr_dataRow) {
				/*
				 * Since we perform the deletion for one data row type at a time, we skip rows that have the wrong type
				 */
				if ($arr_dataRow['type'] != $str_dataRowType) {
					continue;
				}

				try {
					switch ($str_dataRowType) {
						case 'product':
							ls_shop_productManagementApiHelper::deleteProductWithCode($arr_dataRow['productcode']);
							break;

						case 'variant':
							ls_shop_productManagementApiHelper::deleteVariantWithCode($arr_dataRow['productcode']);
							break;

						case 'productLanguage':
							ls_shop_productManagementApiHelper::deleteProductLanguageWithCode($arr_dataRow['parentProductcode'], $arr_dataRow['language']);
							break;

						case 'variantLanguage':
							ls_shop_productManagementApiHelper::deleteVariantLanguageWithCode($arr_dataRow['parentProductcode'], $arr_dataRow['language']);
							break;
					}
				} catch (\Exception $e) {
					$arr_result['bln_hasError'] = true;
					$arr_result['arr_messages'][$int_rowNumber + 1] = $e->getMessage();
				}
			}
		}

		return $arr_result;
	}

	protected function performImport($arr_dataRows)
	{
		$arr_result = array(
			'bln_hasError' => false,
			'arr_messages' => array()
		);

		foreach (ls_shop_productManagementApiHelper::$dataRowTypesInOrderToProcess as $str_dataRowType) {
			foreach ($arr_dataRows as $int_rowNumber => $arr_dataRow) {
				/*
				 * Since we import one data row type at a time, we skip rows that have the wrong type
				 */
				if ($arr_dataRow['type'] != $str_dataRowType) {
					continue;
				}

				try {
					switch ($str_dataRowType) {
						case 'product':
							ls_shop_productManagementApiHelper::insertOrUpdateProductRecord($arr_dataRow);
							break;

						case 'variant':
							ls_shop_productManagementApiHelper::insertOrUpdateVariantRecord($arr_dataRow);
							break;

						case 'productLanguage':
							ls_shop_productManagementApiHelper::writeProductLanguageData($arr_dataRow);
							break;

						case 'variantLanguage':
							ls_shop_productManagementApiHelper::writeVariantLanguageData($arr_dataRow);
							break;
					}
				} catch (\Exception $e) {
					$arr_result['bln_hasError'] = true;
					$arr_result['arr_messages'][$int_rowNumber + 1] = $e->getMessage();
				}
			}
		}

		ls_shop_productManagementApiHelper::translateRecommendedProductCodesInIDs();

		return $arr_result;
	}

}