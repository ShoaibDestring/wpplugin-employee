<?php

namespace Destringpc1\WppluginEmployee;

use Destringpc1\WppluginEmployee\Database\FetchData;
use Destringpc1\WppluginEmployee\Database\DeleteTables;
use Destringpc1\WppluginEmployee\Database\GenerateTables;
use Destringpc1\WppluginEmployee\Application\Pages\Handler;
use Destringpc1\WppluginEmployee\Application\AjaxRequests\Handler as AjaxHandler;
use Destringpc1\WppluginEmployee\Application\ScriptStyles\Handler as ScriptStyleHanlder;


class App
{

    public function __construct()
    {
        register_activation_hook(EMPLOYEE_PLUGIN_FILE, array($this, 'pluginActivationHook'));
        register_deactivation_hook(EMPLOYEE_PLUGIN_FILE, array($this, 'pluginDeactivationHook'));

        add_action('init', array($this, 'initCallback'));

        add_action('admin_menu', array($this, 'adminPagesRegister'));

        add_action('admin_enqueue_scripts', array($this, 'registerEnqueueAdminScriptsStyles'));
        add_shortcode('employee_data', array($this, 'addShortCodeMethods'));

        add_action('wp_enqueue_scripts', array($this, 'registerEnqueueFrontScriptsStyles'));

        add_action('wp_ajax_handle_ajax_requests', array($this, 'handleAjaxRequests'));
        add_action('wp_ajax_nopriv_handle_ajax_requests', array($this, 'handleAjaxRequests'));
    }

    public function pluginActivationHook()
    {
        $generateTables = new GenerateTables();
        $generateTables->QueryToCreate();
    }

    public function pluginDeactivationHook()
    {
        $deleteTables = new DeleteTables();
        $deleteTables->QueryToDelete();
    }

    public function initCallback()
    {
    }

    public function adminPagesRegister()
    {

        $handler = new Handler();
        $handler->employee_plugin_menu();
    }


    public function registerEnqueueAdminScriptsStyles()
    {
        $scriptStyles = new ScriptStyleHanlder();
        $scriptStyles->loadAdminScriptStyles();
      
    }
    public function registerEnqueueFrontScriptsStyles()
    {
        $scriptStyles = new ScriptStyleHanlder();
        $scriptStyles->loadFrontScriptStyles();
    }

    public function addShortCodeMethods()
    {
        ob_start();
        $fetchData = new FetchData();
        $results = $fetchData->QueryToFetchData();
        include_once(EMPLOYEE_PLUGIN_DIR_PATH . 'src/Application/Pages/display_employee.php');
        $results = ob_get_contents();
        ob_end_clean();
        return $results;
    }


    public function handleAjaxRequests()
    {

        $ajaxHandler = new AjaxHandler();
        $ajaxHandler->handleRequests();
    }
}
