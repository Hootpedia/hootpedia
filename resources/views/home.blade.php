<html lang="en">
<head>
    <style>
        .card p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
			max-height: 300px;
        }
    </style>
	@include('includes.head')
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--}}
</head>

<body>
<!-- Navigation-->
@include('includes.navigation')
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<div class="container-fluid">
    <!-- Testing Positioning for sidebar content-->
    <div class="row" style="min-height:100%;">
		<div class="col-md-12">
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

    </div>

</div>

<!-- Footer -->
{{--@include('includes.footer')--}}

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
