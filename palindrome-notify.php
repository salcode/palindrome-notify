<?php
/**
 * Plugin Name:       Palindrome Notify
 * Plugin URI:        https://github.com/salcode/palindrome-notify
 * Description:       Show a notification on a post when the title is a palindrome.
 * Version:           0.1.0
 * Requires at least: 6.5
 * Requires PHP:      7.2
 * Author:            Sal Ferrarello
 * Author URI:        https://salferrarello.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       palindrome-notify
 * Domain Path:       /languages
 */

namespace salcode\PalindromeNotify;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
