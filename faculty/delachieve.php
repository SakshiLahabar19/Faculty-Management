<?php
session_start();
include "conn.php";
include "sidebarfac.php";
$fname =$_SESSION['facultyuser'];
include "logincheck.php";

$query = "SELECT * FROM achieve WHERE fname='$fname'";
$result = mysqli_query($conn , $query);

$columname ="fname";


if (isset($_POST['submit'])){
    $ach =$_POST['aname'];
    $q1 = "DELETE  FROM achieve WHERE aname='$ach' and fname='$fname';";

    $result1 = mysqli_query($conn,$q1);

    if($result1 == NULL){
        echo "<script type='text/javascript'> alert('Please try again..'); 
		history.back();
		</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Sucess..'); 
		history.back();
		</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/faculty.css">
    <title>Faculty</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  
  
      <!--PAGE CONTENT-->
      
      <div class="page-content p-5" id="content">
          <div class="topbar fixed-top">
              <button id="sidebarCollapse" class="btn btn-light text-dark bg-light rounded-pill shadow-sm m-2 mb-4 fixed-top">
                  <i class="fa fa-bars"></i>
              </button>
              <div class="toggle" ></div>
              <div class="search">
                  <label>
                      <input type="text" placeholder="Search Here">
                      <i class="fa fa-search pt-2" aria-hidden="true"></i>
                  </label>
              </div>
              <div class="user">
          </div>
      </div>
      <center>

<div class="main"> 
    <div class="faculty">
    <h2>Delete Achievement</h2>
    <form method="post" id="faculty" action="delachieve.php" method="POST">
        <label>Enter  Achievement Name.. </label>
        <br>
        <input type="text" name="aname" id="name" placeholder="Achievement Name">
      
        <br>
        <br>
        <center>
        <button type="submit" id="button" name="submit"class="btn btn-danger" style="border-radius: 10px;">Delete</button>
        </center>
    </form>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>