<?php

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller']									= array('Cross-seller', 'Please select here which cross-seller you wish to implement.');
$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']								= array('Condition');

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller_legend']							= 'Cross-seller';
$GLOBALS['TL_LANG']['tl_content']['lsShopConditionalOutput_legend']						= 'Conditional output (shop)';

$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']['options']					= array(
	'always' => array('Always display', 'The content element is always displayed.'),
	'onlyIfNotOverview' => array('Only outside product overview', 'The content element is only displayed in the product overview.'),
	'onlyInSingleview' => array('Only in product detail view', 'The content element is only displayed in the product detail view.'),
	'onlyIfCartNotEmpty' => array('Only if shopping cart not empty', 'The content element is only displayed if the shopping cart is not empty.'),
	'onlyIfCartEmpty' => array('Only if shopping cart empty', 'The content element is only displayed if the shopping cart is empty.'),
    'onlyIfFeUserLoggedIn' => array('Only if front-end user is logged in', 'The content element is only displayed if a front-end user (member/customer) is logged in.'),
    'onlyIfFeUserNotLoggedIn' => array('Only if no front-end user is logged in', 'The content element is only displayed if a front-end user (member/customer) is logged in.')
);
