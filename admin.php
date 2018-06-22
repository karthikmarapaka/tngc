<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);
 include "connect.php";
?>
<html>
    <head>
        <title>Admin | TNGC</title>
        <meta content="primary - responsive and retina ready template" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="assets/images/favicon.ico" rel="shortcut icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-precomposed.png" />
    <!-- JS FILES -->
    <script type="text/javascript" src="assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <!-- CSS FILES -->
    <link href="assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/cubeportfolio-3.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script type="text/javascript" src="bootstrap\js\jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="bootstrap\js\bootstrap.min.js">
            </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
      <link rel="shortcut icon" href="img/logo_3.png" />
        <link rel="stylesheet" type="text/css" href="index.css">
      
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <style type="text/css">
            .background{
                background: url(img/bg_13.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
        
    </head>
    <body class="background" style="overflow-x:hidden;">
       
             <header>
        <div class="page_head">
            <div id="nav-container" class="nav-container" style="height: auto;">
                <nav role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 pull-left">
                                <div class="logo">
                                    <a href="index.php" style="text-decoration: none;"><img src="img/logo_4.jpg" alt="LOGO"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 pull-right">
                              <div class="menu dankovteam-menu-wrapper">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                              <div class="navbar-collapse collapse">
                                <div class="menu-main-menu-container">
                                  <ul>
                                    <li class="current-menu-item"><a href="admin.php">Admin</a></li>
                                    <li><a href="#">Student</a>
                                      <ul class="sub-menu">
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="sign_up.php">Sign Up</a></li>
                                      </ul>
                                    </li>
                                 </ul>
                              </div>
                            </div>
                          </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
      </header>
            <br><br><br><br>
             <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col md-8 col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8">
            <div class="panel panel-footer">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        The New Generation Computers
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Only for Admin
                    </h4></center>
                    <form method="post" action="admin.php" enctype="multipart/form-data" autocomplete="on">
                        <div class="form-group">
                            <input type="text" placeholder="Admin Mobile Number" name="name" class="form-control" required autocomplete="on">
                            </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required autocomplete="off">
                            </div>
                        <?php
                        
       
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $g1=mysqli_real_escape_string($a,$_POST['name']);
            $g2=mysqli_real_escape_string($a,$_POST['password']);
            $sql ="SELECT a_name,a_password,a_phone FROM admin WHERE a_phone='$g1'" ;
            if($result=mysqli_query($a,$sql))
            {
            $row=mysqli_fetch_array($result); 
             if($row[1]==$g2)
                 {  $_SESSION['name_ai']=$row[0];
                    $_SESSION['phone_ai']=$row[2];
                  
                 echo "<script type='text/javascript'>window.location.href = 'admin_submit.php';</script>";
                 }
                else
                        {
                            echo '<div class="alert alert-danger">';
                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo 'Details are incorrect. Please try agian'; 
                             echo '</div>';
                         }
            }
           
                
       }
        mysqli_close($a);
        ?>
                        <div class="form-group">
                          
                        <center>
                            <button class="btn btn-primary">
                              Login
                             </button>
                            </center>
                    </div>
                    </form>
                    
                </div>
                
            </div>
                </div>
                </div>
            </div>
            <br>
            <br>
             <footer style="background-color:black; color:rgba(128,128,128,.9); text-align: center; font-size:70%;">
            <div style="padding:4vh 0vw 4vh 0vw;">
                 Copyright &copy; 2018 Web Design by <span>Karma Enterprises ||</span><span> Contact: 9603142527.</span>
            </div>
                </footer>
                    
    </body>
</html>

