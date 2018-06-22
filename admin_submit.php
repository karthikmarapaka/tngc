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
       
        <title>Certification | TNGC</title>
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
        <br>
        <div class="row">
            <div class="col-lg-offset-1 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="list.php" style="width:auto;"><button class="btn btn-info">List</button></a>
            </div>
                           <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-9 col-xs-offset-8">
                               <a href="admin_sub_logout.php"><button class="btn btn-info">Admin Logout</button></a>
                           </div>
                       </div>
        <br><br>
        <div class="container">
            <br>
            
            <div class="row">
                <div class="col-md-offset-2 col md-8 col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center>
                        <h3 class="kar2">
                        The New Generation Computers
                       </h3>
                        </center>
                </div>
                <div class="panel-body">
                    <center><h4 class="text-warning"> 
                        Certificate Entry
                    </h4></center>
                    <form method="post" action="admin_submit.php" enctype="multipart/form-data" autocomplete="on">
                        <div class="form-group">
                            <input type="text" placeholder="Student Mobile Number" name="phone" class="form-control" required autocomplete="off">
                            </div>
                        <div class="form-group">
                            <input type="text" placeholder="Certificate Number" name="certim" class="form-control" required autocomplete="off">
                            </div>
                        <?php
                        
       $message="";
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $g1=mysqli_real_escape_string($a,$_POST['phone']);
            $g2=mysqli_real_escape_string($a,$_POST['certim']);
            $e="SELECT * FROM student WHERE s_mobile_no_s=$g1" or die("search error".$e);
            $t="SELECT * FROM certi WHERE s_phone_c=$g1" or die("search error".$t);
            $q="UPDATE `student` SET `certificate`='$g2' WHERE s_mobile_no_s=$g1" or die("insertion_error".$q);
            date_default_timezone_set("Europe/London");
             $pq="INSERT INTO certi(s_phone_c,date)VALUES($g1,NOW())" or die("insertion_error".$pq);
             $res2=mysqli_query($a,$t);
             $info2=mysqli_fetch_array($res2);
             $res=mysqli_query($a,$e);
             $info= mysqli_fetch_array($res);
             if($info2)
             {
                 
                                 $message="Certificate number has already been issued to this number";
                            echo '<div class="alert alert-danger">';
                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo $message; 
                             echo '</div>';
             }
 else {
     
 if($info)
            {
                                  if($result=mysqli_query($a,$pq))
               {            $re=mysqli_query($a,$q);
                            $message="Certificate is updated in student profile";
                            echo '<div class="alert alert-danger">';
                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo $message; 
                             echo '</div>';
             
               }
            
           
            }
            else
                {
                                 $message="Entered phone number is incorrect";
                            echo '<div class="alert alert-danger">';
                            echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                             echo $message; 
                             echo '</div>';
            }
 }
       }
        mysqli_close($a);
        ?>
                        <div class="form-group">
                          
                        <center>
                            <button class="btn btn-primary" type="submit">
                              Submit
                             </button>
                            </center>
                    </div>
                    </form>
                    
                </div>
                
            </div>
                </div>
                </div>
            </div><br><br>
        
        <footer style="background-color:black; color:rgba(128,128,128,.9); text-align: center; font-size:70%;">
            <div style="padding:4vh 0vw 4vh 0vw;">
                 Copyright &copy; 2018 Web Design by <span>Karma Enterprises ||</span><span> Contact: 9603142527.</span>
            </div>
                </footer>
    </body>
</html>