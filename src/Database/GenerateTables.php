<?php

namespace Destringpc1\WppluginEmployee\Database;

class GenerateTables
{

    public function QueryToCreate()
    {

        global $wpdb;
        $table_name = $wpdb->prefix . "employees";
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      name varchar(200) NOT NULL,
      email varchar(200) NOT NULL,
      phone_no varchar(20) NOT NULL,
      address varchar(500) NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";


        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        dbDelta($sql);
    }
}
