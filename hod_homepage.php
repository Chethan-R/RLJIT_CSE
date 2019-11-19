<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--SIDE BAR-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="sidenav.css" rel="stylesheet" type="text/css" media="all" />
<!--SIDE BAR-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOD Homepage</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />



<meta charset="utf-8">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="wrapper">
<!--SIDE BAR-->
	<div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="/rljit_cse/hod_homepage.php">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><b><font color="blue">STUDENT</font></b><span class="sub_icon glyphicon glyphicon-link"></span></li>
           <ul class="sidebar-nav" id="sidebar">
                <li><a href="/rljit_cse/stu2_hod_view.php">2nd Year</a></li>
                <li><a href="/rljit_cse/stu3_hod_view.php">3rd Year</a></li>
				<li><a href="/rljit_cse/stu4_hod_view.php">4th Year</a></li>
				<li></li>
           </ul>
		   <li>.</li>
          <li><b><font color="blue">STAFF</font></b><span class="sub_icon glyphicon glyphicon-link"></span></li>
		  <ul class="sidebar-nav" id="sidebar">
                <li><a href="/rljit_cse/staff_view.php">View</a></li>
                <li><a href="/rljit_cse/staff_add1.php">Add</a></li>
           </ul>
		   <li>.</li>
          <li><b><font color="blue">CIRCULAR</font></b><span class="sub_icon glyphicon glyphicon-link"></span></li>
		  <ul class="sidebar-nav" id="sidebar">
                <li><a href="/rljit_cse/stu/stu_upload.php">Student</a></li>
				<li><a href="/rljit_cse/sta/sta_upload.php">Staff</a></li>
           </ul>
		   <li>.</li>
        </ul>
	</div>
<!--SIDE BAR-->
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
		
				<li class="current_page_item"><a href="/rljit_cse/logout1.php" accesskey="5" title="">Logout</a></li>
			</ul>
		</div>
	</div>
	</div>
	
	
	
	<div id="featured">
		<div class="container"><div class="title"></div></div>
		<div class="container"><div class="title"></div></div>
		
		<div class="container"><div class="title"><h2>Welcome HOD</h2></div></div>
		<div class="container"><div class="title"><span class="byline">Department of Computer Science & Engineering</span></div></div>
		<div class="container"><div class="title"></div></div>
		
		
	</div>
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
<?php
				session_start();
				if($_SESSION['username']==true and $_SESSION['password']==true)
				{
					
				}
				else
				{
					header('location: /rljit_cse/login.html');
				}		
?>
