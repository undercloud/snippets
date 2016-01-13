<?php

	if (false ==  function_exists('array_last')) {
		function array_last(array $array) {
			$array = array_values($array);
			
			return end($array);
		}
	}

?>