<pre>
<?php
	
	error_reporting(-1);

	require __DIR__ . '/array/array_zip.php';

	$data = [
		[1,2,3],
		['a','b','c'],
		[true,true,false]
	];

	var_dump(array_zip([1,2,3],
		['a','b','c'],
		[true,true]));
?>
</pre>