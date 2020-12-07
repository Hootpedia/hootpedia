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
				@foreach($articles  as $article)
					if(this.id == "{{$article->id}}")
					{
						var outputHeader = "{{$article->title}}";
						var outputAuthor = "{{$article->tag}}";
						var outputDate = "{{$article->created_at}}";

						var outputContent = '{!! $article->content !!}';


						$('#outputHeader').html(outputHeader);
						$('#outputAuthor').html(outputAuthor);
						$('#outputDate').html(outputDate);
						$('#outputContent').html(outputContent);
					}
				@endforeach
			});

	</script>

</body>
</html>
