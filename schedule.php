<html>
<head>
</head>
<title>
Class Schedule
</title>
<h1> Class Schedule</h1>
<br><br><br>
<body>
<form method="POST">
Subject Name<input type="text" name="sname"><br>
Course<input type="text" name="course"><br>
Semester<input type="text" name="sem"><br>
Specialisation<input type="text" name="spec"><br>
Taught By<input type="text" name="teacher"><br>
Date<input type="date" name="date"><br>
Time<input type="text" name="time"><br>

<input type="submit" name="insert" value="Insert"><br>
</form>
<?php
if(isset($_POST['insert'])){
$sub=strtolower($_POST['sname']);
$course=strtolower($_POST['course']);
$sem=strtolower($_POST['sem']);
$spec=strtolower($_POST['spec']);
$teacher=strtolower($_POST['teacher']);
$date=strtolower($_POST['date']);
$time=strtolower($_POST['time']);
mysql_connect('localhost','root','anip');
mysql_select_db("sanlok");
$query="insert into class(name,subject,date,time,sem,spec,teacher) values ('$sub','$course','$date','$time','$sem','$spec','$teacher')";
//if($res=mysql_query($query))
//echo "Data inserted succesfully!!!!!Refresh the page to enter more";
//else 
//echo mysql_error;
$query2="insert into classes (name,subject,date,time,sem,spec,teacher) values ('$sub','$course','$date','$time','$sem','$spec','$teacher')";
if($res2=mysql_query($query2))
echo "Data inserted succesfully!!!!!!Refresh the page to enter more";
else
echo mysql_error();

}
?>

