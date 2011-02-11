<?php

	$less = file_get_contents('css/style.less');
	$previousHASH = file_get_contents('less-compiler/less-version.info');

	if ($previousHASH != sha1($less)){

?>
<html>
	<head>
		<link rel='stylesheet' type='text/less' href='css/style.less'>
		<link rel="shortcut icon" href="/favicon.ico" />

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		
		<title>Robemall - wear change</title>
	</head>
	<body>
	
	<script type='text/javascript' src='scripts/jquery-1.4.4.min.js'></script>
	<script type='text/javascript' src='less-compiler/less-compiler.js'></script>
	<script type='text/javascript' src='less-compiler/less-1.0.41-rigged.js'></script>
	</body>
</html>
<?php 
		exit();
	}