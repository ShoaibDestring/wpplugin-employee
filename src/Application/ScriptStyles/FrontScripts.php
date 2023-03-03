<?php

namespace Destringpc1\WppluginEmployee\Application\ScriptStyles;

class FrontScripts
{
    public function __construct()
    {
        // TODO
        // Enqueue script here
    }
    function register_your_front_script()
    {
        wp_enqueue_script('front_script_file', EMPLOYEE_PLUGIN_DIR_URL . '/assets/js/front.js', true);
        wp_enqueue_script('bootstrap_script_cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', true);
        wp_enqueue_script('script_cdn', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', true);
    }
}
