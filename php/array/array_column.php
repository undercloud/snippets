<?php

	if (false == function_exists('array_column')) {
		function array_column(array $array, $columnKey, $indexKey = null) {
			$result = array();
			foreach ($array as $subArray) {
				if (!is_array($subArray)) {
					continue;
				} elseif (is_null($indexKey) && array_key_exists($columnKey, $subArray)) {
					$result[] = $subArray[$columnKey];
				} elseif (array_key_exists($indexKey, $subArray)) {
					if (is_null($columnKey)) {
						$result[$subArray[$indexKey]] = $subArray;
					} elseif (array_key_exists($columnKey, $subArray)) {
						$result[$subArray[$indexKey]] = $subArray[$columnKey];
					}
				}
			}

			return $result;
		}
	}

?>