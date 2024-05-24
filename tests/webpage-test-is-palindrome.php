<?php

namespace salcode\PalindromeNotify;

/**
 * Palindrome Tests
 *
 * @param string $content The content of the post.
 * @return string HTML output of palindrome tests.
 */
function palindrome_tests( $content ) {
	$content = "palindrome_tests()<br>\n";
	$content .= test_is_palindrome( 'racecar', true );
	$content .= test_is_palindrome( 'salcode', false );
	return $content;
}
add_filter( 'the_content', __NAMESPACE__ . '\palindrome_tests', 12 );

/**
 * Test is_palindrome()
 *
 * @param string $str      The string to test.
 * @param bool   $expected The expected result.
 */
function test_is_palindrome( $str, $expected ) {

	if ( $expected === is_palindrome( $str ) ) {
		return '✅ ' . $str . "<br>\n";
	} else {
		return '❌ ' . $str . "<br>\n";
	}
}
