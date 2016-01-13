<?php

	if (false == function_exists('array_first_key')) {
		function array_first_key(array $array) {
			$array = array_keys($array);
			
			return reset($array);
		}
	}
	
?>