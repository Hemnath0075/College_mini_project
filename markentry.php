<?php

include ('connection.php');

$sql="select regno from `userstudent`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
if($result){
  echo "$row[0]<br>";
}
else{
  echo "eroor";
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

  <form style="width: 600px; height: 600px; margin-left:20rem" id="markentry" method="post">
            <h3>Enter student Marks</h3>
            <div class="mb-3">
            <label for="regno" class="form-label">Register Number</label>
            <select name="registernumbsers" id="registernumbsers">

            </select>
            </div>
            <div class="mb-3">
              <label for="exam-title" class="form-label">Exam-Title</label>
              <input type="text" name="exam-title" class="form-control" id="exam-title" >
            </div>
            <div class="mb-3">
              <label for="entermark" class="form-label">entermark</label>
              <input type="number" name="entermark" class="form-control" id="entermark" >
            </div>
            <div class="d-grid gap-2">
              <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
            </div>
</body>
</html>


