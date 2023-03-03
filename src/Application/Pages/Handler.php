<?php

namespace Destringpc1\WppluginEmployee\Application\Pages;

class Handler
{

    function __construct()
    {
        // TODO
        // Add menu and submenu hooks here and below callbacks each callback will have a new class that represent a page
        // you can also add methods which are common and other pages classes can be extend with this class with an empty construct.

    }


    function employee_plugin_menu()
    {
        $page_title = "Employee Plugin";
        $menu_titile = "Employee Plugin";
        $capability = "manage_options";
        $menu_slug = "create-employee";
        $icon_url = "dashicons-admin-plugins";
        $position = '80';
        add_menu_page($page_title, $menu_titile, $capability, $menu_slug, array($this, 'create_function'), $icon_url, $position);
    }

    function create_function()
    {
        include_once('create_employee.php');
    }
}
