<?php
	test('rotate should return a new vector that has been rotated by the transformation matrix', 'testMatrixRotate01');
	function testMatrixRotate01() {
		$a = NumbersPHP\Matrix::rotate(array(array(0), array(1)), 90, 'clockwise');
		return NumbersPHP\Basic::numbersEqual($a[0][0], 1) && NumbersPHP\Basic::numbersEqual($a[1][0], 0);
	}
	
	test('rotate should throw an error if a vector larger than two is given for rotation', 'testMatrixRotate02');
	function testMatrixRotate02() {
		try {
			NumbersPHP\Matrix::rotate(array(array(0), array(1), array(2)), 90, 'clockwise');
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Only two dimensional operations are supported at this time';
		}
		return false;
	}