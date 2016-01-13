<?php

	if (false == function_exists('array_initial')) {
		function array_initial(array $array, $n = 1) {
			if (0 == $n) {
				return $array;
			}
		
			return array_slice($array,0, (-1 * $n));
		}
	}

?>