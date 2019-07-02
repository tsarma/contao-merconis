<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['text01']										= array('Textbereich 1');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['text02']										= array('Textbereich 2');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['template']									= array('Darstellungstemplate');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['fallbackCrossSeller']						= array('Alternativer CrossSeller (optional)', 'W&auml;hlen Sie hier optional einen CrossSeller aus, der als Alternative dargestellt werden soll, wenn der aktuelle CrossSeller keine darstellbaren Produkte enth&auml;lt.');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['fallbackOutput']								= array('Alternative Ausgabe (optional)', 'Definieren Sie hier optional eine alternative Ausgabe, falls der aktuelle CrossSeller keine darstellbaren Produkte enth&auml;lt und Sie auch keinen alternativen CrossSeller f&uuml;r diesen Fall festgelegt haben.');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['productDirectSelection']						= array('Produkt-Auswahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['productSelectionType']						= array('Art der Produkt-Auswahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['activate']									= array('Verwenden', 'Aktivieren, um das Suchkriterium zu verwenden');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['published']									= array('Aktiv');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['maxNumProducts']								= array('Maximale Anzahl an Produkten', 'Bestimmen Sie, wieviele Produkte maximal f&uuml;r die Darstellung in diesem CrossSeller ber&uuml;cksichtigt werden. Geben Sie &quot;0&quot; ein, um alle passenden Produkte auszugeben.');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['noOutputIfMoreThanMaxResults']					= array('Keine Ausgabe bei &Uuml;berschreiten');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionNewProduct']					= array('Neues Produkt');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionSpecialPrice']				= array('Sonderpreis');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionCategory']					= array('Seite/Kategorie');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionProducer']					= array('Hersteller', 'Folgende Platzhalter stehen Ihnen zur Verf&uuml;gung, um Eigenschaften eines in der Produktdetailansicht ge&ouml;ffneten Produktes in der Suche zu verwenden: &quot;{{currentProduct_name}}&quot; (Produktbezeichnung), &quot;{{currentProduct_articleNr}}&quot; (Artikelnummer), &quot;{{currentProduct_producer}}&quot; (Hersteller)');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionProductName']					= array('Produktbezeichnung', 'Folgende Platzhalter stehen Ihnen zur Verf&uuml;gung, um Eigenschaften eines in der Produktdetailansicht ge&ouml;ffneten Produktes in der Suche zu verwenden: &quot;{{currentProduct_name}}&quot; (Produktbezeichnung), &quot;{{currentProduct_articleNr}}&quot; (Artikelnummer), &quot;{{currentProduct_producer}}&quot; (Hersteller)');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionArticleNr']					= array('Artikelnummer', 'Folgende Platzhalter stehen Ihnen zur Verf&uuml;gung, um Eigenschaften eines in der Produktdetailansicht ge&ouml;ffneten Produktes in der Suche zu verwenden: &quot;{{currentProduct_name}}&quot; (Produktbezeichnung), &quot;{{currentProduct_articleNr}}&quot; (Artikelnummer), &quot;{{currentProduct_producer}}&quot; (Hersteller)');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionTags']						= array('Suchbegriffe', 'Folgende Platzhalter stehen Ihnen zur Verf&uuml;gung, um Eigenschaften eines in der Produktdetailansicht ge&ouml;ffneten Produktes in der Suche zu verwenden: &quot;{{currentProduct_name}}&quot; (Produktbezeichnung), &quot;{{currentProduct_articleNr}}&quot; (Artikelnummer), &quot;{{currentProduct_producer}}&quot; (Hersteller)');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['canBeFiltered']								= array('Kann gefiltert werden');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['doNotUseCrossSellerOutputDefinitions']		= array('&Uuml;bersichts-Produktdarstellung verwenden', 'Anstatt der CrossSeller-Einstellungen der Darstellungsvorgabe die Einstellungen f&uuml;r Produkt&uuml;bersichten verwenden');
	
	/*
	 * Misc
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionNewProduct'] = 'Suchkriterium &quot;Neues Produkt&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionSpecialPrice'] = 'Suchkriterium &quot;Sonderpreis&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionCategory'] = 'Suchkriterium &quot;Seite/Kategorie&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['subHeadlineSearchSelectionCategory'] = 'Bitte beachten Sie, dass die aktuell aufgerufene Seite standardm&auml;&szlig;ig auf die Suche angewendet wird, wenn Sie dieses Suchkriterium aktivieren, aber nicht explizit eine Seiten-/Kategorieauswahl treffen.';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionProducer'] = 'Suchkriterium &quot;Hersteller&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionProductName'] = 'Suchkriterium &quot;Produktbezeichnung&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionArticleNr'] = 'Suchkriterium &quot;Artikelnummer&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['headlineSearchSelectionTags'] = 'Suchkriterium &quot;Suchbegriffe&quot;';

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['textOutput_legend']   = 'Text-Ausgaben';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['template_legend']   = 'Darstellung';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['fallbackCrossSeller_legend']   = 'Alternativer CrossSeller/Alternative Ausgabe';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['productSelectionType_legend']   = 'Art der Produkt-Auswahl';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['directSelection_legend']   = 'Einfache Produkt-Auswahl';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelection_legend']   = 'Produkt-Auswahl aufgrund detaillierter Suche';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['lastSeen_legend']   = 'Zuletzt gesehene Produkte';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['frontendProductSearch_legend']   = 'Frontend-Produktsuche';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['recommendedProducts_legend']   = 'Empfohlene Produkte';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['filterSettings_legend'] = 'Filter-Verhalten';
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['published_legend'] = 'Aktivierung';
	
	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['productSelectionType']['options'] = array(
		'hookSelection' => array('Individuell über Hook', 'Mit dieser Auswahl-Art k&ouml;nnen Sie die tatsächliche Produktauswahl mittels des Hook &quot;beforeProductlistOutput&quot; vornehmen.'),
		'directSelection' => array('Direkte Produktauswahl', 'Mit dieser Auswahl-Art k&ouml;nnen Sie die gew&uuml;nschten Produkte direkt bestimmen.'),
		'searchSelection' => array('Produkt-Suche', 'Die im CrossSeller darzustellenden Produkte werden anhand vorgegebener Suchkriterien ermittelt.'),
		'lastSeen' => array('Zuletzt gesehene Produkte', 'Im CrossSeller werden die zuletzt gesehenen Produkte dargestellt.'),
		'favorites' => array('Favoriten/Merkliste', 'Im CrossSeller werden die Produkte dargestellt, die der Besucher seinen Favoriten/seiner Merkliste hinzugef&uuml;gt hat.'),
		'recommendedProducts' => array('Empfohlene Produkte', 'Im CrossSeller werden Produkte dargestellt, die Sie dem in der Detailansicht dargestellten Produkt als &quot;empfohlene Produkte&quot; zugeordnet haben.'),
		'frontendProductSearch' => array('Frontend-Produktsuche', 'Im CrossSeller wird das Suchergebnis einer im Frontend ausgef&uuml;hrten Produktsuche dargestellt.')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionNewProduct']['options'] = array(
		'new' => array('Produkt ist als neu markiert'),
		'notNew' => array('Produkt ist nicht als neu markiert')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['searchSelectionSpecialPrice']['options'] = array(
		'specialPrice' => array('Produkt ist als Sonderpreis markiert'),
		'noSpecialPrice' => array('Produkt ist nicht als Sonderpreis markiert')
	);
	
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['new']        = array('Neuer CrossSeller', 'Einen neuen CrossSeller anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['edit']        = array('CrossSeller bearbeiten', 'CrossSeller ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['delete']        = array('CrossSeller l&ouml;schen', 'CrossSeller ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['copy']        = array('CrossSeller kopieren', 'CrossSeller ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_cross_seller']['show']        = array('Details anzeigen', 'Details des CrossSeller ID %s anzeigen');
