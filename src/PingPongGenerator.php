<?php
    class PingPongGenerator{

        static function makeOutputArray($input_number)
        {
            $_SESSION['results'] = array();
            $incrementor = 0;
            $outputArray = array();
            while($incrementor < $input_number){
                $incrementor ++;
                if($incrementor % 15 == 0)
                {
                    array_push($outputArray, "pingpong");
                }
                elseif($incrementor % 3 == 0)
                {
                    array_push($outputArray , "ping");
                }
                elseif($incrementor % 5 == 0) {
                    array_push($outputArray , "pong");
                }
                else {
                    array_push($outputArray , $incrementor);
                }
            }
            return $outputArray;
        }
    }
?>
