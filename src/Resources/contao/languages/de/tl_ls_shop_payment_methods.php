<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['title']										= array('Bezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['alias']	= array('Alias', 'Eindeutige Bezeichnung, welche zur Referenzierung verwendet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['description']								= array('Beschreibung');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['infoAfterCheckout']							= array('Information nach Bestellabschluss');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['additionalInfo']								= array('Zus&auml;tzliche Information (z. B. Zahlungsbedingung)');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['formAdditionalData']							= array('Formular f&uuml;r Kundeneingaben');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['dynamicSteuersatzType']						= array('Dynamischer Steuersatz', 'W&auml;hlen Sie, auf welche Art der Steuersatz ggf. dynamisch ausgew&auml;hlt wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['steuersatz']									= array('Steuersatz', 'W&auml;hlen Sie hier den Steuersatz aus, mit dem ggf. anfallende Geb&uuml;hren f&uuml;r diese Zahlungsoption besteuert werden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['type']										= array('Art der Zahlungsoption','W&auml;hlen Sie hier die Art der Zahlungsoption aus. Die meisten Zahlungsoptionen (z. B. Nachnahme, Einzugserm&auml;chtigung usw.) lassen sich mit der Auswahl &quot;Standard&quot; realisieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['published']									= array('Ver&ouml;ffentlicht','Setzen Sie dieses H&auml;kchen, um diese Zahlungsoption im Shop zur Auswahl anzubieten.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['sorting']									= array('Sortierzahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeType']										= array('Art der Geb&uuml;hren-Berechnung','Bestimmen Sie hier, wie die Geb&uuml;hren berechnet werden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeValue']									= array('Geb&uuml;hr');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeAddCouponToValueOfGoods']					= array('Gutscheine in Warenwert einbeziehen', 'Wird bei der Berechnung der Warenwert als Grundlage genommen, so kann mit dieser Checkbox bestimmt werden, ob Gutschein-Werte in den Warenwert mit einbezogen werden sollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeAddShippingToValueOfGoods']				= array('Versandkosten in Warenwert einbeziehen', 'Wird bei der Berechnung der Warenwert als Grundlage genommen, so kann mit dieser Checkbox bestimmt werden, ob die Versandkosten in den Warenwert mit einbezogen werden sollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeFormula']									= array('Formel zur Geb&uuml;hrenberechnung', 'Bitte geben Sie als Dezimaltrennzeichen stets einen Punkt ein. Verf&uuml;gbare Platzhalter: ##totalValueOfGoods##, ##totalWeightOfGoods##, ##totalValueOfCoupons##, ##shippingFee##. Neben klassischen Berechnungen ist auch die Verwendung tern&auml;rer Operatoren m&ouml;glich, sodass folgendes Beispiel funktioniert: ##totalValueOfGoods## > 300 ? 0 : (##totalWeightOfGoods## <= 10 ? 10 : (##totalWeightOfGoods## <= 20 ? 20 : (##totalWeightOfGoods## <= 30 ? 30 : 40)))');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeFormulaResultConvertToDisplayPrice']		= array('Errechnete Geb&uuml;hr in Ausgabepreis umwandeln', 'W&auml;hlen Sie diese Option, wenn das Ergebnis Ihrer Berechnung ein Netto- oder Bruttopreis entsprechend der definierten Grundeinstellung zur Preiserfassung ist, damit der Preis aus Sicht des Kunden korrekt ausgegeben wird. W&auml;hlen Sie diese Option nicht, wenn Sie eine Berechnung z. B. auf Basis des Warenwert-Platzhalters durchf&uuml;hren, da das Ergebnis Ihrer Berechnung dann bereits den aus Kundensicht richtigen Ausgabepreis darstellt.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeWeightValues']								= array('Geb&uuml;hr nach Gewicht (links: bis zu welchem Gewicht, rechts: welcher Preis)','Definieren Sie hier, bis zu welchem Gewicht welcher Festbetrag f&uuml;r die Zahlung berechnet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feePriceValues']								= array('Geb&uuml;hr nach Warenwert (links: bis zu welchem Warenwert, rechts: welcher Preis)','Definieren Sie hier, bis zu welchem Warenwert welcher Festbetrag f&uuml;r die Zahlung berechnet wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['excludedGroups']								= array('Auszuschlie&szlig;ende Gruppen', 'W&auml;hlen Sie hier die Gruppen aus, f&uuml;r die diese Zahlungsoption nicht zur Verf&uuml;gung stehen soll.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['weightLimitMin']								= array('Mindestgewicht', 'Tragen Sie hier das Mindestgewicht f&uuml;r die Lieferung ein, ab der diese Zahlungsoption zur Verf&uuml;gung steht. Geben Sie &quot;0&quot; ein, um diesen Wert zu ignorieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['weightLimitMax']								= array('Maximalgewicht', 'Tragen Sie hier das Maximalgewicht f&uuml;r die Lieferung ein, bis zu der diese Zahlungsoption zur Verf&uuml;gung steht. Geben Sie &quot;0&quot; ein, um diesen Wert zu ignorieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['priceLimitMin']								= array('Mindestwarenwert', 'Tragen Sie hier den Mindestwarenwert ein, ab dem diese Zahlungsoption zur Verf&uuml;gung steht. Geben Sie &quot;0&quot; ein, um diesen Wert zu ignorieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['priceLimitMax']								= array('Maximalwarenwert', 'Tragen Sie hier den Maximalwarenwert ein, bis zu dem diese Zahlungsoption zur Verf&uuml;gung steht. Geben Sie &quot;0&quot; ein, um diesen Wert zu ignorieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['priceLimitAddCouponToValueOfGoods']			= array('Gutscheine in Warenwert einbeziehen', 'Mit dieser Checkbox kann bestimmt werden, ob bei der Pr&uuml;fung des Mindest- bzw. Maximalwarenwerts Gutschein-Werte in den Warenwert mit einbezogen werden sollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['priceLimitAddShippingToValueOfGoods']		= array('Versandkosten in Warenwert einbeziehen', 'Mit dieser Checkbox kann bestimmt werden, ob bei der Pr&uuml;fung des Mindest- bzw. Maximalwarenwerts Versandkosten in den Warenwert mit einbezogen werden sollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['countries']									= array('L&auml;nder-Auswahl', 'Bitte geben Sie die L&auml;nder als kommagetrennte Liste an.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['countriesAsBlacklist']						= array('L&auml;nder-Auswahl als Blacklist interpretieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['cssID']										= array('CSS-ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['cssClass']									= array('CSS-Klasse');
	
	/*
	 * PayPal-Bezeichnungen
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalAPIUsername']							= array('PayPal-API-Benutzername', 'Bitte tragen Sie hier den Wert ein, den Sie in Ihrem PayPal-Konto erfahren, wenn Sie sich dort Ihre API-Zugangsdaten anzeigen lassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalAPIPassword']							= array('PayPal-API-Passwort', 'Bitte tragen Sie hier den Wert ein, den Sie in Ihrem PayPal-Konto erfahren, wenn Sie sich dort Ihre API-Zugangsdaten anzeigen lassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalAPISignature']							= array('PayPal-API-Unterschrift', 'Bitte tragen Sie hier den Wert ein, den Sie in Ihrem PayPal-Konto erfahren, wenn Sie sich dort Ihre API-Zugangsdaten anzeigen lassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalSecondForm']							= array('Formular nach PayPal-Autentifizierung', 'Bitte w&auml;hlen Sie hier das Formular, das dargestellt werden soll, um nach der ersten Autentifizierung erneut zu PayPal zu gelangen, um dort evtl. Angaben zu &auml;ndern.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalGiropayRedirectForm']					= array('Formular zur Giropay-/Banktransfer-Weiterleitung', 'Bitte w&auml;hlen Sie hier das Formular, das nach Abschluss der Bestellung dargestellt werden soll, um zur Fertigstellung der PayPal-Bezahlung per Giropay/Banktransfer weiterzuleiten.');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalGiropaySuccessPages']					= array('Seite nach erfolgreicher Giropay-Zahlung', 'W&auml;hlen Sie hier die Seite aus, die nach einer erfolgreichen Giropay-Zahlung angezeigt werden soll. Falls Sie einen mehrsprachigen Shop betreiben, w&auml;hlen Sie bitte f&uuml;r jede Sprache die entsprechende Seite aus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalGiropayCancelPages']					= array('Seite nach Giropay-Abbruch', 'W&auml;hlen Sie hier die Seite aus, die nach einem eventuellen Abbruch einer Giropay-Zahlung angezeigt werden soll. Falls Sie einen mehrsprachigen Shop betreiben, w&auml;hlen Sie bitte f&uuml;r jede Sprache die entsprechende Seite aus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalBanktransferPendingPages']				= array('Seite nach Zahlung per Banktransfer', 'W&auml;hlen Sie hier die Seite aus, die nach einer Zahlung per Banktransfer angezeigt werden soll. Falls Sie einen mehrsprachigen Shop betreiben, w&auml;hlen Sie bitte f&uuml;r jede Sprache die entsprechende Seite aus.');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameFirstname']				= array('Feldname in Checkout-Formular f&uuml;r &quot;Vorname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameLastname']				= array('Feldname in Checkout-Formular f&uuml;r &quot;Nachname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameStreet']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Stra&szlig;e&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameCity']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Stadt&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNamePostal']					= array('Feldname in Checkout-Formular f&uuml;r &quot;PLZ&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameState']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Bundesland/Region&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShipToFieldNameCountryCode']			= array('Feldname in Checkout-Formular f&uuml;r &quot;Land&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalLiveMode']								= array('Live-Modus', 'Bitte aktivieren Sie diese Checkbox, wenn sich Ihr PayPal-Zahlungsmodul im Echtbetrieb befinden soll. Bitte beachten Sie, dass die API-Zugangsdaten, die Sie diesem Zahlungsmodul hinterlegen, unterschiedlich sind, abh&auml;ngig vom Live- oder Sandbox-Modus. Ist diese Checkbox nicht aktiviert, so kommuniziert das Zahlungsmodul mit der PayPal-Sandbox, einer Testumgebung, bei der keine echten Zahlungen stattfinden. Der Sandbox-Modus sollte f&uuml;r erste Tests mit diesem Zahlungsmodul verwendet werden, wenn sichergestellt ist, dass echte Kunden in dieser Zeit diese Zahlungsoption nicht verwenden k&ouml;nnen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypalShowItems']								= array('Einzelpositionen an PayPal &uuml;bermitteln', 'Aktivieren Sie diese Checkbox, wenn Sie m&ouml;chten, dass Informationen &uuml;ber die einzelnen Positionen dieser Bestellung an PayPal &uuml;bermittelt werden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['paypal_legend']								= 'PayPal-Einstellungen';
	
	/*
	 * PayPalPlus-Bezeichnungen
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_legend']						= 'PayPal-Plus-Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_clientID']							= array('PayPal Plus Client ID', 'Bitte tragen Sie hier den Wert ein, den Sie in Ihrem PayPal-Konto erfahren, wenn Sie sich dort Ihre API-Zugangsdaten anzeigen lassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_clientSecret']						= array('PayPal Plus Client Secret', 'Bitte tragen Sie hier den Wert ein, den Sie in Ihrem PayPal-Konto erfahren, wenn Sie sich dort Ihre API-Zugangsdaten anzeigen lassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_liveMode']						= array('Live-Modus', 'Bitte aktivieren Sie diese Checkbox, wenn sich Ihr PayPal-Zahlungsmodul im Echtbetrieb befinden soll. Bitte beachten Sie, dass die API-Zugangsdaten, die Sie diesem Zahlungsmodul hinterlegen, unterschiedlich sind, abh&auml;ngig vom Live- oder Sandbox-Modus. Ist diese Checkbox nicht aktiviert, so kommuniziert das Zahlungsmodul mit der PayPal-Sandbox, einer Testumgebung, bei der keine echten Zahlungen stattfinden. Der Sandbox-Modus sollte f&uuml;r erste Tests mit diesem Zahlungsmodul verwendet werden, wenn sichergestellt ist, dass echte Kunden in dieser Zeit diese Zahlungsoption nicht verwenden k&ouml;nnen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_logMode']						= array('Logging', 'Bitte stellen Sie ein, ob ein Log-File in /system/logs geschrieben werden soll und welcher Log-Level verwendet werden soll.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameFirstname']				= array('Feldname in Checkout-Formular f&uuml;r &quot;Vorname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameLastname']				= array('Feldname in Checkout-Formular f&uuml;r &quot;Nachname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameStreet']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Stra&szlig;e&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameCity']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Stadt&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNamePostal']					= array('Feldname in Checkout-Formular f&uuml;r &quot;PLZ&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameState']					= array('Feldname in Checkout-Formular f&uuml;r &quot;Bundesland/Region&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNameCountryCode']			= array('Feldname in Checkout-Formular f&uuml;r &quot;Land&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payPalPlus_shipToFieldNamePhone']			= array('Feldname in Checkout-Formular f&uuml;r &quot;Telefon&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Werden diese Werte nicht korrekt an PayPal &uuml;bermittelt, k&ouml;nnen Sie unter Umst&auml;nden verschiedene Service-Optionen von PayPal nicht in Anspruch nehmen. Bitte achten Sie in diesem Zusammenhang auch darauf, im Checkout-Formular sinnvolle Pflichtfelder zu definieren. Achten Sie bitte zus&auml;tzlich darauf, nur von PayPal f&uuml;r die jeweiligen Felder akzeptierte Werte zuzulassen.');

	/*
	 * PayOne-Bezeichnungen
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_legend']						= 'PAYONE-Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_subaccountId']						= array('PAYONE Sub-Account-ID', 'Bitte tragen Sie hier den Wert ein, den Sie im PAYONE Merchant Interface im Bereich &quot;API-Parameter&quot; Ihres Zahlungsportals vom Typ &quot;Shop&quot; erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_portalId']							= array('PAYONE Portal-ID', 'Bitte tragen Sie hier den Wert ein, den Sie im PAYONE Merchant Interface im Bereich &quot;API-Parameter&quot; Ihres Zahlungsportals vom Typ &quot;Shop&quot; erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_key']							= array('PAYONE Portal-Key', 'Bitte tragen Sie hier den Wert ein, den Sie im PAYONE Merchant Interface im Bereich &quot;API-Parameter&quot; Ihres Zahlungsportals vom Typ &quot;Shop&quot; erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_liveMode']						= array('Live Modus', 'Bitte setzen Sie das H&auml;kchen, wenn Sie nach Abschluss der Testphase echte Zahlungen mit diesem Modul durchf&uuml;hren wollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_clearingtype']	= array('Abwicklungsart', 'Bitte w&auml;hlen Sie die von PAYONE zu nutzende Abwicklungsart');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_clearingtype']['options'] = array(
		'elv' => 'Lastschriftverfahren',
		'cc' => 'Kreditkarte',
		'vor' => 'Vorauszahlung',
		'rec' => 'Rechnung',
		'sb' => 'Online-&Uuml;berweisung',
		'wlt' => 'E-wallet',
		'fnc' => 'Finanzierung'
	);
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameFirstname']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Vorname&quot; (Payone-Parameter &quot;firstname&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameLastname']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Nachname&quot; (Payone-Parameter &quot;lastname&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameCompany']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Firma&quot; (Payone-Parameter &quot;company&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameStreet']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Stra&szlig;e&quot; (Payone-Parameter &quot;street&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameAddressaddition']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Adresszusatz&quot; (Payone-Parameter &quot;addressaddition&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameZip']	= array('Feldname in Checkout-Formular f&uuml;r &quot;PLZ&quot; (Payone-Parameter &quot;zip&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameCity']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Stadt&quot; (Payone-Parameter &quot;city&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameCountry']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Land&quot; (Payone-Parameter &quot;country&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameEmail']	= array('Feldname in Checkout-Formular f&uuml;r &quot;E-Mail&quot; (Payone-Parameter &quot;email&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameTelephonenumber']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Telefon&quot; (Payone-Parameter &quot;telephonenumber&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameBirthday']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Geburtstag&quot; (Payone-Parameter &quot;birthday&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNameGender']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Geschlecht&quot; (Payone-Parameter &quot;gender&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['payone_fieldNamePersonalid']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Personen-ID&quot; (Payone-Parameter &quot;personalid&quot;)', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Bitte beachten Sie die Dokumentation der Payone-Frontend-Plattform, um mehr &uuml;ber die ben&ouml;tigten Felder und erlaubte Werte zu erfahren.');

	/*
	 * VR-Pay-Bezeichnungen
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_legend'] = 'VR-Pay-Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_userId'] = array('User-ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_password'] = array('Passwort');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_entityId'] = array('Entity-ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_liveMode'] = array('Live-Betrieb');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_testMode'] = array('Test-Modus');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_testMode']['options'] = array(
		'INTERNAL' => 'INTERNAL (VR-Pay-Simulatoren)',
		'EXTERNAL' => 'EXTERNAL (Sandboxes der Zahlungsmittel-Anbieter)'
	);
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_paymentInstrument'] = array('Zahlungsmittel');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_paymentInstrument']['options'] = array(
		'creditcard' => 'Kreditkarte',
		'giropay' => 'Giropay',
		'paydirekt' => 'Paydirekt',
		'klarna_invoice' => 'Klarna Rechnung',
		'directdebit_sepa' => 'SEPA Lastschrift',
		'sofortueberweisung' => 'Sofortüberweisung',
		'paypal' => 'Pay Pal',
		'easycredit_ratenkauf' => 'Ratenkauf by easyCredit'
	);
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_creditCardBrands'] = array('Akzeptierte Kreditkarten');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_creditCardBrands']['options']		= array(
		'AMEX' => 'AMEX',
		'DINERS' => 'DINERS',
		'JCB' => 'JCB',
		'MASTERCARD' => 'MASTER',
		'VISA' => 'VISA'
	);
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_street1']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Stra&szlig;e&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_city']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Ort&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_postcode']	= array('Feldname in Checkout-Formular f&uuml;r &quot;PLZ&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_country']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Land&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_givenName']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Vorname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['vrpay_fieldName_surname']	= array('Feldname in Checkout-Formular f&uuml;r &quot;Nachname&quot;', 'Tragen Sie hier den Feldnamen des entsprechenden Eingabefelds im Checkout-Formular ein. Sofern Sie Felder f&uuml;r eine alternative Versandanschrift verwenden, achten Sie bitte darauf, im Formular dieselben Feldnamen f&uuml;r korrespondierende Felder mit der am Ende angeh&auml;ngten Zeichenfolge "_Alternative" zu verwenden.');


	/*
	 * Saferpay-Bezeichnungen
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_legend']						= 'SAFERPAY-Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_username']						= array('Benutzername');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_password']						= array('Passwort');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_customerId']					= array('Kunden-ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_terminalId']					= array('Terminal-ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_merchantEmail']					= array('E-Mail-Adresse des H&auml;ndlers');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_liveMode']						= array('Live Modus', 'Bitte setzen Sie das H&auml;kchen, wenn Sie nach Abschluss der Testphase echte Zahlungen mit diesem Modul durchf&uuml;hren wollen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_captureInstantly']				= array('Sofort verbuchen, wenn m&ouml;glich');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_paymentMethods']				= array('Zahlungsarten', 'Bitte w&auml;hlen Sie die von SAFERPAY zu nutzenden Zahlungsarten');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_paymentMethods']['options']		= array(
		'AMEX' => 'AMEX',
		'BONUS' => 'BONUS',
		'DINERS' => 'DINERS',
		'DIRECTDEBIT' => 'DIRECTDEBIT',
		'EPRZELEWY' => 'EPRZELEWY',
		'EPS' => 'EPS',
		'GIROPAY' => 'GIROPAY',
		'IDEAL' => 'IDEAL',
		'INVOICE' => 'INVOICE',
		'JCB' => 'JCB',
		'MAESTRO' => 'MAESTRO',
		'MASTERCARD' => 'MASTERCARD',
		'MYONE' => 'MYONE',
		'PAYPAL' => 'PAYPAL',
		'POSTCARD' => 'POSTCARD',
		'POSTFINANCE' => 'POSTFINANCE',
		'SAFERPAYTEST' => 'SAFERPAYTEST',
		'SOFORT' => 'SOFORT',
		'VISA' => 'VISA',
		'VPAY' => 'VPAY'
	);
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_wallets']				= array('Wallets', 'Bitte w&auml;hlen Sie die von SAFERPAY zu nutzenden Wallets');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['saferpay_wallets']['options']		= array(
		'MASTERPASS' => 'MASTERPASS'
	);
	
	/*
	 * sofortueberweisung
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['sofortueberweisungConfigkey']				= array('&quot;Sofort.&quot; Konfigurationsschl&uuml;ssel', 'Bitte tragen Sie hier den Wert ein, der Ihnen in Ihrem Benutzerkonto bei &quot;Sofort.&quot; als Konfigurationsschl&uuml;ssel Ihres Projektes angezeigt wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['sofortueberweisungUseCustomerProtection']	= array('K&auml;uferschutz verwenden (mit SOFORT-Bankkonto)', 'Bestimmen Sie, ob diese Zahlungsart den K&auml;uferschutz von &quot;Sofort.&quot; nutzen soll. Bitte beachten Sie, dass Sie diese Option nur w&auml;hlen d&uuml;rfen, wenn Sie ein SOFORT-Bankkonto besitzen und ggf. weitere Rahmenbedingungen zutreffen. Kl&auml;ren Sie Ihre Berechtigung, den K&auml;uferschutz anzubieten, im Zweifel mit dem Payment Provider.');
	
	/*
	 * Santander WebQuick
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickVendorNumber']				= array('Santander WebQuick H&auml;ndlernummer');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickVendorPassword']	= array('Santander WebQuick Passwort');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickLiveMode']	= array('Santander WebQuick im Live-Modus betreiben');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickMinAge'] = array('ben&ouml;tigtes Mindestalter');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameSalutation']	= array('Feldname im Checkoutformular f&uuml;r &quot;Anrede&quot;', 'Bitte beachten Sie, dass Feld nur die Werte &quot;Herr&quot; und &quot;Frau&quot; liefern darf. Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameFirstName']	= array('Feldname im Checkoutformular f&uuml;r &quot;Vorname&quot;', 'Sie m&uuml;ssen diese Information von Ihrem Kunden einholen und an Santander &uuml;bergeben, tragen Sie hier deshalb bitte auf jeden Fall den entsprechenden Feldnamen ein.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameLastName']	= array('Feldname im Checkoutformular f&uuml;r &quot;Nachname&quot;', 'Sie m&uuml;ssen diese Information von Ihrem Kunden einholen und an Santander &uuml;bergeben, tragen Sie hier deshalb bitte auf jeden Fall den entsprechenden Feldnamen ein.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameEmailAddress']	= array('Feldname im Checkoutformular f&uuml;r &quot;E-Mail-Adresse&quot;', 'Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameStreet']	= array('Feldname im Checkoutformular f&uuml;r &quot;Stra&szlig;e&quot;', 'Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameCity']	= array('Feldname im Checkoutformular f&uuml;r &quot;Stadt&quot;', 'Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameZipCode']	= array('Feldname im Checkoutformular f&uuml;r &quot;PLZ&quot;', 'Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['santanderWebQuickFieldNameCountry']	= array('Feldname im Checkoutformular f&uuml;r &quot;Land&quot;', 'Die &Uuml;bergabe dieser Information an Santander ist optional. Lassen Sie das Feld einfach leer, wenn Sie diese Information von Ihrem Kunden nicht einholen.');
	
	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['title_legend']			= 'Bezeichnung';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['steuersatz_legend']	= 'Steuersatz';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['afterCheckout_legend']			= 'Nach Bestellabschluss';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['type_legend']				= 'Art der Zahlungsoption';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['published_legend']		= 'Ver&ouml;ffentlichen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['fee_legend']				= 'Geb&uuml;hren';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['excludedGroups_legend']	= 'Gruppenbezogene Einstellungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['weightLimit_legend']		= 'Gewichtsbeschr&auml;nkungen';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['priceLimit_legend']		= 'Beschr&auml;nkungen des Warenwerts';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['countryLimit_legend']		= 'Beschr&auml;nkungen der erlaubten L&auml;nder';
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['misc_legend']		= 'Sonstiges';
	
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['new']        = array('Neue Zahlungsoption', 'Eine neue Zahlungsoption anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['edit']        = array('Zahlungsoption bearbeiten', 'Zahlungsoption ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['delete']        = array('Zahlungsoption l&ouml;schen', 'Zahlungsoption ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['copy']        = array('Zahlungsoption kopieren', 'Zahlungsoption ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['show']        = array('Details anzeigen', 'Details der Zahlungsoption ID %s anzeigen');
	
	/*
	 * Options
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['feeType']['options'] = array(
		'none' => array('Keine Berechnung (kostenlos)'),
		'fixed' => array('Festbetrag', 'W&auml;hlen Sie diese Option, wenn Sie die Geb&uuml;hr als Festbetrag definieren m&ouml;chten.'),
		'percentaged' => array('Prozentual', 'W&auml;hlen Sie diese Option, wenn Sie die Geb&uuml;hr als prozentualen Wert definieren m&ouml;chten.'),
		'weight' => array('nach Gewicht', 'W&auml;hlen Sie diese Option, wenn Sie die Geb&uuml;hr als Festbetrag abh&auml;ngig vom Gesamtgewicht der bestellten Ware definieren m&ouml;chten.'),
		'price' => array('nach Warenwert', 'W&auml;hlen Sie diese Option, wenn Sie die Geb&uuml;hr als Festbetrag abh&auml;ngig vom Wert der bestellten Ware definieren m&ouml;chten.'),
		'weightAndPrice' => array('nach Gewicht und Warenwert', 'W&auml;hlen Sie diese Option, wenn Sie die Geb&uuml;hr als Festbetrag abh&auml;ngig vom Gewicht und dem Wert der bestellten Ware definieren m&ouml;chten. Bitte beachten Sie, dass die Geb&uuml;hren, die Sie im Folgenden nach Gewicht und Preis angeben, entsprechend addiert werden.'),
		'formula' => array('Berechnungsformel', 'Definieren Sie eine Berechnungsformel, in der Sie verschiedene Platzhalter benutzen k&ouml;nnen.')
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['dynamicSteuersatzType']['options'] = array(
		'none' => 'keine Dynamik',
		'main' => 'der Hauptleistung folgen',
		'max' => 'der h&ouml;chste verwendete',
		'min' => 'der niedrigste verwendete'
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_payment_methods']['type']['options'] = array(
		'Standard' => array('Standard', 'Die meisten Zahlungsoptionen, die Sie selbst abwickeln, wie z. B. &quot;Rechnung&quot;, &quot;Nachnahme&quot; und &quot;Einzugserm&auml;chtigung&quot;, lassen sich mit diesem Standardmodul realisieren.'),
		'PayPal' => array('Zahlung per PayPal', 'W&auml;hlen Sie diese Option, wenn Sie mit diesem Zahlungsmodul die Bezahlung per PayPal erm&ouml;glichen m&ouml;chten. Bitte beachten Sie, dass Sie hierf&uuml;r bei PayPal registriert sein m&uuml;ssen und die von PayPal zur Verf&uuml;gung gestellten API-Zugangsdaten ben&ouml;tigen.'),
		'Sofortueberweisung' => array('Vorauskasse per &quot;Sofort.&quot;'),
		'Santander WebQuick' => array('Finanzierung mit Santander'),
		'PayPal Plus' => array('Zahlung per PayPal Plus'),
		'PAYONE' => array('Zahlung per PAYONE'),
		'SAFERPAY' => array('Zahlung per Saferpay'),
		'VR Pay' => array('Zahlung per VR Pay')
	);
