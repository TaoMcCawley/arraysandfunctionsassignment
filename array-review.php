<?php

$animals = array("panda", "alpaca", "boa");
sortAndPrint($animals);


echo "adding: goat <br>";
if(!in_array("goat", $arrayToSort)){
    array_push($animals, "goat");
}
sortAndPrint($animals);

echo "adding: boa <br>";

if(!in_array("boa", $animals)){
    array_push($animals, "boa");
}
sortAndPrint($animals);



function sortAndPrint($arrayToSort){
    sort($arrayToSort);
    foreach($arrayToSort as $i){
        echo $i." ";
    }
    echo "<br>";



}

?>