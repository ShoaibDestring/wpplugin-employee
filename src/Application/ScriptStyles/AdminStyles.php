<?php

namespace Destringpc1\WppluginEmployee\Application\ScriptStyles;

class AdminStyles
{
    public function __construct()
    {
        // TODO
        // Enqueue script here
    }
    function register_admin_style()
    {
        wp_enqueue_style('bootstrap-cdn', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");

        wp_enqueue_style('admin_style-css', EMPLOYEE_PLUGIN_DIR_URL . '/assets/css/admin_style.css', '1.0.0');
    }
}
