<?php

session_start();
include "conn.php";
include "sidebarfac.php";

$fname =$_SESSION['facultyuser'];
$result = mysqli_query($conn,"SELECT * FROM achieve WHERE fname='$fname'");

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
    <title>Document</title>
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
      <br><br><br>
      <center>
<h1 style="Color:White;">Update Achievment</h1>
</center>
<br>
<?php
if(mysqli_num_rows($result)>0){
?>
<table class="table table-dark">
    <tr>
        <!-- <td>ID</td> -->
        
        <td>Faculty Name</td>
        <td>Achievment Type</td>
        <td>Achievment Name</td>
        <td>Date Achieved</td>
        <td>Action</td>
    </tr>
    <?php
    
    $i =0;
    while($row=mysqli_fetch_array($result)){
    ?>
    <tr>
        <!-- <td><?php //echo $row["id"];   ?></td> -->
        <td><?php echo $row["fname"];   ?></td>
        <td><?php echo $row["atype"];   ?></td>
        <td><?php echo $row["aname"];   ?></td>
        <td><?php echo $row["dateach"];   ?></td>
        
        <td><a  href="updateach.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
    </tr>
    <?php
    $i++;
    }   
    ?>
</table>
<?php
}
else{
    echo "No Classes found";
}
?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>