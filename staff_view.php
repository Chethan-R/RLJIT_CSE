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

<?php
$con=mysqli_connect("localhost","root","","rljit_cse");


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM staff");

?>


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
<title>Staff View</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />



<meta charset="utf-8">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  
  
  <style>


		</style>
		
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
	
<div id="extra" class="container">

<div class="container">  
<div class="title"><center><h2><font color="red">STAFF VIEW</font></h2></center></div>
   <br />  
   
   <br />  
   <div class="table-responsive">  
    
    <table class="table table-bordered">
     <tr>  
                         <th><b>Staff Name</b></th>  
                         <th><b>Password</b></th>  
                         <th><b>Email</b></th>  
                         <th><b>Adhar Number</b></th>
                         <th><b>Mobile</b></th>
                         <th><b>Qualification</b></th>
                         <th><b>Job Description</b></th>
						 <th><b>DELETE</b></th>
						 <th><b>UPDATE</b></th>          
   </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["stname"].'</td>  
         <td>'.$row["password"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["adhar"].'</td>  
         <td>'.$row["staffph"].'</td>
         <td>'.$row["qualification"].'</td>
         <td>'.$row["job"].'</td>
		<td><a href="/rljit_cse/staff_delete.php? email='.$row["email"].'">DELETE</a></td>
		<td><a href="/rljit_cse/staff_update.php? stname='.$row["stname"].' & password='.$row["password"].' & email='.$row["email"].' & adhar='.$row["adhar"].' & staffph='.$row["staffph"].' & qualification='.$row["qualification"].' & job='.$row["job"].'"> UPDATE </a></td>

       </tr>  
        ';  
     }

     ?>
    </table>
    <br />
    <form method="post" action="/rljit_cse/export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
	
   </div>  
  </div>
</div>	

</div>


   
 </body>  
</html>