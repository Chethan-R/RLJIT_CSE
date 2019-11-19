<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="stu_css/bootstrap.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
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
				<li><a href="/rljit_cse/login.html" accesskey="4" title="">Login</a></li>
				
				
				
				<li><a href="/rljit_cse/logout1.php" accesskey="5" title="">Logout</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>R L Jalappa Institute of Technology</h2>
				<span class="byline">Dept. of "Computer Science & Engineering"</span> </div>
				
			<ul class="actions">
				<li><a href="/rljit_cse/noti_stu.php" class="button">Get Circular</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
	
		<div class="container home" align="center">
<font face="comic sans ms">
<h3><center> List of Files the can be Download </center> </h3><br><br>
</font>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms"><b>Date</b></font></th>
    
	<th><font face="comic sans ms"><b>Download Files</b> </font></th>
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
		
		echo "<td align=center><a title='Click here to download in file.' href='./stu/stu_download.php?id={$row['file']}'>{$row['file']} </a>"; 
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="/stu_display.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
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
		echo '<a href="/stu_display.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="/stu_display.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
     }
   
?>

</div>
<br>
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
