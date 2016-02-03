<?php
	
	if (false == function_exists('array_rename_key')) {
		function array_rename_key(array $array, $old, $new) {
			$changed = array();
			foreach($array as $key => $value) {
				if ((string)$key == (string)$old) {
					$key = $new;
				}
				
				$changed[$key] = (is_array($value) ? array_rename_key($value, $old, $new) : $value);
			}
			
			return $changed;
		}
	}
	
?>
