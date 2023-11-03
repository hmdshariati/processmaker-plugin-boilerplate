<?php
/**
 * class.deleteCases.php
 *  
 */

  class deleteCasesClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'deleteCases' . PATH_SEPARATOR .
        get_include_path()
      );
    }

    function setup()
    {
    }

    function getFieldsForPageSetup()
    {
    }

    function updateFieldsForPageSetup()
    {
    }

  }
?>