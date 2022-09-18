<?php
$string_array = array("first element", "second element");
echo implode(", ", $string_array);

Echo "<br>";
// adding 
$string_array = ["first element", "second element", "third element"];
 
$string_array[0] = "NEW! different first element";
 
echo $string_array[0]; // Prints: NEW! different first element"
Echo "<br>";

// pop
$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]
$popped = array_pop($my_array); 
// $popped is "tac"
// $my_array is now ["tic"]

// push
$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe"); 
echo $num_added; // Prints: 4
Echo "<br>";
echo implode(", ", $new_array); // Prints: eeny, meeny, miny, moe 
Echo "<br>";

//asce
$favorites = ["favorite_food"=>"pizza", "favorite_place"=>"my dreams", "FAVORITE_CASE"=>"CAPS", "favorite_person"=>"myself"];
 
echo  $favorites["favorite" . "_" . "food"]; 
// Prints: pizza
Echo "<br>";
$key =  "favorite_place";
echo  $favorites[$key];  
// Prints: my dreams
Echo "<br>";
echo $favorites[strtoupper("favorite_case")];
// Prints: CAPS
Echo "<br>";
// dimens
$myarray = array(
    array(
        array(1, 2),
        array(3, 4),
    ),
    array(
        array(5, 6),
        array(7, 8),
    ),
);
Echo "<br>";     
// Display the array information
print_r($myarray);
Echo "<br>";
?>


