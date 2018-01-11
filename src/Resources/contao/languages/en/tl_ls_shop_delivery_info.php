<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['title']										= array('Designation');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['alias']										= array('Alias', 'Unique designation to be used for reference. This field can be left blank, the matching value will then be filled in automatically.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['useStock']									= array('Observe goods in stock');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['allowOrdersWithInsufficientStock']			= array('Permit orders when goods in stock are not sufficient');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['alertWhenLowerThanMinimumStock']			= array('E-mail notification when the minimum number of goods in stock is underrun', 'The e-mail notification will be sent to the address which has been defined for incoming orders in the basic settings.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['minimumStock']								= array('Minimum number of goods in stock');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeMessageWithSufficientStock']	= array('Delivery time message with sufficient goods in stock', 'Use the place holder {{deliveryDate}} to show the date calculated on the basis of the stated delivery time.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeDaysWithSufficientStock']		= array('Delivery time in days with sufficient goods in stock');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeMessageWithInsufficientStock']	= array('Delivery time message if goods in stock are not sufficient', 'Use the place holder {{deliveryDate}} to show the date calculated on the basis of the stated delivery time.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeDaysWithInsufficientStock']		= array('Delivery time in days if goods in stock are not sufficient');

	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['xxx']['reference']		= array(
		'xxx' => array('xxx', 'yyy')
	);

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['title_legend']   = 'Designation';
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['stockSettings_legend']   = 'Goods in stock';
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTime_legend']   = 'Delivery time';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['new']        = array('New data record', 'Produce a new data record');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['edit']        = array('Edit data record', 'Edit data record ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['delete']        = array('Delete data record', 'Delete data record ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['copy']        = array('Copy data record', 'Copy data record ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['show']        = array('Show details', 'Show details of data record ID %s');
