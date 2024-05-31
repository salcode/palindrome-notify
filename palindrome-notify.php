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

include __DIR__ . '/includes/is-palindrome.php';

/**
 * Prepend Palindrome Notification
 *
 * Prepend Palindrome Notification when title is a palindrome.
 *
 * @param string $content The post content.
 * @return string The post content possibly prepending a palindrome notification.
 */
function palindrome_notify( $content ) {
	if ( ! is_single() ) {
		return $content;
	}
	if ( ! is_palindrome( get_the_title() ) ) {
		return $content;
	}
	return
		'<div class="alert alert-success">Palindrome!</div> '
		. $content;
}
add_filter( 'the_content', __NAMESPACE__ . '\palindrome_notify' );
