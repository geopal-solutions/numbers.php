<?php
	test('gcd should return the greatest common denominator of two integers', 'testBasicGcd');
	function testBasicGcd() {
		if(NumbersPHP\Basic::gcd(1254, 5298) != 6)
			return false;
		if(NumbersPHP\Basic::gcd(78699786, 78978965) != 1)
			return false;
		return true;
	}