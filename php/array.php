<?php
	error_reporting(-1);

	if (false == function_exists('array_drop')) {
		function array_drop(array $array, $needle = array('',0,'0',false,null)) {
			if (false == is_array($needle)) {
				$needle = array($needle);
			}

			return array_values(
				array_diff($array, $needle)
			);
		}
	}
	
	if (false == function_exists('array_bound')) {
		function array_bound(array $array, array $keys = array()) {
			$bound = array();
			foreach($array as $key => $value){
				if(in_array($key,$keys)) {
					$bound[$key] = $value;
				}
			}

			return $bound;
		}
	}

	if (false == function_exists('array_map_assoc')) {
		function array_map_assoc($call, array $assoc) {
			return array_map($call, array_keys($assoc), array_values($assoc));
		}
	}

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

	if (false ==  function_exists('array_first')) {
		function array_first(array $array) {
			return array_shift(
				array_slice(array_values($array), 0, 1)
			);
		}
	}

	if (false == function_exists('array_first_key')) {
		function array_first_key(array $array) {
			return array_shift(
				array_slice(array_keys($array), 0, 1)
			);
		}
	}

	if (false ==  function_exists('array_last')) {
		function array_last(array $array) {
			return array_pop(array_values($array), -1);
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

		if (false == function_exists('array_index')) {
		function array_index(array $array, $field) {
			$indexed = array();
			foreach ($array as $value) {
				if (isset($value[$field])) {
					$indexed[$value[$field]] = $value;
				}
			}

			return $indexed;
		}
	}

	if (false == function_exists('array_group')) {
		function array_group(array $array, $field) {
			$group = array();
			foreach ($array as $value) {
				if (isset($value[$field])) {
					if (false == isset($group[$value[$field]])) {
						$group[$value[$field]] = array();
					}

					$group[$value[$field]][] = $value;
				}
			}

			return $group;
		}
	}

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

	if (false == function_exists('array_zip')) {
		function array_zip() {
			$args = func_get_args();

			$ruby = array_pop($args);
			if (is_array($ruby)) {
				$args[] = $ruby;
			}

			$counts = array_map('count', $args);
			$count = ($ruby) ? max($counts) : min($counts);
			$zipped = array();

			for ($i = 0; $i < $count; $i++) {
				for ($j = 0; $j < count($args); $j++) {
					$val = (isset($args[$j][$i])) ? $args[$j][$i] : null;
					$zipped[$i][$j] = $val;
				}
			}

			return $zipped;
		}
	}

	if (false == function_exists('array_where')) {
		function array_where(array $array, $predicate, $strict = false) {
			$comparator = function($what, $with, $strict = false) {
				if (true === $strict) {
					return ($what === $with);
				} else {
					return ($what == $with);
				}
			};

			$find = array();

			foreach ($array as $key => $value) {
				if (is_array($predicate)) {
					foreach ($predicate as $pkey => $pvalue) {
						if (false == isset($value[$pkey])) {
							continue;
						}

						if (false == $comparator($value, $pvalue, $strict)) {
							continue;
						}
					}

					$find[$key] = $value;
				} else {
					if (false == $comparator($value, $predicate, $static)) {
						$find[$key] = $value;
					}
				}
			}

			return $find;
		}
	}

	if (false == function_exists('array_sort_by_array')) {
		function array_sort_by_array(array $array, array $sorter){
			$ordered = array();
			foreach($sorter as $key) {
				if(array_key_exists($key,$array)) {
					$ordered[$key] = $array[$key];
					unset($array[$key]);
				}
			}
			return $ordered + $array;
		}
	}

	if (false == function_exists('array_sort_by_column')) {
		function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
			$sort_col = array();
			
			foreach ($arr as $key=> $row) {
				$sort_col[$key] = $row[$col];
			}

			array_multisort($sort_col, $dir, $arr);
		}
	}

	/*
function msort($array, $key, $sort_flags = SORT_REGULAR) {
    if (is_array($array) && count($array) > 0) {
        if (!empty($key)) {
            $mapping = array();
            foreach ($array as $k => $v) {
                $sort_key = '';
                if (!is_array($key)) {
                    $sort_key = $v[$key];
                } else {
                    // @TODO This should be fixed, now it will be sorted as string
                    foreach ($key as $key_key) {
                        $sort_key .= $v[$key_key];
                    }
                    $sort_flags = SORT_STRING;
                }
                $mapping[$k] = $sort_key;
            }
            asort($mapping, $sort_flags);
            $sorted = array();
            foreach ($mapping as $k => $v) {
                $sorted[] = $array[$k];
            }
            return $sorted;
        }
    }
    return $array;
}

	*/
?>