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
	 $uname = $_POST['uname'];
	 $paswd = $_POST['paswd'];
	
	 
	 $query="select * from signups where emails='$uname' and paswd='$paswd'";
	 $result=mysqli_query($conn,$query);
	 $count=mysqli_num_rows($result);

	 if ($count>0) 
	 {
		echo "Login successfull !";
	 } 
	 else
     {
		echo "Login Failed !";
	 }
	 mysqli_close($conn);
}
?>;