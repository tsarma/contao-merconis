<?php

namespace Merconis\Core;

class ModuleProductOverview extends \Module {
	public function generate() {
		if (TL_MODE == 'BE') {
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### MERCONIS ProductOverview ###';
			return $objTemplate->parse();
		}
		
		if (\Input::get('product')) {
			return '';
		}
		
		return parent::generate();
	}
	
	public function compile() {
		$objProductList = new ls_shop_productList();
		$this->Template = new \FrontendTemplate('productOverview');
		$this->Template->output = $objProductList->parseOutput();
	}
}
?>