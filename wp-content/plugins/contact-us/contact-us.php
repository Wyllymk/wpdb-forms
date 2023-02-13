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

  //security check

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
/*                        FETCHING DATA FROM DB                            */
/*-------------------------------------------------------------------------*/
if(!class_exists('ContactUs')){
class ContactUs{
    function __construct(){

    }
    function activate(){
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function create_table_to_db(){

    }
    function pass_data_to_db(){

    }
}
}
$contactUsInstance = new ContactUs();

//activate
register_activation_hook(__FILE__, array($contactUsInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($contactUsInstance, 'deactivate'));