<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "rljit_cse");
$output = '';
if(isset($_POST["export4"]))
{
 $query = "SELECT * FROM student where syear='4thYear'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>
						 <th>Student Name</th>  
                         <th>USN</th>  
                         <th>Email</th>  
                         <th>DOB</th>
                         <th>Mobile</th>
                         <th>Father</th>
                         <th>Father Mobile</th>
						 <th>Present Year</th>
						 <th>10th Percentage</th>
						 <th>10th YOP</th>
						 <th>12th Percentage</th>
						 <th>12th YOP</th>
						 <th>SEM I</th>
						 <th>SEM II</th>
						 <th>SEM III</th>
						 <th>SEM IV</th>
						 <th>SEM V</th>
						 <th>SEM VI</th>
						 <th>SEM VII</th>
						 <th>SEM VIII</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr> 
		 <td>'.$row["sname"].'</td>  
         <td>'.$row["usn"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["sdob"].'</td>  
         <td>'.$row["sph"].'</td>
         <td>'.$row["father"].'</td>
         <td>'.$row["sfph"].'</td>
		 <td>'.$row["syear"].'</td>
		 <td>'.$row["sx"].'</td>
		 <td>'.$row["sxyop"].'</td>
		 <td>'.$row["sxii"].'</td>
		 <td>'.$row["sxiiyop"].'</td>
		 <td>'.$row["si"].'</td>
		 <td>'.$row["sii"].'</td>
		 <td>'.$row["siii"].'</td>
		 <td>'.$row["siv"].'</td>
		 <td>'.$row["sv"].'</td>
		 <td>'.$row["svi"].'</td>
		 <td>'.$row["svii"].'</td>
		 <td>'.$row["sviii"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=downloadstudent4yr.xls');
  echo $output;
 }
}
?>
