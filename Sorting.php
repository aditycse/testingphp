<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Sorting {
	function selection_sort($array=array()) {
		if(!empty($array)) {
			$count = count($array);
			for($i=0;$i<$count-1;$i++){
				$minVal = $i;
				for($j=$i+1;$j<$count;$j++){
					if($array[$minVal]>$array[$j]) {
						$minVal = $j;
					}
				}
				if($minVal !=$i){
					self::swap($minVal,$i,&$array);
				}
			}
			return $array;
		} else {
			return array();
		}
	}
function insertion_sort($array=array()) {
		if(!empty($array)) {
			$count = count($array);
			for($i=1;$i<$count;$i++){
				$minVal = $i;
				for($j=$i-1;$j>=0;$j--){
					if($array[$minVal]<$array[$j]) {
						$minVal = $j;
						self::swap($minVal,$i,&$array);
					}
				}
				print_r($array);
			}
			return $array;
		} else {
			return array();
		}
	}

	function swap($i, $j, $array = array()) {
		$val = $array[$i];
		$array[$i] = $array[$j];
		$array[$j] = $val;
	}

}
$Obj = new Sorting();
$array = array(-56,1,-1,56899,5899,65,5,8,4,45,12,9);
//$value = $Obj->selection_sort($array);
$value = $Obj->insertion_sort($array);
print_r($value);