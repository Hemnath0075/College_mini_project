<?php 

include ('connection.php');
if(isset($_POST['submit'])){
    $subname=$_POST['subjectname'];
    $date=date('Y-m-d' , strtotime($_POST['date']));


    $sql="select regno from `userstudent`";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)){
                    $res=$row[0];
                    echo $res ;
                    $att=$_POST[$row[0]];
                    echo $att;
                    $sqlquery="insert into `attendence` (subname,date,regno,attendence) values ('$subname','$date','$res','$att')";
                    $sqlrun=mysqli_query($con,$sqlquery);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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

    <form style="padding:20px; width: 600px; height: 100vh; margin-left:20rem; border:2px solid black;" id="attendenceform" method="post">
        <h3>Enter student Attendence</h3>
        <div class="mb-3">
          <label for="subjectname" class="form-label">Subjectname</label>
          <select style="margin-left: 44px;width: 300px;" name="subjectname" id="subjectname">
            <option value="AI">Artificial Intelligence</option>
            <option value="OS">Operating System</option>
            <option value="DBMS">DBMS</option>
          </select>
        </div>
        <div class="mb-3">
              <label for="date" class="form-label">Enter-date</label>
              <input type="date" style="width: 320px; display:inline; margin-left:30px; border:1px solid black" name="date" class="form-control" id="date" >
            </div>
            <?php  
                $sql="select regno from `userstudent`";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo '<div class="mb-3">
                    <label for="regno" class="form-label">Register Number</label>
                    <select style="width: 200px;"  id="registernumbsers">';
                    echo "<option value=".$row[0].">".$row[0]."</option><br>";
                    echo "</select>";
                    echo '
                    <input type="radio" id="present" name="'.$row[0].'" value="P" checked="checked">
                    <label for="present">Present</label>
                    <input type="radio" id="absent" name="'.$row[0].'" value="A">
                    <label for="absent">Absent</label>';
                    echo "</div>";    
                }
            ?>
            <div class="d-grid gap-2">
              <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
            </div>
            
    

    </form>
</body>
</html>