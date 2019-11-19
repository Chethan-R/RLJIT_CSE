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
<title>Student Update</title>
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
	<!--****************-->
<div id="extra" class="container">
<div class="box">
<div id="main-wrapper">

<center><h2><font color="red">STUDENT UPDATE</font></h2>
<table>
<form action="/rljit_cse/stu_hod_updateins.php" method="post">
<div class="inner_container">

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
    
 <midle><label><b>Student Name:</b></label><br>
  <input type="text" name="sname" Value=<?php echo $_GET['sname'];?>></midle><br>
  
  <label><b>USN:</b></label><br>
  <input type="text" name="usn" Value=<?php echo $_GET['usn'];?>    ><br>
  
  <label><b>Email:</b></label><br>
  <input type="email" name="email" Value=<?php echo $_GET['email'];?>    ><br>
  
  <label><b>DOB:</b></label><br>
  <input type="date" name="sdob" Value=<?php echo $_GET['sdob'];?>    ><br>
  
  <midle><label><b>Mobile:</b></label><br>
  <input type="text" name="sph" value=<?php echo $_GET['sph'];?> ><br>
  
  <label><b>Father Name:</b></label><br>
  <input type="text" name="father" Value=<?php echo $_GET['father'];?>    ><br>
  
  <midle><label><b>Father Mobile:</b></label><br>
  <input type="text" name="sfph" Value=<?php echo $_GET['sfph'];?>></midle><br>
  
  <midle><label><b>Present Year:</b></label><br>
  <input type="text" name="syear" Value=<?php echo $_GET['syear'];?>></midle><br>
  
  <label><b>10th %:</b></label><br>
  <input type="number" name="sx" min="1" max="100" step="0.01" Value=<?php echo $_GET['sx'];?>    ><br>
  
  <label><b>10th YOP:</b></label><br>
  <input type="month" name="sxyop" Value=<?php echo $_GET['sxyop'];?>    ><br>
  
  <label><b>12th %:</b></label><br>
  <input type="number" name="sxii" min="1" max="100" step="0.01" Value=<?php echo $_GET['sxii'];?>    ><br>
  
  <label><b>12th YOP:</b></label><br>
  <input type="month" name="sxiiyop" Value=<?php echo $_GET['sxiiyop'];?>    ><br>
  
  <label><b>Sem I:</b></label><br>
  <input type="number" name="si" min="0" max="10" step="0.01" Value=<?php echo $_GET['si'];?>    ><br>
  
  <label><b>Sem II:</b></label><br>
  <input type="number" name="sii" min="0" max="10" step="0.01" Value=<?php echo $_GET['sii'];?>    ><br>
  
  <label><b>Sem III:</b></label><br>
  <input type="number" name="siii" min="0" max="10" step="0.01" Value=<?php echo $_GET['siii'];?>    ><br>
  
  <label><b>Sem IV:</b></label><br>
  <input type="number" name="siv" min="0" max="10" step="0.01" Value=<?php echo $_GET['siv'];?>    ><br>
  
  <label><b>Sem V:</b></label><br>
  <input type="number" name="sv" min="0" max="10" step="0.01" Value=<?php echo $_GET['sv'];?>    ><br>
  
  <label><b>Sem VI:</b></label><br>
  <input type="number" name="svi" min="0" max="10" step="0.01" Value=<?php echo $_GET['svi'];?>    ><br>
  
  <label><b>Sem VII:</b></label><br>
  <input type="number" name="svii" min="0" max="10" step="0.01" Value=<?php echo $_GET['svii'];?>    ><br>
  
  <label><b>Sem VIII:</b></label><br>
  <input type="number" name="sviii" min="0" max="10" step="0.01" Value=<?php echo $_GET['sviii'];?>    ><br>
  
  
  
 <br>
  <input type="submit" value="Update" class="submit_button" ><br>

    </div>
</form>
</table>
    </center>
</div>	
<!--****************--></div>	</div>	
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
