<html lang="en">
<head>
	@include('includes.head')
</head>

<body>
<!-- Navigation-->
@include('includes.navigation')

<div class="container-fluid">
    <!-- Testing Positioning for sidebar content-->
    <div class="row" style="min-height:100%;">
		<div class="col-md-12">
			@include('includes.newpost')
		</div>
    </div>

</div>

<!-- Footer -->
@include('includes.footer')

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
