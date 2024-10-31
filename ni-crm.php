<?php
/*
Plugin Name: Ni CRM Lead
Description: Simple lead create plugin for WordPress. It helps maintain customer or vendor information with follow-up history. Ni CRM Lead is a plugin for WordPress that allows you to store customer inquiries for different services and products.
Version: 1.3.0
Author: anzia
Author URI: http://naziinfotech.com/
Plugin URI: https://wordpress.org/plugins/ni-crm-lead/
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/agpl-3.0.html
Requires at least: 4.7
Tested up to: 6.5.2
WC requires at least: 3.0.0
WC tested up to: 8.8.2
Last Updated Date: 29-April-2024
Requires PHP: 7.0

*/
if ( !class_exists( 'Ni_Lead_Init' ) ) {
	class Ni_Lead_Init {
		 function __construct() {
			 if ( is_admin() ) {
			 	include_once("include/ni-lead.php");
				$obj =new  Ni_Lead();
			 }
		}
	}
	$obj  = new Ni_Lead_Init();
}

// Activation hook
register_activation_hook(__FILE__, 'ni_lead_activation');

function ni_lead_activation() {
	include_once("include/ni-activation.php");
    $activation = new Ni_Activation();
    $activation->create_follow_up_table();
}
?>