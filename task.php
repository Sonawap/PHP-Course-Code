<?php
function airtimeGenerator(){
    $cards = [];
    $counter = 0;
    while ($counter < 200){
        $pin =  rand(100000000000,999999999999);
        for ($i=0; $i <= count($cards); $i++) { 

            if (!in_array($pin,$cards)) {

                $cards[$counter] = $pin;
                $counter++;
            } 
            
        }

    }

    for ($j=0; $j < count($cards); $j++) { 
        echo $cards[$j] . "<br>";
    }
}
airtimeGenerator();