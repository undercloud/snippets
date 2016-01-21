<?php

	if (false == function_exists('array_bound')) {
		function array_bound(array $array, array $keys = array(), $reverse = false) {
			$bound = array();
			foreach($array as $key => $value){
				if($reverse != in_array($key,$keys)) {
					$bound[$key] = $value;
				}
			}
			return $bound;
		}
	}

?>
