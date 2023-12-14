<?php
/*
TODO: -use an enum and not a boolean?
 - Enter numbers by terminal.
 - Do it without in array?
 - optimize array search having a reference array?
*/


function operateArrays(array $array1, array $array2, boolean $option): array {
	if($option) return intersectArrays($array1,$array2);
	else return restArrays($array1, $array2); 
}

function intersectArrays(array $array1, array $array2): array {
	$intersection_array = [];
	foreach($array1 as $element) {
		if(in_array($element,$array2)) $intersection_array[] = $element;
	}
	return $intersection_array;
}

$array1 = [7,2,9,12,5];
$array2 = [4,2,6,1,2];

var_dump(intersectArrays($array1, $array2));

?>