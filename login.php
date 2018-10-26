<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>UserName</label>
						<input type="text" name="user" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control">
					</div>
					<button class="btn btn-primary" type="submit">Login</button>
				</form>
			</div>
			<div class="col-lg-6">
				<h2>Registration Form</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>UserName</label>
						<input type="text" name="user" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="Email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control">
					</div>
					<button class="btn btn-primary" type="submit">Register</button>
				</form>
			</div>
		</div>
		
	</div>

  
</body>
</html>