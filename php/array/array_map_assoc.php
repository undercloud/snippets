<?php

	if (false == function_exists('array_map_assoc')) {
		function array_map_assoc($call, array $assoc) {
			return array_map($call, array_keys($assoc), array_values($assoc));
		}
	}

?>