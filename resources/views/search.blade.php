<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>


<div class="container">

    <form action="/search" method="GET" role="search">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="q" placeholder="Search">
            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
        </div>
    </form>
    <div>
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
    </div>
</div>


<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

</body>
</html>
