function array_unshift_assoc(&$arr, $key, $val) 
{ 
    $arr = array_reverse($arr, true); 
    $arr[$key] = $val; 
    return = array_reverse($arr, true); 
} 
