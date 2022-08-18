<?php
/*
Plugin Name: WPPAY
Plugin URI: http://wppay.net
Description: Wordpress 免登录付费查看隐藏内容/下载资源
Version: 1.1
Author: 模板兔
Author URI: http://www.mobantu.com
*/

define('WPPAY_VERSION', '1.1');
define('WPPAY_URL', plugins_url('', __FILE__));
define('WPPAY_PATH', dirname( __FILE__ ));
define('WPPAY_ADMIN_URL', admin_url());

/**
 * 定义数据库
 */
global $wpdb, $wppay_table_name;
$wppay_table_name = isset($table_prefix) ? ($table_prefix . 'wppay') : ($wpdb->prefix . 'wppay');

/**
 * 加载类
 */
require WPPAY_PATH . '/include/wppay.class.php';
require WPPAY_PATH . '/include/wppay.functions.php';
require WPPAY_PATH . '/include/wppay.metabox.php';

/**
 * 插件激活,新建数据库
 */
register_activation_hook(__FILE__, 'wppay_install');

/**
 * 插件停用, 删除数据库
 */
//register_deactivation_hook(__FILE__, 'wppay_uninstall');
