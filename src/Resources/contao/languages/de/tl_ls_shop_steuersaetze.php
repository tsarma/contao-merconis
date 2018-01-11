<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['alias']										= array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird. Dieses Feld kann freigelassen werden, der passende Wert wird dann automatisch eingetragen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['steuerProzentPeriod1']						= array('Steuersatz/Steuerzone (links Steuersatz in Prozent, rechts L&auml;nder der Steuerzone)', 'Bitte geben Sie die L&auml;nder der Steuerzone als kommagetrennte Liste zweistelliger L&auml;nderkennungen (ISO-3166-1-Kodierliste) an. Lassen Sie das rechte Feld (L&auml;nder der Steuerzone) frei, so gilt der festgelegte Prozentwert f&uuml;r alle Kunden, deren Land nicht mit einem explizit in einer Steuerzone definierten Land &uuml;bereinstimmt.');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['startPeriod1']								= array('G&uuml;ltigkeit ab', 'Geben Sie hier das Datum an, ab dem dieser Prozentwert f&uuml;r diesen Steuersatz gilt (ab 0 Uhr des entsprechenden Tages)');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['stopPeriod1']								= array('G&uuml;ltigkeit bis', 'Geben Sie hier das Datum an, bis zu dem dieser Prozentwert f&uuml;r diesen Steuersatz gilt (bis 23:59 Uhr des entsprechenden Tages)');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['steuerProzentPeriod2']						= array('Steuersatz/Steuerzone (links Steuersatz in Prozent, rechts L&auml;nder der Steuerzone)', 'Bitte geben Sie die L&auml;nder der Steuerzone als kommagetrennte Liste zweistelliger L&auml;nderkennungen (ISO-3166-1-Kodierliste) an.');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['startPeriod2']								= array('G&uuml;ltigkeit ab', 'Geben Sie hier das Datum an, ab dem dieser Prozentwert f&uuml;r diesen Steuersatz gilt (ab 0 Uhr des entsprechenden Tages)');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['stopPeriod2']								= array('G&uuml;ltigkeit bis', 'Geben Sie hier das Datum an, bis zu dem dieser Prozentwert f&uuml;r diesen Steuersatz gilt (bis 23:59 Uhr des entsprechenden Tages)');

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['steuerPeriod1_legend']   = 'G&uuml;ltigkeitszeitraum 1';
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['steuerPeriod2_legend']   = 'G&uuml;ltigkeitszeitraum 2';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['new']        = array('Neuer Steuersatz', 'Einen neuen Steuersatz anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['edit']        = array('Steuersatz bearbeiten', 'Steuersatz ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['delete']        = array('Steuersatz l&ouml;schen', 'Steuersatz ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['copy']        = array('Steuersatz kopieren', 'Steuersatz ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['show']        = array('Details anzeigen', 'Details des Steuersatz ID %s anzeigen');
	
	/*
	 * Misc
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_steuersaetze']['wildcardNotAllowed'] = 'Da Sie diesen Steuersatz bereits mindestens einem Produkt zugeordnet haben, k&ouml;nnen Sie keine dynamischen Werte verwenden.';
