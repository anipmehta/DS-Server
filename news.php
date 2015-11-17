<?php
$course=urldecode($_POST['course']);
$timeinm=urldecode($_POST['time']);
$time=(int)$timeinm;
$sec=$time/1000;
$date= date("Y-m-d H:i:s",$seconds);

//print "minutes is".$min;
//print "hour is ".$hr;
mysql_connect("localhost","root","anip");
mysql_select_db("sanlok");
$q=MYSQL_QUERY("select * from news where course='$course' and date >= '$date' ");
while($row=mysql_fetch_assoc($q))
$json_output[]=$row;
print(json_encode($json_output));
mysql_close();
?>
