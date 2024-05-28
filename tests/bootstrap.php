<?php
/**
 * Because we are not running in the context of WordPress, none of our
 * files are loaded by default.
 *
 * This bootstrap file loads the is-palindrome.php file so we can use
 * the salcode\PalindromeNotify\is_palindrome() function.
 */

include __DIR__ . '/../includes/is-palindrome.php';
