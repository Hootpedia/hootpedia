<html lang="en">
<head>
	@include('includes.head')
</head>

<body>
<!-- Navigation-->
@include('includes.navigation')

<div class="container-fluid">
    <!-- Testing Positioning for sidebar content-->
    <div class="row" style="height:100%;">
		<div class="col-md-9">
			@include('includes.frontpage')
		</div>

       {{-- <div>
            @if(isset($details))
                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Sample User details</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $article)
                        <tr>
                            <td>{{$article->title}}</td>
                            <td>{{$user->body}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>--}}

        <!-- Responsive Sidebar, Defaults to bottom on Small Screens -->
      {{--  <div class="col-md-3 bg-light p-3">
			@include('includes.sidebar')
        </div>--}}
    </div>

</div>

<!-- Footer -->
{{--@include('includes.footer')--}}

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
