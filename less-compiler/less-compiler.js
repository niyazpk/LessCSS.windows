/* This compiles style.less an sends the css back to the server */
function sendCSStoServer(cssString){
	jQuery.post('less-compiler/less-save-compiled-css.php', {'css': cssString}, function(data){
		if(data=='success'){
				$('body').text('Yay!! style.css regenerated.' + ' ' + Math.random());
				window.location.replace('index.php');
			}else{
				$('body').html('OMG. CSS compilation failed. Response: ' + data + ' ' + Math.random());
			}
	}, 'text');
}