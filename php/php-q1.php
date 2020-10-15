<?php
/**
 * When passed two array of names, it will return an array containing the names that appear in either or both arrays.
 * The returned array should have no duplicates.
 * @param $array1
 * @param $array2
 * @return array
 */
function unieq_names($array1,$array2){
    return array_unique(array_merge($array1, $array2));
}

/** execute */

$rustart = getrusage();

/** initialize function varaibles */
$array1 = ["Dan","Ron","Boris"];
$array2 = ["Boris","Dan","Ruth"];

$result = unieq_names($array1,$array2);

print_r($result);
?>
