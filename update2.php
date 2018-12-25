<?php
include('connection.php');
if(isset($_POST['update'])){
$update="UPDATE question set qname='$_POST[qname]',question='$_POST[question]' where id='$_POST[id]'";
mysql_query($update,$connection);
echo "<script type='text/javascript'>alert('updated successfully!')</script>";
header("refresh:1; url='table.php'");

}
if(isset($_POST['delete'])){
$update1="DELETE from question where id='$_POST[id]'";
mysql_query($update1,$connection);
echo "<script type='text/javascript'>alert('deleted successfully!')</script>";
header("refresh:1; url='table.php'");

}


?>