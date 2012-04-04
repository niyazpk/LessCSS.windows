What is this?
----------------------

This is a compiler for [LessCSS](http://lesscss.org/) files in Windows. (or if you don't want to install node). It works by comiling your less file into css in the browser (using the compiler provided by LessCSS) and then sending back the results to your server.


Usage instructions:
----------------------

Create an html file similar to sample-html.html given below:

		<html>
			<head>
				<link rel='stylesheet' type='text/less' href='css/style.less'>
				<title>LessCSS compiler example</title>
			</head>
			<body>
			
			<script type='text/javascript' src='scripts/jquery-1.4.4.min.js'></script>
			<script type='text/javascript' src='less-compiler/less-compiler.js'></script>
			<script type='text/javascript' src='less-compiler/less-1.3.0-rigged.js'></script>
			</body>
		</html>


and navigate to the html page from your browser.

The compiled css will be sent your server. Write some code (or modify the php files provided) to save it as .css file. You may want to check the hash of the .less file to make sure that you compile only when it is necessary.



How it works:
----------------------

1. Instead of the normal less.js JavaScript file, we use a modified file to send back the compiled css to the server
2. The Ajax method to send back the css is in the file less-compiler/less-compiler.js. If you want to change something, most probably it will be here.

---------------------------

- Some php files are provided to give an example of how the file is saved in the server.
- We are saving the hash of the file too so that compiling is done only when necessary.

Is it any good?
----------------------
Yes!