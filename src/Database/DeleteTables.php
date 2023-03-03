<?php

namespace Destringpc1\WppluginEmployee\Database;

class DeleteTables
{

    public function QueryToDelete()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'employees';
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
    }
}
