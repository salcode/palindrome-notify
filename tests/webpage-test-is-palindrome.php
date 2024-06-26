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
	$content .= test_is_palindrome( 'Anna', true );
	$content .= test_is_palindrome( 'Never odd or even', true );
	$content .= test_is_palindrome( "Go hang a salami, I'm a lasagna hog.", true );
	$content .= test_is_palindrome( "Was it a car or a cat I saw?", true );
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
