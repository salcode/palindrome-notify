<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function salcode\PalindromeNotify\is_palindrome;

class isPalindromeTest extends TestCase {

	/**
	 * Test is_palindrome()
	 *
	 * @param string $str The string to test if it is a palindrome.
	 * @param bool   $expected The expected result (true or false).
	 */
	#[DataProvider('isPalindromeProvider')]
    public function testIsPalindrome( $str, $expected ) {
        $this->assertEquals(
            $expected,
			is_palindrome( $str ),
        );
    }

	public static function isPalindromeProvider() {
		return [
			[ 'racecar', true ],
		];
	}
}
