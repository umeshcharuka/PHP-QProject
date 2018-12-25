<!DOCTYPE html>
<?php
include('session.php');
?>
<?php

//echo $_SESSION['login_user']."</br>";
$login_user=$_SESSION['login_user'];
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
</head>
<body>
<div id="wrapper" class="behind">
<header>
	<div class="container">
			<div class="col-md-6 col-sm-12 wow animated fadeInUp">
				<div class="intro-book">
					<img src="img/KDU1.png" alt="">
				</div>
			</div>
			<div class="col-md-6 intro-text hidden-sm hidden-xs wow animated fadeInUp">
			<h2 class="heading">Hello <?php echo $login_session; ?>!!</h2>
				<h4 class="subheading">WELCOME TO KDU IT HELPDESK</h4>
				
				<p>As the first time in Sri Lanka we have created a HELPDESK system for you with contribution with your lectures in order to solve your problems in every subject field to make you comfortable with academics.</P>
				<a href="#book" class="scrollto btn btn-white">About us</a>
				<a href="#contact" class="btn btn-green">Answer a question<span class="price">??</span></a>
			</div>
	</div>
</header>

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
				<li><a href="#book" class="scrollto">About</a></li>
				<li><a href="#reviews" class="scrollto">Ratings</a></li>
				<li><a href="#answer" class="scrollto">Update answers</a></li>
				<li><a href="#contact" class="scrollto">Answer a Question</a></li>
				<li><a href="#" class="btn btn-green">HOME</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<section id="book">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="book-preview">
					<img src="img/kindle.png" class="background-device" alt="">
					<div class="owl-book">
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
						<div class="item">
							<img src="img/book_page.png" alt="">
							<div class="overlay">
								<a href="img/book_page.png" class="expand" data-lightbox="book-collection" data-title="Image Caption"><i class="fa fa-expand"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="heading wow animated fadeInUp">The IT helpdesk</h2>
				<h4 class="subheading wow animated fadeInUp">Online help systems can bridge the gap between the user's need for simplicity and the software's complexity, by providing relevant information within the very specific context of a user's lack of familiarity with a particular concept.</h4>

				<p class="small wow animated fadeInUp">This IT Helpdesk will allow the students to present their problems to the lecturers. Then the system will forward the question to the relevant lecturers. Then the lecturers will have the opportunity to answer those questions. 
</p>
				<p class="small wow animated fadeInUp">This lovely,IT HelpDesk is concerned with minimizing the doubts of students regarding the subject matters.</p>
			</div>
		</div>
	</div>
</section>



<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center wow animated fadeInUp">
				<p class="white"><b> ALWAYS BE WITH NO DOUBTS.</b></p>
			</div>
		</div>
	</div>
</section>

<section id="reviews" class="reviews">
	<div class="container">
		<div class="row">	
			<div class="col-sm-6 text-left">
				<h2 class="heading">Lectures</h2>
			</div>
			<div class="col-sm-6 text-right text-left-mobile">
				<div class="rate-amount text-right">
					4/5 <span>(16 Lecturers)</span>
				</div>
				<div class="rating">
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate active"></span>
					<span class="rate"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="owl-reviews">
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture3.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mr.Asela Gunasekara</h4>
						<h6 class="subheading muted reviewer-city">Payagala,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate"></span>
						</div>
						<p class="small"><ul> 
                                                <li>Software Engineering</li>
                                                <li> IT Concepts </li>
						<li> Human Computer Interaction </li>
                                                <li>Information System Fundamentals</li></p>
					</div>
				</div>
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mr.Nandana Pathirage</h4>
						<h6 class="subheading muted reviewer-city">Panadura,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
                                                        <span class="rate active"></span>
							<span class="rate"></span>
						</div>
						<p class="small"><ul> 
                                                <li>Database Management Systems</li>
                                                <li> Strategic Information System Planning </li>
						<li> IT Project Management </li>
                                                <li>Management Information Systems</li></p>
					</div>
				</div>
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture1.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mr.Ruwan Pathum Kathriarachchi </h4>
						<h6 class="subheading muted reviewer-city">Colombo 03,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate"></span>
						</div>
						<p class="small"><ul> 
                                                <li> CCNA Systems</li>
                                                <li> Computer Hardware </li>
                                                <li> Computer Networks Systems</li></p>
					</div>
				</div>
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture2.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mrs. DU Vidanagama</h4>
						<h6 class="subheading muted reviewer-city">Wadduwa,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate"></span>
						</div>
						<p class="small"><ul> 
                                                <li> Rapid Application Development Systems</li>
                                                <li> Object Oriented Programming </li>
                                                <li> Database Management Systems</li>
						<li>Web Development Technologies</li></p>
					</div>
				</div>
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture4.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mr. D Maithri Ranga Kulasekara</h4>
						<h6 class="subheading muted reviewer-city">Kalutara,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
						</div>
						<p class="small"><ul> 
                                                <li> Image processing</li>
                                                <li> Web technology </li>
                                                <li> Micro Contolling System </li>
						</p>
					</div>
				</div>
				<div class="item">
					<div class="review text-center wow animated fadeInUp">
						<img src="Capture5.png" class="reviewer-pic" alt="" width = "50" height = "46">
						<h4 class="subheading reviewer-name">Mrs. WPJ Pemarathne</h4>
						<h6 class="subheading muted reviewer-city">Battaramulla,Sri Lanka</h6>
						<div class="rating">
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate active"></span>
							<span class="rate"></span>
						</div>
						<p class="small"><ul> 
                                                <li> Data Communication and Networking</li>
                                                <li> Computer Systems Architecture </li>
                                                <li> Operating System </li>
						<li> Artificial Intelligence and Robotics </li>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left text-center-mobile wow animated fadeInUp">
				<h2 class="heading white top-fit">Contact Us</h2>
				<h4 class="subheading white no-margin">contact our system administrater for your queries</h4>
			</div>
			<div class="col-md-4 text-right wow animated fadeInUp text-center-mobile">
				<a href="#" class="btn btn-white sample-button">contact admin</a>
			</div>
		</div>
	</div>
</section>

<section id="sample-form">
	<div class="container">
		<form id="submit-frm" action="contact.php" method="post" class="sample-form">
			<div class="row">
				<div class="col-sm-5">
					<input type="text" class="form-control" name="firstname" placeholder="Username" data-validation="required">
				</div>
				<div class="col-sm-5">
					
						<textarea name="query" class="form-control" rows="10" placeholder="Query. . ." data-validation="required"></textarea>
				</div>
				<div class="col-sm-2">
					<input type="submit" class="btn btn-green sign-up-button sample-button-done" name="submit" value="Subscribe">
				</div>
			</div>
		</form>
	</div>
</section>
<section id="answer">
	<div class="container">
		<div class="row">
			
			<?php
			include('connection2.php');
			$sql1=" select * from question where user='$login_user' order by id DESC LIMIT 5";
			$result1 = $conn->query($sql1);
			while($row2= $result1->fetch_assoc()){
			
			
			echo "<form action='update.php' method='post'>";
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
			// echo "<input type='textarea'  name='answer' value='" . $row2['answer']  . "'>";
			echo "<textarea class='form-control' rows='10' name='answer' wrap='physical'>" . $row2['answer'] . "</textarea>";
			//echo "<input type=text name=answer value=" .$row2["answer"]."";
                 echo '<p class="small wow animated fadeInUp">';
	         echo	"<b>"."Time  :"."</b>" . $row2["time"]."&nbsp"."&nbsp"." &nbsp"." &nbsp"."&nbsp". "<b>"."answered by:"."</b>"."&nbsp".'<span class="glyphicon glyphicon-education">'."".$row2["user"]."";
			 echo '</p>';
			echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";
			  
			 echo '<hr style="height:1px;width:100%;border:none;color:#C0C0C0;background-color:#C0C0C0;">';
	        // echo '<h4 class="subheading wow animated fadeInUp">';
			 //echo '<h2 class="heading wow animated fadeInUp">';
			  echo  "<input type='submit' name='update' value='Update'>";
			// echo "<input type=submit name=update value=update "."";
			 echo "</form>";
	}
	
	?>
<a href="profilecom.php#answer" class="btn btn-green">CLICK TO ADD COMMENTS<span class="price"></span></a>



			
		
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left text-center-mobile wow animated fadeInUp contact-details">
				<h3 class="heading no-margin wow animated fadeInUp">Contact Admin</h3>
				<h4 class="subheading muted no-margin wow animated fadeInUp">For your queries</h4>
				<div class="details">
					<h6 class="heading no-margin">KDU ITHelpDesk,</h6>
					<p class="small muted wow animated fadeInUp no-margin">Kandawala Road,<br>
					Rathmalana.</p>
				</div>
				<div class="details">
					<h4 class="subheading accent no-margin wow animated fadeInUp">0112890890 <br>
					admin@kduithelpdesk.16mb.com</h4>
				</div>
			</div>
			<form action="answer.php" method="post" class="mail-form" > <!--onSubmit="window.location.reload()"-->
				<div class="col-md-6">
					<div class="row">
					<!--	<div class="col-sm-6">
							<input name="qname" type="text" class="form-control" placeholder="Question name" data-validation="required">
						</div>
						<div class="col-sm-6">
							<input name="email" type="text" class="form-control" placeholder="email for notification" data-validation="email">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input name="subject" type="text" class="form-control" placeholder="Subject" data-validation="required">
						                                                                                                                                                                                                                                                                                                                                               
  
						</div>
					</div>
						<select name="Color">
                        <option value="soft">software</option>
                        <option value="net">network</option>
                       
                        </select>
                        <select name="prio1">
                        <option value="high">urgent</option>
                        <option value="low">not urgent</option>
                       
                        </select>
						-->
                                                                                          
					<div class="row">
					<div class="col-sm-12">

<?php
$servername = "localhost";
$username = "u340247149_uc";
$password ="umeshcharuka";
$dbname = "u340247149_pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$sql2 = "SELECT * FROM login where username='$login_user'";
//$sql3 = "SELECT * FROM question where answer='null' ORDER BY id DESC LIMIT 1";
//$sql3 = "SELECT * FROM question ORDER BY id LIMIT 1";
$sql3 = "SELECT * FROM question where answer='null'";

$result1 = $conn->query($sql2);
$result2 = $conn->query($sql3);
//$row2 = $result2->fetch_assoc();

while($row1 = $result1->fetch_assoc()){
//while(($row1 = $result1->fetch_assoc())&&($row2 = $result2->fetch_assoc())){
while($row2 = $result2->fetch_assoc()){

//Echo "". $row1["tag"]."";
//Echo "". $row2["field"]."";
if($row1["tag"]==$row2["field"]){




//$sql = "SELECT qname,subject,question,answer FROM question where answer='null' AND field='".$row1["tag"]."' ORDER BY id LIMIT 1";
//$result = $conn->query($sql);


    // output data of each row
  //  while($row = $result->fetch_assoc()) {
	echo '<h2 class="subheading accent no-margin wow animated fadeInUp">'.'<span class="glyphicon glyphicon-thumbs-up">'.'</span>'."..You have a question!"."</h2>";
	echo '<p class="small wow animated fadeInUp">';
    echo '<span class="glyphicon glyphicon-share">'.'</span>'."<b>"." NAME  : "."</b>"."<u>". $row2["qname"]."</u>";
	echo '</p>';
    echo '<p class="small wow animated fadeInUp">';
	echo	'<span class="glyphicon glyphicon-share">'.'</span>'."<b>"." SUBJECT : "."</b>"."<u>". $row2["subject"]."</u>";
	echo '</p>';

    echo '<h2 class="subheading accent no-margin wow animated fadeInUp">';
	echo	"Question:".'<span class="glyphicon glyphicon-hand-down">'.'</span>'."</h2>";
   // echo '<p class="small wow animated fadeInUp">';
	//echo "<b>".$row2["question"]."</b>";
	//echo '</p>';
	echo '<p class="small wow animated fadeInUp">'.'<textarea disabled style="border:none; resize:both; width:100%; height:25%;">'."". $row2["question"]."".'</textarea>'.'</p>'."";
		    echo '</p>';
	echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";
	echo "<input type='hidden' name='question' value='".$row2['question']. "'> ";
	//echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";
	
     
    //}//
	}
	else{
//Echo "No questions to answer";
}
}
}






$conn->close();

?>
				    </div>
						
					
						<div class="col-sm-12">
							<textarea name="answer" class="form-control" rows="10" placeholder="type your answer below. . ." data-validation="required"></textarea>
						
						
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12.text-left">
							<input type="submit" name="submit" class="btn btn-green contact-button" value="post">
						</div>
					</div>
				</div>
			</form>
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