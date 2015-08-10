<?php 
	require_once "src/PingPong.php";
	
	class PingPongTest extends PHPUnit_Framework_TestCase
	{
		function testPing()
		{
			//Arrange
			$test = new PingPong;
			$input = 15;
			
			//Act
			$result = $test->makePingPong($input);
			
			$pingPongTest = array(1, 2, "ping", 4, 5, "ping", 7, 8, "ping", 10,
				                  11, "ping", 13, 14, "ping");
			//Assert
			$this->assertEquals($pingPongTest, $result);
		}
		
		function testPong()
		{
			//Arrange
			$test = new PingPong;
			$input = 15;
			
			//Act
			$result = $test->makePingPong($input);
			
			$pingPongTest = array(1, 2, 3, 4, "pong", 6, 7, 8, 9, "pong",
				                  11, 12, 13, 14, "pong");
			//Assert
			$this->assertEquals($pingPongTest, $result);
		}
		
		function testPingPong()
		{
			//Arrange
			$test = new PingPong;
			$input = 15;
			
			//Act
			$result = $test->makePingPong($input);
			
			$pingPongTest = array(1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong",
				                  11, "ping", 13, 14, "ping-pong");
			//Assert
			$this->assertEquals($pingPongTest, $result);
		}
	}
?>