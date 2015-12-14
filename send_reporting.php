<?php
//connection to the database

$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("arua_prison", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

//get data
$la = $_POST['id'];
$lb = $_POST['fname'];
$lc = $_POST['phone'];
$ld = $_POST['gender'];
$le = $_POST['email'];
$lf = $_POST['adress'];
$lg = $_POST['date_incid'];
$lh = $_POST['offender'];
$li = $_POST['type_incid'];
$lj = $_POST['staf_member'];
$lk = $_POST['inst_crime'];
$ll = $_POST['descript_crime'];

//insert into the table

$sql = "INSERT INTO reporting(id, fname, phone, gender, email, adress, date_incid, offender, type_incid, staf_member, inst_crime, descript_crime ) values('$la', '$lb', '$lc', '$ld', '$le', '$lf', '$lg', '$lh', '$li', '$lj', '$lk', '$ll')";
$result = mysql_query($sql) or die("can not yet connect to mysql");
header ("location:index.php");

?>