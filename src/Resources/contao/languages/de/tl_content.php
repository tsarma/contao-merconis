<?php

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller']									= array('Cross-Seller', 'Bitte w&auml;hlen Sie hier aus, welchen CrossSeller Sie einbinden m&ouml;chten.');
$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']								= array('Bedingung');

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller_legend']							= 'CrossSeller';
$GLOBALS['TL_LANG']['tl_content']['lsShopConditionalOutput_legend']						= 'Bedingte Ausgabe (Shop)';

$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']['options']					= array(
	'always' => array('Immer anzeigen', 'Das Content-Element wird immer angezeigt'),
	'onlyInOverview' => array('Nur in Produkt-&Uuml;bersicht', 'Das Content-Element wird nur in der Produkt-&Uuml;bersicht angezeigt'),
	'onlyInSingleview' => array('Nur in Produkt-Detailansicht', 'Das Content-Element wird nur in der Produkt-Detailansicht angezeigt'),
	'onlyIfCartNotEmpty' => array('Nur wenn Warenkorb nicht leer', 'Das Content-Element wird nur angezeigt, wenn der Warenkorb nicht leer ist'),
	'onlyIfCartEmpty' => array('Nur wenn Warenkorb leer', 'Das Content-Element wird nur angezeigt, wenn der Warenkorb leer ist')
);
