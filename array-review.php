//Part 1 - James McPherson
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

//Part 2- James McPherson

$flavors = array("grasshopper"=>"The Grasshopper",
    "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut",
    "caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet",
    "lemon"=>"",
    "tiramisu"=>"Tiramisu");

foreach ($flavors as $value){
    echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"grasshopper\">".$value."<br>";

}



function sortAndPrint($arrayToSort){
    sort($arrayToSort);
    foreach($arrayToSort as $i){
        echo $i." ";
    }
    echo "<br>";



}

?>