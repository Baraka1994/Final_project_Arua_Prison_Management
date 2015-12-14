<?php
//my work of post graduate school
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("arua_prison", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['subject'];
$e = $_POST['message'];
//inserting into my table which is contact
$sql = "insert into contact(id,name,email,phone,subject,message) values('$id','$a', '$b', '$c','$d', '$e')";
$result = mysql_query($sql) or die("can not yet connect to mysql");
header ("location:index.php");

?>