<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "rljit_cse");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM staff";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>
						 <th>Staff Name</th>  
                         <th>Password</th>  
                         <th>Email</th>  
                         <th>Adhar Number</th>
                         <th>Mobile</th>
                         <th>Qualification</th>
                         <th>Job Description</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr> 
		 <td>'.$row["stname"].'</td>  
         <td>'.$row["password"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["adhar"].'</td>  
         <td>'.$row["staffph"].'</td>
         <td>'.$row["qualification"].'</td>
         <td>'.$row["job"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=downloadstaff.xls');
  echo $output;
 }
}
?>
