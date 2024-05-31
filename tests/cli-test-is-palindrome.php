<?php

namespace salcode\PalindromeNotify;

include __DIR__ . '/../includes/is-palindrome.php';

/**
 * Palindrome Tests
 *
 * @return string HTML output of palindrome tests.
 */
function palindrome_tests() {
	test_is_palindrome( 'racecar', true );
	test_is_palindrome( 'salcode', false );
	test_is_palindrome( 'Anna', true );
	test_is_palindrome( 'Never odd or even', true );
	test_is_palindrome( "Go hang a salami, I'm a lasagna hog.", true );
	test_is_palindrome( "Was it a car or a cat I saw?", true );
}
palindrome_tests();

/**
 * Test is_palindrome()
 *
 * @param string $str      The string to test.
 * @param bool   $expected The expected result.
 */
function test_is_palindrome( $str, $expected ) {

	if ( $expected === is_palindrome( $str ) ) {
		echo '✅ ' . $str . "\n";
	} else {
		echo '❌ ' . $str . "\n";
	}
}
