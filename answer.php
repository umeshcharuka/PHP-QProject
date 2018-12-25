<html>
<?php
session_start();
//echo $_SESSION['login_user']."</br>";
$login_user=$_SESSION['login_user'];
?>
<?php
include('connection.php');
//$connection = mysql_connect("localhost","u340247149_root","umeshcharuka"); // Establishing Connection with Server
//$db = mysql_select_db("u340247149_db", $connection); // Selecting Database from Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$answer = $_POST['answer'];
$q =$_POST['id'];
$qq=$_POST['question'];
//$qq=$_POST['question'];
$user=mysql_query("SELECT * FROM login where username='$login_user' ",$connection);
//$result = mysql_query($tag);
$row22 =mysql_fetch_array($user);
$lec=$row22["username"];
echo $lec;


//if(($answer !='')&&($qq!='')){
if(($answer !='')&&($qq !='')){
//Insert Query of SQL
$query = mysql_query("insert into answers(id,answer,user) values ('$q','$answer','$lec')");

echo "<br/><br/><span>Your answer posted!!</span>";

$tag=mysql_query("SELECT email,id FROM question where id='$q' ",$connection);
//$result = mysql_query($tag);
$row =mysql_fetch_array($tag);
$to=$row["email"];
$msg = "hello click below link\n kduithelpdesk.16mb.com";
$msg = wordwrap($msg,70);
mail("$to","your answer has provided",$msg);
//echo "$to";
echo "<meta http-equiv='refresh' content='3'>";
/*$to      = 'umeshcharuka.charu.@gmail.com';
$subject = 'answer for the question';
$message = 'hello your answer has provided';
$headers = 'From:kduithelpdesk.16mb.com' . "\r\n" .
    'Reply-To: admin@kduithelpdesk.16mb.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);*/



}
else{
echo "<p>Insertion Failed <br/> there are no question to answer or question already answered....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>