<?php

	if (false == function_exists('array_group')) {
		function array_group(array $array, $field) {
			$group = array();
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
					if (false == isset($group[$key])) {
						$group[$key] = array();
					}
				
					$group[$key][] = $value;
				}
			}

			return $group;
		}
	}

?>