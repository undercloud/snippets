<?php

	if (false ==  function_exists('array_first')) {
		function array_first(array $array) {
			$array = array_values($array);
			
			return reset($array);
		}
	}

?>