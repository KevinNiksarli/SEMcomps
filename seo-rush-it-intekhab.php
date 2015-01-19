<?php
    /**
 * @package intekhab-mypixel
 */
 ?>
<?php
/*
 Plugin Name: SEMcomps
 Plugin URI: http://www.giraffeco.com
 Description: SEMcomps is the best way to quickly view and download data from your SEMrush account. You can even bulk lookup domains and keywords, which isn't possible through the SEMrush.com interface. To get started: 1) Click the "Activate" link to the left of this description, 2) Sign up for SEMrush or log into your SEMrush account to get your SEMrush API key, and 3) Go to your SEMcomps configuration page, and save your API key.
 Version: 1.0
 Author: Giraffeco
 Author URI: http://www.giraffeco.com
 License: GPL2
 */
?>
<?php



global $rush_db_version;
$rush_db_version = '1.0';

function mesh_install() {
    global $wpdb;
    global $rush_db_version;

    $table_name = $wpdb->prefix . 'rushlog';
   // $table_to = $wpdb->prefix . 'rush_log';
    
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        domain varchar(200) NOT NULL,
        data longtext NOT NULL,
        UNIQUE KEY id (id)
    ) $charset_collate;";
    
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
   // dbDelta( $sql2 );

    add_option( 'rush_db_version', $rush_db_version );

}

function chat_install_data() {
    // initial data
    add_option("rush_api",0);
    add_option("rush_api_default",0);
}
register_activation_hook( __FILE__, 'mesh_install' );
//end of installing
 ?>
<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

 ?>

<?php
//1
function rush_plugin_menu() {
   // add_options_page('Settings Chat it!', 'Chat Options', 'manage_options', 'chat-plugin-menu', 'chat_plugin_options');
    //add_menu_page('Settings SEMcomps','SEMcomps','manage_options','rush-plugin-menu','rush_plugin_options',null,3); 
     add_menu_page('SEMcomps','SEMcomps','manage_options','semcomps','sem_plugin_organic',null,3); 
     add_submenu_page('semcomps','SEMcomps','Organic Research','manage_options','semcomps','sem_plugin_organic' );
   // add_submenu_page('rush-plugin-menu1','Organic Search','manage_options','rush_console_menu', 'rush_console_menu'); 
   add_submenu_page('semcomps', 'Settings', 'Settings', 'manage_options','sem_settings', 'sem_settings');
   // add_submenu_page('rush-plugin-menu', 'Preferences', 'Settings', 'manage_options','rush_console_page', 'rush_console_page');
}

//2
add_action('admin_menu', 'rush_plugin_menu');
function sem_plugin_organic() {
    include ('admin/rush-plugin-admin.php');
}
function sem_settings(){
    include("admin/rush-console.php");
    
}
function rush_console_menu(){
    include("admin/rush-plugin-admin.php");
    
}
?>

<?php 
//Adding sub menu to it
//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function); 


?>

    <?php
    //for addin the chat div
function chat_on() {
                
        }
?>
<?php
    function checkuser(){
      
               
    }

 ?>
 <?php
 function generateRandomString($length = 15) {
      
    }
  ?>
<?php
//setting script for admin
function chat_admin_plugin_scripts() {
	 wp_enqueue_script('rush_front_js', plugin_dir_url(__FILE__) . 'js/jquery.js', FALSE, FALSE, TRUE);
        wp_enqueue_script('rush_plugin_bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', FALSE, FALSE, TRUE);
		 wp_enqueue_script('chat_plugin_cus', plugin_dir_url(__FILE__) . 'js/cus.js', FALSE, FALSE, TRUE);
         wp_enqueue_script('i_plugin_cus', plugin_dir_url(__FILE__) . 'js/jquery.tablesorter.min.js', FALSE, FALSE, TRUE);
		 wp_enqueue_script('k_plugin_cus', plugin_dir_url(__FILE__) . 'js/jquery.tablesorter.widgets.min.js', FALSE, FALSE, TRUE);
		  wp_enqueue_script('s_plugin_cus', plugin_dir_url(__FILE__) . 'js/jquery.sparkline.js', FALSE, FALSE, TRUE);
         wp_enqueue_script('rush_plugin_cus', plugin_dir_url(__FILE__) . 'js/jquery.peity.min.js', FALSE, FALSE, TRUE);
           wp_enqueue_script('a_plugin_cus', plugin_dir_url(__FILE__) . 'export/tableExport.js', FALSE, FALSE, TRUE);
            wp_enqueue_script('b_rush_plugin_cus', plugin_dir_url(__FILE__) . 'export/jquery.base64.js', FALSE, FALSE, TRUE);
            wp_enqueue_script('c_rush_plugin_cus', plugin_dir_url(__FILE__) . 'export/html2canvas.js', FALSE, FALSE, TRUE);
             wp_enqueue_script('d_rush_plugin_cus', plugin_dir_url(__FILE__) . 'export/jspdf/libs/sprintf.js', FALSE, FALSE, TRUE);
               wp_enqueue_script('e_rush_plugin_cus', plugin_dir_url(__FILE__) . 'export/jspdf/jspdf.js', FALSE, FALSE, TRUE);
                 wp_enqueue_script('f_rush_plugin_cus', plugin_dir_url(__FILE__) . 'export/jspdf/libs/base64.js', FALSE, FALSE, TRUE);
                 wp_enqueue_script('j_rush_plugin_cus', plugin_dir_url(__FILE__) . 'js/footable.js', FALSE, FALSE, TRUE);
				 wp_enqueue_script('fs_rush_plugin_cus', plugin_dir_url(__FILE__) . 'js/footable.sort.js', FALSE, FALSE, TRUE);
				 wp_enqueue_script('ff_rush_plugin_cus', plugin_dir_url(__FILE__) . 'js/footable.filter.js', FALSE, FALSE, TRUE);
             
             
        wp_register_style('rush-boot-style', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css');
        wp_enqueue_style('rush-boot-style');
		wp_register_style('rush-font-style', plugin_dir_url(__FILE__) . 'css/font-awesome-4.1.0/css/font-awesome.min.css');
        wp_enqueue_style('rush-font-style');
        wp_register_style('rush-core', plugin_dir_url(__FILE__) . 'css/footable.core.css');
        wp_enqueue_style('rush-core');
        wp_register_style('rush-metro', plugin_dir_url(__FILE__) . 'css/footable.standalone.min.css');
        wp_enqueue_style('rush-metro');
		  wp_register_style('rush-table', plugin_dir_url(__FILE__) . 'css/theme.default.css');
        wp_enqueue_style('rush-table');
       
}

function chat_plugin_scripts() {
  
}
add_action('admin_enqueue_scripts', 'chat_admin_plugin_scripts');
add_action('wp_enqueue_scripts', 'chat_plugin_scripts');
//end of setting script

add_action('wp_ajax_chat_first',"chat_first");
add_action('wp_ajax_nopriv_chat_first',"chat_first");
function chat_first(){
  
}
 ?>
