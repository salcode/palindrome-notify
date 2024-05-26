<?php

namespace salcode\PalindromeNotify;

/**
 * Is Palindrome
 *
 * @param string $str The string to check if it is a palindrome.
 * @return bool True if the string is a palindrome.
 */
function is_palindrome( $str ) {
	$str_to_compare = strtolower(
		preg_replace('/[^A-Za-z0-9]/', '', $str)
	);
	return $str_to_compare === strrev( $str_to_compare );
}
