<?php

	/*
	 * Fields
	 */
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopProductVariantAttributesValues'] 				= array('Zuordnung Merkmal zu Auspr&auml;gung','W&auml;hlen Sie hier Merkmale und Auspr&auml;gungen, welche Sie zuvor unter dem Men&uuml;punkt &quot;Produkt-Merkmale&quot; angelegt haben.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['title']												= array('Bezeichnung der Produkt-Variante');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['alias']												= array('Alias');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['description']										= array('Beschreibung der Produkt-Variante');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['shortDescription']									= array('Kurzbeschreibung');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['published']											= array('Ver&ouml;ffentlicht');

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useGroupPrices_1']									=	array('Preisabweichung f&uuml;r Gruppe 1');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useGroupPrices_2']									=	array('Preisabweichung f&uuml;r Gruppe 2');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useGroupPrices_3']									=	array('Preisabweichung f&uuml;r Gruppe 3');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useGroupPrices_4']									=	array('Preisabweichung f&uuml;r Gruppe 4');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useGroupPrices_5']									=	array('Preisabweichung f&uuml;r Gruppe 5');

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['priceForGroups']										=	array('G&uuml;ltig f&uuml;r Gruppen');

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantPrice']									= array('Preis','Geben Sie hier den Preis f&uuml;r diese Variante ein. Bitte definieren Sie die Art der Preisangabe im nebenstehenden Auswahlfeld. Falls sie Staffelpreise verwenden, tragen Sie hier bitte auf jeden Fall den Preis f&uuml;r eine Einheit ein.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantPriceType']								= array('Art der Preisangabe');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useScalePrice']										=	array('Staffelpreis anwenden');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['scalePriceType']										=	array('Art der Staffelpreisangabe');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['scalePriceQuantityDetectionMethod']					=	array('Methode zur Mengenermittlung');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['scalePriceQuantityDetectionAlwaysSeparateConfigurations']	=	array('Unterschiedliche Konfigurationen stets trennen', 'Produkte und Varianten, die mit einem Konfigurator individualisiert wurden, werden nicht mit Produkten und Varianten zusammengefasst, bei denen die Konfiguration abweicht.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['scalePriceKeyword']									=	array('Staffelpreis-Schl&uuml;sselwort', 'Geben Sie hier ein Schl&uuml;sselwort ein, das zur Zusammenfassung mehrerer Warenkorb-Positionen bei der Mengenermittlung verwendet werden kann.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['scalePrice']											=	array('Staffelpreis (links: ab welcher Menge, rechts: welcher Preis bzw. welche Preisanpassung)');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantPriceOld']								= array('Alter Preis','Geben Sie hier den alten Preis f&uuml;r diese Variante ein. Bitte definieren Sie die Art der Preisangabe im nebenstehenden Auswahlfeld.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantPriceTypeOld']							= array('Alter Preis: Art der Preisangabe');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantWeight']								= array('Gewicht','Geben Sie hier das Gewicht f&uuml;r diese Variante ein. Bitte definieren Sie die Art der Gewichtsangabe im nebenstehenden Auswahlfeld.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantWeightType']							= array('Art der Gewichtsangabe');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantQuantityUnit']						=	array('abweichende Mengeneinheit', 'Nur falls abweichend vom Hauptprodukt: Tragen Sie hier die Mengeneinheit (z. B. Stk., Liter, lfm etc.) ein');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantMengenvergleichUnit']				=	array('abweichende Einheit f&uuml;r Mengenvergleichspreis', 'Nur falls abweichend vom Hauptprodukt: Tragen Sie hier z. B. &quot;100 g&quot; ein, wenn Sie den Preis einer Packung zur besseren Vergleichbarkeit auf 100 g umrechnen und dies auch so darstellen m&ouml;chten. Sie k&ouml;nnen den Platzhalter &quot;%s&quot; verwenden, um den berechneten Mengenvergleichspreis einzuf&uuml;gen. So k&ouml;nnen Sie z. B. eine Angabe wie &quot;entspricht 1,95 EUR pro 100 g&quot; realisieren.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantMengenvergleichDivisor']			=	array('abweichender Teiler zur Berechnung des Mengenvergleichspreises', 'Nur falls abweichend vom Hauptprodukt: Geben Sie hier den Teiler ein, mit dem der Mengenvergleichspreis errechnet wird. Sie ermitteln diesen Teiler, in dem Sie die in der Packung enthaltene Menge durch die Vergleichsmenge teilen. Beispiel: Sie haben ein Produkt in einer 275g-Packung und m&ouml;chten den Mengenvergleichspreis f&uuml;r 100 g darstellen. Geben Sie in diesem Fall &quot;2.75&quot; (275 g / 100 g = 2,75) ein. M&ouml;chten Sie den Preis f&uuml;r eine Vergleichsmenge von 1000 g ausgeben, geben Sie bitte &quot;0.275&quot; (275 g / 1000 g = 0,275) ein.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantCode']									= array('Artikelnummer','Geben Sie hier die Artikelnummer f&uuml;r diese Variante ein. Bitte definieren Sie die Art der Angabe im nebenstehenden Auswahlfeld.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopProductVariantMainImage']						= array('Varianten-Abbildung', 'W&auml;hlen Sie hier das Hauptbild f&uuml;r diese Variante aus.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopProductVariantMoreImages']						= array('Weitere Bilder', 'W&auml;hlen Sie hier weitere Bilder f&uuml;r diese Variante aus.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantDeliveryInfoSet']						= array('Einstellungen zu Lagerbestand/Lieferzeit');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantDeliveryTime']							= array('Lieferzeit');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['configurator']										= array('Konfigurator verwenden');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['useOldPrice']										= array('Alten Preis verwenden');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contents']									=	array('Flexible Varianteninformationen','Hier k&ouml;nnen Sie beliebig viele Informationen hinterlegen, die in Templates &uuml;ber das Schl&uuml;sselwort referenziert und als Varianteneigenschaft genutzt werden k&ouml;nnen.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contentsLanguageIndependent']									=	array('Flexible Varianteninformationen (sprachunabh&auml;ngig)','Hier k&ouml;nnen Sie beliebig viele Informationen hinterlegen, die in Templates &uuml;ber das Schl&uuml;sselwort referenziert und als Varianteneigenschaft genutzt werden k&ouml;nnen.');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['associatedProducts']								=	array('Verbundene Produkte', 'W&auml;hlen Sie hier Produkte aus, die Sie zur Realisierung individueller Funktionen mit dieser Variante in Verbindung setzen m&ouml;chten.');


/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantCode_legend']							= 'Artikelnummer';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopStatus_legend']								= 'Status';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopTitleAndDescriptions_legend']					= 'Bezeichnung und Beschreibungen';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopUnits_legend']									= 'Einheiten (sprachabh&auml;ngig)';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopImages_legend']								= 'Bilder';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopVariantAttributesAndValues_legend']			= 'Merkmale und Auspr&auml;gungen';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_legend']									= 'Preis- und Gewichtsangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_1_legend']								= 'F&uuml;r Gruppe Nr. 1 abweichende Preisangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_2_legend']								= 'F&uuml;r Gruppe Nr. 2 abweichende Preisangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_3_legend']								= 'F&uuml;r Gruppe Nr. 3 abweichende Preisangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_4_legend']								= 'F&uuml;r Gruppe Nr. 4 abweichende Preisangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopPrice_5_legend']								= 'F&uuml;r Gruppe Nr. 5 abweichende Preisangaben';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lsShopStock_legend']									= 'Lagerbestand und Lieferzeit';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['configurator_legend']								= 'Konfigurator-Einstellungen';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['associatedProducts_legend']							= 'Verbundene Produkte';



/*
 * Options
 */
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['options']['lsShopVariantPriceType'] = array(
	'standalone' => array('Eigenst&auml;ndiger Preis in '.($GLOBALS['TL_CONFIG']['ls_shop_currency'] ? $GLOBALS['TL_CONFIG']['ls_shop_currency'] : '<i>&lt;noch keine W&auml;hrung in den Grundeinstellungen definiert&gt;</i>'),'Der angegebene Preis ersetzt den im Hauptprodukt angegebenen Preis v&ouml;llig'),
	'adjustmentPercentaged' => array('Prozentuale Anpassung','Der angegebene Preis versteht sich als prozentuale Anpassung des Hauptprodukt-Preises'),
	'adjustmentFix' => array('Anpassung mit fixem Preis in '.($GLOBALS['TL_CONFIG']['ls_shop_currency'] ? $GLOBALS['TL_CONFIG']['ls_shop_currency'] : '<i>&lt;noch keine W&auml;hrung in den Grundeinstellungen definiert&gt;</i>'),'Der angegebene Preis versteht sich als fester Auf- oder Abschlag auf den Hauptprodukt-Preis')
);

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['options']['lsShopVariantWeightType'] = array(
	'standalone' => array('Eigenst&auml;ndiges Gewicht in '.($GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] ? $GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] : '<i>&lt;noch keine Gewichtseinheit in den Grundeinstellungen definiert&gt;</i>'),'Das angegebene Gewicht ersetzt das im Hauptprodukt angegebene Gewicht v&ouml;llig'),
	'adjustmentPercentaged' => array('Prozentuale Anpassung','Das angegebene Gewicht versteht sich als prozentuale Anpassung des Hauptprodukt-Gewichts'),
	'adjustmentFix' => array('Anpassung mit fixem Gewicht in '.($GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] ? $GLOBALS['TL_CONFIG']['ls_shop_weightUnit'] : '<i>&lt;noch keine Gewichtseinheit in den Grundeinstellungen definiert&gt;</i>'),'Das angegebene Gewicht versteht sich als fester Auf- oder Abschlag auf das Gewicht des Hauptproduktes')
);
	
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['options']['scalePriceType'] = array(
	'scalePriceStandalone' => array('Feste Preisangabe', 'Der eingegebene Preis wird direkt verwendet.'),
	'scalePricePercentaged' => array('Prozentuale Anpassung', 'Auf den Basispreis wird die angegebene prozentuale Anpassung angewendet. Bitte stellen Sie dem angegebenen Prozentwert f&uuml;r einen Abschlag ein Minuszeichen voran.'),
	'scalePriceFixedAdjustment' => array('Anpassung mit festem Wert', 'Auf den Basispreis wird die angegebene Anpassung angewendet. Bitte stellen Sie dem angegebenen Wert f&uuml;r einen Abschlag ein Minuszeichen voran.')
);

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['options']['scalePriceQuantityDetectionMethod'] = array(
	'separatedVariantsAndConfigurations' => array('Produkte, Varianten und Konfigurationen getrennt', 'Jede Warenkorbposition - egal ob sich das Produkt, die Variante oder lediglich die Konfiguration unterscheidet - wird separat gez&auml;hlt.'),
	'separatedVariants' => array('Produkte und Varianten getrennt', 'Warenkorbpositionen, die sich lediglich in ihrer Konfiguration unterscheiden, werden zusammengefasst. Unterschiedliche Varianten werden aber separat gez&auml;hlt.'),
	'separatedProducts' => array('Produkte getrennt', 'Unterschiedliche Produkte im Warenkorb werden separat gez&auml;hlt. Abweichende Varianten oder Konfigurationen werden aber zusammengefasst.'),
	'separatedScalePriceKeywords' => array('Zusammengefasst nach Staffelpreis-Schl&uuml;sselwort', 'Warenkorbpositionen, die ein gemeinsames Staffelpreis-Schl&uuml;sselwort hinterlegt haben, werden zusammengefasst. Ansonsten findet eine separate Z&auml;hlung einzelner Warenkorbpositionen statt.')
);

/*
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['new']        = array('Neue Variante', 'Eine neue Variante anlegen');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['edit']        = array('Variante bearbeiten', 'Variante mit ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['editheader']  = array('Produkt bearbeiten', 'Produkt bearbeiten');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['delete']      = array('Variante l&ouml;schen', 'Variante ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['copy']        = array('Variante kopieren', 'Variante mit ID %s kopieren');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['cut']        = array('Variante verschieben', 'Variante mit ID %s verschieben');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['show']        = array('Details anzeigen', 'Details der Variante mit ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['toggle']        = array('Variante ver&ouml;ffentlichen', 'Variante ID %s ver&ouml;ffentlichen');

/*
 * Misc
 */
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contents_label01'] = 'Schl&uuml;sselwort';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contents_label02'] = 'Produktinformation';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contentsLanguageIndependent_label01'] = 'Schl&uuml;sselwort';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['flex_contentsLanguageIndependent_label02'] = 'Produktinformation';

$GLOBALS['TL_LANG']['tl_ls_shop_variant']['attributesValues_label01'] = 'Merkmal';
$GLOBALS['TL_LANG']['tl_ls_shop_variant']['attributesValues_label02'] = 'Auspr&auml;gung';
