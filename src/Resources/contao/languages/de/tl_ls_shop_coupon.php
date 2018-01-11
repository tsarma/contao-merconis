<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['description']									= array('Beschreibung');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['productCode']									= array('Artikelnummer', 'Hier k&ouml;nnen Sie eine Artikelnummer hinterlegen, die bei der Bestellung zur Identifizierung des verwendeten Gutscheins angezeigt wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['couponCode']									= array('Gutschein-Code', 'Tragen Sie hier den Code ein, den ein Kunde im Warenkorb eingeben muss, um diesen Gutschein einzul&ouml;sen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['couponValueType']								= array('Art des Gutschein-Werts', 'W&auml;hlen Sie hier, ob der angegebene Gutschein-Wert als fester oder prozentualer Abzug berechnet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['couponValue']									= array('Gutschein-Wert', 'Tragen Sie hier den Gutschein-Wert als Festbetrag oder prozentualen Betrag ein. Der Gutschein-Wert wird stets vom f&uuml;r den Kunden sichtbaren Gesamtwarenwert abgezogen. Ob ein eingegebener Festbetrag als Brutto- oder Nettobetrag interpretiert wird, h&auml;ngt dementsprechend davon ab, ob der Kunde im Shop Brutto- oder Nettopreise sieht. Um Wertunterschiede eines Gutscheins bei Nutzung durch unterschiedliche Kundengruppen zu vermeiden, machen Sie bitte von der M&ouml;glichkeit Gebrauch, die Kundengruppen, f&uuml;r die ein Gutschein gilt, zu definieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['minimumOrderValue']							= array('Mindestbestellwert', 'Wichtig: Tragen Sie hier bitte den Betrag als Brutto- oder Netto-Wert entsprechend der f&uuml;r diese Gruppe g&uuml;ltigen Ausgabepreis-Einstellung an. Die globale Einstellung f&uuml;r eingegebene Preise findet hier keine Anwendung!');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['allowedForGroups']							= array('G&uuml;ltig für folgende Kundengruppen', 'Bitte bestimmen Sie hier, f&uuml;r welche Kundengruppen dieser Gutschein g&uuml;ltig ist.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['start']										= array('G&uuml;ltigkeitszeitraum von');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['stop']										= array('G&uuml;ltigkeitszeitraum bis');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['limitNumAvailable']							= array('Anzahl beschr&auml;nken');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['numAvailable']								= array('Verf&uuml;gbare Anzahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['changeNumAvailable']							= array('Verf&uuml;gbare Anzahl &auml;ndern', 'Tragen Sie z. B. &quot;+100&quot; ein, um die Anzahl um 100 zu erh&ouml;hen, &quot;-100&quot;, um die Anzahl um 100 zu verringern und &quot;100&quot; ohne Vorzeichen, um die Anzahl auf exakt 100 zu setzen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['published']									= array('Aktiv');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['productDirectSelection']						= array('Produkt-Auswahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['productSelectionType']						= array('Art der Produkt-Auswahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['activate']									= array('Verwenden', 'Aktivieren, um das Suchkriterium zu verwenden');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionNewProduct']					= array('Neues Produkt');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionSpecialPrice']				= array('Sonderpreis');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionCategory']					= array('Seite/Kategorie');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionProducer']					= array('Hersteller');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionProductName']					= array('Produktbezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionArticleNr']					= array('Artikelnummer');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionTags']						= array('Suchbegriffe');
	
	/*
	 * Misc
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionNewProduct'] = 'Suchkriterium &quot;Neues Produkt&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionSpecialPrice'] = 'Suchkriterium &quot;Sonderpreis&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionCategory'] = 'Suchkriterium &quot;Seite/Kategorie&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['subHeadlineSearchSelectionCategory'] = 'Bitte beachten Sie, dass die aktuell aufgerufene Seite standardm&auml;&szlig;ig auf die Suche angewendet wird, wenn Sie dieses Suchkriterium aktivieren, aber nicht explizit eine Seiten-/Kategorieauswahl treffen.';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionProducer'] = 'Suchkriterium &quot;Hersteller&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionProductName'] = 'Suchkriterium &quot;Produktbezeichnung&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionArticleNr'] = 'Suchkriterium &quot;Artikelnummer&quot;';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['headlineSearchSelectionTags'] = 'Suchkriterium &quot;Suchbegriffe&quot;';

	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['status_legend']   = 'Status';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['generalSettings_legend']   = 'Allgemeine Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['numAvailable_legend']   = 'Verf&uuml;gbare Anzahl';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['productSelectionType_legend']   = 'Art der Produkt-Auswahl';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['directSelection_legend']   = 'Einfache Produkt-Auswahl';
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelection_legend']   = 'Produkt-Auswahl aufgrund detaillierter Suche';
	
	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['couponValueType']['options'] = array(
		'percentaged' => array('Prozentwert', 'Der Gutschein-Wert wird als prozentualer Abzug berechnet.'),
		'fixed' => array('Festbetrag', 'Der Gutschein-Wert wird als Festbetrag abgezogen.')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['productSelectionType']['options'] = array(
		'noSelection' => array('Keine Produktauswahl', 'Treffen Sie diese Auswahl, wenn Sie die G&uuml;ltigkeit des Gutscheins nicht auf bestimmte Produkte beschr&auml;nken m&ouml;chten.'),
		'directSelection' => array('Direkte Produktauswahl', 'Mit dieser Auswahl-Art k&ouml;nnen Sie die Produkte, f&uuml;r die der Gutschein g&uuml;ltig sein soll, direkt bestimmen.'),
		'searchSelection' => array('Produkt-Suche', 'Die Produkte, f&uuml;r die der Gutschein g&uuml;ltig sein soll, werden anhand vorgegebener Suchkriterien ermittelt.')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionNewProduct']['options'] = array(
		'new' => array('Produkt ist als neu markiert'),
		'notNew' => array('Produkt ist nicht als neu markiert')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['searchSelectionSpecialPrice']['options'] = array(
		'specialPrice' => array('Produkt ist als Sonderpreis markiert'),
		'noSpecialPrice' => array('Produkt ist nicht als Sonderpreis markiert')
	);
	
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['new']        = array('Neuer Gutschein', 'Einen neuen Gutschein anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['edit']        = array('Gutschein bearbeiten', 'Gutschein ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['delete']        = array('Gutschein l&ouml;schen', 'Gutschein ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['copy']        = array('Gutschein kopieren', 'Gutschein ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_coupon']['show']        = array('Details anzeigen', 'Details des Gutscheins mit ID %s anzeigen');
