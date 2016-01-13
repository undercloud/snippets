<?php
	
	if (false == function_exists('array_drop')) {
		function array_drop(array $array, $needle = array('',0,'0',false,null)) {
			if (false == is_array($needle)) {
				$needle = array($needle);
			}

			return array_diff($array, $needle);
		}
	}

?>