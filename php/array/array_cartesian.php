<?php
	
	if (false == function_exists('array_cartesian')) {
		function array_cartesian() {			
			$args = func_get_args();
			
			if (count($args) == 0) {
				return array(
					array()
				);
			}

			$a = array_shift($args);
			$c = call_user_func_array(__FUNCTION__, $args);
			$r = array();

			foreach ($a as $v) {
				foreach ($c as $p) {
					$r[] = array_merge(array($v), $p);
				}
			}

			return $r;
		}
	}

?>