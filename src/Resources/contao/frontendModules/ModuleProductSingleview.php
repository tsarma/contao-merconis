<?php

namespace Merconis\Core;

class ModuleProductSingleview extends \Module {
	public function generate() {
		if (TL_MODE == 'BE') {
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### MERCONIS ProductSingleview ###';
			return $objTemplate->parse();
		}
		
		if (!\Input::get('product')) {
			return '';
		}
		
		return parent::generate();
	}
	
	public function compile() {
		/** @var \PageModel $objPage */
		global $objPage;
		
		/*
		 * Ermitteln der Produkt-ID
		 */
		$str_productAlias = \Input::get('product');
		
		$int_productId = ls_shop_generalHelper::getProductIdForAlias($str_productAlias);
		
		if (!$int_productId) {
			return '';
		}
		
		ls_shop_generalHelper::addToLastSeenProducts($int_productId);
		
		/*
		 * #########################################
		 * In order to get the filter form criteria and to filter
		 * the product's variants we simply perform a dummy search
		 * for the product in this singleview. Of course we don't
		 * want the search result.
		 */
		if (isset($GLOBALS['merconis_globals']['ls_shop_activateFilter']) && $GLOBALS['merconis_globals']['ls_shop_activateFilter']) {
			if (isset($GLOBALS['merconis_globals']['ls_shop_useFilterInProductDetails']) && $GLOBALS['merconis_globals']['ls_shop_useFilterInProductDetails']) {
				$objProductSearch = new ls_shop_productSearcher(true);
				$objProductSearch->setSearchCriterion('id', array($int_productId));
				$objProductSearch->search();
			} else {
				unset($_SESSION['lsShop']['filter']['matchedProducts']);
				unset($_SESSION['lsShop']['filter']['matchedVariants']);
			}
		}
		/*
		 * #########################################
		 */
		
		$objProduct = ls_shop_generalHelper::getObjProduct($int_productId, __METHOD__);
		
		/*
		 * Produktspezifische Anpassung von Seitentitel und Keywords
		 */
		// Overwrite the page title
        if ($objProduct->_hasPageTitle) {
            $objPage->pageTitle = $objProduct->_pageTitle;
        } else {
            $objPage->pageTitle = strip_insert_tags($objProduct->_title) . ' - ' . ($objPage->pageTitle ? $objPage->pageTitle : $objPage->title);
        }

        if ($objProduct->_hasPageDescription) {
            $objPage->description = $objProduct->_pageDescription;
        } else {
            if (
                isset($GLOBALS['TL_CONFIG']['ls_shop_useProductDescriptionAsSeoDescription'])
                && $GLOBALS['TL_CONFIG']['ls_shop_useProductDescriptionAsSeoDescription']
            ) {
                $objPage->description = ($objProduct->_shortDescription || $objProduct->_description) ? substr(strip_insert_tags(strip_tags($objProduct->_shortDescription ? $objProduct->_shortDescription : $objProduct->_description)), 0, 350) : $objPage->description;
            }
        }

		if ($objProduct->_hasKeywords != '') {
			$GLOBALS['TL_KEYWORDS'] .= (strlen($GLOBALS['TL_KEYWORDS']) ? ', ' : '').$objProduct->_keywords;
		}
		/*
		 * Ende Produktspezifische Anpassung von Seitentitel und Keywords
		 */
		 		

		
		$this->Template = new \FrontendTemplate('productSingleview');
		
		$objProductOutput = new ls_shop_productOutput($int_productId, 'singleview');
		
		if (isset($GLOBALS['MERCONIS_HOOKS']['beforeProductSingleviewOutput']) && is_array($GLOBALS['MERCONIS_HOOKS']['beforeProductSingleviewOutput'])) {
			foreach ($GLOBALS['MERCONIS_HOOKS']['beforeProductSingleviewOutput'] as $mccb) {
				$objMccb = \System::importStatic($mccb[0]);
				$objMccb->{$mccb[1]}($int_productId);
			}
		}
		
		$this->Template->product = $objProductOutput->parseOutput();
	}
}
?>