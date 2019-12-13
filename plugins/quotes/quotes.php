<?php
if (!defined('ABSPATH')) exit;
/*
Plugin Name: Quotes
Plugin URI: https://galyavyankova.github.io/Chess/
description: Quotes
Version: 0.0.1
Author: Galya Yankova
*/

class QuotesPlugin {
    public function __construct() {
        add_action('admin_menu', array($this, 'adminMenu'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
        add_action('admin_post', array($this, 'save'));
        add_shortcode('quotes-plugin', array($this, 'shortcodeAction'));
}

public function adminMenu() {
    add_options_page(
        'Quotes Page',
        'Quotes',
        'manage_options',
        'quotes-admin-page',
    array($this, 'renderPage')
    );
}

public function renderPage(){
    include_once 'views/admin-page.php';
}

public function enqueueScripts(){
    wp_enqueue_style('quotes-plugin-styles', plugins_url('assets/styles.css', __FILE__));
}

public function shortcodeAction(){
    ob_start();
    include_once 'views/frontend-page.php';
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

public function save() {
    if (!($this->has_valid_nonce() && current_user_can('manage_options'))) {
    echo 'Not a valid nonce';
}

if (isset($_POST['quotes-admin-form'])) {
    $data = array(
        'image' => $_POST['image'],
        'destination' => sanitize_text_field($_POST['destination']),
        'info' => sanitize_text_field($_POST['info']),
    );
    update_option('quotes-data', json_encode($data));
}
$this->redirect();
}

public function getOption($name){
    $data = get_option('quotes-data');
    if (empty($data)) {
        return false;
    }
    $data = json_decode($data);
    if (isset($data->$name)) {
        return stripslashes($data->$name);
    }
    return false;
}

private function has_valid_nonce(){
    if (!isset($_POST['quotes-message'])) {
        return false;
    }
    $field = wp_unslash($_POST['quotes-message']);
    $action = 'quotes-save';
    return wp_verify_nonce($field, $action);
}

private function redirect(){
    if (!isset($_POST['_wp_http_referer'])) {
    $_POST['_wp_http_referer'] = wp_login_url();
}
    $url = sanitize_text_field(
    wp_unslash($_POST['_wp_http_referer'])
);
    wp_safe_redirect($url);
    exit;
}
}

$quotesPlugin = new QuotesPlugin();

