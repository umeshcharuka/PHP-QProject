<?php
session_start();
//echo $_SESSION['login_user']."</br>";
$login_user=$_SESSION['login_user'];
?>


<?php
include('connection.php');
//$connection = mysql_connect("localhost", "u340247149_root","umeshcharuka"); // Establishing Connection with Server
//$db = mysql_select_db("u340247149_db", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$feild = $_POST['singleselect'];
$passwordmd5=md5($password);

//var_dump($_POST);

if($feild !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into login(username,password,tag,email) values ('$uname', '$passwordmd5', '$feild','$email')");
echo "<br/><br/><span>successfully inserted a user.!!</span>";
}

else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>