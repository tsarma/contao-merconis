<?php

namespace Merconis\Core;

class ls_x_ListWizardMultiValue extends \Widget {

	protected $blnSubmitInput = true;
	protected $strTemplate = 'be_widget';
	
	public function validate() {
		$options = $this->getPost($this->strName);
		$options = array_values($options);
		$varInput = $this->validator($options);

		if (!$this->hasErrors()) {
			$this->varValue = $varInput;
		}
	}

	public function generate() {
		$arrButtons = array('copy', 'drag', 'delete', 'up', 'down');
		$strCommand = 'cmd_' . $this->strField;

		if(\Input::get($strCommand) && is_numeric(\Input::get('cid')) && \Input::get('id') == $this->currentRecord) {
			switch (\Input::get($strCommand)) {
				case 'copy' :
					$this->varValue = array_duplicate($this->varValue, \Input::get('cid'));
					break;

				case 'up' :
					$this->varValue = array_move_up($this->varValue, \Input::get('cid'));
					break;

				case 'down' :
					$this->varValue = array_move_down($this->varValue, \Input::get('cid'));
					break;

				case 'delete' :
					$this->varValue = array_delete($this->varValue, \Input::get('cid'));
					break;
			}
			
			\Database::getInstance()->prepare("UPDATE " . $this->strTable . " SET " . $this->strField . "=? WHERE id=?")->execute(serialize($this->varValue), $this->currentRecord);

			$this->redirect(preg_replace('/&(amp;)?cid=[^&]*/i', '', preg_replace('/&(amp;)?' . preg_quote($strCommand, '/') . '=[^&]*/i', '', \Environment::get('request'))));			
		}

		$intNumFieldsPerRow = count($this->arrConfiguration['ls_x_multiField']['fields']);

		// Get the submitted value
		if(\Input::post('FORM_SUBMIT') == $this->strTable) {
			$this->varValue = \Input::post($this->strId);
		}

		// We need at least an empty array
		if(!is_array($this->varValue) || !$this->varValue[0]) {
			$this->varValue = array('');
		} else {
			$arrValue = array();

			foreach($this->varValue as $k => $v) {
				$arrValue[$k] = array();
				
				foreach ($this->arrConfiguration['ls_x_multiField']['fields'] as $i => $varField) {
					$str_fieldKey = isset($varField['fieldKey']) ? $varField['fieldKey'] : $i;
					$arrValue[$k][$str_fieldKey] = $v[$str_fieldKey];
				}
			}
			$this->varValue = $arrValue;
		}

		// The tab index has to be initialized
		if(!\Contao\Cache::has('tabindex')) {
			\Contao\Cache::set('tabindex', 1);
		}

		$tabindex = \Contao\Cache::get('tabindex');

		// Generate the widget html code and return it
		$return = '<table id="ctrl_' . $this->strId . '" class="listWizardMultiValue">
  <thead>
  <tr>';

		foreach ($this->arrConfiguration['ls_x_multiField']['fields'] as $varField) {
			$return .= '<th class="'.($varField['colClass'] ? $varField['colClass'] : '').'">' . $varField['label'] . '</th>';
		}

		$return .= '<th class="actionButtons">&nbsp;</th>
  </tr>
  </thead>
  <tbody class="sortable" data-tabindex="' . $tabindex . '">';
  
		foreach($this->varValue as $rowKey => $rowValue) {
			$return .= '<tr>';

			foreach ($this->arrConfiguration['ls_x_multiField']['fields'] as $i => $varField) {
				$str_fieldKey = isset($varField['fieldKey']) ? $varField['fieldKey'] : $i;
				$fieldHTML = '';
				switch($varField['type']) {
					case 'select':
						if (is_array($varField)) {
							$options = '';
							
							if (is_array($varField['options_callback'])) {
								$varField['options'] = static::importStatic($varField['options_callback'][0])->{$varField['options_callback'][1]}();
							}
							
							if (is_array($varField['options'])) {
								foreach($varField['options'] as $v) {
									$options .= '<option value="' . specialchars($v['value']) . '"' . static::optionSelected($v['value'], $rowValue[$str_fieldKey]) . '>' . $v['label'] . '</option>';
								}
							}
			
							$fieldHTML = '<select name="' . $this->strId . '[' . $rowKey . '][' . $str_fieldKey . ']" class="tl_select tl_chosen'.($varField['class'] ? ' '.$varField['class'] : '').'" tabindex="' . $tabindex++ . '" onfocus="Backend.getScrollOffset()">' . $options . '</select>';
						}
						break;
						
					case 'textarea':
						$fieldHTML = '<textarea name="' . $this->strId . '[' . $rowKey . '][' . $str_fieldKey . ']" tabindex="' . $tabindex++ . '" class="'.($varField['class'] ? ' '.$varField['class'] : '').'" onfocus="Backend.getScrollOffset()">'.$rowValue[$str_fieldKey].'</textarea>';
						break;
						
					case 'datepicker':
						$fieldHTML = '
						<div class="ls_x_datepickerBox'.($varField['class'] ? ' '.$varField['class'] : '').'">
							<input name="' . $this->strId . '[' . $rowKey . '][' . $str_fieldKey . ']" type="text" tabindex="' . $tabindex++ . '" onfocus="Backend.getScrollOffset()" class="tl_text'.($varField['datepickerType'] ? ' '.$varField['datepickerType'] : '').'" value="'.$rowValue[$str_fieldKey].'" />
							<img class="toggler" width="20" height="20" style="vertical-align:-6px;cursor:pointer" title="" alt="" src="assets/mootools/datepicker/'.$GLOBALS['TL_ASSETS']['DATEPICKER'].'/icon.gif" />
						</div>';
						break;

					case 'text':
					default:
						$fieldHTML = '<input name="' . $this->strId . '[' . $rowKey . '][' . $str_fieldKey . ']" type="text" class="tl_text'.($varField['class'] ? ' '.$varField['class'] : '').'" tabindex="' . $tabindex++ . '" onfocus="Backend.getScrollOffset()" value="'.$rowValue[$str_fieldKey].'" />';
						break;
				}
				$return .= '<td class="'.($varField['colClass'] ? $varField['colClass'] : '').'">'.$fieldHTML.'</td>';
			}

			$return .= '<td class="actionButtons">';

			// Buttons
			foreach($arrButtons as $button) {
				$class = ($button == 'up' || $button == 'down') ? ' class="button-move"' : '';

				if($button == 'drag') {
					$return .= ' ' . \Image::getHtml('drag.gif', '', 'class="drag-handle" title="' . sprintf($GLOBALS['TL_LANG']['MSC']['move']) . '"');
				} else {
					$return .= ' <a href="' . $this->addToUrl('&amp;' . $strCommand . '=' . $button . '&amp;cid=' . $rowKey . '&amp;id=' . $this->currentRecord) . '"' . $class . ' title="' . specialchars($GLOBALS['TL_LANG']['MSC']['mw_' . $button]) . '" onclick="ls_shop_backend.listWizardMultiValue(this,\'' . $button . '\',\'ctrl_' . $this->strId . '\');return false">' . \Image::getHtml($button . '.gif', $GLOBALS['TL_LANG']['MSC']['mw_' . $button], 'class="tl_listwizard_img"') . '</a>';
				}
			}

			$return .= '</td>
			  </tr>';
		}

		$return .= '
  </tbody>
  </table>';

		// The current tabindex has to be stored
		\Contao\Cache::set('tabindex', $tabindex);

		return $return;
	}

}
