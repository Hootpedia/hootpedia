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
		<div class="col-md-9">
			@include('includes.frontpage')
		</div>

        <!-- Responsive Sidebar, Defaults to bottom on Small Screens -->
        <div class="col-md-3 bg-light p-3">
			@include('includes.sidebar')
        </div>
    </div>

</div>

<!-- Footer -->
@include('includes.footer')

</body>


</html>
