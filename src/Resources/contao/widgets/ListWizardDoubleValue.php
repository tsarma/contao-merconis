<?php

namespace Merconis\Core;

class ListWizardDoubleValue extends \Widget
{

	/**
	 * Submit user input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget';


	/**
	 * Add specific attributes
	 * @param string
	 * @param mixed
	 */
	public function __set($strKey, $varValue)
	{
		switch ($strKey)
		{
			case 'maxlength':
				if ($varValue > 0)
				{
					$this->arrAttributes['maxlength'] = $varValue;
				}
				break;

			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}


	/**
	 * Trim values
	 * @param mixed
	 * @return mixed
	 */
	public function validator($varInput)
	{
		if (is_array($varInput))
		{
			return parent::validator($varInput);
		}

		return parent::validator(trim($varInput));
	}


	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		$arrButtons = array('copy', 'up', 'down', 'delete');
		$strCommand = 'cmd_' . $this->strField;

		// Change the order
		if (\Input::get($strCommand) && is_numeric(\Input::get('cid')) && \Input::get('id') == $this->currentRecord)
		{
			switch (\Input::get($strCommand))
			{
				case 'copy':
//					$this->varValue = array_duplicate($this->varValue, \Input::get('cid'));
					$this->varValue = array_duplicate($this->varValue, \Input::get('cid') - 1);
					$this->varValue = array_duplicate($this->varValue, \Input::get('cid') + 1);
					$this->varValue = array_move_up($this->varValue, \Input::get('cid') + 1);
					break;

				case 'up':
//					$this->varValue = array_move_up($this->varValue, \Input::get('cid'));
					$this->varValue = array_move_up($this->varValue, \Input::get('cid') - 1);
					$this->varValue = array_move_up($this->varValue, \Input::get('cid') - 2);
					$this->varValue = array_move_up($this->varValue, \Input::get('cid'));
					$this->varValue = array_move_up($this->varValue, \Input::get('cid') - 1);
					break;

				case 'down':
//					$this->varValue = array_move_down($this->varValue, \Input::get('cid'));
					$this->varValue = array_move_down($this->varValue, \Input::get('cid'));
					$this->varValue = array_move_down($this->varValue, \Input::get('cid') + 1);
					$this->varValue = array_move_down($this->varValue, \Input::get('cid') - 1);
					$this->varValue = array_move_down($this->varValue, \Input::get('cid'));
					break;

				case 'delete':
//					$this->varValue = array_delete($this->varValue, \Input::get('cid'));
					$this->varValue = array_delete($this->varValue, \Input::get('cid') - 1);
					$this->varValue = array_delete($this->varValue, \Input::get('cid') - 1);
					break;
			}

			\Database::getInstance()->prepare("UPDATE " . $this->strTable . " SET " . $this->strField . "=? WHERE id=?")
						   ->execute(serialize($this->varValue), $this->currentRecord);

			$this->redirect(preg_replace('/&(amp;)?cid=[^&]*/i', '', preg_replace('/&(amp;)?' . preg_quote($strCommand, '/') . '=[^&]*/i', '', \Environment::get('request'))));
		}

		// Make sure there is at least an empty array
		if (!is_array($this->varValue) || count($this->varValue) < 1)
		{
			$this->varValue = array('');
		}

		$tabindex = 0;
		$return .= '<ul id="ctrl_'.$this->strId.'" class="tl_merconisListwizard">';

		// Add input fields
		for ($i=0; $i<count($this->varValue); $i++)
		{
//			$return .= '
//    <li><input type="text" name="'.$this->strId.'[]" class="tl_text"                 tabindex="'.++$tabindex.'" value="'.specialchars($this->varValue[$i]).'"' . $this->getAttributes() . '> ';
			$return .= '
      <li><input type="text" name="'.$this->strId.'[]" class="tl_text ls_shop_tl_text" tabindex="'.++$tabindex.'" value="'.specialchars($this->varValue[$i]).'"' . $this->getAttributes() . '>&nbsp;';
			$i++;
			$return .= '<input type="text" name="'.$this->strId.'[]" class="tl_text ls_shop_tl_text" tabindex="'.++$tabindex.'" value="'.specialchars($this->varValue[$i]).'"' . $this->getAttributes() . '> ';


			// Add buttons
			foreach ($arrButtons as $button)
			{
				$return .= '<a href="'.$this->addToUrl('&amp;'.$strCommand.'='.$button.'&amp;cid='.$i.'&amp;id='.$this->currentRecord).'" title="'.specialchars($GLOBALS['TL_LANG']['MSC']['lw_'.$button]).'" onclick="ls_shop_backend.listWizard(this,\''.$button.'\',\'ctrl_'.$this->strId.'\');return false">'.\Image::getHtml($button.'.gif', $GLOBALS['TL_LANG']['MSC']['lw_'.$button], 'class="tl_listwizard_img"').'</a> ';
			}

			$return .= '</li>';
		}

		return $return.'
  </ul>';
	}
}

?>