<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=md5($_POST['password']);
include('connection.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database



// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1){
$_SESSION['login_user']=$username; // Initializing Session
//$query1 = mysql_query("select tag from login", $connection);
//$rows1 = mysql_num_rows($query1);
/*if($rows1 =='stu' ){


/header("location: profile2.php"); // Redirecting To Other Page
}
else{
header("location:profile.php");
}*/
} else {
$error = "Username or Password is invalid";}

mysql_close($connection); // Closing Connection
}
}
?>