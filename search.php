<head>
	
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KDU IT HELPDESK</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/et-icons.css">
	<link rel="stylesheet" type="text/css" href="css/tooltip.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link id="main" rel="stylesheet" type="text/css" href="css/publisher.css">
	 <link rel="stylesheet" href="css/style1.css">
</head>

<div class="container">
		<div class="row">

<?php

include('connection.php');
$search=mysql_real_escape_string(trim($_POST['searchterm']));
$find=mysql_query("select * from question where question LIKE '%$search%'");
while($row=mysql_fetch_assoc($find))
{
echo '<h4 class="subheading wow animated fadeInUp">';
		     echo '<h2 class="heading wow animated fadeInUp">'."".'<span class="glyphicon glyphicon-th-large">';
		     echo	"Q:".$row["id"]."".'</span>'."".'</h2>';
			// echo '<p class="small wow animated fadeInUp">';
		     echo '<p class="small wow animated fadeInUp">'.'<textarea disabled style="border:none; resize:both; width:75%; height:15%;">'."". $row["question"]."".'</textarea>'.'</p>'."";
			// echo "    ";
		 //   echo '</p>';
		      echo '<p class="small wow animated fadeInUp">';
	         echo	"<b>"."asked by  :"."</b>".'<span class="glyphicon glyphicon-user">'."" . $row["user1"]. "";
			 echo '</p>';
			
             echo ""."".'<h2 class="subheading accent no-margin wow animated fadeInUp">'."".'<span class="glyphicon glyphicon-ok">';
		     echo	"Answer: ".'</h2>'."".'</span>';
			 echo '<p class="small wow animated fadeInUp">';
			 echo '<textarea disabled style="resize:both; width:80%; height:25%;">';
			 
			 echo "". $row["answer"]."".""."";
			 echo '</textarea>';
			 echo '</p>';
			 echo '<p class="small wow animated fadeInUp">';
	         echo	"<b>"."Time  :"."</b>" . $row["time"]."&nbsp"."&nbsp"." &nbsp"." &nbsp"."&nbsp". "<b>"." answered by  :"."</b>"."&nbsp".'<span class="glyphicon glyphicon-education">'."" . $row["user"]. "";
			 echo '</p>';
 echo ""."".'<h2 class="subheading accent no-margin wow animated fadeInUp">'."".'<span class="glyphicon glyphicon-pencil">';
		     echo	"Comments: ".'</h2>'."".'</span>';
			 echo '<p class="small wow animated fadeInUp">';
			 echo '<textarea disabled style="resize:both;border:none;background-color:white;  width:70%; height:15%;">';
			 echo "". $row2["comments"]."".""."";
			 echo '</textarea>';
			 echo '</p>';
			 echo '<hr style="height:1px;width:100%;border:none;color:#C0C0C0;background-color:#C0C0C0;">';
}
?>

	</div></div>
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-left text-center-mobile">
				<p class="copyright small muted"><a href="logout.php">click to log out</a></p>
			</div>
			<div class="col-sm-6 text-left text-center-mobile">
				<p class="copyright small muted"><a href="searchform.php">click to go back</a></p>
			</div>
			
			<div class="col-sm-6 text-right text-center-mobile">
				<div class="social">
					<a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="https://vine.co" class="vine"><i class="fa fa-vine"></i></a>
				
				</div>
			</div>
		</div>
	</div>
</footer>