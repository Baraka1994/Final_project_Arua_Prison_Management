<?php
//Start the session
session_start();
include_once 'Server_connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About || Arua prison</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

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
<form  method="post" action="send_transfer.php">
    <div class="container">

        <div class="row">
            <div class="box">
                
                       
                <div class="clearfix"></div>
            </div>
        </div>

  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Prison Transfer Forms.</strong>
                    </h2>
                    <hr>
                        <h4>Transfer Form </h4>
                         <form action="send_transfer.php" name="sentMessage" id="contactForm" novalidate>
                   <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="first name">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Second name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="second name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control" placeholder="Status">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Institution Adress</label>
                                        <input type="text" name="inst_adress" class="form-control" placeholder="Institution Adress">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Name of Supervisor </label>
                                        <input type="text" name="nsupervisor" class="form-control" placeholder="Name of Superisor">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Offenders Adress </label>
                                        <input type="text" name="ofadress" class="form-control" placeholder="Offenders Adress">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Outstanding Charges </label>
                                        <input type="text" name="outcharge" class="form-control" placeholder="Outstanding Charges">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                        <label>Sex</label>
                                        
                                        <p>Male 
                                          <input type="checkbox" name="sex" value="Male">
                                    Female 
                                    <input type="checkbox" name="sex" value="Female">
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                      <label>Language </label>
                                      <p>
                                        <select name="language">
                                          <option value="Select">Select</option>
                                          <option value="English">English</option>
                                          <option value="French">French</option>
                                          <option value="Arabic">Arabic</option>
                                          <option value="Swahili">Swahili</option>
                                          <option value="Spanich">Spanich</option>
                                          <option value="Luganda">Luganda</option>
                                          <option value="Chiness">Chiness</option>
                                          <option value="Italian">Italian</option>
                                        </select>
                                    </p>
                                  </div>
                                </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                        <label>Previour Convictions </label>
                                        <p>
                                          <input type="checkbox" name="pre_conviction" value="Yes">
                                    Yes 
                                    <input type="checkbox" name="pre_conviction" value="No">
                                    No  </p>
                                  </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                      <label>History of Violence<br>
                                      Minor 
                                      <input type="checkbox" name="hist_violence" value="Minor">
                                       Senior 
                                       <input type="checkbox" name="hist_violence" value="Senior">
                                       <br>
</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Date of Transfer </label>
                                        <input type="text" name="date_transfer" class="form-control" placeholder="Date of Transfer">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Medical Ailments </label>
                                        <input type="text" name="medical" class="form-control" placeholder="Medical Ailments">
                                     </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Offenders Name</label>
                                        <input type="text" name="ofname" class="form-control" placeholder="Offenders Name">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group form-group">
                        <div class="controls">
                            <label>Place Sentenced:</label>
                            <textarea rows="10" name="place_sentence" cols="100" name="place_sentence" class="form-control" id="message" required data-validation-required-message="Place Sentenced" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                            <center><button type="submit"  class="btn btn-two">Register Now</button><p><br/></p></center>
                </form>

            </div>
            </div>
        </div>

        <?php include_once("header.php") ?>
<form  method="post" action="send_reporting.php">
     <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Crime Reporting Forms.</strong>
                    </h2>
                    <hr>
                      <h4>Reporing Form </h4>
                         <form action="send_reporting.php" name="sentMessage" id="contactForm" novalidate>
                   <form action=".php" name="sentMessage" id="contactForm" novalidate>
                                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="your name">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="your phone number">
                                    </div>
                                </div>
                           </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" name="gender" class="form-control" placeholder="Gender">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                        <label>Adress</label>
                                        <input type="text" name="adress" class="form-control" placeholder="Your Adress">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Date of Incident </label>
                                        <input type="text" name="date_incid" class="form-control" placeholder="Date of Incident">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Offenders </label>
                                        <input type="text" name="offender" class="form-control" placeholder="Offenders">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Type of Incident </label>
                                        <input type="text" name="type_incid" class="form-control" placeholder="Type of incident">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Staff Members </label>
                                        <input type="text" name="staf_member" class="form-control" placeholder="Staff Members">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Institute of crime </label>
                                        <input type="text" name="inst_crime" class="form-control" placeholder="Institute of crime">
                                    </div>
                                </div>
                           </div>
                            <div class="control-group form-group">
                        <div class="controls">
                            <label>Description of Incident :</label>
                            <textarea rows="10" name="descript_crime" cols="100" class="form-control" id="message" required data-validation-required-message="Description of Incident" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                            <center><button type="submit" class="btn btn-two">Register Now</button><p><br/></p></center>
                </form>
            </div>
                   
                </div>
            </div>
        </div>
           

        
<div class="clearfix"></div>
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
