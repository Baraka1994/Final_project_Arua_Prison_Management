<?php
//connection to the database
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("arua_prison", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");


//get data
$a = $_POST['id'];
$b = $_POST['fname'];
$c = $_POST['lname'];
$d = $_POST['status'];
$e = $_POST['inst_adress'];
$f = $_POST['nsupervisor'];
$g = $_POST['ofadress'];
$h = $_POST['outcharge'];
$i = $_POST['sex'];
$j = $_POST['language'];
$k = $_POST['pre_conviction'];
$l = $_POST['hist_violence'];
$m = $_POST['date_transfer'];
$n = $_POST['medical'];
$o = $_POST['ofname'];
$p = $_POST['place_sentence'];

//insert into the table
$sql = "INSERT INTO transfer(id, fname, lname, status, inst_adress, nsupervisor, ofadress, outcharge, sex, language, pre_conviction, hist_violence, date_transfer, medical, ofname, place_sentence) values('$a', '$b', '$c', '$d' ,'$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')";
$done = mysql_query($sql) or die("can not yet connect to mysql");

	header ("location:index.php");


?>