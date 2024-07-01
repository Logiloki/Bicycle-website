
<?php
$host= "localhost";
$username= "root";
$password = "";

$db_name = "order_bicycle";

$conn = mysqli_connect($host, $username, $password, $db_name);


if (!$conn)
{
echo "Connection failed!". "<br>";
}
$ur=$_POST["user"];
$eid=$_POST["eid"];
$eb=$_POST["eb"];
$sb=$_POST["sb"];
$nb=$_POST["nb"];
$mb=$_POST["mb"];

$sql = "INSERT INTO tab1 (name,email,ebicycle,sportsbiycle,normalbicyle,modifybicyle)
VALUES ('$ur','$eid','$eb','$sb','$nb','$mb')";
if(mysqli_query($conn,$sql)){
    echo "Your order was successfully placed.";
}
else{
    echo "error". mysqli_error($conn); ;
}
$conn->close();

?>

</body>
</html>