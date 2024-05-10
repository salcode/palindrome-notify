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
	return $content;
}
add_filter( 'the_content', __NAMESPACE__ . '\palindrome_tests', 12 );
