<?php

namespace Destringpc1\WppluginEmployee\Application\ScriptStyles;

class FrontStyles
{
    public function __construct()
    {
        // TODO
        // Enqueue script here
    }
    function register_front_style()
    {
        wp_enqueue_style('bootstrap-cdn', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
        wp_enqueue_style('front_style_plugin-css', EMPLOYEE_PLUGIN_DIR_URL . '/assets/css/front_style.css', '1.0.0');
    }
}
