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
		<h2 class="small">Category: <span id="outputAuthor">Tag</span><br>Created On: <span id="outputDate">MM/DD/YYYY 12:00AM</span></h2>
		<div id="outputContent" class="py-3"><p>Content goes here</p></div>
	</div>
	<script>
			$( ".articlebutton" ).click(function() {
				<?php $__currentLoopData = $articles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					if(this.id == "<?php echo e($article->id); ?>")
					{
						var outputHeader = "<?php echo e($article->title); ?>";
						var outputAuthor = "<?php echo e($article->tag); ?>";
						var outputDate = "<?php echo e($article->created_at); ?>";
						var outputContent = '<?php echo $article->content; ?>';


						$('#outputHeader').html(outputHeader);
						$('#outputAuthor').html(outputAuthor);
						$('#outputDate').html(outputDate);
						$('#outputContent').html(outputContent);
					}
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			});

	</script>

</body>
</html>
<?php /**PATH /Users/santiagomonsalve/Documents/GitHub/hootpedia/Laravel_Hootpedia/resources/views/includes/post.blade.php ENDPATH**/ ?>