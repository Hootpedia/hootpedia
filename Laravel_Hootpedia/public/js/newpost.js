$(document).ready(function(){
  $("#submitbutton").click(function(){
	var markupStr = $('#summernote').summernote('code');
	
    //Send markupStr to Value of form and Submit form
	document.sampleForm.postContent.value = markupStr;
    document.forms["sampleForm"].submit();
	
	//$('#outputContent').html(markupStr);
	
  });
});

