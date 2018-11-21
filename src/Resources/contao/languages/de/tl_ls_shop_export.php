<?php

/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['title']										= array('Bezeichnung');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['template']									= array('Ausgabetemplate');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['customLogicFile']			        			= array('Datei mit eigener Datenvorbereitungslogik', 'Bitte geben Sie hier bei Bedarf die Datei an, die das Programm mit Ihrer eigenen Datenvorbereitungslogik enth&auml;lt.');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters']								= array('Flexible Parameter', 'Hier k&ouml;nnen Sie beliebig viele Parameter hinterlegen, die in Templates &uuml;ber das Schl&uuml;sselwort referenziert und auf beliebige Art genutzt werden k&ouml;nnen. Informationen &uuml;ber die vom Template unterst&uuml;tzten bzw. ben&ouml;tigten Parameter erhalten Sie in der Template-Datei.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters_label01']						= 'Parameter-Schl&uuml;sselwort';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters_label02']						= 'Parameter-Wert';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus01']					= array('Filterung nach Status 1');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus02']					= array('Filterung nach Status 2');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus03']					= array('Filterung nach Status 3');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus04']					= array('Filterung nach Status 4');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus05']					= array('Filterung nach Status 5');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus01']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus02']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus03']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus04']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus05']							= array('&nbsp;');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus01']				= array('Automatische &Auml;nderung des Status 1 nach Export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus02']				= array('Automatische &Auml;nderung des Status 2 nach Export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus03']				= array('Automatische &Auml;nderung des Status 3 nach Export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus04']				= array('Automatische &Auml;nderung des Status 4 nach Export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus05']				= array('Automatische &Auml;nderung des Status 5 nach Export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus01']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus02']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus03']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus04']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus05']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['sendOrderMailsOnStatusChange']				= array('Statusabh&auml;ngige Bestell-Nachrichten sofort senden');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByPaymentMethod']				= array('Filterung nach Zahlungsart');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByPaymentMethod']						= array('&nbsp;');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByShippingMethod']				= array('Filterung nach Versandart');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByShippingMethod']						= array('&nbsp;');


$GLOBALS['TL_LANG']['tl_ls_shop_export']['productDirectSelection']						= array('Produkt-Auswahl');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['tableName']									= array('Name der Tabelle');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource']									= array('Datenquelle');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['changedWithinMinutes']						= array('Bestellungen erstellt oder ge&auml;ndert innerhalb von');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['simulateGroup']								= array('Ausgabe f&uuml;r folgende Kundengruppe');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['createProductObjects']						= array('Produktobjekte erzeugen', 'Wird diese Option aktiviert, werden zu allen Produkten Produktobjekte erzeugt und ans Template &uuml;bergeben. Andernfalls werden die Daten direkt wie aus der Produkttabelle ausgelesen ans Template übergeben. Das Erzeugen der Produktobjekt hat eine deutlich längere Erstellungszeit des Exports zur Folge.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activate']									= array('Verwenden', 'Aktivieren, um das Suchkriterium zu verwenden');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedActive']									= array('Feed-Ausgabe aktiv');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedName']									= array('Name des Feeds');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedPassword']								= array('Passwort f&uuml;r gesch&uuml;tzten Zugriff');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedContentType']								= array('Content-Typ', 'Wert, der im HTTP-Header f&uuml;r &quot;Content-Type&quot; verwendet werden soll (z. B. &quot;application/json&quot;, &quot;text/csv&quot;, &quot;text/xml&quot;, &quot;text/plain&quot;). Tragen Sie hier &quot;application/json&quot; ein und w&auml;hlen Sie kein Ausgabetemplate, um die Daten als Standard-JSON-API-R&uuml;ckgabe auszugeben.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedFileName']								= array('Dateiname', 'Dateiname, der verwendet werden soll, wenn der Feed-Aufruf als Dateidownload angeboten wird (z. B. beim Aufruf in einem Browser). Verwenden Sie den Platzhalter {{date:}}, um eine variable Datumsangabe automatisch einzuf&uuml;gen. Hinter dem Doppelpunkt k&ouml;nnen Sie jede beliebige Datumsangabe in der Syntax der PHP-Funktion &quot;date()&quot; notieren. Beispiel: &quot;export_{{date:Y-m-d_H-i-s}}&quot; ergibt den Dateinamen &quot;export_2016-12-15_16-21-05&quot;. Mit den Platzhaltern &quot;{{currentSegment}}&quot;, &quot;{{numSegmentsTotal}}&quot; und &quot;{{currentTurn}}&quot; k&ouml;nnen Sie bei einer mehrteiligen Ausgabe die Nummer des aktuellen Teils, die Gesamtanzahl aller Teile sowie die Nummer der aktuellen Export-Runde im Namen verwenden.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileExportActive']							= array('Datei-Ausgabe aktiv');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileName']									= array('Dateiname', 'Hier k&ouml;nnen Sie definieren, unter welchem Dateinamen ein Export gespeichert werden soll. Verwenden Sie den Platzhalter {{date:}}, um eine variable Datumsangabe automatisch einzuf&uuml;gen. Hinter dem Doppelpunkt k&ouml;nnen Sie jede beliebige Datumsangabe in der Syntax der PHP-Funktion &quot;date()&quot; notieren. Beispiel: &quot;export_{{date:Y-m-d_H-i-s}}&quot; ergibt den Dateinamen &quot;export_2016-12-15_16-21-05&quot;. Mit den Platzhaltern &quot;{{currentSegment}}&quot;, &quot;{{numSegmentsTotal}}&quot; und &quot;{{currentTurn}}&quot; k&ouml;nnen Sie bei einer mehrteiligen Ausgabe die Nummer des aktuellen Teils, die Gesamtanzahl aller Teile sowie die Nummer der aktuellen Export-Runde im Namen verwenden.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['appendToFile']								= array('Daten bei bereits bestehender Datei anh&auml;ngen, statt zu &uuml;berschreiben');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['useSegmentedOutput']							= array('Mehrteilige Ausgabe nutzen');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['numberOfRecordsPerSegment']					= array('Anzahl Datens&auml;tze pro Teil');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['finishSegmentedOutputWithExtraSegment']		= array('Abschluss mit Leerausgabe');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['folder']										= array('Speicherort', 'Hier k&ouml;nnen Sie definieren, in welchem Verzeichnis die Datei gespeichert werden soll.');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionNewProduct']					= array('Neues Produkt');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionSpecialPrice']				= array('Sonderpreis');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionCategory']					= array('Seite/Kategorie');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionProducer']					= array('Hersteller');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionProductName']					= array('Produktbezeichnung');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionArticleNr']					= array('Artikelnummer');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionTags']						= array('Suchbegriffe');

/*
 * Misc
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionNewProduct'] = 'Suchkriterium &quot;Neues Produkt&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionSpecialPrice'] = 'Suchkriterium &quot;Sonderpreis&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionCategory'] = 'Suchkriterium &quot;Seite/Kategorie&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['subHeadlineSearchSelectionCategory'] = 'Bitte beachten Sie, dass die aktuell aufgerufene Seite standardm&auml;&szlig;ig auf die Suche angewendet wird, wenn Sie dieses Suchkriterium aktivieren, aber nicht explizit eine Seiten-/Kategorieauswahl treffen.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionProducer'] = 'Suchkriterium &quot;Hersteller&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionProductName'] = 'Suchkriterium &quot;Produktbezeichnung&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionArticleNr'] = 'Suchkriterium &quot;Artikelnummer&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionTags'] = 'Suchkriterium &quot;Suchbegriffe&quot;';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['ERR']['feedNameExists'] = 'Der Feed-Name &quot;%s&quot; existiert bereits. Bitte vergeben Sie einen anderen, eindeutigen Namen.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ERR']['fileNameExists'] = 'Der Dateiname &quot;%s&quot; existiert bereits. Bitte vergeben Sie einen anderen, eindeutigen Namen.';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['savedAs'] = 'Gespeichert als &quot;{fileName}&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_question'] = 'Datei &quot;{fileName}&quot; wirklich l&ouml;schen?';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_yes'] = 'Ja';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_no'] = 'Nein';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['pleaseWait_write'] = 'Bitte warten - Datei wird erzeugt';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['pleaseWait_delete'] = 'Bitte warten - Datei wird gel&ouml;scht';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['fileDeleted'] = 'Datei &quot;{fileName}&quot; wurde gel&ouml;scht.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['anErrorOccurred'] = 'Ein Fehler ist aufgetreten. Bitte stellen Sie sicher, dass Sie einen g&uuml;ltigen Dateispeicherort und Dateinamen angegeben haben. Auch fehlende flexible Parameter in den Einstellungen der Exportvorlage können das Speichern des Exports verhindern. Bitte werfen Sie einen Blick in das Export-Template und prüfen Sie, ob dort in einem Dokumentationsabschnitt zwingend benötigte Parameter genannt sind.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['partXOfY'] = 'Teil {currentSegment} von {numSegmentsTotal}';

/*
 * Overview
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['feedUrl'] = 'Feed-URL';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['savedExportFiles'] = 'Gespeicherte Exportdateien';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['noSavedExportFilesExisting'] = 'Keine vorhanden';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['createExport'] = 'Exportdatei erstellen';

/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['title_legend']   = 'Bezeichnung';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['template_legend']   = 'Ausgabeformat';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['customLogic_legend'] = 'Eigene Logik für Datenvorbereitung';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource_legend']   = 'Datenquelle';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataTable_legend']   = 'Daten aus Tabelle';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataOrders_legend']   = 'Daten aus Bestellungen';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['group_legend']   = 'Gruppeneinstellungen';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['directSelection_legend']   = 'Einfache Produkt-Auswahl';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelection_legend']   = 'Produkt-Auswahl aufgrund detaillierter Suche';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feed_legend'] = 'Feed-Ausgabe';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileExport_legend'] = 'Datei-Ausgabe';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['segmentedOutput_legend'] = 'Mehrteilige Ausgabe';

/*
 * References
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource']['options'] = array(
	'dataTable' => array('Daten aus Tabelle', 'Die im Export auszugebenden Daten werden aus einer Tabelle bezogen.'),
	'directSelection' => array('Direkte Produktauswahl', 'Mit dieser Auswahl-Art k&ouml;nnen Sie die gew&uuml;nschten Produkte direkt bestimmen.'),
	'searchSelection' => array('Produkt-Suche', 'Die im Export auszugebenden Produkte werden anhand vorgegebener Suchkriterien ermittelt.'),
	'dataOrders' => array('Bestellungen', 'Die im Export auszugebenden Bestellungen werden anhand vorgegebener Kriterien ermittelt.')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['changedWithinMinutes']['options'] = array(
	5 => array('5 Minuten'),
	10 => array('10 Minuten'),
	15 => array('15 Minuten'),
	30 => array('30 Minuten'),
	60 => array('1 Stunde'),
	120 => array('2 Stunden'),
	720 => array('12 Stunden'),
	1440 => array('1 Tag'),
	2880 => array('2 Tage'),
	10080 => array('1 Woche'),
	20160 => array('2 Wochen'),
	40320 => array('4 Wochen'),
	525600 => array('1 Jahr'),
	9999999 => array('egal')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionNewProduct']['options'] = array(
	'new' => array('Produkt ist als neu markiert'),
	'notNew' => array('Produkt ist nicht als neu markiert')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionSpecialPrice']['options'] = array(
	'specialPrice' => array('Produkt ist als Sonderpreis markiert'),
	'noSpecialPrice' => array('Produkt ist nicht als Sonderpreis markiert')
);


/*
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['new']        = array('Neue Exportvorlage', 'Eine neue Exportvorlage anlegen');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['edit']        = array('Exportvorlage bearbeiten', 'Exportvorlage ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['delete']        = array('Exportvorlage l&ouml;schen', 'Exportvorlage ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['copy']        = array('Exportvorlage kopieren', 'Exportvorlage ID %s kopieren');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['show']        = array('Details anzeigen', 'Details der Exportvorlage ID %s anzeigen');
