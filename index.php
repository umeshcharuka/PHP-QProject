<?php
include('login.php'); // Includes Login Script
$servername = "localhost";
$username = "u340247149_uc";
$password ="umeshcharuka";
$dbname = "u340247149_pro";

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









<html >
  <head>
    <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>IT HELPDESK LOGIN</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login">
  <div class="heading">
    <h2>KDU IT HELPDESK<br></h2>
	<img src="KDU.png" alt="logo" height="150" width="200">
	<!--<h3> <span class="label label-success">WELCOME!!!</span><br></h3>--><br><br>
    <form action="" method="post">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" id="name" name="username" class="form-control" placeholder="Username">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" id="password" name="password"class="form-control" placeholder="Password">
        </div>

        <button name="submit" type="submit" class="float">Login</button>
		<span style="color:red"><?php echo $error; ?></span>
       </form>
 		</div>
 </div>
    
    
    
    
    
  </body>
</html>
