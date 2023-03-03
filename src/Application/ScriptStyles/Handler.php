<?php

namespace Destringpc1\WppluginEmployee\Application\ScriptStyles;

class Handler
{
    public function loadAdminScriptStyles()
    {
        $adminScripts = new AdminScripts();
        $adminScripts->register_admin_script();
        $adminStyles = new AdminStyles();
        $adminStyles->register_admin_style();
    }

    public function loadFrontScriptStyles()
    {
        $frontScripts = new FrontScripts();
        $frontScripts->register_your_front_script();
        $frontStyles = new FrontStyles();
        $frontStyles->register_front_style();
    }
}
