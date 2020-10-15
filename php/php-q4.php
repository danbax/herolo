<?php
/**
 * return the sum of all elements in the array and, additionally, prepend that sum to the original array.
 * @param array $array
 * @return int sum of all integers
 */
function prependSum (array &$array) : int
{
    $sum = array_sum( $array ) ;
    array_unshift ($array, $sum) ;

    return $sum;
}

/** execute */
$array = array (1 , 2, 3 ) ;
$sum = prependSum($array);
echo ( $sum.PHP_EOL );
print_r ( array_values ( $array ) ) ;
