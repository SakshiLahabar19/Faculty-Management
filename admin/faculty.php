<?php
session_start();

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
    <title>Document</title>
</head>
<body>
<?php if($_SESSION['role']=='faculty') ?>
  <div class="mainhead">
    <div class="overlay">
      <div class="vertical-nav" id="sidebar">
          <div class="pl-5 ml-4 mb-4">
              <div class="media d-flex align-items center mt-3">
                  <img src="img/Prima1.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm" style="height:5rem; width: 5rem;">
                  <div class="media-body text-white"><h4 class="mb-3 pt-1" >
                  PrimaFaculty
                  </h4>
                  <p class="text-white mb-0" style="font-size: 20px;">
                      Admin
                  </p>
              </div>
              </div>
          </div>
  
          
              <h4 class="text-gray font-weight-bold text-uppercase px-3 pb-2 small" style="font-size: 2rem;">
                  Dashboard
              </h4>
          
  
          <ul class="nav flex-column mb-0" style="font-size: larger; margin-top: -10px;margin-bottom: -30px;">
              <li class="nav-item" style="margin-bottom:5px">
                  <a href="AdminBoo.html" class="nav-link text-white">
                      <i class="fa fa-home mr-3 text-white fa-2x"></i>
                      <span style="padding-left: 30px;">Home</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom:-24px;">
                  <a href="#" class="nav-link text-white" data-toggle="collapse" data-target="#dept">
                      <i class="fa fa-building mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 30px;">Departments</span>
                      <span><i class="fa fa-caret-down" style="margin-left: 25%;"></i></span>
                  </a>
  
                  <div class="collapse" id="dept"  style="padding-left: 90px;font-size:1rem;">
                      <ul class="flex-column text-white">
                          <li class="under" style="margin-bottom: -10px;">
                              <a href="ASdep.html" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                  Applied Sciences
                              </a>
                          </li>
                          <li class="under" style="margin-bottom: -10px;">
                              <a href="Humanities.html" class="nav-link text-white" style="font-weight:400;font-style: italic;font-size: 15px;">
                                  Humanities
                              </a>
                          </li>
                          <li  class="under" style="margin-bottom: -10px;">
                              <a href="Department.html" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                  Engineering
                              </a>
                          </li>
                          <li class="under" style="margin-bottom:20px">
                              <a href="Management.html" class="nav-link text-white" style="font-weight:400;font-style: italic;;font-size: 15px;">
                                  Management Technology
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
           
              <li class="nav-item" style="margin-bottom:5px">
                  <a href="faculty.html" class="nav-link text-white">
                      <i class="fa fa-user mr-3 text-white fa-2x"></i>
                      <span style="padding-left:35px;">Faculties</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="Subject.html" class="nav-link text-white">
                      <i class="fa fa-book mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 27px;">Subjects</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="#" class="nav-link text-white">
                      <i class="fa fa-graduation-cap mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 13px;">Classes</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="Leave.html" class="nav-link text-white">
                      <i class="fa fa-paper-plane mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 24px;">Leaves</span>
                  </a>
              </li>
  
              <li class="nav-item" style="margin-bottom: 5px;">
                  <a href="#" class="nav-link text-white">
                      <i class="fa fa-key mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 20px;">Change Password</span>
                  </a>
              </li>
  
              <li class="nav-item ">
                  <a href="../logout.php" class="nav-link text-white">
                      <i class="fa fa-sign-out mr-3 text-white fa-2x"></i>
                      <span  style="padding-left: 24px;">Logout</span>
                  </a>
              </li>
          </ul>
      </div>
  
  
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

      <div class="container">
        <h1 class="mb-5 mt-5 text-white text-center ">" WELCOME <?php echo $_SESSION['facultyuser'];?> </h1>
          </div>

          <div class="text-white text-center ">
            <br>
         <h1 > Search Faculty</h1>
         <div>
           <br>
           

           <form class=" form-center ">
            
                
                 <input placeholder="Name" class="N">
                 <label > in </label>
                 <select class="form-select form-select-lg mb-3 S" aria-label=".form-select-lg example">
                   <option selected>Select Department</option>
                   <option value="1">Computer Science & Engineering</option>
                   <option value="2">Civil Engineering</option>
                   <option value="3">Information Technology</option>
                   <option value="4">Electrical Engineering</option>
                   <option value="5">Mechenical Engineering</option>
                   <option value="6">Electronics & Communication Engineering</option>
                   <option value="7">Industrial Engineering</option>
                   <option value="8">Electronics Engineering</option>
                   <option value="9">Electronics Design Technology</option>
                   <option value="10">Biomedical Engineering</option>
                   <option value="11">Departments of Applied Sciences</option>
                   <option value="12">Departments of Humanities</option>
                   <option value="13">Management Technology</option>
                   <option value="14">Departments of Physics</option>
                   <option value="15">Departments of Chemistry</option>
                   <option value="16">Departments of Mathematics</option>

                 </select>
                 <button class="btn btn-info" type="button" style="border-radius: 10px;">Search</button>
                 <button class="btn btn-success" type="button" style="border-radius: 10px;">Add</button>
                 <button class="btn btn-danger" type="button" style="border-radius: 10px;">Delete</button>
           
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