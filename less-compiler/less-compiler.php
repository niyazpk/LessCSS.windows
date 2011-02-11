<?php

	$less = file_get_contents('css/style.less');
	$previousHASH = file_get_contents('less-compiler/less-version.info');

	if ($previousHASH != sha1($less)){

?>
<html>
	<head>
		<link rel='stylesheet' type='text/less' href='css/style.less'>
		<title>LessCSS compiler example</title>
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