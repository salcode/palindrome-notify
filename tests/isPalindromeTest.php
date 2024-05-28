<?php

use PHPUnit\Framework\TestCase;

use function salcode\PalindromeNotify\is_palindrome;

class isPalindromeTest extends TestCase {
    public function testIsPalindrome() {
		$str = 'racecar';
		$expected = true;
        $this->assertEquals(
            $expected,
			is_palindrome( $str ),
        );
    }
}
