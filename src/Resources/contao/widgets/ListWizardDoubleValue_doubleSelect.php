<?php

namespace Merconis\Core;

class ListWizardDoubleValue_doubleSelect extends \Widget {

	protected $blnSubmitInput = false;
	protected $strTemplate = 'be_widget';


	public function generate() {
		$arrButtons = array('copy', 'delete', 'drag', 'up', 'down');
		$strCommand = 'cmd_' . $this->strField;

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
		
		/*
		 * The options parameter holds a top level key for each option field
		 */
		$intNumFieldsPerRow = count($this->options);



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
				for ($i = 0; $i < $intNumFieldsPerRow; $i++) {
					$arrValue[$k][$i] = $v[$i];
				}
			}
			$this->varValue = $arrValue;
		}

		// Save the value
		if (\Input::get($strCommand) || \Input::post('FORM_SUBMIT') == $this->strTable) {
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
		$return = '<table id="ctrl_'.$this->strId.'" class="listWizardDoubleValue_doubleSelect">
  <thead>
  <tr>';
  
  	for ($i = 0; $i < $intNumFieldsPerRow; $i++) {
  		$return .= '<th>'.$this->arrConfiguration['merconis_multiField']['labels'][$i].'</th>';
  	}
  
    $return .= '<th>&nbsp;</th>
  </tr>
  </thead>
  <tbody class="sortable" data-tabindex="'.$tabindex.'">';

		foreach($this->varValue as $rowKey => $rowValue) {
			$return .= '<tr>';
			for ($i = 0; $i < $intNumFieldsPerRow; $i++) {
				$options = '';
	
				foreach ($this->options[$i] as $v) {
					$options .= '<option value="'.specialchars($v['value']).'"'.static::optionSelected($v['value'], $rowValue[$i]).'>'.$v['label'].'</option>';
				}
	
				$return .= '
	    <td><select name="'.$this->strId.'['.$rowKey.']['.$i.']" class="tl_select tl_chosen" tabindex="'.$tabindex++.'" onfocus="Backend.getScrollOffset()">'.$options.'</select></td>';
			}

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
}
