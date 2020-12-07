<div class="container">
	<h1 class="header">Edit Profile</h1>
	<br>
	<form action="#" method="PUT">
	@csrf
		<br>
{{--		<input type="image" src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="Submit" style="float:inherit" width="250" height="250">--}}
		<img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" style="float:inherit" width="250" height="250">

		<br><br>
		<div class="form-group">
			<label for="fname">First name:</label><br>
{{--			<input class="form-control" type="text" id="fname" name="fname"><br>--}}
			<textarea class="form-control" type="text" id="fname" name="fname">{{--{{ $user->firstName }}--}}</textarea><br>

			<label for="lname">Last name:</label><br>
{{--			<input class="form-control" type="text" id="lname" name="lname">--}}
			<textarea class="form-control" type="text" id="lname" name="lname">{{--{{ $user->lastName }}--}}</textarea><br>

			<br><label for="email">Email</label><br>
			<textarea class="form-control" type="text" id="email" name="email">{{--{{ $user->email }}--}}</textarea><br>

		</div>
		<br>
{{--			<div class="form-group">--}}
{{--				<p>Sex:</p><br>--}}
{{--				<input type="radio" id="gender" name="gender" value="male">--}}
{{--				<label for="gender">Female</label><br>--}}
{{--				<input type="radio" id="gender" name="gender" value="female">--}}
{{--				<label for="gender">Male</label><br><br>--}}
{{--			</div>--}}
			
			<div class="form-group">	
				<label for="age">Age:</label><br>
{{--				<input class="form-control" type="number" id="age" name="age"><br><br>--}}
				<textarea name="age" id="age" type="number" class="form-control">{{--{{ $user->age }}--}}</textarea><br><br>
				{{--<label for="fname">School:</label><br>
				<input class="form-control" type="text" id="school" name="school"><br>--}}
				<br><label for="fname">Bio:</label><br>
				<textarea class="form-control" type="text" id="bio" name="bio">{{--{{ $user->bio }}--}}</textarea><br>

			</div>

			<br><input class="btn btn-primary" type="submit" value="Submit">
			<br><br>
   </form>
 </div>