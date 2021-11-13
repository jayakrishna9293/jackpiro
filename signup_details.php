<?php

$username="root";
$password="";
$database_name="signup";

$conn=mysqli_connect('localhost',$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	 $emails = $_POST['emails'];
	 $paswd = $_POST['paswd'];
	 $repeat_paswd = $_POST['paswd_repeat'];
	 
	 $sql_query = "INSERT INTO signups (emails,paswd,repeat_paswd)
	 VALUES ('$emails','$paswd','$repeat_paswd')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>;