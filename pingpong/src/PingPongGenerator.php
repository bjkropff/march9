<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $pingPong = array();

            for( $i = 1; $i <= $input_number; $i++)
            { if ($i % 15 == 0) {
                array_push($pingPong, "Ping-Pong!");
            } elseif ($i % 5 == 0)
                {
                    array_push($pingPong, "Pong!");
                }
                else {
                    array_push($pingPong, $i);
                }
            }
            return $pingPong;
        }
    }

?>
