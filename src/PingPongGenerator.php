<?php
    class PingPongGenerator{
        function makeOutputArray($input_number)
        {
            $incrementor = 0;
            $outputArray = array();
            while($incrementor < $input_number){
                $incrementor ++;
                array_push($outputArray , $incrementor);
            }

            return implode(",",$outputArray);
        }
    }
?>
