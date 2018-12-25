<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Tables, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Kotelawala Defence University IT Help Desk - Admin Panel</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
         <li class="active"><a href="#"><i class="fa fa-cog"></i>User Registration</a></li>
          <li><a href="table.php"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="admin.php">User Registration</a></li>
            <li><a href="#">Manage Users</a></li>
            <li class="active">Tables</li>
          </ol>
          <h1>Manage Users</h1>
          <p>Here goes tables and users.</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">New Users <span class="badge">42</span></a></li>
                <li><a href="#">Active Users <span class="badge">107</span></a></li>
                <li><a href="#">Expired Users <span class="badge">3</span></a></li>
              </ul>          
            </div>
          </div> 
          
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Users Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Password</th>
                    
                      <th>Email</th>
                   
					   <th>tag</th>
                      <th>Edit</th>
   <th>block</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
                               
include('connection2.php');




$sql3 = "SELECT * FROM login";


$result2 = $conn->query($sql3);




while($row2 = $result2->fetch_assoc()){





echo '<tr>';
	echo "<form action='update1.php' method='post'>";
echo '<td>'."".$row2["id"]."".'</td>';
echo '<td>'."<input type='text' name='username' value='".$row2['username']."'>" .'</td>';
echo '<td>'."<input type='text' name='password' value='".$row2['password']. "'>".'</ td>';

echo '<td>'."<input type='text' name='email' value='".$row2['email']."'>" .'</td>';

//echo '<td>'."".$row2["password"]."".'</td>';
echo '<td>'."".$row2["tag"]."".'</td>';
//echo '<td>'."".$row2["email"]."".'</td>';

echo '<td>'."<input type='submit' name='update' value='update'>"."".'</td>';
echo '<td>'."<input type='submit' name='delete' value='delete'>"."".'</td>';
echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";

		 echo "</form>";

echo '</tr>';}
?>


							   
                  </tbody>
                </table>
              </div>
<div class="table-responsive">
                <h4 class="margin-bottom-15">Queries Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>user</th>
                    
                      <th>Query</th>
                   
					  
          </tr>
                  </thead>
                  <tbody>
				  <?php
                               
include('connection2.php');




$sql3 = "SELECT * FROM contact";


$result2 = $conn->query($sql3);




while($row2 = $result2->fetch_assoc()){





echo '<tr>';

echo '<td>'.$row2["id"].'</td>';
echo '<td>'.$row2['username'].'</td>';
echo '<td>'.$row2['user'].'</td>';
echo '<td>'."<textarea wrap='physical'>" . $row2['query'] . "</textarea>".'</td>';




echo '</td>';


		

echo '</tr>';}
?>


							   
                  </tbody>
                </table>
              </div>







              <div class="table-responsive">
                <h4 class="margin-bottom-15">Question & Answers Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Question Name</th>
                      <th>Question</th>
                      <th>Asked by</th>
                      <th>Answered by</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
				   <?php
include('connection2.php');




$sql3 = "SELECT * FROM question";


$result2 = $conn->query($sql3);




while($row2 = $result2->fetch_assoc()){





echo '<tr>';
echo "<form action='update2.php' method='post'>";
echo '<td>'."".$row2["id"]."".'</td>';
echo '<td>'."<input type='text' name='qname' value='".$row2['qname']."'>" .'</td>';		
//echo '<td>'."".$row2["qname"]."".'</td>';
echo '<td>'."<textarea wrap='physical' name='question'>" . $row2['question'] . "</textarea>".'</td>';
echo '<td>'."".$row2["user1"]."".'</td>';
echo '<td>'."".$row2["user"]."".'</td>';
echo '<td>'."<input type='submit' name='update' value='update'>"."".'</td>';
echo '<td>'."<input type='submit' name='delete' value='delete'>"."".'</td>';
echo "<input type='hidden' name='id' value='".$row2['id']. "'> ";
echo "</form>";
echo '</tr>';}
?>
                    

					
                  </tbody>
                </table>
               <div class="table-responsive">
                <h4 class="margin-bottom-15">        </h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                     
                    </tr>
                  </thead>
                  <tbody>


	
				  
				  
				  
				                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>

      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2016 KDU IT HELPSDESK <!-- Credit: www.templatemo.com --></p>
        </div>
      </footer>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>