<?php
/*
Plugin name: Form data
Plugin URI: https://wordpress.org/
Description: Simple WordPress plugin
Author: Rajat Sharma
Author URI: https://wordpress.org/
Version: 1.0
*/

// Activation and deactivation hooks
register_activation_hook(__FILE__, 'form_data_activate');
register_deactivation_hook(__FILE__, 'form_data_deactivate');

function form_data_activate(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_data';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        Name varchar(500) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function form_data_deactivate(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_data';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
}

// Admin menu
add_action('admin_menu', 'form_data_menu');

function form_data_menu(){
    add_menu_page('Form Data', 'Form Data', 'manage_options', 'form_data_page', 'form_data_list');
}

function form_data_list(){
    echo "Welcome to Form Data Plugin";
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_data';
    $data = $wpdb->get_results("SELECT * FROM $table_name");
    
    echo '<table>';
    echo '<tr>';
    echo '<td>Id</td>';
    echo '<td>Name</td>';
    echo '</tr>';
    
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row->id . '</td>';
        echo '<td>' . $row->Name . '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
}
?>
