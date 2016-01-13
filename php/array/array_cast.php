<?php

	if (false == function_exists('array_cast')) {
		function array_cast(array $array, $cast) {
			if (false == is_array($cast)) {
				$cast = array($cast);
			}
			
			$native = array('null', 'bool', 'string', 'integer', 'float', 'numeric', 'array', 'object', 'resource', 'callable', 'scalar');
			
			$filter = array();
			foreach ($array as $key => $value){
				$is = false;
				foreach ($cast as $c) {
					if (in_array($c, $native)) {
						if (call_user_func_array('is_' . $c, array($value))) {
							$is = true;
						}
					} else {
						if ($value instanceof $c) {
							$is = true;
						}
					}
				}
				
				if ($is) {
					$filter[$key] = $value;
				}
			}
			
			return $filter;
		}
	}

?>