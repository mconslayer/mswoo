<?php
/*
	Plugin Name: MS Woo
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.1
	Author: Stepclick
*/
if( ! class_exists( 'Mswoo_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Mswoo_Updater( __FILE__ );
$updater->set_username( 'mconslayer' );
$updater->set_repository( 'mswoo' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
