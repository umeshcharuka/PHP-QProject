<?php
include('connection.php');
if(isset($_POST['update'])){
$update="UPDATE question set answer='$_POST[answer]' where id='$_POST[id]'";
mysql_query($update,$connection);
echo "succesfully updated";
$tag=mysql_query("SELECT email,id FROM question where id='$_POST[id]' ",$connection);
//$result = mysql_query($tag);
$row =mysql_fetch_array($tag);
$to=$row["email"];
$msg = "hello click below link\n kduithelpdesk.16mb.com";
$msg = wordwrap($msg,70);
mail("$to","sorry your answer has been edited",$msg);
//echo "$to";
//comment
echo "<meta http-equiv='refresh' content='3'>";
}
else
{
echo "sorry not updated";
}

?>
