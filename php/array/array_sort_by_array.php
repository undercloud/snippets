<?php

	if (false == function_exists('array_sort_by_array')) {
		function array_sort_by_array(array $array, array $sorter){
			$ordered = array();
			foreach($sorter as $key) {
				if(array_key_exists($key,$array)) {
					$ordered[$key] = $array[$key];
					unset($array[$key]);
				}
			}
			
			return $ordered + $array;
		}
	}

?>
