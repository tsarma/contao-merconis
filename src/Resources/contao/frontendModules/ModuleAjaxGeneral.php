<?php

namespace Merconis\Core;

class ModuleAjaxGeneral extends \Module {
	public function generate() {
		if (FE_USER_LOGGED_IN) {
			$this->import('FrontendUser', 'User');
		}

		if (
				\Input::post('isAjax') == 1
			&&	(
						\Input::post('requestedClass') == __CLASS__
					||	html_entity_decode(\Input::post('requestedClass')) == __CLASS__
					||	'Merconis\\Core\\'.\Input::post('requestedClass') == __CLASS__
				)
		) {
			/*
			 * In case of an ajax request the function generateAjax() is called. This function
			 * checks the mandatory "action" parameter and returns the corresponding ajax response.
			 */
			echo $this->generateAjax();
			exit; // IMPORTANT, otherwise the whole page content would be rendered and returned as the ajax response
		}
		
		if (TL_MODE == 'BE') {
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### MERCONIS AjaxGeneral ###';
			return $objTemplate->parse();
		}
		return parent::generate();
	}
	
	/*
	 * This function returns the json_encoded response to the current ajax request.
	 */
	public function generateAjax() {
		$response = array(
			'success' => null,
			'value' => null,
			'error' => null
		);
		
		if (!\Input::post('action')) {
			$response['error'] = 'no action defined';
		} else {
			switch (\Input::post('action')) {
				case 'addToFavorites':
					$response = $this->addToFavorites();
					ls_shop_msg::decreaseLifetime();
					break;
				
				case 'customAjaxHook':
					if (isset($GLOBALS['MERCONIS_HOOKS']['customAjaxHook']) && is_array($GLOBALS['MERCONIS_HOOKS']['customAjaxHook'])) {
						foreach ($GLOBALS['MERCONIS_HOOKS']['customAjaxHook'] as $mccb) {
							$objMccb = \System::importStatic($mccb[0]);
							$response = $objMccb->{$mccb[1]}();
						}
					}
					break;
			}
		}

		return json_encode($response);
	}

	protected function addToFavorites() {
		$response = array(
			'success' => null,
			'value' => null,
			'error' => null
		);
		
		$objProduct = ls_shop_generalHelper::getObjProduct(\Input::post('favoriteProductID'));
		ls_shop_generalHelper::getFavoritesForm($objProduct);
		
		if (ls_shop_msg::checkMsg('addedToFavorites', $objProduct->_id)) {
			$response['value'] = array(
				'msgType' => 1,
				'msgCode' => 'addedToFavorites',
				'msg' => html_entity_decode($GLOBALS['TL_LANG']['MSC']['ls_shop']['miscText126'], ENT_QUOTES, 'UTF-8'),
				'btnText' => html_entity_decode($GLOBALS['TL_LANG']['MSC']['ls_shop']['miscText125'], ENT_QUOTES, 'UTF-8')
			);
			$response['success'] = true;
		} else if (ls_shop_msg::checkMsg('removedFromFavorites', $objProduct->_id)) {
			$response['value'] = array(
				'msgType' => 2,
				'msgCode' => 'removedFromFavorites',
				'msg' => html_entity_decode($GLOBALS['TL_LANG']['MSC']['ls_shop']['miscText127'], ENT_QUOTES, 'UTF-8'),
				'btnText' => html_entity_decode($GLOBALS['TL_LANG']['MSC']['ls_shop']['miscText124'], ENT_QUOTES, 'UTF-8')
			);
			$response['success'] = true;
		} else {
			$response['value'] = array(
				'msgType' => 3,
				'msgCode' => 'ajaxRequestNotSuccessful',
				'msg' => $GLOBALS['TL_LANG']['MSC']['ls_shop']['misc']['ajaxRequestNotSuccessful']
			);
			$response['error'] = true;
		}
		
		return $response;
	}
	
	public function compile() {
	}
}
?>