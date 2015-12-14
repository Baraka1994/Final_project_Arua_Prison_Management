<?php
//Start the session
session_start();

include_once 'Server_connection.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact || info</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Navigation -->
     <?php include_once("header.php") ?>
      

    <div class="container">
        <div class="row">
            <div class="box">
               
                <div class="col-md-8">
                   
  <div id="main">
<div id="login">
<h2>Login Form</h2>
<form method="post">
  <label>Email :</label>
<input id="name" type="text" name="email" placeholder="Your Email" required>

  <label>Password :</label>
<input id="password" type="password" name="pass" placeholder="Your Password" required>

  <input type="submit" name="btn-login" value=" Login ">
<center><a href="register.php">Sign Up</a></center>

  </form>
</div>

                </div>
                <div class="col-md-4">
                     
                <br><br>
                   </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

                                    </div>
                        </div>
                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php  include_once("footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
