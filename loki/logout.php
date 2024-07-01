<?php
session_start();
if(isset($_SESSION['login_status']) && $_SESSION['login_status']==true)
{
    unset($_SESSION['login_status']);
    unset($_SESSION['empid']);
    unset($_SESSION['dept']);
    unset($_SESSION['name']);
 
    session_destroy(); 
    header('Location:login.php');
}
else
    header('Location:login.php');

?>