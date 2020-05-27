<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['id']												=	array('ID');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['artType']										=	array('Art des Produkts', 'W&auml;hlen Sie hier, ob Sie ein Produkt oder ein Fremdsprachprodukt anlegen m&ouml;chten.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['pages']											=	array('Seiten, auf denen das Produkt dargestellt wird','W&auml;hlen Sie hier die Seite aus, auf der das Produkt dargestellt wird. Sofern Sie einen mehrsprachigen Shop betreiben, w&auml;hlen Sie bitte nur die Seiten in der Hauptsprache aus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['title']											=	array('Produktbezeichnung');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['alias']											=	array('Alias');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductAlias']								=	array('Produktalias','Wird automatisch ausgef&uuml;llt, sofern Sie keine manuelle Eingabe vornehmen');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['description']									=	array('Produktbeschreibung');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['shortDescription']								=	array('Kurzbeschreibung');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['published']										=	array('Ver&ouml;ffentlicht');

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupRestrictions']							=	array('Gruppeneinschränkungen');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['allowedGroups']							        =	array('Erlaubt für folgende Gruppen');

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupPrices_1']								=	array('Preisabweichung Gruppe 1');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupPrices_2']								=	array('Preisabweichung Gruppe 2');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupPrices_3']								=	array('Preisabweichung Gruppe 3');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupPrices_4']								=	array('Preisabweichung Gruppe 4');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useGroupPrices_5']								=	array('Preisabweichung Gruppe 5');

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['priceForGroups']									=	array('G&uuml;ltig f&uuml;r Gruppen');

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductPrice']								=	array('Preis in '.($GLOBALS['TL_CONFIG']['ls_shop_currency'] ? $GLOBALS['TL_CONFIG']['ls_shop_currency'] : '<i>&lt;noch keine W&auml;hrung in den Grundeinstellungen definiert&gt;</i>'), 'Ob Sie hier einen Brutto- oder Nettopreis hinterlegen, h&auml;ngt von der globalen Shop-Grundeinstellung ab. Falls sie Staffelpreise verwenden, tragen Sie hier bitte auf jeden Fall den Preis f&uuml;r eine Einheit ein.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useScalePrice']									=	array('Staffelpreis anwenden');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['scalePriceType']									=	array('Art der Staffelpreisangabe');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['scalePriceQuantityDetectionMethod']				=	array('Methode zur Mengenermittlung');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['scalePriceQuantityDetectionAlwaysSeparateConfigurations']	=	array('Unterschiedliche Konfigurationen stets trennen', 'Produkte und Varianten, die mit einem Konfigurator individualisiert wurden, werden nicht mit Produkten und Varianten zusammengefasst, bei denen die Konfiguration abweicht.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['scalePriceKeyword']								=	array('Staffelpreis-Schl&uuml;sselwort', 'Geben Sie hier ein Schl&uuml;sselwort ein, das zur Zusammenfassung mehrerer Warenkorb-Positionen bei der Mengenermittlung verwendet werden kann.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['scalePrice']										=	array('Staffelpreis (links: ab welcher Menge, rechts: welcher Preis bzw. welche Preisanpassung)');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductPriceOld']							=	array('Alter Preis in '.($GLOBALS['TL_CONFIG']['ls_shop_currency'] ? $GLOBALS['TL_CONFIG']['ls_shop_currency'] : '<i>&lt;noch keine W&auml;hrung in den Grundeinstellungen definiert&gt;</i>'), 'Ob Sie hier einen Brutto- oder Nettopreis hinterlegen, h&auml;ngt von der globalen Shop-Grundeinstellung ab.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductSteuersatz']						=	array('Steuersatz', 'W&auml;hlen Sie hier den Steuersatz, mit dem dieses Produkt besteuert wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductCode']								=	array('Artikelnummer');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductWeight']							=	array('Gewicht in '.($GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] ? $GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] : '<i>&lt;noch keine Gewichtseinheit in den Grundeinstellungen definiert&gt;</i>'), 'Das Gewicht des Produktes kann z. B. f&uuml;r die Berechnung der Versandkosten von Bedeutung sein.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductQuantityUnit']						=	array('Mengeneinheit', 'Tragen Sie hier die Mengeneinheit (z. B. Stk., Liter, lfm etc.) ein');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductQuantityDecimals']					=	array('Nachkommastellen f&uuml;r die Menge', 'Bestimmen Sie hier, wieviele Nachkommastellen f&uuml;r die Menge erlaubt sind. Bei einem Produkt, das in St&uuml;ck verkauft wird, tragen Sie z. B. &quot;0&quot; ein, damit nur die Bestellung ganzer St&uuml;ck m&ouml;glich ist. Bei einem Produkt, das in laufenden Metern verkauft wird, tragen Sie stattdessen z. B. &quot;2&quot; ein, damit auch die Bestellung von z. B. 2,75 lfm erm&ouml;glicht wird.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductMengenvergleichUnit']				=	array('Einheit f&uuml;r Mengenvergleichspreis', 'Tragen Sie hier z. B. &quot;100 g&quot; ein, wenn Sie den Preis einer Packung zur besseren Vergleichbarkeit auf 100 g umrechnen und dies auch so darstellen m&ouml;chten. Sie k&ouml;nnen den Platzhalter &quot;%s&quot; verwenden, um den berechneten Mengenvergleichspreis einzuf&uuml;gen. So k&ouml;nnen Sie z. B. eine Angabe wie &quot;entspricht 1,95 EUR pro 100 g&quot; realisieren.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductMengenvergleichDivisor']			=	array('Teiler zur Berechnung des Mengenvergleichspreises', 'Geben Sie hier den Teiler ein, mit dem der Mengenvergleichspreis errechnet wird. Sie ermitteln diesen Teiler, in dem Sie die in der Packung enthaltene Menge durch die Vergleichsmenge teilen. Beispiel: Sie haben ein Produkt in einer 275g-Packung und m&ouml;chten den Mengenvergleichspreis f&uuml;r 100 g darstellen. Geben Sie in diesem Fall &quot;2.75&quot; (275 g / 100 g = 2,75) ein. M&ouml;chten Sie den Preis f&uuml;r eine Vergleichsmenge von 1000 g ausgeben, geben Sie bitte &quot;0.275&quot; (275 g / 1000 g = 0,275) ein.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductMainImage']							=	array('Produkt-Abbildung', 'W&auml;hlen Sie hier das Hauptbild f&uuml;r dieses Produkt aus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductMoreImages']						=	array('Weitere Bilder', 'W&auml;hlen Sie hier weitere Bilder f&uuml;r dieses Produkt aus.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductDetailsTemplate']					=	array('Template f&uuml;r Produkt-Detaildarstellung');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductIsNew']								=	array('Neuheit');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductIsOnSale']							=	array('Sonderangebot');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductDeliveryInfoSet']					=	array('Einstellungen zu Lagerbestand/Lieferzeit');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductDeliveryTime']						=	array('Lieferzeit');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductRecommendedProducts']				=	array('Empfohlene Produkte', 'W&auml;hlen Sie hier Produkte aus, die in einem entsprechenden CrossSeller dargestellt werden k&ouml;nnen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['associatedProducts']								=	array('Verbundene Produkte', 'W&auml;hlen Sie hier Produkte aus, die Sie zur Realisierung individueller Funktionen mit diesem Produkt in Verbindung setzen m&ouml;chten.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductProducer']							= 	array('Hersteller');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['keywords']										= 	array('Schlüsselwörter');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['pageTitle']										=	array('Seitentitel', 'Tragen Sie hier den Seitentitel ein, der auf der Produktdetailseite verwendet werden soll. Sie können die Bedeutung der Produktdetailseite für Suchmaschinen damit verbessern. Falls Sie nichts eintragen, so wird dem von Contao regulär erstellten Seitentitel die Produktbezeichnung vorangestellt.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['pageDescription']								=	array('Meta-Seitenbeschreibung', 'Tragen Sie hier die Seitenbeschreibung ein, die auf der Produktdetailseite im suchmaschinenrelevanten Meta-Element "description" verwendet werden soll. Möglich sind bis zu 255 Zeichen, empfehlenswert sind maximal 160. Sofern Sie hier etwas eintragen, wird dieser Text unter allen Umständen verwendet. Lassen Sie das Feld leer, so kann je nach Grundeinstellung entweder die Seitenbeschreibung verwendet werden, die Contao regulär erstellt, oder es kommt die normale Produktbeschreibung zum Einsatz.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['sorting']										=	array('Sortierzahl');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['configurator']									=	array('Konfigurator verwenden');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['useOldPrice']									=	array('Alten Preis verwenden');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contents']									=	array('Flexible Produktinformationen','Hier k&ouml;nnen Sie beliebig viele Informationen hinterlegen, die in Templates &uuml;ber das Schl&uuml;sselwort referenziert und als Produkteigenschaft genutzt werden k&ouml;nnen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contentsLanguageIndependent']									=	array('Flexible Produktinformationen (sprachunabh&auml;ngig)','Hier k&ouml;nnen Sie beliebig viele Informationen hinterlegen, die in Templates &uuml;ber das Schl&uuml;sselwort referenziert und als Produkteigenschaft genutzt werden k&ouml;nnen.');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductAttributesValues'] 					=	array('Zuordnung Merkmal zu Auspr&auml;gung','W&auml;hlen Sie hier Merkmale und Auspr&auml;gungen, welche Sie zuvor unter dem Men&uuml;punkt &quot;Produkt-Merkmale&quot; angelegt haben.');


	/*
	 * Legends
	 */
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProductCode_legend']						= 'Artikelnummer und Alias';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPublishAndState_legend']					= 'Status';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopTitleAndDescriptions_legend']				= 'Bezeichnung und Beschreibungen';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopUnits_legend']							= 'Einheiten (sprachabh&auml;ngig)';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPages_legend']							= 'Seiten-/Kategorien-Zuordnung';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['groupRestrictions_legend']					    = 'Gruppeneinschränkungen';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopProducer_legend']							= 'Hersteller';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopImages_legend']							= 'Bilder';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopAttributesAndValues_legend']				= 'Merkmale und Auspr&auml;gungen';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_legend']							= 'Preis- und Gewichtsangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_1_legend']							= 'F&uuml;r Gruppe Nr. 1 abweichende Preisangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_2_legend']							= 'F&uuml;r Gruppe Nr. 2 abweichende Preisangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_3_legend']							= 'F&uuml;r Gruppe Nr. 3 abweichende Preisangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_4_legend']							= 'F&uuml;r Gruppe Nr. 4 abweichende Preisangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopPrice_5_legend']							= 'F&uuml;r Gruppe Nr. 5 abweichende Preisangaben';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopStock_legend']							= 'Lagerbestand und Lieferzeit';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopRecommendedProducts_legend']				= 'Empfohlene Produkte';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['associatedProducts_legend']						= 'Verbundene Produkte';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['lsShopTemplate_legend']							= 'Darstellungstemplate';
	 $GLOBALS['TL_LANG']['tl_ls_shop_product']['configurator_legend']							= 'Konfigurator-Einstellungen';
	
	/*
	 * Options
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['artType']['options'] = array(
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['options']['scalePriceType'] = array(
		'scalePriceStandalone' => array('Feste Preisangabe', 'Der eingegebene Preis wird direkt verwendet.'),
		'scalePricePercentaged' => array('Prozentuale Anpassung', 'Auf den Basispreis wird die angegebene prozentuale Anpassung angewendet. Bitte stellen Sie dem angegebenen Prozentwert f&uuml;r einen Abschlag ein Minuszeichen voran.'),
		'scalePriceFixedAdjustment' => array('Anpassung mit festem Wert', 'Auf den Basispreis wird die angegebene Anpassung angewendet. Bitte stellen Sie dem angegebenen Wert f&uuml;r einen Abschlag ein Minuszeichen voran.')
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['options']['scalePriceQuantityDetectionMethod'] = array(
		'separatedVariantsAndConfigurations' => array('Produkte, Varianten und Konfigurationen getrennt', 'Jede Warenkorbposition - egal ob sich das Produkt, die Variante oder lediglich die Konfiguration unterscheidet - wird separat gez&auml;hlt.'),
		'separatedVariants' => array('Produkte und Varianten getrennt', 'Warenkorbpositionen, die sich lediglich in ihrer Konfiguration unterscheiden, werden zusammengefasst. Unterschiedliche Varianten werden aber separat gez&auml;hlt.'),
		'separatedProducts' => array('Produkte getrennt', 'Unterschiedliche Produkte im Warenkorb werden separat gez&auml;hlt. Abweichende Varianten oder Konfigurationen werden aber zusammengefasst.'),
		'separatedScalePriceKeywords' => array('Zusammengefasst nach Staffelpreis-Schl&uuml;sselwort', 'Warenkorbpositionen, die ein gemeinsames Staffelpreis-Schl&uuml;sselwort hinterlegt haben, werden zusammengefasst. Ansonsten findet eine separate Z&auml;hlung einzelner Warenkorbpositionen statt.')
	);
		
	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['new']        = array('Neues Produkt', 'Ein neues Produkt anlegen');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['edit']        = array('Varianten bearbeiten', 'Varianten des Produktes mit ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['editheader']  = array('Produkt bearbeiten', 'Produkt mit ID %s bearbeiten');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['delete']        = array('Produkt l&ouml;schen', 'Produkt ID %s l&ouml;schen');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['toggle']        = array('Produkt ver&ouml;ffentlichen', 'Produkt ID %s ver&ouml;ffentlichen');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['copy']        = array('Produkt kopieren', 'Produkt mit ID %s kopieren');
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['show']        = array('Details anzeigen', 'Details des Produktes mit ID %s anzeigen');

	/*
	 * Misc
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['blankOptionLabel'] = 'Standard';
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contents_label01'] = 'Schl&uuml;sselwort';
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contents_label02'] = 'Produktinformation';
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contentsLanguageIndependent_label01'] = 'Schl&uuml;sselwort';
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['flex_contentsLanguageIndependent_label02'] = 'Produktinformation';

	$GLOBALS['TL_LANG']['tl_ls_shop_product']['attributesValues_label01'] = 'Merkmal';
	$GLOBALS['TL_LANG']['tl_ls_shop_product']['attributesValues_label02'] = 'Auspr&auml;gung';
