<?php
	test('deepCopy should create a deep copy of a matrix', 'testMatrixDeepCopy');
	function testMatrixDeepCopy() {
		$matrix = array(array(1, 2),
						array(2, 1));
		$copy = NumbersPHP\Matrix::deepCopy($matrix);
		if($copy != $matrix)
			return false;
		
		try {
			NumbersPHP\Matrix::deepCopy(array(1, 2));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Input cannot be a vector.';
		}
		return false;
	}