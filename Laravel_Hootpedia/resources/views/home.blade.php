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


</html>
