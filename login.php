<!DOCTYPE html>
<head>
	<link type="text/css" rel="stylesheet" href="..\style\login.css">
	<link type="text/css" rel="stylesheet" href="..\bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>
<body>
<div class="login">
	<div class="container">
		<h1>Login</h1>
		<form action="/action_page.php">
  		<div class="form-group">
    		<label for="email">Email:</label>
    		<input type="email" class="form-control" id="email">
  		</div>
  		<div class="form-group">
    		<label for="pwd">Password:</label>
    		<input type="password" class="form-control" id="pwd">
  		</div>
  		<div class="checkbox">
    		<label><input type="checkbox"> Remember me</label>
  		</div>
  		<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>

</body>