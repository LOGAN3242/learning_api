

<?php
error_reporting(1);

    $conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
    mysqli_select_db($conn,"carwashing
	") or die (mysqli_error($conn));


// $db="test";
	$name=$_POST["name"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
// $host="localhost";

// $conn= mysqli_connect($host,$user,$pass, $dp);
if($conn)
{
	echo "DataBase is connected";
	// $q ="select * from user where user like '$user' and pass like '$pass' ";
	// $q ="select * from user where user='test' and pass='test' ";
	$sql1 = "SELECT * FROM `users` WHERE username='$name'";	
	//$raw = mysqli_query($conn,$sql1);

	$result = mysqli_query($conn,$sql1);
	$count =mysqli_num_rows($result);
	
	if($count>0)
	{
		echo "login successfull.....!";
	}
	else
	{
		echo "login failed....!";	
	}
	
}
else
{
	echo "NOT CONNECTED......! ";
}



?>