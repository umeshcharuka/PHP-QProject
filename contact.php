<?php
session_start();
//echo $_SESSION['login_user']."</br>";
$login_user=$_SESSION['login_user'];
?>



<?php
include('connection.php');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$query1 = $_POST['query'];
$user=mysql_query("SELECT * FROM login where username='$login_user' ",$connection);
//$result = mysql_query($tag);
$row22 =mysql_fetch_array($user);
$lec=$row22["username"];

//var_dump($_POST);

if($firstname !=''||$query1 !=''){
//Insert Query of SQL
$query = mysql_query("insert into contact(username,query,user) values ('$firstname', '$query1','$lec')");
echo "<br/><br/><span>you have posted a query.!!</span>";
 //$msg = "someone wanted to contact you\n kduithelpdesk.16mb.com";
 //   $msg = wordwrap($msg,200);
   // mail("umeshcharuka.charu@gmail.com","contact request",$msg);
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>