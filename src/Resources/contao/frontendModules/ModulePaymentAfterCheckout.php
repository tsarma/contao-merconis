<?php

namespace Merconis\Core;

class ModulePaymentAfterCheckout extends \Module {
	public function generate() {
		$this->import('ls_shop_paymentModule');
		if (FE_USER_LOGGED_IN) {
			$this->import('FrontendUser', 'User');
		}
		
		if (TL_MODE == 'BE') {
			$obj_template = new \BackendTemplate('be_wildcard');
			$obj_template->wildcard = '### MERCONIS - Kasse - Bezahlung nach Checkout ###';
			return $obj_template->parse();
		}
		return parent::generate();
	}
	
	public function compile() {
		$this->strTemplate = $this->ls_shop_paymentAfterCheckout_template;

		/*
		 * Look if an oih is given as a get or post parameter
		 */
		$str_oih = null;
		if (\Input::get('oih')) {
			$str_oih = \Input::get('oih');
		} else if (\Input::post('oih')) {
			$str_oih = \Input::get('oih');
		}

		$arr_order = ls_shop_generalHelper::getOrder($str_oih, 'orderIdentificationHash');
		if (!is_array($arr_order) || !count($arr_order)) {
			return false;
		}

		// ### paymentMethod callback ########################
		$this->ls_shop_paymentModule->specializeManuallyWithPaymentID($arr_order['paymentMethod_id']);
		$arr_paymentModuleReturn = $this->ls_shop_paymentModule->onPaymentAfterCheckoutPage($arr_order);
		// ###################################################

		$this->Template = new \FrontendTemplate($this->strTemplate);
		$this->Template->arr_order = $arr_order;
		$this->Template->str_paymentModuleOutput = $arr_paymentModuleReturn['str_output'];
		$this->Template->str_cancelUrl = $arr_paymentModuleReturn['str_cancelUrl'];
	}
}
?>