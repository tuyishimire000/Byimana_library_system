<header>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <style>
      .admin
      {
          color:white;
      }
      a1.
      {
          text-decoration:none;
      }
      </style>
      </header>
      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li class="active"><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
					<?php 
					include('dropdown.php');
					?>
					<li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
					<li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Member</a></li>
					<li><a href="archive.php"><i class="icon-bell-alt icon-large"></i>&nbsp;Notifications</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advanced Search</a></li>
					<li><a href="#"><i class="icon-tags icon-large"></i>&nbsp;Appliances</a></li>

					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<!--<div class="admin" ><span style="font-color:white;">Welcome: Librarian</span></div>-->
                        
                     </div>
                     
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert">
            <i class="icon-bell-alt icon-large"></i>&nbsp; <strong>Welcome Librarian!</strong> Rember to check your  notifications as soon as possible! .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        </div>
		
<?php include('search_form.php'); ?>
 
