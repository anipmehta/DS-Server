<?php
$course=urldecode($_POST['course']);
$sem=urldecode($_POST['sem']);
//$course=urldecode($_GET['course']);
//$sem=urldecode($_GET['sem']);
mysql_connect("localhost","root","anip");
mysql_select_db("sanlok");
$q=MYSQL_QUERY("select * from classes where subject='$course' and sem='$sem'");
while($row=mysql_fetch_assoc($q))
$json_output[]=$row;
print(json_encode($json_output));
mysql_close();
?>
