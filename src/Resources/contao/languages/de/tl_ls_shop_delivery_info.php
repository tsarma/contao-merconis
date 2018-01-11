<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['alias']										= array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird. Dieses Feld kann freigelassen werden, der passende Wert wird dann automatisch eingetragen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['useStock']									= array('Lagerbestand ber&uuml;cksichtigen');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['allowOrdersWithInsufficientStock']			= array('Bestellungen mit nicht ausreichendem Lagerbestand erlauben');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['alertWhenLowerThanMinimumStock']			= array('E-Mail-Benachrichtigung bei Unterschreiten des minimalen Lagerbestandes', 'Die E-Mail-Benachrichtigung wird an die Adresse gesendet, die in den Grundeinstellungen auch f&uuml;r den Bestelleingang definiert ist.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['minimumStock']								= array('Minimaler Lagerbestand');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeMessageWithSufficientStock']	= array('Lieferzeit-Meldung bei ausreichendem Lagerbestand', 'Verwenden Sie den Platzhalter {{deliveryDate}}, um das auf Basis der angegebenen Lieferzeit errechnete Datum auszugeben.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeDaysWithSufficientStock']		= array('Lieferzeit in Tagen bei ausreichendem Lagerbestand');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeMessageWithInsufficientStock']	= array('Lieferzeit-Meldung bei nicht ausreichendem Lagerbestand', 'Verwenden Sie den Platzhalter {{deliveryDate}}, um das auf Basis der angegebenen Lieferzeit errechnete Datum auszugeben.');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTimeDaysWithInsufficientStock']		= array('Lieferzeit in Tagen bei nicht ausreichendem Lagerbestand');

	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['xxx']['reference']		= array(
		'xxx' => array('xxx', 'yyy')
	);

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['stockSettings_legend']   = 'Lagerbestand';
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['deliveryTime_legend']   = 'Lieferzeit';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['new']        = array('Neuer Datensatz', 'Einen neuen Datensatz anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['edit']        = array('Datensatz bearbeiten', 'Datensatz ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['delete']        = array('Datensatz l&ouml;schen', 'Datensatz ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['copy']        = array('Datensatz kopieren', 'Datensatz ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_delivery_info']['show']        = array('Details anzeigen', 'Details des Datensatzes ID %s anzeigen');
