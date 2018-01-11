<?php

namespace Merconis\Core;

class ls_shop_ListWizardAttributesValues extends \Widget {

	protected $blnSubmitInput = false;
	protected $strTemplate = 'be_widget';


	public function generate() {
		$arrButtons = array('copy', 'delete', 'drag', 'up', 'down');
		$strCommand = 'cmd_' . $this->strField;
		
		$attributeValueAllocationParentIsVariant = $this->strTable == 'tl_ls_shop_variant' ? '1' : '0';
		
		/*
		 * Get the attribute variant allocations from the allocation table
		 */
		$this->varValue = ls_shop_generalHelper::getAttributeValueAllocationsFromAllocationTable($this->currentRecord, $attributeValueAllocationParentIsVariant);

		if (\Input::get($strCommand) && is_numeric(\Input::get('cid')) && \Input::get('id') == $this->currentRecord) {
			switch (\Input::get($strCommand)) {
				case 'copy':
					$this->varValue = array_duplicate($this->varValue, \Input::get('cid'));
					break;

				case 'up':
					$this->varValue = array_move_up($this->varValue, \Input::get('cid'));
					break;

				case 'down':
					$this->varValue = array_move_down($this->varValue, \Input::get('cid'));
					break;

				case 'delete':
					$this->varValue = array_delete($this->varValue, \Input::get('cid'));
					break;
			}
		}
		

		// Get the submitted value
		if (\Input::post('FORM_SUBMIT') == $this->strTable) {
			$this->varValue = \Input::post($this->strId);
		}
		
		// We need at least an empty array
		if (!is_array($this->varValue) || !$this->varValue[0]) {
			$this->varValue = array('');
		} else {
			$arrValue = array();
			
			foreach ($this->varValue as $k => $v) {
				$arrValue[$k] = array();
				$arrValue[$k][0] = $v[0];
				$arrValue[$k][1] = $v[1];
			}
			$this->varValue = $arrValue;
		}
		
		$this->eliminateUnallowedAttributeValueCombination();

		// Save the value
		if (\Input::get($strCommand) || \Input::post('FORM_SUBMIT') == $this->strTable) {
			/*
			 * Save the value in the allocation table
			 */

			ls_shop_generalHelper::insertAttributeValueAllocationsInAllocationTable($this->varValue, $this->currentRecord, $attributeValueAllocationParentIsVariant);
			
			\Database::getInstance()->prepare("UPDATE " . $this->strTable . " SET " . $this->strField . "=? WHERE id=?")
						   ->execute(serialize($this->varValue), $this->currentRecord);

			// Reload the page
			if (is_numeric(\Input::get('cid')) && \Input::get('id') == $this->currentRecord) {
				$this->redirect(preg_replace('/&(amp;)?cid=[^&]*/i', '', preg_replace('/&(amp;)?' . preg_quote($strCommand, '/') . '=[^&]*/i', '', \Environment::get('request'))));
			}
		}

		// The tab index has to be initialized
		if (!\Cache::has('tabindex')) {
			\Cache::set('tabindex', 1);
		}

		$tabindex = \Cache::get('tabindex');

		// Generate the widget html code and return it
		$return = '<table id="ctrl_'.$this->strId.'" class="listWizardDoubleValue_doubleSelect ls_shop_ListWizardAttributesValues">
  <thead>
  <tr>';
  
	$return .= '<th>'.$this->arrConfiguration['merconis_multiField']['labels'][0].'</th><th>'.$this->arrConfiguration['merconis_multiField']['labels'][1].'</th>';
  
    $return .= '<th>&nbsp;</th>
  </tr>
  </thead>
  <tbody class="sortable" data-tabindex="'.$tabindex.'">';
		
		$attributeOptions = ls_shop_generalHelper::getAttributesAsOptions();
		foreach($this->varValue as $rowKey => $rowValue) {
			$return .= '<tr>';

				/*
				 * Field no. 1 (attributes)
				 */
				$options = '';
	
				foreach ($attributeOptions as $v) {
					$options .= '<option value="'.specialchars($v['value']).'"'.static::optionSelected($v['value'], $rowValue[0]).'>'.$v['label'].'</option>';
				}
	
				$return .= '
	    <td><select onchange="ls_shop_backend.updateAttributeValuesWidget(this, this.getProperty(\'value\'));" name="'.$this->strId.'['.$rowKey.'][0]" class="attributeField tl_select tl_chosen" tabindex="'.$tabindex++.'" onfocus="Backend.getScrollOffset()">'.$options.'</select></td>';

				/*
				 * Field no. 2 (attribute values)
				 */
				$attributeValuesOptions = ls_shop_generalHelper::getAttributeValuesAsOptions($rowValue[0]);
				$options = '';
	
				foreach ($attributeValuesOptions as $v) {
					$options .= '<option value="'.specialchars($v['value']).'"'.static::optionSelected($v['value'], $rowValue[1]).'>'.$v['label'].'</option>';
				}
	
				$return .= '
	    <td><select name="'.$this->strId.'['.$rowKey.'][1]" class="attributeValuesField tl_select tl_chosen" tabindex="'.$tabindex++.'" onfocus="Backend.getScrollOffset()">'.$options.'</select></td>';




			$return .= '<td>';

			// Buttons
			foreach ($arrButtons as $button) {
				$class = ($button == 'up' || $button == 'down') ? ' class="button-move"' : '';

				if ($button == 'drag') {
					$return .= ' ' . \Image::getHtml('drag.gif', '', 'class="drag-handle" title="' . sprintf($GLOBALS['TL_LANG']['MSC']['move']) . '"');
				} else {
					$return .= ' <a href="'.$this->addToUrl('&amp;'.$strCommand.'='.$button.'&amp;cid='.$rowKey.'&amp;id='.$this->currentRecord).'"' . $class . ' title="'.specialchars($GLOBALS['TL_LANG']['MSC']['mw_'.$button]).'" onclick="ls_shop_backend.listWizardMultiValue(this,\''.$button.'\',\'ctrl_'.$this->strId.'\');return false">'.\Image::getHtml($button.'.gif', $GLOBALS['TL_LANG']['MSC']['mw_'.$button], 'class="tl_listwizard_img"').'</a>';
				}
			}

			$return .= '</td>
			  </tr>';
		}


		$return .= '
  </tbody>
  </table>';
  
		// The current tabindex has to be stored
		\Cache::set('tabindex', $tabindex);
		
  		return $return;
	}


	
	/*
	 * This function checks whether there's a value that does not belong to the given attribute
	 * and if so, set the value to an empty string. This is necessary because without javascript
	 * the attribute value combinations have to be saved after the selection of an attribute in order
	 * to get the corresponding value options. The problem is that the values that are being saved
	 * in this situation are most likely an unallowed combination and if the user does not select
	 * a correct value for the attribute and then saves again, this unallowed combination would
	 * remain in the variant data. To prevent this, we reset an unallowed value.
	 */
	protected function eliminateUnallowedAttributeValueCombination() {
		foreach ($this->varValue as $k => $v) {
			if (!ls_shop_generalHelper::checkIfAttributeAndValueBelongTogether($v[0], $v[1])) {
				$this->varValue[$k][1] = '';
			}
		}
	}
}
