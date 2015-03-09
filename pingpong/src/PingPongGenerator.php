<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $pingPong = array();

            for( $i = 1; $i <= $input_number; $i++)
            {
            array_push($pingPong, $i);

            }
            return $pingPong;
        }
    }

?>
