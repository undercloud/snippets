<?php
	if (false == function_exists('array_drop')) {
		function array_drop(array $arr, $needle = array('',0,'0',false,null)) {
			if (false == is_array($needle)) {
				$needle = array($needle);
			}

			return array_diff($arr, $needle);
		}
	}

	if (false == function_exists('array_map_assoc')) {
		function array_map_assoc($call, array $assoc = array()) {
			return array_map($call, array_keys($assoc), array_values($assoc));
		}
	}

	if (false ==  function_exists('array_flat')) {
		function array_flat(array $array) {
			$output = array();
			
			if (is_array($input)) {
				foreach ($input as $element) {
					$output = array_merge($output, array_flat($element));
				}
			} else { 
				$output[] = $input; 
			}

			return $output;
		}
	}

	if (false ==  function_exists('array_first')) {
		function array_first(array $array) {
			return array_shift(
				array_slice(array_values($array), 0, 1)
			);
		}
	}

	if (false == function_exists('array_first_key')) {
		function array_first_key($array) {
			return array_shift(
				array_slice(array_keys($array), 0, 1)
			);
		}
	}

	if (false ==  function_exists('array_last')) {
		function array_last(array $array) {
			return array_pop(array_values($array), -1));
		}
	}

	if (false ==  function_exists('array_last_key')) {
		function array_last_key(array $array) {
			return array_pop(array_keys($array), -1);
		}
	}

	if (false == function_exists('array_initial')) {
		function array_initial(array $array, $n = 1) {
			return array_slice($array, (-1 * $n));
		}
	}

	if (false == function_exists('array_rest')) {
		function array_rest(array $array, $n = 1) {
			return array_slice($array, $n);
		}
	}

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
			
			return array($ok, $value);
		}
	}

	//partition
	//zip

?>