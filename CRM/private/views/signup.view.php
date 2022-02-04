 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/all.min.css">
</head>
<body>
<div style="min-width:350;"><!-- overall wrapper-->
	<div class="container-fluid">
		
		<div class="p-4 mx-auto shadow rounded" style="margin-top:50px;width:100%;max-width:340px;">
			<h2 align="center">TECHWARE CRM</h2>
			<img src="../public/assets/img/techwarelogo.png" class="border border-primary d-block mx-auto rounded-circle"style="width: 100px;">
			<h3>Add User</h3>
			<input class="my-2 form-control" type="firstname" name="firstname" placeholder="First Name"autofocus>
			<input class="my-2 form-control" type="lastname" name="lastname" placeholder="Last Name"autofocus>
			<input class="my-2 form-control" type="email" name="email" placeholder="Email"autofocus>
			<select class="my-2 form-control">
				<option>--Select a Gender-- </option>
				<option>Male</option>
				<option>Female </option>
			</select>
			<select class="my-2 form-control">
				<option>Select a Rank-- </option>
				<option>Reception</option>
				<option>Sales </option>
				<option>Pre-Sales </option>
				<option>Account Manager</option>
				<option>Admin</option>
			</select>

			<input class="my-2 form-control" type="text" name="password" placeholder="Password">
			<input class="my-2 form-control" type="text" name="password2" placeholder="Confirm Password">
			<br>
			<button class="btn btn-primary">Add User</button>

		</div>

	</div>
</div><!-- end of wrapper-->
</body>
</html>