<pre>
<?php
	
	error_reporting(-1);

	require __DIR__ . '/array/array_rotate.php';

	$data = array(
		'foo' => 5,
		'bar' => 2,
		'baz' => 8
	);

	var_dump(
		array_rotate($data)
	);
?>
</pre>