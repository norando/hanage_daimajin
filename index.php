<?php
/*
 * Plugin Name: hanage_daimajin
 * Author: norando
 * Author URI: https://norando.net
 * Description: プラグインのパスなどを取得する関数の確認用プラグイン
 */

echo 'plugin_dir_path( __FILE__ ) : ';
echo plugin_dir_path( __FILE__ );

echo '<br>plugin_dir_url( __FILE__ ) : ';
echo plugin_dir_url( __FILE__ );

echo '<br>plugins_url( __FILE__ ) : ';
echo plugins_url( __FILE__ );

require_once plugin_dir_path( __FILE__ ) . '/test/test.php';
