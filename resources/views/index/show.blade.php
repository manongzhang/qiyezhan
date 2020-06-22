<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script src="/js/uploadify/jquery.js"></script>
<script src="/js/uploadify/jquery.uploadify.js"></script>
<link rel="stylesheet" href="/js/uploadify/uploadify.css">
<body>
	<input type="file" name="img" id="uploadify">
	<input type="button" name="btn" value="确定">
</body>
</html>
<script>
$(document).ready(function(){
	$("#uploadify").uploadify({
		'swf': '/js/uploadify/uploadify.swf',
		'uploader': '/up',
		'onUploadSuccess':function(file,msg,data){
			console.log(file);
			console.log(msg);
			console.log(data);
		}
	});
});
</script>