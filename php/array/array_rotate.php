<?php
	
	if (false == function_exists('array_rotate')) {
		function array_rotate(array $array) {
			reset($array);
			list($key, $value) = each($array);
			array_shift($array);
			$array[$key] = $value;

			return $array;
		}
	}

?>