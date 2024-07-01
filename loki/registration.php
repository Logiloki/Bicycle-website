<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";

$db_name = "registration_bicycle";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
echo "Connection failed!". "<br>";
}
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$un=$_POST["uname"];
$eid=$_POST["eid"];
$ph=$_POST["pno"];
$p1=$_POST["pwrd"];
$p2=$_POST["confpwrd"];

$sql = "INSERT INTO tab1 (first_name,last_name,user,email,phno,pass,cpass)
VALUES ('$fn','$ln','$un','$eid','$ph','".md5($p1)."','".md5($p2)."')";
if (mysqli_query($conn, $sql))
{

header ('Location:login.php');
exit();

}
else
{

echo "Error: " . $sql . " " . mysqli_error($conn);

}

$conn->close();

?>

</body>
</html>