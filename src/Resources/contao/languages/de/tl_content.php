<?php

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller']									= array('Cross-Seller', 'Bitte wählen Sie hier aus, welchen CrossSeller Sie einbinden möchten.');
$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']								= array('Bedingung');

$GLOBALS['TL_LANG']['tl_content']['lsShopCrossSeller_legend']							= 'CrossSeller';
$GLOBALS['TL_LANG']['tl_content']['lsShopConditionalOutput_legend']						= 'Bedingte Ausgabe (Shop)';

$GLOBALS['TL_LANG']['tl_content']['lsShopOutputCondition']['options']					= array(
	'always' => array('Immer anzeigen', 'Das Content-Element wird immer angezeigt'),
	'onlyInOverview' => array('Nur in Produkt-Übersicht', 'Das Content-Element wird nur in der Produkt-Übersicht angezeigt'),
	'onlyInSingleview' => array('Nur in Produkt-Detailansicht', 'Das Content-Element wird nur in der Produkt-Detailansicht angezeigt'),
	'onlyIfCartNotEmpty' => array('Nur wenn Warenkorb nicht leer', 'Das Content-Element wird nur angezeigt, wenn der Warenkorb nicht leer ist'),
	'onlyIfCartEmpty' => array('Nur wenn Warenkorb leer', 'Das Content-Element wird nur angezeigt, wenn der Warenkorb leer ist'),
	'onlyIfFeUserLoggedIn' => array('Nur wenn FE-User eingeloggt', 'Das Content-Element wird nur angezeigt, wenn ein Frontend-User (Mitglied/Kunde) angemeldet ist.'),
	'onlyIfFeUserNotLoggedIn' => array('Nur wenn kein FE-User eingeloggt', 'Das Content-Element wird nur angezeigt, wenn kein Frontend-User (Mitglied/Kunde) angemeldet ist.')
);
