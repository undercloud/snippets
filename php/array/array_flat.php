<?php

	if (false ==  function_exists('array_flat')) {
		function array_flat($array) {
			$output = array();
			
			if (is_array($array)) {
				foreach ($array as $element) {
					$output = array_merge($output, array_flat($element));
				}
			} else { 
				$output[] = $array; 
			}

			return $output;
		}
	}

?>