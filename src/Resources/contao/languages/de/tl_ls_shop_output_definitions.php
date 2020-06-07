<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['title']												= array('Bezeichnung');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductTemplate']								= array('Template für Produktdarstellung');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewSorting']							= array('Sortierung');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewSortingKeyOrAlias']					= array('Alias oder Schlüsselwort für Sortierung nach Merkmal oder FlexContent');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewUserSorting']						= array('Benutzerdefinierte Sortierung erlauben');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewUserSortingFields']				= array('Angebotene Felder für benutzerdefinierte Sortierung');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewPagination']						= array('Produkte pro Seite', 'Bitte geben Sie "0" ein, wenn Sie keine Paginierung wünschen.');

	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductTemplate']['reference']		= array(
		'template_productOverview_useDetailsTemplate' => array('Produktspezifisches Detaildarstellungs-Template verwenden', 'Mit dieser Auswahl wird jedes Produkt in der Übersichtsdarstellung mit dem Template dargestellt, das auch für die Detaildarstellung des Produktes gewählt wurde. Diese Einstellung kann beispielsweise zum Einsatz kommen, wenn Sie die Bestellung eines Produktes direkt aus der Produkt-Übersicht ermöglichen möchten.')
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewUserSortingFields']['labels'] = array(
		'field1' => 'Sortierfeld',
		'field2' => 'Alias oder Schlüsselwort für Sortierung nach Merkmal oder FlexContent',
		'field3' => 'Bezeichnung (iflng insert-tags möglich)'
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewSorting']['reference']		= array(
		'title_sortDir_ASC' => 'Produktbezeichnung aufsteigend',
		'title_sortDir_DESC' => 'Produktbezeichnung absteigend',
		
		'lsShopProductPrice_sortDir_ASC' => 'Preis aufsteigend',
		'lsShopProductPrice_sortDir_DESC' => 'Preis absteigend',

		'lsShopProductCode_sortDir_ASC' => 'Artikelnummer aufsteigend',
		'lsShopProductCode_sortDir_DESC' => 'Artikelnummer absteigend',
		
		'sorting_sortDir_ASC' => 'Sortierzahl aufsteigend',
		'sorting_sortDir_DESC' => 'Sortierzahl absteigend',
		
		'lsShopProductProducer_sortDir_ASC' => 'Hersteller aufsteigend',
		'lsShopProductProducer_sortDir_DESC' => 'Hersteller absteigend',
		
		'lsShopProductWeight_sortDir_ASC' => 'Gewicht aufsteigend',
		'lsShopProductWeight_sortDir_DESC' => 'Gewicht absteigend',
		
		'priority_sortDir_ASC' => 'Priorität aufsteigend (nur bei Produktsuche verfügbar)',
		'priority_sortDir_DESC' => 'Priorität absteigend (nur bei Produktsuche verfügbar)',
		
		'flex_contentsLanguageIndependentKEYORALIAS_sortDir_ASC' => 'FlexContent (einsprachig) aufsteigend',
		'flex_contentsLanguageIndependentKEYORALIAS_sortDir_DESC' => 'FlexContent (einsprachig) absteigend',

		'flex_contentsKEYORALIAS_sortDir_ASC' => 'FlexContent (mehrsprachig) aufsteigend',
		'flex_contentsKEYORALIAS_sortDir_DESC' => 'FlexContent (mehrsprachig) absteigend',

		'lsShopProductAttributesValuesKEYORALIAS_sortDir_ASC' => 'Merkmal aufsteigend',
		'lsShopProductAttributesValuesKEYORALIAS_sortDir_DESC' => 'Merkmal absteigend'
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['lsShopProductOverviewUserSorting']['reference']		= array(
		'yes' => array('ja'),
		'no' => array('nein')
	);

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['outputDefinitions_legend']   = 'Darstellungs-Einstellungen für Produktübersicht';
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['outputDefinitionsCrossSeller_legend']   = 'Darstellungs-Einstellungen für CrossSeller';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['new']        = array('Neuer Datensatz', 'Einen neuen Datensatz anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['edit']        = array('Datensatz bearbeiten', 'Datensatz ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['delete']        = array('Datensatz löschen', 'Datensatz ID %s löschen');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['copy']        = array('Datensatz kopieren', 'Datensatz ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_output_definitions']['show']        = array('Details anzeigen', 'Details des Datensatzes ID %s anzeigen');
