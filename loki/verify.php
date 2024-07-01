<?php
session_start();
$un=$_POST['username'];
$email=$_POST['email'];
$pwrd = md5($_POST['password']);
$host= "localhost";
$username= "root";
$password = "";
$db_name = "registration_bicycle";
$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
echo "Connection failed!". "<br>";
}
$sql="SELECT * FROM tab1 WHERE user='$un' AND email='$email' AND pass='$pwrd'";
$result=$conn->query($sql);

if($result->num_rows == 1){
	$_SESSION['name']=$un;
	$_SESSION['login_status']=true;
	
	echo 'valid';
}
else{
	echo 'invalid';
}


?>