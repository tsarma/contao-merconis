<?php

namespace Merconis\Core;

class ls_shop_apiController_installer
{
    protected static $objInstance;

    /** @var \LeadingSystems\Api\ls_apiController $obj_apiReceiver */
    protected $obj_apiReceiver = null;

    protected function __construct()
    {
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!is_object(self::$objInstance)) {
            self::$objInstance = new self();
        }

        return self::$objInstance;
    }

    public function processRequest($str_resourceName, $obj_apiReceiver)
    {
        if (!$str_resourceName || !$obj_apiReceiver) {
            return;
        }

        $this->obj_apiReceiver = $obj_apiReceiver;

        /*
         * If this class has a method that matches the resource name, we call it.
         * If not, we don't do anything because another class with a corresponding
         * method might have a hook registered.
         */
        if (method_exists($this, $str_resourceName)) {
            $this->{$str_resourceName}();
        }
    }

    /**
     * Merconis Installer:
     *
     * Test
     *
     * Scope: BE
     *
     * Allowed user types: beUser
     */
    protected function apiResource_merconisInstaller_test()
    {
        $this->obj_apiReceiver->requireScope(['BE']);
        $this->obj_apiReceiver->requireUser(['beUser']);

        \Config::persist('ls_shop_installationStatus', 'installedCompletely');

        $this->obj_apiReceiver->success();
        $this->obj_apiReceiver->set_data('TEST');
    }

    /**
     * Merconis Installer:
     *
     * Returns the current installation status.
     *
     * Scope: BE
     *
     * Allowed user types: beUser
     */
    protected function apiResource_merconisInstaller_getStatus()
    {
        $this->obj_apiReceiver->requireScope(['BE']);
        $this->obj_apiReceiver->requireUser(['beUser']);

        $str_currentInstallationStatus = $GLOBALS['TL_CONFIG']['ls_shop_installationStatus'];
        if (!$str_currentInstallationStatus) {
            $str_currentInstallationStatus = 'notInstalledYet';
        }

        $this->obj_apiReceiver->success();
        $this->obj_apiReceiver->set_data([
            'str_currentInstallationStatus' => $str_currentInstallationStatus
        ]);
    }

    /**
     * Merconis Installer:
     *
     * Test
     *
     * Scope: BE
     *
     * Allowed user types: beUser
     */
    protected function apiResource_merconisInstaller_step01()
    {
        $this->obj_apiReceiver->requireScope(['BE']);
        $this->obj_apiReceiver->requireUser(['beUser']);

        /*
         * FIXME: For the first steps in the installer development, we assume that the Merconis import file (.mif)
         * is located under 'files/merconis.mif'
         */
        $str_importFileLocation = 'files/merconis.mif';

        if (!file_exists(TL_ROOT . '/' . $str_importFileLocation)) {
            $this->obj_apiReceiver->fail();
            $this->obj_apiReceiver->set_data('Import file "' . $str_importFileLocation . '" does not exist.');
            return;
        }

        $this->obj_apiReceiver->success();
        $this->obj_apiReceiver->set_data('STEP 01');
    }
}