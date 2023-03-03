<?php

namespace Destringpc1\WppluginEmployee\Database;

class FetchData
{

    public function QueryToFetchData()
    {
        global $wpdb;
        global $table_prefix;
        $table_name = $table_prefix . 'employees';
        $sql = "SELECT * from $table_name";
        $results =  $wpdb->get_results($sql);
        return $results;
    }
}
