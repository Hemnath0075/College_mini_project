<?php
session_start();
include ('connection.php');
$id=$_SESSION['regno'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
      .tablemarks > table{
        border: 2px solid black;
        width: 500px;
        margin-left: 20rem;
        border-collapse: collapse;

      }
    </style>
	<script>
        function printDiv() {
            var divContents = document.getElementById("cia1Table").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
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
	<!-- cia 1 mark table -->
	
            <div id="cia1Table"  class="table tablemarks">
			<h1 class="d-inline" style="margin-top:30px;">CIA-1 MARKS </h1>
			<input class="d-inline btn btn-primary" style="margin-left: 700px;" type="button" value="PRINT" onclick="printDiv()">
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA1' AND registerno=$id";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
            </div>

	<!-- cia 2 mark table -->
	
            <div id="cia2Table"  class="table tablemarks">
			<h1 style="margin-top:30px;">CIA-2 MARKS </h1>
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA2' AND registerno=$id";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
</div>

<!-- cia 3 table marks -->

            <div id="cia3Table"  class="table tablemarks">
			<h1 style="margin-top:30px;">CIA-3 MARKS </h1>
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA3' AND registerno=$id";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
</div>

<!-- skill assesment table marks -->


            <div id="assesmentTable"  class="table tablemarks">
			<h1 style="margin-top:30px;">SKILL ASSESMENT MARKS </h1>
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='SA' AND registerno=$id";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
</div>


</body>
</html>