<?php
/**
 * @package ContactUs
 */

 /**
  * Plugin Name: Contact Us
  * Plugin URI: https://github.com/Wyllymk/wpdb-forms
  * Description: This is a Contact Us Plugin
  * Version: 1.0.0
  * Author: Wilson
  * Author URI: https://wyllymk.github.io/newport/
  *  License: GPLv2 or later
  * Text Domain: contact-us
  */

/*-------------------------------------------------------------------------*/
/*                        SECURITY CHECK                                   */
/*-------------------------------------------------------------------------*/
//method 1
if(!defined('ABSPATH')){
    die;
}

//method 2
defined('ABSPATH') or die('Hey you hacker, got you!');

//method 3
if(!function_exists('add_action')){
    echo 'Hey you hacker, gerarahia!';
    exit;
}

/*-------------------------------------------------------------------------*/
/*                        CONTACT US CLASS                                 */
/*-------------------------------------------------------------------------*/
if(!class_exists('ContactUs')){
  class ContactUs{
    function __construct(){
        $this->pass_data_to_db();
    }
    function activate(){
        $this->create_table_to_db();
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'contact';
        $charset_collate = $wpdb->get_charset_collate();

        $contactus = "CREATE TABLE $table_name(
            ID bigint unsigned NOT NULL auto_increment,
            Event_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            Firstname varchar(15) NOT NULL,
            Lastname varchar(15) NOT NULL,
            Email varchar(35) NOT NULL,
            Subject text NOT NULL,
            PRIMARY KEY (ID)
        )$charset_collate;";
        require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
        dbDelta($contactus);
    }

    function pass_data_to_db(){
        if(isset($_POST['submit'])){
            $data = array(
                'Firstname' =>  $_POST['firstname'],
                'Lastname'  =>  $_POST['lastname'],
                'Email'     =>  $_POST['email'],
                'Subject'   =>  $_POST['subject']

            );
            global $wpdb;
            $table = 'wp_contact';
            $result = $wpdb->insert($table, $data, $format=NULL);
            
            if($result==true){
                echo '<script>alert("Form Submitted Successfully");</script>' ;
            }else{
                echo '<script>alert("Form Not Submitted");</script>' ;
            }
        }
    }
  }
}
//
$contactUsInstance = new ContactUs();

//activate
register_activation_hook(__FILE__, array($contactUsInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($contactUsInstance, 'deactivate'));