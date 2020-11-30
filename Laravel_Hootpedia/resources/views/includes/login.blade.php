<li class="nav-item">
	<div id="id01" class="modal">

		<form class="modal-content animate bg-light shadow" action="/login" method="POST">
			@csrf
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
			</div>

			<div class="container">
				<div class="form-group">
					<label for="email"><b>Email</b></label>
					<input class="form-control" type="text {{@errors->has('email') ? 'is-danger' : ''}}"
                           placeholder="Enter Username" name="email" required>
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
				</div>

				<div class="form-group">
					<label for="password"><b>Password</b></label>
					<input class="form-control" type="password {{@errors->has('password') ? 'is-danger' : ''}}"
                           placeholder="Enter Password" name="password" required>
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
				</div>

				<div class="form-group">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox" checked="checked" name="remember"> Remember me
					</label>
				</div>

				<div class="py-2">
					<span>Forgot <a href="#">password?</a></span>
				</div>

				<div class="container">
					<button class="btn btn-primary" type="submit">Login</button>
				</div>
			</div>
		</form>
	</div>
</li>
