<?php

class ArrayOperation {
	
	public function __construct(private array $array1, private array $array2){}

	public function operate(ArrayOperationOption $option): array {
		if($option === ArrayOperationOption::INTERSECTION) return $this->intersect($this->array1,$this->array2);
		else return $this->rest($this->array1, $this->array2); 
	}

	private function intersect(array $array1, array $array2): array {
		$intersection_array = [];
		foreach($array1 as $element) {
			if(in_array($element,$array2)) $intersection_array[] = $element;
		}
		return $intersection_array;
	}

	private function rest(array $array1, array $array2): array {
		$intersection_array = $this->intersect($array1,$array2);
		foreach($intersection_array as $element) {
			$search_array1 = array_search($element, $array1);
			$search_array2 = array_search($element, $array2);
			if($search_array1 !== false) array_splice($array1,$search_array1,1);
			if($search_array2 !== false) array_splice($array2,$search_array2,1);
		}
		return array_unique(array_merge($array1,$array2));
	}
}

?>