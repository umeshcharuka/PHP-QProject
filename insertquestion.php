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
$qname = $_POST['qname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$feild   = $_POST['Color'];
$question = $_POST['question'];
$prio =$_POST['prio1'];
//var_dump($_POST);
$user=mysql_query("SELECT * FROM login where username='$login_user' ",$connection);
//$result = mysql_query($tag);
$row22 =mysql_fetch_array($user);
$lec=$row22["username"];
echo $lec;

if($feild !=''||$question !=''){
//Insert Query of SQL
$query = mysql_query("insert into question(qname,email,subject,field,question,priority,user1) values ('$qname', '$email ', '$subject','$feild','$question','$prio','$lec')");
echo "<br/><br/><span>you have posted a question.!!</span>";

$tag=mysql_query("SELECT * FROM login where tag='$feild' ",$connection);
//$result = mysql_query($tag);
while($row =mysql_fetch_array($tag)){
$to=$row["email"];
//$msg = "hello click below link\n kduithelpdesk.16mb.com";
//$msg = wordwrap($msg,70);
//mail("$to","your answer has provided",$msg);
 //echo "$to";

if($prio=="high"){
if($feild=="net"){
 $msg = "follow this link to see\n kduithelpdesk.16mb.com";
     $msg = wordwrap($msg,200);
     mail($to,"hello you have an urgent question to answer ",$msg);}
else
{
 $msg = "follow this link to see\n kduithelpdesk.16mb.com";
     $msg = wordwrap($msg,200);
     mail("praneethbashithakpb123@outlook.com","hello you have an urgent question to answer ",$msg);}}
	 else{
	 
if($feild=="net"){
 $msg = "follow this link to see\n kduithelpdesk.16mb.com";
     $msg = wordwrap($msg,200);
     mail($to,"hello you have a question to answer ",$msg);}
else
{
 $msg = "follow this link to see\n kduithelpdesk.16mb.com";
     $msg = wordwrap($msg,200);
     mail($to,"hello you have a question to answer ",$msg);}}
	 
	 
	 }
	 echo "<meta http-equiv='refresh' content='3'>";
	 }

else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>