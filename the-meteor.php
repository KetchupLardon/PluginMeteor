<?php
/*
@package MeteorPlugin
Plugin Name: The Meteor
Description: Le plugin météo explosif.
Version: 1.0
Author: SmashedPotato
Author URI: http://www.lespatatessontcuites.com
*/

defined('ABSPATH') or die ('bouffon');

class meteorPlugin{
    public $plugin;

    function __construct(){
        $this->plugin = plugin_basename(__FILE__);
    }

    function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));

        add_action('admin_menu', array($this, 'add_admin_pages'));

        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_links'));
    }
    
    public function settings_links($links){
        $settings_links = '<a href="admin.php?page=meteor_plugin">Settings</a>';
        array_push($links, $settings_links);
        return $links;
    }

    public function add_admin_pages(){
        add_menu_page('MeteorPlugin', 'Meteor', 'manage_options', 'meteor_plugin', array( $this, 'admin_index'), 'dashicons-list-view', 110);
    }

    public function admin_index(){
        require_once plugin_dir_path(__FILE__). 'Template/admin.php';
    }

    function custom_post_type(){
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }

   
    function activate(){
        require_once plugin_dir_path(__FILE__). '/Inc/meteor-activation.php';
        MeteorPluginActivation::activate();
        $this->custom_post_type();
    }

    function deactivate(){
        require_once plugin_dir_path(__FILE__). '/Inc/meteor-deactivation.php';
        MeteorPluginDeactivation::deactivate();
    }

    function enqueue(){
        wp_enqueue_style('mypluginstyle', plugins_url('/Assets/meteorstyle.css', __FILE__));
        wp_enqueue_script('mypluginscript', plugins_url('/Assets/meteorscript.js', __FILE__));
    }

}

if(class_exists('meteorPlugin')){
    $meteorPlugin = new meteorPlugin;
    $meteorPlugin->register();
}

register_activation_hook(__FILE__, array($meteorPlugin, 'activate'));

register_deactivation_hook(__FILE__, array($meteorPlugin, 'deactivate'));
?>