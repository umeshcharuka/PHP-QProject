<?php
session_start();
//echo $_SESSION['login_user']."</br>";
$login_user=$_SESSION['login_user'];
?>
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "PRO";
include('connection2.php');
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$sql2 = "SELECT * FROM login where username='$login_user'";
$sql3 = "SELECT field,answer FROM question  ORDER BY q_id DESC LIMIT 1";


$result1 = $conn->query($sql2);
$result2 = $conn->query($sql3);
$row2 = $result2->fetch_assoc();


while($row1 = $result1->fetch_assoc()){

if(($row1["tag"]==$row2["field"])&&($row1["answer"]!="")){


$sql = "SELECT qname,subject,question FROM question ORDER BY q_id DESC LIMIT 1";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<h1>"."hello you have a question to answer"."</h1>";
        echo "name of the question: " ."<br>". $row["qname"]. "<br>"."<br>"."<br>";
	echo	" subject of the question: "."<br>" . $row["subject"]."<br>"."<br>"."<br>";
	echo	"The question  :"."<br>" . $row["question"]. "";
     
    }
}




}
$conn->close();

?>
<h2>post your answer below</h2>
<form action="answer.php" method="post" class="mail-form">
<textarea rows="10" cols="35" name="answer"  maxlength="50" placeholder="type your answer here" required></textarea><br><br>
<input type="submit" value="post" name="submit"/>
<br>
<br><br><br><br><br><br>
<a href="logout.php">click to log out</a>


</form>
</html>

