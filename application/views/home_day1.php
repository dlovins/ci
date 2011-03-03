<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Home</title>
</head>
<body>
	<div id="container">
		<p>	My view has been loaded</p>		
		
<!--		<pre>
			<?php print_r($records); ?>
			</pre>
-->		
		<?php foreach($records as $row) : ?>
			<h4><?php echo $row->title; ?></h4>
		<?php endforeach; ?>
	</div>
</body>
	
</html>
