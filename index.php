<?php
/*
TODO: 
 - bug with rest of same element arrays.
 -use an enum and not a boolean?
 - Enter numbers by terminal.
 - Do it without in array?
 - optimize array search having a reference array?
 - This should be in a class :)
*/


function operateArrays(array $array1, array $array2, bool $option): array {
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

function restArrays(array $array1, array $array2): array {
	$intersection_array = intersectArrays($array1,$array2);
	foreach($intersection_array as $element) {
		$search_array1 = array_search($element, $array1);
		$search_array2 = array_search($element, $array2);
		if($search_array1) array_splice($array1,$search_array1);
		if($search_array2) array_splice($array2,$search_array2);
	}
	return array_merge($array1,$array2);
}

$array1 = [7,2,9,12,5];
$array2 = [7,2,9,12,5];

//var_dump(intersectArrays($array1, $array2));
var_dump(restArrays($array2, $array1));

?>