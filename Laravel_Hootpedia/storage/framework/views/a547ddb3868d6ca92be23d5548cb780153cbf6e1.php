<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Post</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

   <script src="script.js"></script>
</head>
<body>
	<div class="container">
	<h1 class="pt-5">New Post</h1>

	  <!--Use This form to submit summernote to php-->
	  <form  method="POST" action="/save">
          <?php echo csrf_field(); ?>

			<div class="py-2 form-group">
				<label class="form-check-label" for="title">Title: </label>
				<input  class="form-control" type="text" name="title" id="title" required>
			</div>
          <div class="py-2 form-group">
              <label class="form-check-label" for="title">Tag: </label>
              <!--<input  class="form-control" type="text" name="tag" id="tag" required>-->
			  <select class="form-control" name="tag" id="tag">
				<option>Fundamentals</option>
				<option>C/C++</option>
				<option>Java</option>
				<option>HTML/CSS</option>
				<option>Javascript</option>
				<option>Python</option>
				<option>SQL</option>
			  </select>
          </div>
			<div class="py-2 form-group">
				<label class="form-check-label" for="content">Content: </label>
                
                <textarea class="form-control" rows="5" name="content" id="summernote" required></textarea>
			</div>
			<div class="py-2 form-group">
				<button id="submitbutton" type="submit" class="btn btn-primary">Submit</button>
			</div>
	  </form>
	</div>

  <script>
      $('#summernote').summernote({
        placeholder: 'Enter Content Here',
        tabsize: 2,
        height: 400
      });
  </script>

  <script type="text/javascript" src="<?php echo e(asset('js/newpost.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/includes/newpost.blade.php ENDPATH**/ ?>