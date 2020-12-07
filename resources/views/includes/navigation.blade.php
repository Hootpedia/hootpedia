
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm px-5">
    <a class="navbar-brand" href="{{url('/')}}">
        <div class="d-flex">
            <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                 width="100">
            <h2 class="pl-3 pt-4" style="font-family: Noto Serif, serif; font-weight: bold; ">Hootpedia</h2>
        </div>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


        <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="collapsibleNavbar">
            @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
            <ul class="navbar-nav text-right">
                @if(!auth()->check())

                <button onclick="document.getElementById('id01').style.display='block'" class="mx-1 btn btn-outline-primary">Login</button>
                <button onclick="document.getElementById('id02').style.display='block'" class="mx-1 btn btn-outline-primary">Register</button>

                   {{-- <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="{{\GuzzleHttp\Psr7\uri_for('/view/login')}}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark"
                       href="{{\GuzzleHttp\Psr7\uri_for('/view/register')}}">SIGN UP</a>
                    </li>--}}
                <!-- Login -->
				@include('includes.login')
				@include('includes.register')


                       <! -- Password validation -->

                  {{--     <script>
                           //maybe use document.getElementById?
                           document.querySelector('.register').onclick = function(){
                               let password = document.querySelector('.psw').value();
                               let confirmPassword = document.querySelector('.confirm_psw').value();
                               console.log(password.value());

                               if(password ===""){
                                   alert("Password field cannot be empty.");
                               }
                               else if(password !== confirmPassword){
                                   alert("Password did not match. Please try again.");
                                   return false;
                               }
                           }

                       </script>--}}

            @elseif(auth()->check())
                    <ul class="navbar-nav text-right">
                {{--  <li>
                      <form action="/search" method="GET" role="search">
                          @csrf
                          <div class="input-group">
                              <input type="text" class="form-control" name="q" placeholder="Search">
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
--}}{{--                                    <span class="glyphicon glyphicon-search"></span>--}}{{--
                                </button>
                            </span>
                          </div>
                      </form>
                  </li>--}}
                        <li class="nav-item {{--active--}}">
                            <a class="nav-link" href="/articles/html">Html {{--<span class="sr-only">(current)</span>--}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/fundamentals">Fundamentals</a>
                        </li>
                        <!---<li class="nav-item">
                            <a class="nav-link" href="/articles/java">Java</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/javascript">Javascript</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/cplusplus">C++</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/python">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/sql">SQL</a>
                        </li>

                        <li class="nav-item">
                            <a href="/articles/create" class="mx-1 btn btn-outline-primary">

                                <span class="glyphicon glyphicon-circle-arrow-up"></span> Post
                            </a>
                        </li>
                        <li class="nav-item">
{{--                            <button class="mx-1 btn btn-outline-primary">--}}
{{--                                <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" width="25">--}}
                                <a href="/user/{{ auth()->user()->id }}" class="mx-1 btn btn-outline-primary">
                                    <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" width="25">
                                    {{auth()->user()->name}}
                                </a>
{{--                            </button>--}}
                        </li>
                        <li class="nav-item">
                            <a href="/logout"class="mx-1 btn btn-outline-primary">
                                 Logout
                            </a>
                        </li>
                    </ul>
            @endif

            </ul>
        </div>
</nav>



<script>
    // Get the modal
    const modal1 = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal1) {
            modal1.style.display = "none";
        }
    }
</script>


<script>
    // Get the modal
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    }
</script>
