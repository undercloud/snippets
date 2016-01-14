<?php

	if (false == function_exists('array_zip')) {
		function array_zip() {
			$args = func_get_args();
			$limit = min(array_map('count', $args));

			$args = array_map(
				function($item) use($limit) {
					return array_slice($item, 0, $limit);
				},
				$args
			);
			array_unshift($args, null);

			return call_user_func_array('array_map', $args);
		}
	}

?>