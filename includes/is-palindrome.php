<?php

namespace salcode\PalindromeNotify;

/**
 * Is Palindrome
 *
 * @param string $str The string to check if it is a palindrome.
 * @return bool True if the string is a palindrome.
 */
function is_palindrome( $str ) {
	return $str === strrev( $str );
}
