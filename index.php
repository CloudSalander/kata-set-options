<?php
/*
TODO: 
 - Enter numbers by terminal.
 - Do it without in array?
 - optimize array search for intersection calc having a reference array?
 - Refactor on restArrays foreach? 
*/

include('class/ArrayOperation.php');
include('class/ArrayOperationOption.php');

$array1 = [2,3,8];
$array2 = [2,3,7,8,7];

$array_operation = new ArrayOperation($array1, $array2);

print_r($array_operation->operate(ArrayOperationOption::INTERSECTION));
print_r($array_operation->operate(ArrayOperationOption::DIFFERENCE));

?>