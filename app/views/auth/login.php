<?php
view('includes/header');
?>

	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<h1 class="text-center login-title">Sign in to continue</h1>
			<div class="account-wall">
				<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
						alt="">
				<form class="form-signin" method="post">
					 <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
					 <input type="password" name="password" class="form-control" placeholder="Password" required>
					 <button class="btn btn-lg btn-primary btn-block" type="submit">
						Sign in</button>
					 <label class="checkbox pull-left">
						<input type="checkbox" value="remember-me">
						Remember me
					 </label>
				</form>
			</div>
			<a href="/auth/register" class="text-center new-account">Create an account </a>
		</div>
	</div>

<?php
view('includes/footer');
