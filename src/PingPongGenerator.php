<?php
    class PingPongGenerator{
        function makeOutputArray($input_number)
        {
            $incrementor = 0;
            $outputArray = array();
            while($incrementor < $input_number){
                $incrementor ++;
                if($incrementor % 3 == 0)
                {
                    array_push($outputArray , "ping");
                } else {
                    array_push($outputArray , $incrementor);
                }
            }
            return implode(",",$outputArray);
        }
    }
?>
