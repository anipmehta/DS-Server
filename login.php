
<?php
 	$email = urldecode($_GET['email']);
	$pass = urldecode($_GET['password']);
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='anip';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn)
		{
		print "Could not connect:".mysql_error();
		}
	mysql_select_db('sanlok');
	$sql="INSERT INTO login (email,password) VALUES ('$email','$pass')";
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

        print "<br/>==== GET REQUEST DATA ====<br/>Email: ".$email."<br/>Pass: ".$pass;
	mysql_close($conn);
?>
