
<?php
 	$email = urldecode($_POST['email']);
	$pass = urldecode($_POST['password']);
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='anip';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn)
		{
		echo "Could not connect:".mysql_error();
		}
	mysql_select_db('sanlok');
	$sql="select * from user where email='$email' and password='$pass'";
	$retval=mysql_query( $sql, $conn );
	if(mysql_num_rows($retval)>0)
		{
		echo "Valid user";
		}
	else
	echo "Invalid credentials";
	// print "Entered Data Successfully";

       //  $name  = urldecode($_GET['name']);
       //  $user     = urldecode($_GET['user']);
       //  $email   = urldecode($_GET['email']);
       //  $pass    = urldecode($_GET['password']);

	//        print "<br/>==== GET REQUEST DATA ====<br/>Email: ".$email."<br/>Pass: ".$pass;
	mysql_close($conn);
?>
