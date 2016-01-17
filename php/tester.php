<pre>
<?php
	
	error_reporting(-1);

	require __DIR__ . '/object/stdObject.php';

	$o = new stdObject(array(
		'foo' => 'bar'

	));

	var_dump($o->has('foo'));
?>
</pre>