<?php 

	$file = fopen('../css/style.css', 'w');
	$result = fwrite($file, $_POST['css']);
	if($result){
		echo "success";
		$less = file_get_contents('../css/style.less');
		$hashfile = fopen('less-version.info', 'w');
		fwrite($hashfile, sha1($less));

		//echo $less;
	} else {
		echo "fail";
	}