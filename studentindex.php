<?php
session_start();

  include("connection.php");
  include("studentFunctions.php");


  $user_data=check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">Moodle Staff</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="studentindex.php">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="markview.php">Marks</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="viewingattendence.php">Attendence</a>
				</li>
			</ul>
			<form class="d-flex">
				<button class="btn btn-primary btn-outline-success"><a class="text-light" href="studentlogout.php">Logout</a></button>
			</form>
			</div>
		</div>
	</nav>

	<br>

	hello welcome <?php echo $user_data['username']; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>