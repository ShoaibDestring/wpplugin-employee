<?php

namespace Destringpc1\WppluginEmployee\Application\ScriptStyles;

class AdminScripts
{

    public function __construct()
    {
        // TODO
        // Enqueue script here

    }
    function register_admin_script()
    {
        wp_enqueue_script('admin_script_file', EMPLOYEE_PLUGIN_DIR_URL . '/assets/js/main.js', true);

        wp_enqueue_script('script_cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', true);
    }
}
