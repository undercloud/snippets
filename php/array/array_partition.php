<?php

	if (false == function_exists('array_partition')) {
		function array_partition(array $array, $call) {
			$ok   = array();
			$fail = array();

			foreach ($array as $key => $value) {
				if (call_user_func_array($call, array($key, $value))) {
					$ok[$key] = $value; 
				} else {
					$fail[$key] = $value; 
				}
			}
			
			return array($ok, $fail);
		}
	}

?>