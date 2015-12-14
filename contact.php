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
      <form  method="post" action="connect.php">

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Contact
                        Arua Prisons Below</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <tr>
        <td><b><strong><font size="2">Name</font></strong></b></td>
      </tr>
      <tr>
        <td><input type="text" name="name" placeholder="enter name "  required="required" data-validation-required-message="Please enter your name." /></td>
      </tr>
      <tr>
        <td height="15" rowspan="2">&nbsp;</td>
        <td><b><strong><font size="2">Email</font></strong></b></td>
        </tr>
      <tr>
        <td><input type="text" name="email" placeholder="enter email "  required="required" data-validation-required-message="Please enter your email adress." /></td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td><b><strong><font size="2">Phone</font></strong></b></td>
        </tr>
      <tr>
        <td><input type="text" name="phone" placeholder="enter phone"  required="required" data-validation-required-message="Please enter your phone number." /></td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td height="24"><p><b><strong><font size="2">Subject</font></strong></b></p>
          <p>
            <input type="text" name="subject" placeholder="enter subject"  required="required" data-validation-required-message="Please enter your subject." />
          </p></td>
        </tr>
      <tr>
        <td height="24">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td height="21"><b><strong><font size="3">Message</font></strong></b></td>
        <td width="116" rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td><textarea name="message" cols="30" rows="10" class="form-control"  placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea></td>
      </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-xl">Send Message</button></td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
  <tr>
    <td height="23" colspan="4"><span class="style3"></em></span></td>
  </tr>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>(+256)792215744 </strong>
                    </p>
                    <p>Email:
                        <strong><a href="aruaprison@yahoo.com">aruaprison@yahoo.com</a></strong>
                    </p>
                    

                    </p>
                    <p>Address:
                         P.O Box 56446 Arua,Uganda<br>  
                <br><br>
                   </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

                                    </div>
                        </div>
                    </form>
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
