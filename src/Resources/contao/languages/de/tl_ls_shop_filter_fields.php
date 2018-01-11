<?php

	/*
	 * Fields
	 */

	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['alias']								= array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['title']								= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['dataSource']							= array('Datenquelle', 'Geben Sie an, woher das Filter-Feld seine Werte bezieht.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['sourceAttribute']						= array('Quellmerkmal');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['classForFilterFormField']				= array('CSS-Klasse', 'Diese CSS-Klasse wird im Filter-Formular-Feld verwendet.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['numItemsInReducedMode']				= array('Anzahl dargestellter Werte im &quot;Reduziert-Modus&quot;', 'Tragen Sie 0 ein, um im &quot;Reduziert-Modus&quot; alle Werte darzustellen oder, sofern einzelne Werte als &quot;wichtig&quot; gekennzeichnet sind, alle &quot;wichtigen&quot;');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['filterFormFieldType']					= array('Art des Auswahlfeldes');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['priority']								= array('Priorit&auml;t', 'Die Priorit&auml;t wird als Sortierkriterium f&uuml;r die Ausgabe der Felder im Filter-Formular verwendet. Felder mit h&ouml;herer Priorit&auml;t werden &uuml;ber Feldern mit niederer Priorit&auml;t angezeigt.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['startClosedIfNothingSelected']			= array('Feld schlie&szlig;en, wenn nichts gew&auml;hlt');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['filterMode']							= array('Filter-Modus', 'Bestimmen Sie, mit welcher logischen Verkn&uuml;pfung mehrere gew&auml;hlte Filter-Optionen interpretiert werden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['displayFilterModeInfo']				= array('Info bzgl. Filter-Modus ausgeben', 'Setzen Sie das Häkchen, wenn Sie im Frontend eine Information bezüglich des Filter-Modus anzeigen möchten.');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['makeFilterModeUserAdjustable']			= array('Einstellung des Filter-Modus im Frontend ermöglichen');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['templateToUse']						= array('Template');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['published']							= array('Aktiv');

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['title_legend']   = 'Bezeichnung und Alias';
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['output_legend'] = 'Ausgabe-Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['dataSource_legend'] = 'Datenquelle';
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['published_legend'] = 'Aktivierung';
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['filterLogic_legend'] = 'Filter-Logik';
	
	/*
	 * Reference
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['filterFormFieldType']['options'] = array(
		'checkbox' => 'Checkbox-Men&uuml;',
		'radio' => 'Radio-Men&uuml;'
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['filterMode']['options'] = array(
		'and' => 'und',
		'or' => 'oder'
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['dataSource']['options'] = array(
		'attribute' => array('Produktmerkmal', 'Die Auspr&auml;gungen des als Datenquelle gew&auml;hlten Merkmals werden verwendet. Legen Sie in diesem Fall keine Feldwerte als Kinddatens&auml;tze dieses Filter-Felds an.'),
		'producer' => array('Hersteller', 'Die Hersteller, die Sie Ihren Produkten hinterlegt haben, werden als Feldwerte verwendet. Legen Sie Datensätze mit &uuml;bereinstimmenden Werten an, um einzelne Feldwerte sortieren, priorisieren und mit individuellen Klassen versehen zu k&ouml;nnen.'),
		'price' => array('Preis', 'Es werden Felder zur Eingabe eines Minimal- und Maximalpreises ausgegeben. Legen Sie in diesem Fall keine Feldwerte als Kinddatens&auml;tze dieses Filter-Felds an.')
	);
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['new']        = array('Neues Feld', 'Ein neues Filter-Feld anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['editheader']        = array('Feld bearbeiten', 'Filter-Feld ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['edit'] = array('Feld bearbeiten', 'Feld mit ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['delete']        = array('Feld l&ouml;schen', 'Filter-Feld ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['copy']        = array('Feld kopieren', 'Filter-Feld ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_filter_fields']['show']        = array('Details anzeigen', 'Details des Filter-Felds ID %s anzeigen');
