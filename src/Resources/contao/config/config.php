<?php

namespace Merconis\Core;

define('TL_MERCONIS_INSTALLER', 'MERCONIS INSTALLER');
define('TL_MERCONIS_IMPORTER', 'MERCONIS IMPORTER');
define('TL_MERCONIS_GENERAL', 'MERCONIS GENERAL');
define('TL_MERCONIS_ERROR', 'MERCONIS ERROR');
define('TL_MERCONIS_MESSAGES', 'MERCONIS MESSAGES');
define('TL_MERCONIS_STOCK_MANAGEMENT', 'MERCONIS STOCK MANAGEMENT');

$GLOBALS['TL_HOOKS']['merconisCustomTaxRateCalculation'][] = array('Merconis\Core\ls_shop_generalHelper', 'merconisCustomTaxRateCalculation');

$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('Merconis\Core\ls_shop_custom_regexp', 'customRegexp');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('Merconis\Core\ls_shop_custom_regexp_fe', 'customRegexp');

/*
 * Include the lsjs app for the merconis backend
 */
if (TL_MODE === 'BE') {
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/ls_lsjs4c/pub/lsjs/core/appBinder/binder.php?output=js&pathToApp='.urldecode('_dup5_/zzz_merconis/js/lsjs/backend/app').'&includeCore=no&includeCoreModules=no';
	$GLOBALS['TL_CSS'][] = 'system/modules/ls_lsjs4c/pub/lsjs/core/appBinder/binder.php?output=css&pathToApp='.urldecode('_dup5_/zzz_merconis/js/lsjs/backend/app').'&includeCore=no&includeCoreModules=no';
}

if (TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Merconis\Core\ls_shop_generalHelper', 'ls_shop_switchTemplateInDetailsViewIfNecessary');
	/*
	 * Hook for writing the layout's filter settings into the global variables for later use
	 */
	$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Merconis\Core\ls_shop_generalHelper', 'merconis_getLayoutSettingsForGlobalUse');
}

/*
 * Hook for loading the themes' language files
 */
if (TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('Merconis\Core\ls_shop_generalHelper', 'ls_shop_loadThemeLanguageFiles');
}

/*
 * Hook zur Ermittlung und Bereitstellung der AJAX-URL
 */
if (TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['generatePage'][] = array('Merconis\Core\ls_shop_generalHelper', 'ls_shop_provideInfosForJS');
}

/*
 * Hooks für checkoutData
 */
if (TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['processFormData'][] = array('Merconis\Core\ls_shop_checkoutData', 'ls_shop_processFormData');
	$GLOBALS['TL_HOOKS']['loadFormField'][] = array('Merconis\Core\ls_shop_checkoutData', 'ls_shop_loadFormField');
	$GLOBALS['TL_HOOKS']['postLogin'][] = array('Merconis\Core\ls_shop_checkoutData', 'ls_shop_postLogin');
}


/*
 * Hooks for form validation
 */
if (TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['loadFormField'][] = array('Merconis\Core\ls_shop_generalHelper', 'handleMandatoryOnCondition');
}

/*
 * Hooks für Ajax
 */
$GLOBALS['TL_HOOKS']['executePreActions'][] = array('Merconis\Core\ls_shop_ajaxController', 'executePreActions');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('Merconis\Core\ls_shop_ajaxController', 'executePostActions');

/*
 * Custom Inserttags
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Merconis\Core\ls_shop_customInserttags', 'customInserttags');

/*
 * Hook für Suchindex
 */
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Merconis\Core\ls_shop_generalHelper', 'getSearchablePages');

/*
 * Hook für bedingte CTE-Ausgabe
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('Merconis\Core\ls_shop_generalHelper', 'conditionalCTEOutput');

/*
 * Hook zum Generieren und Einfügen des Filter-Formulars an seine Platzhalterstelle
 */
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Merconis\Core\ls_shop_filterController', 'generateAndInsertFilterForms');

$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Merconis\Core\ls_shop_generalHelper', 'callback_outputFrontendTemplate');

/*
 * Hook for the multiLanguage DCA manipulation
 */
if (\Input::get('do') != 'themes' || \Input::get('key') != 'importTheme') {
	$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Merconis\Core\ls_shop_languageHelper', 'createMultiLanguageDCAFields');
}
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Merconis\Core\ls_shop_generalHelper', 'removeFieldsForEditAll');

/*
 * Hooks for language selector
 */
$GLOBALS['LS_LANGUAGESELECTOR_HOOKS']['modifyLanguageLinks'][] = array('Merconis\Core\ls_shop_languageHelper', 'modifyLanguageSelectorLinks');

/*
 * Hook to allow payment provider callbacks to work
 */
$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('\Merconis\Core\ls_shop_generalHelper', 'bypassRefererCheckIfNecessary');
$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('\Merconis\Core\ls_shop_cartHelper', 'initializeEmptyCart');

/*
 * ->
 * Hooks to register API resources
 */
$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiController', 'processRequest');

if (TL_MODE === 'FE') {
	$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiController_variantSelector', 'processRequest');
	$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiController_exportFrontend', 'processRequest');
	$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiController_productManagement', 'processRequest');
}

if (TL_MODE === 'BE') {
	$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiController_exportBackend', 'processRequest');
}

if (TL_MODE === 'BE') {
	$GLOBALS['LS_API_HOOKS']['apiReceiver_processRequest'][] = array('\Merconis\Core\ls_shop_apiControllerBackend', 'processRequest');
}
/*
 * <-
 */

$GLOBALS['TL_CRON']['daily'][] = array('\Merconis\Core\ls_shop_generalHelper','sendMessagesOnStatusChangeCronDaily');
$GLOBALS['TL_CRON']['hourly'][] = array('\Merconis\Core\ls_shop_generalHelper','sendMessagesOnStatusChangeCronHourly');

if (TL_MODE == 'BE') {
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/zzz_merconis/js/ls_shop_BE.js';
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/zzz_merconis/js/ls_x_controller.js';
}

if (TL_MODE == 'BE') {
	$GLOBALS['TL_CSS'][] = 'system/modules/zzz_merconis/css/beStyle.css';
}

array_insert($GLOBALS['BE_MOD'], 0, array(
	'zzz_merconis' => array(
		'ls_shop_settings' => array(
			'tables' => array('tl_lsShopSettings'),
		),
		'ls_shop_output_definitions' => array(
			'tables' => array('tl_ls_shop_output_definitions'),
		),
		'ls_shop_delivery_info' => array(
			'tables' => array('tl_ls_shop_delivery_info'),
		),
		'ls_shop_steuersaetze' => array(
			'tables' => array('tl_ls_shop_steuersaetze'),
		),
		'ls_shop_payment_methods' => array(
			'tables' => array('tl_ls_shop_payment_methods'),
		),
		'ls_shop_shipping_methods' => array(
			'tables' => array('tl_ls_shop_shipping_methods'),
		),
		'ls_shop_message_type' => array(
			'tables' => array('tl_ls_shop_message_type', 'tl_ls_shop_message_model'),
		),
		'ls_shop_cross_seller' => array(
			'tables' => array('tl_ls_shop_cross_seller'),
		),
		'ls_shop_coupon' => array(
			'tables' => array('tl_ls_shop_coupon'),
		),

		'ls_shop_attributes' => array(
			'tables' => array('tl_ls_shop_attributes', 'tl_ls_shop_attribute_values'),
		),

		'ls_shop_filter_fields' => array(
			'tables' => array('tl_ls_shop_filter_fields', 'tl_ls_shop_filter_field_values'),
		),

		'ls_shop_configurator' => array(
			'tables' => array('tl_ls_shop_configurator'),
		),

		'ls_shop_product' => array(
			'tables' => array('tl_ls_shop_product', 'tl_ls_shop_variant'),
		),

		'ls_shop_import' => array(
			'tables' => array('tl_ls_shop_import'),
			'callback' => 'ls_shop_import',
			'javascript' => 'system/modules/zzz_merconis/js/ls_shop_BE_import.js?rand='.rand(0,99999),
		),

		'ls_shop_productSearch' => array(
			'callback' => 'ls_shop_beModule_productSearch',
		),

		'ls_shop_stockManagement' => array(
			'callback' => 'ls_shop_beModule_stockManagement',
		),

		'ls_shop_orders' => array(
			'tables' => array('tl_ls_shop_orders'),
		),

		'ls_shop_export' => array(
			'tables' => array('tl_ls_shop_export'),
		),

		'ls_shop_messages_sent' => array(
			'tables' => array('tl_ls_shop_messages_sent'),
		)
	)
));

$GLOBALS['BE_FFL']['listWizardDoubleValue'] = 'ListWizardDoubleValue';
$GLOBALS['BE_FFL']['ls_x_ListWizardMultiValue'] = 'ls_x_ListWizardMultiValue';
$GLOBALS['BE_FFL']['listWizardDoubleValue_doubleSelect'] = 'ListWizardDoubleValue_doubleSelect';
$GLOBALS['BE_FFL']['listWizardDoubleValue_leftText_rightTextarea'] = 'ListWizardDoubleValue_leftText_rightTextarea';
$GLOBALS['BE_FFL']['htmlDiv'] = 'ls_shop_htmlDiv';
$GLOBALS['BE_FFL']['simpleOutput'] = 'ls_shop_simpleOutput';
$GLOBALS['BE_FFL']['ls_shop_productSelection'] = 'ls_shop_productSelection';
$GLOBALS['BE_FFL']['ls_shop_productSelectionWizard'] = 'ls_shop_productSelectionWizard';
$GLOBALS['BE_FFL']['ls_shop_generatedTemplate'] = 'ls_shop_generatedTemplate';
$GLOBALS['BE_FFL']['ls_shop_ListWizardAttributesValues'] = 'ls_shop_ListWizardAttributesValues';


$GLOBALS['FE_MOD']['ls_shop'] = array(
	'ls_shop_cart' => 'ModuleCart',
	'ls_shop_orderReview' => 'ModuleOrderReview',
	'ls_shop_checkoutFinish' => 'ModuleCheckoutFinish',
	'ls_shop_afterCheckout' => 'ModuleAfterCheckout',
	'ls_shop_paymentAfterCheckout' => 'ModulePaymentAfterCheckout',
	'ls_shop_productOverview' => 'ModuleProductOverview',
	'ls_shop_productSingleview' => 'ModuleProductSingleview',
	'ls_shop_cross_seller' => 'ModuleCrossSeller',
	'ls_shop_productSearch' => 'ModuleProductSearch',
	'ls_shop_myOrders' => 'ModuleMyOrders',
	'ls_shop_myOrderDetails' => 'ModuleMyOrderDetails',
	'ls_shop_filterForm' => 'ModuleFilterForm',
	'ls_shop_ajaxGeneral' => 'ModuleAjaxGeneral',
	'ls_shop_productManagementApiInspector' => 'ModuleProductManagementApiInspector'
);

$GLOBALS['TL_FFL']['ls_shop_configuratorFileUpload'] = 'ls_shop_configuratorFileUpload';

/**
 * Hinzufügen von Content-Elementen
 */
$GLOBALS['TL_CTE']['lsShop']['lsShopCrossSellerCTE'] = 'ls_shop_cross_sellerCTE';
