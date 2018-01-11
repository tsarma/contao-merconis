<?php

namespace Merconis\Core;

	class ls_shop_custom_regexp
	{
		public function customRegexp($strRegexp, &$varValue, \Widget $objWidget) {
			if ($strRegexp == 'oneNumber') {
				if (!preg_match('/^[0-9]{1}$/siU', $varValue)) {
					$objWidget->addError(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['oneNumber'], $objWidget->label));
				}
				return true;
			} else if ($strRegexp == 'numberWithDecimals') {
				if (preg_match('/[^-0-9\.]/siU', $varValue)) {
					$objWidget->addError(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['numberWithDecimals'], $objWidget->label));
				}
				return true;
			} else if ($strRegexp == 'numberWithDecimalsAndHashsignLeftTextRight') {
				/*
				 * Diese Validierungsfunktion ist speziell für Doppel-Eingabefelder (inputType "listWizardDoubleValue"),
				 * bei denen im linken Feld Zahlen mit Kommas und rechts ein Text erlaubt sind. Die Validierungsfunktion wird
				 * in diesem Fall für jedes der beiden Felder nacheinander aufgerufen. Soll das linke Feld, dessen Wert
				 * beim ersten Aufruf übergeben wird, anders validiert werden als das zweite, so muss gezählt werden,
				 * um den wievielten Aufruf es sich handelt.
				 */
				if (!isset($GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count']) || $GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count'] > 1) {
					$GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count'] = 1;
				} else {
					$GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count'] = 2;
				}
				
				if ($GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count'] == 1) {
					if (preg_match('/[^-0-9\.#a-zA-Z]/siU', $varValue)) {
						$objWidget->addError(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['numberWithDecimals'], $objWidget->label));
					}
				} else if ($GLOBALS['merconis_globals']['regexp']['numberWithDecimalsAndHashsignLeftTextRight']['count'] == 2) {
					/*
					 * Bislang noch keine Validierung für die Texteingabe
					 */
				}
				return true;
			} else if ($strRegexp == 'feeFormula') {
				/*
				 * Da eine feeFormula per eval verarbeitet wird, wollen wir verhindern, dass dieser "De-Facto-PHP-Code" etwas enthalten
				 * kann, das zu etwas Anderem als dem wirklichen Zweck missbraucht werden kann. Abgesehen von den Platzhaltern sollen
				 * keine weiteren Worte erlaubt sein, um das Ausführen von Befehlen zu verhindern.
				 */
				$formula = html_entity_decode($varValue);
				
				/*
				 * Replace the allowed wildcards with the numeric value "10", which means that after that, the formula must not contain
				 * any further alphabetic characters or characters that could be misused in the eval'd string and that the formula must
				 * be calculable without any php errors.
				 */
				$formula = preg_replace('/##totalValueOfGoods##|##totalWeightOfGoods##|##totalValueOfCoupons##|##shippingFee##/siU', '10', $formula);
				
				if (preg_match('/[^-0-9\.\(\)\/\*\+\?\:\=\>\<\s]/siU', $formula)) {
					$objWidget->addError(sprintf('x'.$GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['feeFormula'], $objWidget->label));
					return false;
				}
				
				if (@eval('$priceFromFormula = '.$formula.';') === false) {
					$objWidget->addError(sprintf($GLOBALS['TL_LANG']['MOD']['ls_shop']['rgxpErrorMessages']['feeFormula'], $objWidget->label));
					return false;
				}
				
				return true;
			}
			return false;
		}
	}
?>