<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Preferences, Free Admin Template</title>
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
		   <li><a href="table.php"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Shedule bookings</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="table.php">Manage Users</a></li>
             <li class="active">User Registration</li>
          </ol>
          <h1>User Registration</h1>
          <p class="margin-bottom-15">Fill following details to register the users.</p>
          <div class="row">
            <div class="col-md-12">
              <form action="insertuser.php" id="templatemo-preferences-form" method="post">
             
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder = "Username">
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label>Email address</label>
                    <input type="text" class="form-control" name="email" placeholder = "Email address">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">New Password</label>
                    <input type="password" class="form-control" name="password" placeholder="New Password">  
                  </div>
                  
                </div>
                
             
            
               <div class="row">
                <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">User Selection</label>
                  <select class="form-control margin-bottom-15" name="singleselect">
                    <option value="stu">Student</option>
                    <option value="soft">Lecturer for Software</option>
                    <option value="net">Lecturer for Networks</option>
					<option value="admin">Admin</option>
                  </select>  
                  
              
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
            </form>
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


  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>