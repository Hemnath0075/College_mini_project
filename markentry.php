<?php

include ('connection.php');

if(isset($_POST['submit'])){
  $registerno=$_POST['registernumber'];
  $examtitle=$_POST['examtitle'];
  $mark=$_POST['mark'];
  $sql="insert into `marks` (registerno,examtitle,mark) values ('$registerno','$examtitle','$mark')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "sucess";
  }
  else{
    echo "error";
  }
}
?>

<!-- navbar and body of page -->

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
</head>

<body>
    <!-- navbar and body of page -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Moodle Student</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="staffindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="markentry.php">Marks-Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Attendence</a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-primary btn-outline-success"><a class="text-light" href="stafflogout.php">Logout</a></button>
        </form>
      </div>
    </div>
  </nav>
  <!-- form for mark entering -->

  <form class="my-5" style="padding:20px; width: 600px; height: 280px; margin-left:20rem; border:2px solid black;" id="markentry" method="post">
            <h3>Enter student Marks</h3>
            <div class="mb-3">
            <label for="regno" class="form-label">Register Number</label>
            <select style="width: 300px;" name="registernumber" id="registernumbsers">
              <?php  
                $sql="select regno from `userstudent`";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)){
                  echo "<option value=".$row[0].">".$row[0]."</option>";
                }
              ?>
            </select>
            </div>
            <div class="mb-3">
              <label for="exam-title" class="form-label">Exam-Title</label>
              <select style="margin-left: 44px;width: 300px;" name="examtitle" id="examtitle">
                <option value="CIA1">CIA-1</option>
                <option value="CIA2">CIA-2</option>
                <option value="CIA3">CIA-3</option>
                <option value="SA">SKILL ASSESMENT</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="entermark" class="form-label">Enter-Mark</label>
              <input type="number" style="width: 320px; display:inline; margin-left:30px; border:1px solid black" name="mark" class="form-control" id="entermark" >
            </div>
            <div class="d-grid gap-2">
              <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
            </div>

  </form>
            <h1 style="margin-top:30px;">CIA-1 MARKS </h1>
            <div  class="table tablemarks">
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA1'";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
            </div>

<h1 style="margin-top:30px;">CIA-2 MARKS </h1>
            <div  class="table tablemarks">
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA2'";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
</div>
<h1 style="margin-top:30px;">CIA-3 MARKS </h1>
            <div  class="table tablemarks">
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='CIA3'";
            echo "<tr><th>REGISTER NO</th>
            <th>MARKS</th></tr>";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              echo "<tr><td>".$row['registerno']."</td><td>".$row['mark']."</td></tr>";
            }
            echo "</table>";

            ?>
</div>

<h1 style="margin-top:30px;">SKILL ASSESMENT MARKS </h1>
            <div  class="table tablemarks">
            <?php
            $table="table";
            echo "<table class=$table>";
            $sql="select * from `marks` where examtitle='SA'";
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