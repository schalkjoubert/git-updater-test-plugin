<?php
/*
Plugin Name: Example plugin
Description: We will demonstrate how to make it git-updater compatible
Version:     1.0.1
Author:      Andy & Maciek
License:     GPL2 etc
GitHub Plugin URI: schalkjoubert/git-updater-test-plugin
Primary Branch: main
Release Asset: true
*/

add_action( 'admin_notices', 'test_print_notice', 0, 0 );
function set_text() {
	return 'test_1';
}

function test_print_notice() {
	printf(
		'<div class="notice notice-error"><p>%1$s</p></div>',
		set_text()
	);
}
