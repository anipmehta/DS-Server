
<?php
	$name = urldecode($_POST['name']); 	
	$course = urldecode($_POST['course']);
	$email = urldecode($_POST['email']);
	$pass = urldecode($_POST['password']);
	$sem = urldecode($_POST['sem']);
	$spec = urldecode($_POST['spec']);

	$dbhost='localhost';
	$dbuser='root';
	$dbpass='anip';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn)
		{
		print "Could not connect:".mysql_error();
		}
	mysql_select_db('sanlok');
	$sql="INSERT INTO user (name,course,email,password,semester,special) VALUES ('$name','$course','$email','$pass','$sem','$spec')";
	$retval=mysql_query( $sql, $conn );
	if(!retval)
		{
		print "Could not enter data:".mysql_error();
		}
	print "Entered Data Successfully";

       //  $name  = urldecode($_GET['name']);
       //  $user     = urldecode($_GET['user']);
       //  $email   = urldecode($_GET['email']);
       //  $pass    = urldecode($_GET['password']);

       // print "<br/>==== GET REQUEST DATA ====<br/>Email: ".$email."<br/>Pass: ".$pass;
	mysql_close($conn);
?>
