<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleBoo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
</head>
<body>
    
  <div class="mainhead">
      <div class="overlay">
        <div class="vertical-nav" id="sidebar">
            <div class="pl-5 ml-3 mb-4">
                <div class="media d-flex align-items center mt-3">
                    <img src="img/Prima1.jpg" alt="" class="mr-3 rounded-circle img-thumbnail shadow-sm" style="height:5rem; width: 5rem;">
                    <div class="media-body text-white"><h4 class="mb-3 pt-1" >
                    PrimaFaculty
                    </h4>
                    <p class="text-white mb-0" style="font-size: 20px;">
                        User
                    </p>
                </div>
                </div>
            </div>
    
            
                <h4 class="text-gray font-weight-bold text-uppercase px-3 pb-2 small" style="font-size: 2rem;">
                    Dashboard
                </h4>
            
    
            <ul class="nav flex-column mb-0" style="font-size: larger; margin-top: -10px;margin-bottom: -30px;">
                <li class="nav-item" style="margin-bottom:5px">
                    <a href="user.php" class="nav-link text-white">
                        <i class="fa fa-home mr-3 text-white fa-2x"></i>
                        <span style="padding-left: 30px;">Home</span>
                    </a>
                </li>
    
           
    
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a href="class.php" class="nav-link text-white">
                        <i class="fa fa-book mr-3 text-white fa-2x"></i>
                        <span  style="padding-left: 20px;">Classes</span>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>