<?php

	if (false == function_exists('array_rest')) {
		function array_rest(array $array, $n = 1) {
			return array_slice($array, $n);
		}
	}

?>