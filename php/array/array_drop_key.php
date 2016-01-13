<?php

	if (false == function_exists('array_drop_key')) {
		function array_drop_key(array $array, $key) {
			if (false == is_array($key)) {
				$key = array($key);
			}

			foreach ($key as $k) {
				if (array_key_exists($k, $array)) {
					unset($array[$k]);
				}
			}

			return $array;
		}
	}
?>