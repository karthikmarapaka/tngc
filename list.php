<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['name_ai']))
        {   $name_asi=$_SESSION['name_ai'];
        } 
        else
        {
            header('location: admin.php');
        }
        if(isset($_SESSION['phone_ai']))
        {   $phone_asi=$_SESSION['phone_ai'];
        } 
        else
        {
            header('location: admin.php');
        }

?>
<html>
    <head>
       
        <title>List | TNGC</title>
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
          <link rel="shortcut icon" href="img/logo_3.png"/>
          <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <style type="text/css">
            .background{
                background: url(img/bg_14.jpg) no-repeat center center fixed;
                background-size:cover;
            }
            
        </style>
        
    </head>
    
    <body style=" height:100%; width:100%; overflow-x:hidden;" class="background">
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
        <br><br>
            <div class="row">
            
                           <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-9 col-xs-offset-8">
                               <a href="admin_sub_logout.php"><button class="btn btn-info">Admin Logout</button></a>
                           </div>
                       </div>
        <br>
        <br>
        <div class="row">
            <div class="container">
                <div class="table-respnsive">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr style="color:green;">
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Father name
                            </th>
                            <th>
                                Certificate
                            </th>
                            
                        </tr>
                         <?php 
        $sqla= "SELECT * FROM student WHERE certificate!='Course incomplete'";
        $result=mysqli_query($a,$sqla);
       
        while($row=mysqli_fetch_array($result))
        {   
            
            ?> <tr>
                            <th>
                                <?php echo $row[1];?>
                            </th>
                            <th>
                                <?php echo $row[5];?>
                            </th>
                            <th>
                                <?php echo $row[3];?>
                            </th>
                            <th>
                               <?php echo $row[11];?>
                            </th>
                            
                        </tr> <?php
           
        }
        
        ?>
                    </tbody>
                </table>
                    </div>
            </div>
        </div>
        <br><br>
        
        <footer style="background-color:black; color:rgba(128,128,128,.9); text-align: center; font-size:70%;">
            <div style="padding:4vh 0vw 4vh 0vw;">
                 Copyright &copy; 2018 Web Design by <span>Karma Enterprises ||</span><span> Contact: 9603142527.</span>
            </div>
                </footer>
    </body>
</html>