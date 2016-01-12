<?php
	if (false == function_exists('str_drop')) {
		function str_drop($subject, $search, &$count = 0) {
			return str_replace($search, '', $subject, $count);
		}
	}

	if (false == function_exists('str_idrop')) {
		function str_idrop($subject, $search, &$count = 0) {
			return str_ireplace($search, '', $subject, $count);
		}
	}

	if (false == function_exists('preg_drop')) {
		function preg_drop($subject, $pattern, $limit = -1, &$count = 0) {
			return preg_replace($pattern, '', $subject, $limit, $count);
		}
	}

	if (false == function_exists('str_start')) {
		function str_start($str, $start) {
			return (substr_compare($str, $start, 0, strlen($start), false) === 0);
		}
	}

	if (false == function_exists('str_istart')) {
		function str_istart($str, $start) {
			return (substr_compare($str, $start, 0, strlen($start), true) === 0);
		}
	}

	if (false == function_exists('str_end')) {
		function str_end($str, $end) {
			return (substr_compare($str, $end, abs(strlen($str) - strlen($end)), strlen($end), false) === 0);
		}
	}

	if (false == function_exists('str_iend')) {
		function str_iend($str, $end) {
			return (substr_compare($str, $end, abs(strlen($str) - strlen($end)), strlen($end), true) === 0);
		}
	}

	if (false == function_exists('str_has')) {
		function str_has($str, $has, &$pos = false) {
			if (is_scalar($has)) {
				return (false !== ($pos = mb_strpos($str, $has, 0, mb_detect_encoding($str))));
			}

			return ($pos = false);
		}
	}

	if (false == function_exists('str_ihas')) {
		function str_ihas($str, $has, &$pos = false) {
			if (is_scalar($has)) {
				return (false !== ($pos = mb_stripos($str, $has, 0, mb_detect_encoding($str))));
			}

			return ($pos = false);
		}
	}
?>