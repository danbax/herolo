<?php

 /**
  * #Filter - removes all items that are not integers from the array
  * @param array $arr
  */
 function  filterNumbersFromArray (array &$arr)  :  void
 {
        $sizeOfArray = sizeOf($arr);
        for($i=0; $i<$sizeOfArray; $i++){
            if(!is_integer($arr[$i])){
                unset($arr[$i]);
            }
        }
 }

 /** execute */
$arr = [1,  'a' ,  'b' ,  2];
filterNumbersFromArray ($arr) ;
print_r ( array_values ( $arr ) ) ;
