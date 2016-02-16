<?php

	require_once 'src/Coin.php';

	class CoinTest extends PHPUnit_Framework_TestCase
	{

		function test_makeChange()
		{
		//Arrange
		$test_makeChange = new Coin;
		$input = 43;

		//Act
		$result = $test_makeChange->makeChange($input);

		//Assert
		$this->assertEquals(array(1, 1, 1, 3), $result);
		}
	}

?>
