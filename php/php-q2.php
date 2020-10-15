<?php
/**
 * function that finds, efficiently with respect to time used, all numbers that occur exactly once in the input array.
 * @param array $numbers
 * @return array
 */
function findUniqueNumbers(array $numbers): array
{
    $uniqieNumbers = [];
    /** @var  $counters - array of counters for $numbers elements */
    $counters = [];
    foreach($numbers as $number){
        if(isset($counters[$number])){
            $counters[$number] ++;
        }else{
            $counters[$number] = 1;
        }
    }

    /**
     * @var  $number - element of $numbers array
     * @var  $counter - amount of occurrences
     */
    foreach($counters as $number=>$counter){
        if($counter == 1){
            $uniqieNumbers[] = $number;
        }
    }

    return $uniqieNumbers;
}

/** execute */
print_r(findUniqueNumbers( [1, 2, 1, 3] ) ) ;
