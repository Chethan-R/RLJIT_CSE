<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Login</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<style>
.login-form{
        margin-top: 5%;
		margin-right: 5%;
		margin-bottom: 5%;
		margin-left: 5%;
    }

</style>
</head>
<body>

<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="http://rljit.in/"><img align="left" src="/rljit_cse/logo6.jfif" alt="RLJIT" height="40" width="42"/>RLJIT</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="/rljit_cse/index.html" accesskey="1" title="">Homepage</a></li>
				
				<li><a href="/rljit_cse/about_us.html" accesskey="2" title="">About Us</a></li>
				<li><a href="/rljit_cse/StudentRegForm.html" accesskey="3" title="">Registration</a></li>
				<li class="current_page_item"><a href="/rljit_cse/login.html" accesskey="4" title="">Login</a></li>
				
				<li><a href="/rljit_cse/logout1.php" accesskey="5" title="">Logout</a></li>
			</ul>
		</div>
	</div>
	</div>
	
	<div id="page" class="container"></div>
	<div id="featured">
		<div class="title">
			<h2>Staff Login Page</h2>
	</div>
		<div class="col-md-12 col-sm-12" >
		<div class="login-form">
               <form action="staff_login.php" method="post">
                  <div class="form-group">
                     <label>Email</label><br>
                     <input type="email" placeholder="Email" name="email" required>
                  </div><br>
                  <div class="form-group">
                     <label>Password</label><br>
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <button type="submit" name="login" class="btn btn-black">Login</button>
                  
               </form>
            
		
		<?php
		session_start();
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
                $con=mysqli_connect("localhost","root","","rljit_cse");
				$query = "select * from staff where email='$email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array ($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					
					
					header( "Location: /rljit_cse/staff_homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>	
		</div>
		</div>	
		
		
	</div>
	<div id="page" class="container"></div>

	
</div>
<div id="copyright" class="container">
	<p align="center">
	<b>Phone:</b>
		080-27626800, 080-27626801
		<br />
		<b>Website:</b>
		<a href="http://rljit.in/">rljit.in</a>
		<br />
		<b>Fax:</b>
		080-27625380
		<br /><i class="fa fa-location-arrow" aria-hidden="true"></i>
		<b>Address :</b>
		R.L.Jalappa Institute of Technology Doddaballapur - 561203, Bangalore Rural Dist.
		<br />
	</p>
</div>
</body>
</html>
