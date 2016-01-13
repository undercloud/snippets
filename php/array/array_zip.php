<?php

	if (false == function_exists('array_zip')) {
		function array_zip() {
			$args = func_get_args();

			$ruby = array_pop($args);
			if (is_array($ruby)) {
				$args[] = $ruby;
			}

			$counts = array_map('count', $args);
			$count = ($ruby) ? min($counts) : max($counts);
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

?>