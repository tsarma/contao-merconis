<?php

namespace Merconis\Core;
use function LeadingSystems\Helpers\ls_getFilePathFromVariableSources;

class ls_shop_configuratorFileUpload extends \FormFileUpload {
	/**
	 * Submit user input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;

	/*
	 * Upload-Verarbeitung und Koordination der beiden Formularfelder
	 */
	public function validate($doNotProcessUpload = false) {
		$this->loadLanguageFile('ls_shop_configuratorFileUpload');
		
		if (!$doNotProcessUpload) {
			/*
			 * Nicht bei jedem Validierungsaufruf soll der Upload verarbeitet werden, dies kann durch
			 * Übergabe des entsprechenden Parameters eingestellt werden. Soll der Upload aber verarbeitet
			 * werden, so wird die entsprechende Funktion hier aufgerufen.
			 * 
			 * Wurde die Funktion ausgeführt, so ist $this->varValue nun der Dateiname der hochgeladenen
			 * Datei oder der Dateiname der anstelle eines Uploads übergebenen Dateireferenz.
			 */
			$this->processUpload();
		} else {
			/*
			 * Soll kein Upload verarbeitet werden, so wird direkt der als Dateireferenz übergebene
			 * Dateinamen als $this->varValue verwendet.
			 */
			$this->varValue = $this->getPost($this->strName);
		}
		
		$this->varValue = (string) $this->varValue;
		
		if (!$this->varValue) {
			if ($this->mandatory) {
				if ($this->strLabel == '') {
					$this->addError($GLOBALS['TL_LANG']['ERR']['mdtryNoLabel']);
				} else {
					$this->addError(sprintf($GLOBALS['TL_LANG']['ERR']['mandatory'], $this->strLabel));
				}
			}
		} else if (!file_exists($this->getFileDir().'/'.$this->varValue)) {
			$this->varValue = '';
			$this->addError($GLOBALS['TL_LANG']['ls_shop_configuratorFileUpload']['text001']);
		}
		
		if ($this->hasErrors())	{
			$this->class = 'error';
		}
	}

	protected function processUpload() {
		/*
		 * Prüfen, ob Datei-Upload vorhanden
		 */
		$blnFileUploaded = false;
		if (isset($_FILES[$this->strName.'_fileUpload']) && !empty($_FILES[$this->strName.'_fileUpload']['name'])) {
			$blnFileUploaded = true;
		}
		
		if ($blnFileUploaded) {
			/*
			 * Wenn eine Datei hochgeladen wurde, so wird der Upload über die "validate"-Funktion
			 * der Parent-Klasse "FormFileUpload" verarbeitet und der neue Dateiname als
			 * Feldwert gesetzt.
			 */
			$_FILES[$this->strName] = $_FILES[$this->strName.'_fileUpload'];
			unset($_FILES[$this->strName.'_fileUpload']);

			parent::validate();
			
			$this->varValue = !$this->hasErrors() ? $_SESSION['FILES'][$this->strName]['name'] : '';
//			$this->varValue = ls_getFilePathFromVariableSources($this->varValue);
			\Input::setPost($this->strName, $this->varValue);
		} else {
			/*
			 * Wurde keine Datei hochgeladen, so wird der übergebene Dateiname als Feldwert gesetzt
			 */
			$this->varValue = $this->getPost($this->strName);
		}		
	}


	public function generate() {
		$GLOBALS['merconis_globals']['formFieldUniqueIDCounter']++;
		$this->loadLanguageFile('ls_shop_configuratorFileUpload');
		$filePreview = $this->getFilePreview();
		
		if (!isset($GLOBALS['merconis_globals']['formFieldUniqueIDCounter'])) {
			$GLOBALS['merconis_globals']['formFieldUniqueIDCounter'] = 0;
		}
		
		$hiddenFieldPart = sprintf('<input type="hidden" name="%s" id="ctrl_%s_'.$GLOBALS['merconis_globals']['formFieldUniqueIDCounter'].'" value="%s"%s',
						$this->strName,
						$this->strId,
						specialchars($this->varValue),
						$this->strTagEnding);

		$fileFieldPart = sprintf('<input type="file" name="%s_fileUpload" id="ctrl_%s_fileUpload_'.$GLOBALS['merconis_globals']['formFieldUniqueIDCounter'].'" class="upload%s"%s%s',
						$this->strName,
						$this->strId,
						(strlen($this->strClass) ? ' ' . $this->strClass : ''),
						$this->getAttributes(),
						$this->strTagEnding);

		if ($filePreview) {
			ob_start();
			?>
			<div class="changeSelection"  id="changeSelection_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>" style="cursor: pointer; display: none;" onclick="document.getElementById('ctrl_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>').value=''; document.getElementById('fileSelection_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>').style.display = 'block'; document.getElementById('filePreview_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>').style.display = 'none'; this.style.display = 'none';"><?php echo $GLOBALS['TL_LANG']['ls_shop_configuratorFileUpload']['text002']; ?></div>
			<div class="fileSelection" id="fileSelection_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>">
				<?php echo $fileFieldPart; ?>
			</div>
			<script type="text/javascript">
				document.getElementById('fileSelection_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>').style.display = 'none';
				document.getElementById('changeSelection_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>').style.display = 'block';
			</script>
			<?php
			$fileFieldPart = ob_get_clean();
		}
						
		return $filePreview.$hiddenFieldPart.' '.$fileFieldPart.$this->addSubmit();
	}
	
	protected function getFilePreview() {
		$strReturn = '';
		$file = $this->getFileDir().'/'.$this->varValue;
		if ($this->varValue && file_exists(TL_ROOT . '/' . $file)) {
			$objFile = new \File($file);
			$arrImgExtensions = array('jpg', 'jpeg', 'gif', 'png');
			
			if (in_array($objFile->extension, $arrImgExtensions)) {
				$imgHTML = \Image::getHtml(\Image::get($objFile->value, 50, 50, 'proportional'));
			} else {
				$imgHTML = sprintf('<img src="%s" />', TL_FILES_URL.'system/themes/'.\Backend::getTheme().'/images/'.$objFile->icon);
			}
			
			ob_start();
			?>
			<div class="filePreview" id="filePreview_<?php echo $this->strId; ?>_<?php echo $GLOBALS['merconis_globals']['formFieldUniqueIDCounter']; ?>">
				<div class="icon" style="float: left; margin-right: 10px;"><?php echo $imgHTML; ?></div>
				<div class="filename" style="float:left;"><?php echo basename($objFile->value); ?></div>
				<div class="clearFloat">&nbsp;</div>
			</div>
			<?php 
			$strReturn = ob_get_clean();
		}
		return $strReturn;
	}
	
	protected function getFileDir() {
		$strUploadFolder = $this->uploadFolder;

		// Overwrite upload folder with user home directory
		if ($this->useHomeDir && FE_USER_LOGGED_IN) {
			$this->import('FrontendUser', 'User');

			if ($this->User->assignDir && $this->User->homeDir && is_dir(TL_ROOT . '/' . $this->User->homeDir)) {
				$strUploadFolder = $this->User->homeDir;
			}
		}
		
		return ls_getFilePathFromVariableSources($strUploadFolder);
	}
}