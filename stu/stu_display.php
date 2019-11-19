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

<!--<html>
<head>
<link rel="stylesheet" href="stu_css/bootstrap.min.css" />
	<title>Download Files</title>
	<style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:14;
    font-weight:bold;
}
		</style>
</head>
<body  align="center">

<br>
<div class="container home">
<font face="comic sans ms">
<h3><center> List of Files the can be download </center> </h3>
</font>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">NAME</font></th>
    
	<th><font face="comic sans ms">Download Files </font></th>
  </tr>
   </thead>
    <tbody>
      <?php
/*
	$link=mysql_connect("localhost","root","");
	mysql_select_db("rljit_cse",$link);
	$q="select count(*) \"total\"  from stu_presentation";
	$ros=mysql_query($q,$link);
	$row=(mysql_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q="SELECT * FROM stu_presentation ORDER BY name DESC";
	$ros=mysql_query($q,$link);
	
	while($row=mysql_fetch_array($ros))
	{
		echo '<tr>';
		echo '<td align=center>' . $row['name'];
		
		echo "<td align=center><a title='Click here to download in file.' 
		     href='stu_download.php?id={$row['file']}'>{$row['file']} </a>"; 
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="stu_display.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="stu_display.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="stu_display.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
     }*/
   
?>

</div>
<br>
<button onclick="location.href='stu_delete.php'" style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:60px;color:black;font-size:15px;font-weight:bold;">Delete</button>
</body>
</html>	-->							


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

<!--SIDE BAR-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="/rljit_cse/sidenav.css" rel="stylesheet" type="text/css" media="all" />
<!--SIDE BAR-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Circular</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="/rljit_cse/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/rljit_cse/fonts.css" rel="stylesheet" type="text/css" media="all" />



<meta charset="utf-8">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->


	<link rel="stylesheet" href="/rljit_cse/stu/stu_css/bootstrap.min.css" />
<style>#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		border-top: 1px solid rgba(255,255,255,0.08);
	}
	
	#copyright p
	{
		text-align: center;
		font-size: 1em;
		color: rgba(255,255,255,0.5);
	}
	
	#copyright a
	{
		text-decoration: none;
		color: rgba(255,255,255,0.8);
	}</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Upload File</title>
    
        
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
	
	<div id="page" class="container">

<div class="container home">
<font face="comic sans ms">
<h3><center> List of Files the can be download (Student Circular) </center> </h3>
</font>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">Date</font></th>
    
	<th><font face="comic sans ms">Download Files </font></th>
  </tr>
   </thead>
    <tbody>
      <?php

	$link=mysql_connect("localhost","root","");
	mysql_select_db("rljit_cse",$link);
	$q="select count(*) \"total\"  from stu_presentation";
	$ros=mysql_query($q,$link);
	$row=(mysql_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q="SELECT * FROM stu_presentation ORDER BY name DESC";
	$ros=mysql_query($q,$link);
	
	while($row=mysql_fetch_array($ros))
	{
		echo '<tr>';
		echo '<td align=center>' . $row['name'];
		
		echo "<td align=center><a title='Click here to download in file.' 
		     href='stu_download.php?id={$row['file']}'>{$row['file']} </a>"; 
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="stu_display.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="stu_display.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="stu_display.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
     }
   
?>

</div>
<br>
<button onclick="location.href='/rljit_cse/stu/stu_delete.php'" style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:60px;color:black;font-size:15px;font-weight:bold;">Delete</button>
</div>

</div>
<div  class="container" style="width:100%;   margin: 0em auto; 	 margin: 0px; padding: 0px; background: #333333;	font-family: 'Varela', sans-serif; height: 250px; font-size: 11pt;	 color: #656565;">
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