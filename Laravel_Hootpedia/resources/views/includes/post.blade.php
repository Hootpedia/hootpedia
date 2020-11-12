<!DOCTYPE html>
<html lang="en">
<head>
  <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  
   <script src="script.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="pt-5" id="outputHeader">Article Header</h1>
		<h2 class="small">By <span id="outputAuthor">Author</span> on <span id="outputDate">MM/DD/YYYY 12:00AM</span></h2>
		<div id="outputContent" class="py-3"><p>Content goes here</p></div>
	</div>
	
	<?php
		if(isset($_POST["postHeader"])){$postHeader = $_POST["postHeader"];}
		if(isset($_POST["postAuthor"])){$postAuthor = $_POST["postAuthor"];}
		if(isset($_POST["postDate"])){$postDate = $_POST["postDate"];}
		if(isset($_POST["postContent"])){$postContent = $_POST["postContent"];}
	?>
	
	<script>
		//var outputHeader = '<?php //echo $postHeader; ?>';
		//var outputAuthor = '<?php //echo $postAuthor; ?>';
		//var outputDate = '<?php //echo $postDate; ?>';
		//var outputContent = '<?php //echo $postContent; ?>';
		//$('#outputHeader').html(outputHeader);
		//$('#outputAuthor').html(outputAuthor);
		//$('#outputDate').html(outputDate);
		//$('#outputContent').html(outputContent);
	</script>

</body>
</html>