<html lang="en">
<head>
    <style>
        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
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
    <div class="row" style="height:100%;">
        <div class="col-md-9">

                <div class="card mx-auto d-flex justify-content-center shadow" style="width: 60%; min-width:25rem;">
                    <h2 class="border border-top-0 border-left-0 border-right-0 py-2">{{$article->tag}}</h2>
                    <div class="card-body row text-left">
                        <div class="col-3 text-center p-1">
                            <img class="img-fluid border rounded-circle"
                                 src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                                 style="max-width:100px; height:auto;">
                        </div>
                        <div class="col-9">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="small text-secondary">{{$article->content}}</p>
                        </div>
                    </div>
                </div>
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
