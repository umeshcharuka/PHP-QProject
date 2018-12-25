<?php
include('connection.php');
if(isset($_POST['update'])){
$update="UPDATE question set comments='$_POST[comments]' where id='$_POST[id]'";
mysql_query($update,$connection);
echo "succesfully updated";
$tag=mysql_query("SELECT email,id FROM question where id='$_POST[id]' ",$connection);
//$result = mysql_query($tag);
$row =mysql_fetch_array($tag);
$to=$row["email"];
$msg = "hello click below link\n kduithelpdesk.16mb.com";
$msg = wordwrap($msg,70);
mail("$to","hello you have a comment for your question",$msg);
echo "$to";
echo "<meta http-equiv='refresh' content='4'>";
}
else
{
echo "sorry not updated";
}

?>