<html>
<head>
<title>PHP AJAX Image Upload</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	crossorigin="anonymous"></script>
<style>
#targetLayer {
	font-family: arial;
	margin-bottom: 20px;
}

.btn-upload {
	padding: 5px 30px;
	border-radius: 4px;
	margin-top: 20px;
	color: #2f2f2f;
	font-weight: 500;
	background-color: #ffc72c;
	border: 1px solid;
	border-color: #ffd98e #ffbe3d #de9300;
}
</style>
</head>
<body>
	<form id="image-upload-form" action="upload.php" method="post">
		<div id="targetLayer">Vista de la imagen</div>
		<div>
			<input name="userImage" type="file" class="inputFile" />
		</div>
		<div>
			<input type="submit" value="Upload" class="btn-upload" />
		</div>
	</form>
	<script type="text/javascript">
    $(document).ready(function (e) {
    	$("#image-upload-form").on('submit',(function(e) {
    		e.preventDefault();
    		$.ajax({
            	url: "upload.php",
    			type: "POST",
    			data:  new FormData(this),
    			contentType: false,
        	    cache: false,
    			processData: false,
    			success: function(data)
    		    {
    				$("#targetLayer").html(data);
    		    },
    		  	error: function(data)
    	    	{
    		  	  console.log("error");
                  console.log(data);
    	    	}
    	   });
    	}));
    });
</script>
</body>
</html>