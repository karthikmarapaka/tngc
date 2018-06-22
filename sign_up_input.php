<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);

include "connect.php";
if(isset($_SESSION['name_as']))
        {   $name_sui=$_SESSION['name_as'];
        } 
        else
        {
            header('location: sign_up.php');
        }
        if(isset($_SESSION['phone_as']))
        {   $phone_sui=$_SESSION['phone_as'];
        } 
        else
        {
            header('location: sign_up.php');
        }

?>
<html>
    <head>
       
        <title>Sign Up | TNGC</title>
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
                background: url(img/bg_10.jpg) no-repeat center center fixed;
                background-size:cover;
            }
        </style>
        
    </head>
    
    <body style=" height:100%; width:100%; overflow-x: hidden;" class="background">
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
                   <div class="container">
                       <br><br>
                       <div class="row">
                           <div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-9 col-xs-offset-8">
                               <a href="admin_logout.php"><button class="btn btn-info">Admin Logout</button></a>
                           </div>
                       </div>
        <div class="row" style="margin-top:10vh;margin-bottom:10vh;">
            <div class=" col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-2 col-lg-8">
        <div class=" panel-primary">
            <div class="panel-heading kat3">
                <h4>
                    Enter your details
                </h4>
            </div>
            <div class="panel-body">
                
                <br>
                <form class="form" method="post" action="sign_up_input.php" enctype="multipart/form-data" autocomplete="on">
                   
                    <?php
$message="";
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
    {
                $b=mysqli_real_escape_string($a,$_POST['first_name']);
                $c=mysqli_real_escape_string($a,$_POST['sur_name']);
                $d=mysqli_real_escape_string($a,$_POST['father_name']);
                $e=mysqli_real_escape_string($a,$_POST['mother_name']);
                $f=mysqli_real_escape_string($a,$_POST['student_phone_no']);
                $g=mysqli_real_escape_string($a,$_POST['parent_phone_no']);
                $h_string = implode(', ', $_POST['long']);
                $i_string = implode(', ', $_POST['short']);
                $j=mysqli_real_escape_string($a,$_POST['address']);
               
                
                          
                             
                //error_reporting(0);
 if (preg_match("/^[a-zA-Z ]*$/",$b)) 
 {
 if (preg_match("/^[a-zA-Z ]*$/",$c))
        {       
             
                            if (preg_match("/^[a-zA-Z ]*$/",$d)) 
                                    {
                                            if (preg_match("/^[a-zA-Z ]*$/",$e))
                                                   {
                                                       if (preg_match("/^[0-9]*$/",$f))
                                                               {
                                                                       if (preg_match("/^[0-9]*$/",$g)) 
                                                                                 {   $t="SELECT * FROM student WHERE s_mobile_no_s=$f" or die("search error".$t);
                                                                                     $res2=mysqli_query($a,$t);
                                                                                     $info2=mysqli_fetch_array($res2);
                                                                                        if($info2){
                                                                                                     $message="This number is already registered.";
                                                                                                                     echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                                                                    }
                                                                                                    else{
                                                                                                        $q="INSERT INTO student(first_name_s,sur_name_s,father_name_s,mother_name_s,s_mobile_no_s,p_mobile_no_s,long_s,short_s,address_s,time_s)VALUES ('$b','$c','$d','$e','$f','$g','$h_string','$i_string','$j',NOW())" or die("insertion_error".$q);
                                                                                                    if($sr=mysqli_query($a,$q))
                                                                                                            {
                                                                                                                    $message="Registration successful.Go to Login page to verify";
                                                                                                                    
                                                                                                                       echo '<div class="alert alert-danger">';
                                                                                                                       echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                       echo '</div>';
                                                                                                                    
                                                                                                            }
                                                                                                    else
                                                                                                            {
                                                                                                                    $message="Error! Registration is unsuccessful. Please try again.";
                                                                                                                     echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
  
                                                                                                            }
                                                                                                    }
                                                                                                }
                                                                                            
      
                                                                                 }
                                                                       else
                                                                              {
                                                                              $message="Error! Parent phone number must contain digits only";
                                                                               echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                                              }
                                                               }
                                                               
                                                   
                                                 else 
                                                     {
                                                     $message="Error! Mother name must contain alphabets and spaces only";
                                                      echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                      }
                                    }
                                    else 
                                                     {
                                                     $message="Error! Father name must contain alphabets and spaces only";
                                                      echo '<div class="alert alert-danger">';
                                                                                                                     echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                        echo '</div>';
                                                      }
                                    
                                    }
                                    
                    
                    else 
                                   {
                                      $message="Error! Sur name must contain alphabets and spaces only";
                                       echo '<div class="alert alert-danger">';
                                                                                       echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                           echo $message; 
                                                                                                    echo '</div>';
                                   }
    }
    
    else 
                                   {
                                      $message="Error! First name must contain alphabets and spaces only";
                                       echo '<div class="alert alert-danger">';
                                                                                                                 echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                                                                                                                       echo $message; 
                                                                                                                    echo '</div>';
                                   }
                 }
        
 mysqli_close($a);
?>                    
                    <div class="form-group">
                        <input type="text" placeholder="First Name" name="first_name" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Sur Name" name="sur_name" class="form-control" required="true">
                    </div>
                                        
                     <div class="form-group">
                        <input type="text" placeholder="Father Name" name="father_name" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Mother Name" name="mother_name" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" placeholder="Student Mobile No" name="student_phone_no" class="form-control" required="true">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Parent Mobile No" name="parent_phone_no" class="form-control" required="true">
                    </div>
                                        
                    <div class="form-group">
                    <select name="long[]" placeholder="Long Term Courses" class="form-control" multiple="multiple" required="true">
                        <option value="eg_branch" disabled="true" selected>Long Term Courses</option>
                                            <option value="NULL">NULL</option>
                                            <option value="DCA">DCA</option>
                                            <option value="ADCA">ADCA</option>
                                            <option value="PGDCA">PGDCA</option>
                                            <option value="PGDSE">PGDSE</option>
                                            <option value="Spoken English">Spoken English</option>
                                            <option value="DTP">DTP</option>
                                            <option value="Web Designing">Web Designing</option>
                                            <option value="Accounting Package">Accounting Package</option>
                                            <option value="Advanced Excel">Advanced Excel</option>
                                             </select>
                    </div>
                    <div class="form-group">
                    <select name="short[]" placeholder="Short Term Courses" class="form-control" multiple="multiple"required="true">
                        <option value="eg_branch" disabled="true" selected>Short Term Courses</option>
                                            <option value="NULL">NULL</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Internet Concept">Internet Concept</option>
                                            <option value="MS-Office">MS-Office</option>
                                            <option value="Tally 9.0/ ERP GST">Tally 9.0/ ERP GST</option>
                                            <option value="C Language">C Language</option>
                                            <option value="C++ with oops">C++ with oops</option>
                                            <option value="Oracle">Oracle</option>
                                            <option value="Advanced Excel">Advanced Excel</option>
                                            <option value="Core java (J2SE)">Core java (J2SE)</option>
                                            <option value="Advanced java(J2EE">Advanced java(J2EE)</option>
                                            <option value="Android">Android</option>
                                            <option value="Cloud Computing">Cloud Computing</option>
                                            <option value="Java script">Java script</option>
                                            <option value="Angular JS">Angular JS</option>
                                            <option value="Node JS">Node JS</option>
                                            <option value="JQuery and HTML">JQuery and HTML</option>
                                            <option value="CSS">CSS</option>
                                            <option value="Bootstrap">Bootstrap</option>
                                            <option value="PHP">PHP</option>
                                            <option value="Photoshop">Photoshop</option>
                                            <option value="Coreldraw">Coreldraw</option>
                                   </select>
                    </div>
                             <div class="form-group">
                        <textarea name="address" class="form-control" placeholder="Address..." rows='3' required="true"></textarea>
                    </div>
                                   <br>
                                       <div class="form-group">
                        <center class='col-lg-offset-4 col-xs-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                             <input type='submit' class=' btn btn-primary form-control' value='Submit'>            
                        </center>
                    </div>
                </form>
                
            </div>
           
        </div>
          </div>
        </div>
            </div> 
       <footer style="background-color:black; color:rgba(128,128,128,.9); text-align: center; font-size:70%;">
            <div style="padding:4vh 0vw 4vh 0vw;">
                 Copyright &copy; 2018 Web Design by <span>Karma Enterprises ||</span><span> Contact: 9603142527.</span>
            </div>
                </footer>
    </body>
</html>
