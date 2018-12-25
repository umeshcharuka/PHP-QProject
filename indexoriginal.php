<?php
include('login.php'); // Includes Login Script
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */




if(isset($_SESSION['login_user'])){
$login_user=$_SESSION['login_user'];

$query ="select * from login where username='$login_user'";
$result1 = $conn->query($query);
$rows1 = $result1->fetch_assoc();
if($rows1["tag"] =='stu'){


header("location: profile.php"); // Redirecting To Other Page
}
elseif($rows1["tag"]=='admin'){
header("location:admin.php");
    }
else{
header("location:profile2.php");
}
//header("location: profile2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style3.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>