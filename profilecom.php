<!DOCTYPE html>
<?php
include('session.php');
?>
<html lang="en">
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
<body>
<div id="wrapper" class="behind">


<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right main-nav">
				<li><a href="profile2.php#book" class="scrollto">About</a></li>
				<li><a href="profile2.php#reviews" class="scrollto">Ratings</a></li>
				<li><a href="#answer" class="scrollto">Update Questions</a></li>
				<li><a href="profile2.php#contact" class="scrollto">Answer a Question</a></li>
				<li><a href="#" class="btn btn-green">HOME</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>




<section id="answer">
	<div class="container">
		<div class="row">
		
			<?php
			include('connection2.php');
			include('connection.php');
			$page=$_GET["page"];
			if($page==""||$page=="1")
			{
			$page1=0;
			}
			else{
			$page1=($page*5)-5;
			}
			

			$sql1="select * from question where answer!='null' order by id DESC limit $page1,5";
			$result1 = $conn->query($sql1);
			while($row2= $result1->fetch_assoc()){
			
			
			 echo "<form action='updatecom.php' method='post'>";
		     echo '<h4 class="subheading wow animated fadeInUp">';
		     echo '<h2 class="heading wow animated fadeInUp">';
		     echo	"Q: ".$row2["id"].'</h2>';
			 echo '<p class="small wow animated fadeInUp">';
		     //echo "".'<span class="glyphicon glyphicon-star-empty">'.'</span>'." ".$row2["question"]. "<br>"."";
			 echo '<p class="small wow animated fadeInUp">'.'<textarea disabled style="border:none; resize:both; width:75%; height:15%;">'."". $row2["question"]."".'</textarea>'.'</p>'."";
		     echo '</p>';
			 echo '<p class="small wow animated fadeInUp">';
	         echo	"<b>"."asked by  :"."</b>".'<span class="glyphicon glyphicon-user">'."" . $row2["user1"]. "";
			 echo '</p>';
			 echo ""."".'<h2 class="subheading accent no-margin wow animated fadeInUp">'."".'<span class="glyphicon glyphicon-ok">';
		     echo	"Answer: ".'</h2>'."".'</span>';
			 echo '<p class="small wow animated fadeInUp">';
			 echo '<textarea disabled style="resize:both; width:80%; height:50%;">';
			 
			 echo "". $row2["answer"]."".""."";
			 echo '</textarea>';
			 echo '<p class="small wow animated fadeInUp">';
	         echo	"<b>"."Time  :"."</b>" . $row2["time"]."&nbsp"."&nbsp"." &nbsp"." &nbsp"."&nbsp". "<b>"." answered by  :"."</b>"."&nbsp".'<span class="glyphicon glyphicon-education">'."" . $row2["user"]. "";
			 echo '</p>';
             echo ""."".'<h2 class="subheading accent no-margin wow animated fadeInUp">'."".'<span class="glyphicon glyphicon-pencil">';
		     echo	"Comment: ".'</h2>'."".'</span>';
			// echo "<input type='textarea'  name='answer' value='" . $row2['answer']  . "'>";
			 echo "<textarea class='form-control' rows='10' name='comments' wrap='physical'>" . $row2['comments'] . "</textarea>";
			//echo "<input type=text name=answer value=" .$row2["answer"]."";
			 echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";
			
	        // echo '<h4 class="subheading wow animated fadeInUp">';
			 //echo '<h2 class="heading wow animated fadeInUp">';
			 echo  "<input type='submit' name='update' value='Update'>";
			// echo "<input type=submit name=update value=update "."";
			 echo "</form>";
			 echo '<hr style="height:1px;width:100%;border:none;color:#C0C0C0;background-color:#C0C0C0;">';
			 }
	echo '<p class="small wow animated fadeInUp">'."click below for more pages".'</p>';
   $q=mysql_query("select * from question");
   $cou=mysql_num_rows($q);
   $a=$cou/5;
   $a=ceil($a);
   for($b=1;$b<=$a;$b++){
   ?><a href="profilecom.php?page=<?php echo $b;?> style="text-decoration:none"><?php echo '<p class="small wow animated fadeInUp">'.$b."&nbsp;".'</p>'."&nbsp;";?></a><?php
   
   }
	?> 
	   
			
		
		
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-left text-center-mobile">
				<p class="copyright small muted"><a href="logout.php">click to log out</a></p>
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

</div>

<div class="notification-box"><span>Sending...</span></div>
<div class="mobile-nav">
	<ul class="menu">
		
	</ul>
</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/core.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/jquery.form-validator.js"></script>
<script src="js/preloader.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>