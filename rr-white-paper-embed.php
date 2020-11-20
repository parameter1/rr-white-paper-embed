<?php
/**
 * Plugin Name: White Paper EMBED
 * Plugin URI: https://github.com/parameter1/rr-white-paper-embed
 * Description: A Wordpress plugin for presenting RR Whitepapers in an embeddable format
 * Version: 0.0.0
 * Author: Parameter1 LLC
 * Author URI: https://parameter1.com
 */

require_once(__DIR__ . '/src/WhitePaperEmbed.php');

$wpEmbed = new WhitePaperEmbed();

add_action('plugins_loaded', array($wpEmbed, 'load'));

register_activation_hook(__FILE__ , 'flush_rewrite_rules');
