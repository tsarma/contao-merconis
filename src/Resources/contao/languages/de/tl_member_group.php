<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopOutputPriceType']										= array('Ausgabepreise brutto/netto', 'Stellen Sie hier ein, ob Kunden, die dieser Gruppe angeh&ouml;ren Brutto- oder Nettopreise sehen.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopPriceAdjustment']										= array('Preisanpassung (prozentual)', 'Hier k&ouml;nnen Sie f&uuml;r alle Kunden, die dieser Gruppe angeh&ouml;ren, einen prozentualen Auf- bzw. Abschlag auf alle Produktpreise festlegen.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopMinimumOrderValue']									= array('Mindestbestellwert', 'Wichtig: Tragen Sie hier bitte den Betrag als Brutto- oder Netto-Wert entsprechend der f&uuml;r diese Gruppe g&uuml;ltigen Ausgabepreis-Einstellung an. Die globale Einstellung f&uuml;r eingegebene Preise findet hier keine Anwendung!');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopMinimumOrderValueAddCouponToValueOfGoods']			= array('Gutscheine bei Mindestbestellwert ber&uuml;cksichtigen', 'Bestimmen Sie, ob Gutscheine bei der Pr&uuml;fung des Mindestbestellwertes ber&uuml;cksichtigt werden sollen oder nicht.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopFormCustomerData']									= array('Formular für Kundendaten', 'Bitte w&auml;hlen Sie hier das Formular aus, mit dem Sie beim Bestellvorgang die Kundendaten erfassen m&ouml;chten.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopFormConfirmOrder']									= array('Formular zur Bestellbest&auml;tigung', 'Bitte w&auml;hlen Sie hier das Formular aus, mit dem die Kunden dieser Kundengruppe ihre Bestellung best&auml;tigen sollen.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopStandardPaymentMethod']								= array('Vorausgew&auml;hlte Zahlungsart', 'Wenn Sie m&ouml;chten, dass beim Abschluss der Bestellung eine bestimmte Zahlungsart automatisch ausgew&auml;hlt ist, so k&ouml;nnen Sie diese hier definieren.');
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopStandardShippingMethod']								= array('Vorausgew&auml;hlte Versandsart', 'Wenn Sie m&ouml;chten, dass beim Abschluss der Bestellung eine bestimmte Versandart automatisch ausgew&auml;hlt ist, so k&ouml;nnen Sie diese hier definieren.');
	
	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_member_group']['lsShop_legend']			= 'MERCONIS-Einstellungen';

	/*
	 * Options
	 */
	$GLOBALS['TL_LANG']['tl_member_group']['lsShopOutputPriceType']['options'] = array(
		'brutto' => array('Brutto-Preise','W&auml;hlen Sie diese Option, wenn Mitglieder dieser Gruppe Brutto-Preise sehen sollen'),
		'netto' => array('Netto-Preise','W&auml;hlen Sie diese Option, wenn Mitglieder dieser Gruppe Netto-Preise sehen sollen')
	);
