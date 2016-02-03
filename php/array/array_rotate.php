<?php
	
	if (false == function_exists('array_rotate')) {
		function array_rotate(array $array, $pos = 1) {
			$pos = (int)$pos;

			if ($pos == 0) {
				return $array;
			} else if($pos < 0) {
				$array = array_reverse($array);
			}

			$l = abs($pos);
			for ($i = 0; $i < $l; $i++) {
				list($key, $value) = each($array);
				array_shift($array);
				$array = array_merge(
					$array,
					array(
						$key => $value
					)
				);
			}

			return ($pos < 0) ? array_reverse($array) : $array;
		}
	}

?>