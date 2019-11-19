<?php 
include "stu_connection.php"; 

$id = $_GET['id']; 

mysql_query("DELETE FROM stu_presentation where id = '$id'"); 

header("Location: stu_delete.php"); 

?>
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


