<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['title']	= array('Bezeichnung');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['alias'] = array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird.');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendWhen']			= array('Versandart');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation01'] = array('Abh&auml;ngigkeit von Status 1');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation02'] = array('Abh&auml;ngigkeit von Status 2');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation03'] = array('Abh&auml;ngigkeit von Status 3');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation04'] = array('Abh&auml;ngigkeit von Status 4');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation05'] = array('Abh&auml;ngigkeit von Status 5');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['usePaymentStatusCorrelation'] = array('Abh&auml;ngigkeit von Payment-Provider-Status');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation01'] = array('Versenden bei Status');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation02'] = array('Versenden bei Status');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation03'] = array('Versenden bei Status');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation04'] = array('Versenden bei Status');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation05'] = array('Versenden bei Status');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_paymentProvider'] = array('Payment Provider');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_statusValue'] = array('Versenden bei Status');

	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useCounter']			= array('Nachrichtennummerierung verwenden');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counter']			= array('Aktueller Z&auml;hlerstand');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterString']			= array('Format der Nachrichtennummer', 'Hier k&ouml;nnen Sie definieren, in welchem Format die Nachrichtennummer angegeben werden soll. Verwenden Sie den Platzhalter {{counter}}, um den Z&auml;hlerstand einzuf&uuml;gen sowie bei Bedarf {{date:}}, um eine variable Datumsangabe automatisch einzuf&uuml;gen. Hinter dem Doppelpunkt k&ouml;nnen Sie jede beliebige Datumsangabe in der Syntax der PHP-Funktion &quot;date()&quot; notieren. Beispiel: &quot;{{date:Y}}-{{counter}}&quot; ergibt für die 147. Nachricht im Jahr 2012 die Nachrichten-Nr. &quot;2012-147&quot;.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterStart']			= array('Startwert des Z&auml;hlers ({{counter}})', 'Bestimmen Sie hier, bei welchem Wert der Z&auml;hler ({{counter}}) beginnen soll.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartCycle']		= array('R&uuml;cksetzung des Z&auml;hlers ({{counter}})', 'Definieren Sie bei Bedarf, in welchem Rhythmus der Z&auml;hler ({{counter}}) zur&uuml;ckgesetzt werden soll.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartNow']		= array('Z&auml;hler ({{counter}}) sofort zur&uuml;cksetzen', 'Aktivieren Sie diese Option, wenn Sie m&ouml;chten, dass der Z&auml;hler ({{counter}}) beim Speichern des Datensatzes sofort auf den Startwert zur&uuml;ckgesetzt werden soll.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['lastDispatchDateUnixTimestamp'] = array('Datum des letzten Versands');

	
	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['title_legend']   = 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counter_legend']   = 'Nachrichtennummerierung';
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendingOptions_legend'] = 'Versandeinstellungen';
	
	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartCycle']['options'] = array(
		'never' => 'nie',
		'year' => 'neues Jahr',
		'month' => 'neuer Monat',
		'week' => 'neue Woche',
		'day' => 'neuer Tag'	
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendWhen']['options'] = array(
		'manual' => 'manuell',
		'onStatusChangeImmediately' => 'sofort nach Status&auml;nderung',
		'onStatusChangeCronDaily' => 'statusabh&auml;ngig mittels Cronjob (t&auml;glich)',
		'onStatusChangeCronHourly' => 'statusabh&auml;ngig mittels Cronjob (st&uuml;ndlich)',
		'asOrderConfirmation' => 'als Bestellbest&auml;tigung',
		'asOrderNotice' => 'als Bestellbenachrichtigung'
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_paymentProvider']['options'] = array(
		'payPalPlus' => 'PayPalPlus',
		'payone' => 'Payone',
		'saferpay' => 'Saferpay',
		'vrpay' => 'VR Pay',
		'sofortbanking' => 'Sofort.'
	);

	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['new']        = array('Neue Nachrichtenart', 'Eine neue Nachrichtenart anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['edit']        = array('Nachrichtenvorlagen bearbeiten', 'Nachrichtenvorlagen der Nachrichtenart ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['editheader']        = array('Nachrichtenart bearbeiten', 'Nachrichtenart ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['delete']        = array('Nachrichtenart l&ouml;schen', 'Nachrichtenart ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['copy']        = array('Nachrichtenart kopieren', 'Nachrichtenart ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['show']        = array('Details anzeigen', 'Details der Nachrichtenart ID %s anzeigen');
