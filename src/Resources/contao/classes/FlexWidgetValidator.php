<?php
namespace Merconis\Core;

use LeadingSystems\Helpers\FlexWidget;

class FlexWidgetValidator {
	public static function quantityInput(FlexWidget $obj_flexWidget) {
		$decimalsSeparator = $GLOBALS['merconis_globals']['ls_shop_decimalsSeparator'] ? $GLOBALS['merconis_globals']['ls_shop_decimalsSeparator'] : '.';
		if (
			preg_match('/[^-0-9\\'.$decimalsSeparator.($GLOBALS['merconis_globals']['ls_shop_thousandsSeparator'] ? '\\'.$GLOBALS['merconis_globals']['ls_shop_thousandsSeparator'] : '').']/siU', $obj_flexWidget->getValue())
			||	preg_replace('/\\'.$GLOBALS['merconis_globals']['ls_shop_decimalsSeparator'].'/siU', '.', $obj_flexWidget->getValue()) <= 0
		) {
			throw new \Exception(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['numberWithDecimalsFE'], $obj_flexWidget->getLabel()));
		}
	}

	public static function searchWordMinLength(FlexWidget $obj_flexWidget) {
		$valueAfterHandleMinLength = ls_shop_generalHelper::handleSearchWordMinLength($obj_flexWidget->getValue(), $obj_flexWidget->getMinLength());
		if ($valueAfterHandleMinLength != $obj_flexWidget->getValue()) {
			throw new \Exception(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['stringHavingPartsWithMinimumLength'], $obj_flexWidget->getLabel(), $obj_flexWidget->getMinLength()));
		}
	}

	/*
	 * Diese Funktion prüft einen eingegebenen Gutschein-Code auf Gültigkeit und gibt
	 * das übergebene Widget im Fehlerfall mit hinterlegten Fehlern zurück
	 */
	public static function couponWidget(FlexWidget $obj_flexWidget) {
		if (!$obj_flexWidget->getValue()) {
			throw new \Exception($GLOBALS['TL_LANG']['MOD']['ls_shop']['coupon']['text003']);
		}

		$arrCouponErrors = ls_shop_cartHelper::validateCoupon($obj_flexWidget->getValue(), 'couponCode');

		if ($arrCouponErrors['doesNotExist']) {
			throw new \Exception($arrCouponErrors['doesNotExist']);
		}

		if ($arrCouponErrors['onlyOneCouponAllowed']) {
			throw new \Exception($arrCouponErrors['onlyOneCouponAllowed']);
		}

		if ($arrCouponErrors['notYetValid']) {
			throw new \Exception($arrCouponErrors['notYetValid']);
		}

		if ($arrCouponErrors['noLongerValid']) {
			throw new \Exception($arrCouponErrors['noLongerValid']);
		}

		if ($arrCouponErrors['minimumOrderValueNotReached']) {
			throw new \Exception($arrCouponErrors['minimumOrderValueNotReached']);
		}

		if ($arrCouponErrors['numAvailableNotOk']) {
			throw new \Exception($arrCouponErrors['numAvailableNotOk']);
		}


	}
}