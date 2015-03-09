<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_allnumbers()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,3,4), $result);
        }

        function test_generatePingPongArray_16()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 16;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,"Ping-Pong",16), $result);

        }

    }


?>
