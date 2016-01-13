<?php

	if (false == function_exists('array_last_key')) {
		function array_last_key(array $array) {
			$array = array_keys($array);
			
			return end($array);
		}
	}

?>