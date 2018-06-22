<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['name_sl']))
        {   $name_sd=$_SESSION['name_sl'];
        } 
        else
        {
            header('location: login.php');
        }
        if(isset($_SESSION['phone_sl']))
        {   $phone_sd=$_SESSION['phone_sl'];
        $ro="";
      
            $sqla= "SELECT * FROM student WHERE s_mobile_no_s='$phone_sd'";
            $rr="SELECT date FROM certi WHERE s_phone_c='$phone_sd'";
            if($result=mysqli_query($a,$sqla))
            {
                $row=mysqli_fetch_row($result);
            }
            
            if($res=mysqli_query($a,$rr))
            {
                $rrr=  mysqli_fetch_row($res);
                if($rrr!='')
                $ro=$rrr[0];
               else
                   $ro='Not yet Completed';
            }
            else
            {   
                $ro='Not yet completed';
            }
        }
        else
        {
            header('location: login.php');
        }

?>
<html>
    <head>
       
        <title>Details | TNGC</title>
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
                background: url(img/bg_8.gif) no-repeat center center fixed;
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
        <br>
        <div class="row">
                           <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-9 col-xs-offset-8">
                               <a href="student_logout.php"><button class="btn btn-info">Student Logout</button></a>
                           </div>
                       </div>
        <br>
        <br>
        <form method="post" action="my_account.php" enctype="multipart/form-data" autocomplete="on">
            <div class="container">
                         <div class="jumbotron">   
                            
                        
                        <div class="form-group">
                   <div class="row">  
                        <label for="first_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>First Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text"  id="first_name" placeholder="First Name" readonly name="first_name1" class="form-control" value="<?php echo $row[1]; ?>">
                    </div>
                   
                    </div>
               </div>
                        <div class="form-group">
                   <div class="row">  
                        <label for="sur_name" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Sur Name</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="sur_name"placeholder="Sur Name" name="sur_name" readonly class="form-control" value="<?php echo $row[2]; ?>">
                    </div>
                   
                    </div>
               </div>
                      
                     
                        
                        
                   <div class="form-group">
                       <div class="row">
                        <label for="ltc" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Long Term Courses</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="ltc" placeholder="Long Term Courses" name="ltc" class="form-control" readonly value="<?php echo $row[7]; ?>">
                    </div>
                       </div>
                    </div> 
                         <div class="form-group">
                       <div class="row">
                        <label for="stc" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Short Term Courses</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="stc" placeholder="Short Term Courses" name="stc" class="form-control" readonly value="<?php echo $row[8]; ?>">
                    </div>
                    </div> 
                       </div>
                        
                        
                         <div class="form-group">
                   <div class="row">  
                        <label for="doa" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Date of admission</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="doa" placeholder="Date of Admission" name="doa" class="form-control"  readonly value="<?php echo $row[10]; ?>">
                    </div>
                   
                    </div>
               </div>   
                             <div class="form-group">
                   <div class="row">  
                        <label for="course_completed" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Course Completed</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                        <input type="text" id="course_completed" placeholder="Course completion date" name="course_completed" class="form-control"  readonly value="<?php echo $ro; ?>">
                    </div>
                   
                    </div>
               </div>   
                        <div class="form-group">
                   <div class="row">  
                        <label for="certificate" class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
                            <center>Certificate No.</center></label>
                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-7">
                            <input type="text" id="certificate" placeholder="Certificate" name="certificate" class="form-control" value="<?php echo $row[11]; ?>" readonly="true">
                    </div>
                   
                    </div>
               </div>   
                        
          
                
                </div>
        
       
        
        
                       
            
        </div>       
                        </form>
        <br>
        
        <br>
        <footer style="background-color:black; color:rgba(128,128,128,.9); text-align: center; font-size:70%;">
            <div style="padding:4vh 0vw 4vh 0vw;">
                 Copyright &copy; 2018 Web Design by <span>Karma Enterprises ||</span><span> Contact: 9603142527.</span>
            </div>
                </footer>
    </body>
</html>