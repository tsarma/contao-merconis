<?php

	/*
	 * Fields
	 */

	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['alias']										= array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['form']										= array('Formular');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['template']									= array('Template');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['startWithDataEntryMode']					= array('Im Datenerfassungsmodus beginnen', 'Diese Einstellung bestimmt, ob der Konfigurator bei seinem ersten Aufruf f&uuml;r ein Produkt auch dann zun&auml;chst das Formular zeigt, wenn das Produkt auch ohne erfolgte Dateneingabe bestellt werden kann. Hat das Konfigurator-Formular Pflichtfelder, so wird es zwangsl&auml;ufig dargestellt, solange die Dateneingabe noch nicht erfolgt ist.');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['stayInDataEntryMode']						= array('Im Datenerfassungsmodus bleiben', 'Mit dieser Einstellung bleibt der Konfigurator auch nach dem Abschicken des Formulars im Datenerfassungsmodus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['skipStandardFormValidation']				= array('Keine Standard-Formular-Validierung', 'Mit dieser Einstellung wird auf standardm&auml;&szlig;ige Formular-Validierung verzichtet. Die Validierung der im Konfigurator erfassten Daten erfolgt dann ausschlie&szlig;lich &uuml;ber eine in der Verarbeitungslogik-Datei programmierte &quot;customValidator&quot;-Funktion. Ist eine solche Funktion nicht definiert, so gelten die erfassten Daten grunds&auml;tzlich als valide. Sinnvoll ist diese Einstellung, wenn Sie das Formular in der Verarbeitungslogik-Datei z. B. mittels der dort verf&uuml;gbaren Formular-Hooks manipulieren und dadurch einen Zustand herbeif&uuml;hren, indem die Standard-Formular-Validierung kein korrektes Ergebnis ermitteln kann.');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['customLogicFile']							= array('Datei mit eigener Verarbeitungslogik', 'Bitte geben Sie hier bei Bedarf die Datei an, die das Programm mit Ihrer eigenen Verarbeitungslogik enth&auml;lt.');
	

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['title_legend']   = 'Bezeichnung und Alias';
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['form_legend']   = 'Formular';
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['template_legend']   = 'Template';
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['customLogic_legend'] = 'Eigene Verarbeitungslogik';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['new']        = array('Neuer Konfigurator', 'Einen neuen Produkt-Konfigurator anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['edit']        = array('Konfigurator bearbeiten', 'Produkt-Konfigurator ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['delete']        = array('Konfigurator l&ouml;schen', 'Produkt-Konfigurator ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['copy']        = array('Konfigurator kopieren', 'Produkt-Konfigurator ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_configurator']['show']        = array('Details anzeigen', 'Details des Produkt-Konfigurators ID %s anzeigen');
