<?php

/////index array

$names = ["sola", "paul", "tope", "ade"];

$arrcount = count($names);

for ($i=0; $i < $arrcount ; $i++) { 
    
    echo $names[$i]. " is a list in the array";
    echo "<br>";

}


//// assocaitive array

$assocaitive = [
    "name" => "sola",
    "age" => 18,
    "location" => "Ondo State",
];


foreach ($assocaitive as $person => $value) {
    echo $person . " = " . $value . "<br>";
}

////// multi dimension array

$multi = [
    ["sola", "paul", "tope", "ade"],
    [18, 20, 32, 40],
    ["Ondo State", "Lagos State", "Oyo State", "Osun State"]
];



for ($i=0; $i < 3 ; $i++) { 
    for ($x=0; $x < 4; $x++) { 
        echo $multi[$i][$x] . "<br>";
    }
}










