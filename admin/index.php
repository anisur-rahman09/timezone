<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
	
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];


$host=
$user="atom";
$pass="atom1234";
$db="atom";



$connection = mysql_connect($host,$user,$pass);

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


// Selecting Database
$db = mysql_select_db($db, $connection);


// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from users where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; 
header("location: admin.php");
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); 
}
}
?>