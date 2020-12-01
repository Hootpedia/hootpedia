<li class="nav-item">
	<div id="id02" class="modal">

		<form class="modal-content animate bg-light shadow" action="/register" method="POST">
			@csrf
			<div class="container">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					<a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
				</div>

				<div class="form-group">
					<label for="username"><b>Username</b></label>
					<input class="form-control" type="text"
                           placeholder="Username" name="username" required>
                    @if ($errors->has('username'))
                        <p class="help is-danger">{{$errors->first('username')}}</p>
                    @endif
				</div>

				<div class="form-group">
					<label for="email"><b>E-mail</b></label>
					<input class="form-control" type="text"
                           placeholder="E-mail" name="email" required>
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
				</div>

				<div class="form-group">
					<label for="password"><b>Password</b></label>
					<input class="form-control" type="password"
                           placeholder="Enter Password" name="password" required>
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif

				</div>

				<div class="form-group">
					<label for="confirm_psw"><b>Confirm Password</b></label>
					<input class="form-control" type="password"
                           placeholder="Confirm Password" name="confirm_psw" required>
                   @if ($errors->has('confirm_psw'))
                        <p class="help is-danger">{{$errors->first('confirm_psw')}}</p>
                    @endif
				</div>

				<div class="form-group">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox" checked="checked" name="remember"> Remember me
					</label>
				</div>

			</div>

			<div class="container">
				<button class="btn btn-primary" type="submit">Register</button>
			</div>
		</form>
	</div>
</li>
