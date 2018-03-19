<?php
/*
Plugin Name:  VaultPress Disable Firewall
Plugin URI:   https://github.com/amimoto-ami/disable-vaultpress-firewall
Description:  Disable reverse proxy for VaultPress
Version:      1.0.0
Author:       AMIMOTO
Author URI:   http://amimoto-ami.com
License:      MIT License
*/

/**
 * Disable reverse proxy on VaultPress Proxy
 * Ref: https://help.vaultpress.com/connection-issues/
 */

if ( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
    $forwarded_ips = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
    $_SERVER['REMOTE_ADDR'] = $forwarded_ips[0];
    unset( $forwarded_ips );
}