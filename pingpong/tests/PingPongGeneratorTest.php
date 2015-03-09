<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_allnumbers()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "";

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals("", $result);
        }



    }


?>
