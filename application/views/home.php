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

		<?php foreach ($rows as $r) :?>
		<h3><?php echo $r->title; ?></h3>
		<div><?php echo $r->contents; ?></div>
		
		<?php endForeach; ?>
	</div>
</body>
	
</html>
