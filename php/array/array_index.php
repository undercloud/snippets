<?php

	if (false == function_exists('array_index')) {
		function array_index(array $array, $field) {
			$indexed = array();
			foreach ($array as $value) {
				unset($key);
			
				if (is_array($value)) {
					if (isset($value[$field])) {
						$key = $value[$field];
					}
				} else if (is_object($value)) {
					if (isset($value->{$field})) {
						$key = $value->{$field};
					}
				}
				
				if (isset($key)) {
					$indexed[$key] = $value;
				}
			}

			return $indexed;
		}
	}

?>