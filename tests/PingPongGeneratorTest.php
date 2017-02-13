<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeNumberArray()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            $result = $test_PingPongGenerator->makeOutputArray($input);
            $testArray = [1,2];
            $this->assertEquals($testArray, $result);
        }

        function test_makeArrayWithPings()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->makeOutputArray($input);
            $testArray =[1,2,"ping"];
            $this->assertEquals($testArray, $result);

        }

        function test_makeArrayWithPongs()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            $result = $test_PingPongGenerator->makeOutputArray($input);
            $testArray = [1,2,"ping",4,"pong"];
            $this->assertEquals($testArray, $result);

        }

        function test_makeArrayWithPingPongs()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            $result = $test_PingPongGenerator->makeOutputArray($input);
            $testArray = [1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"pingpong"];
            $this->assertEquals($testArray, $result);

        }


    }
?>
