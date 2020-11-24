<?php 
  include("../config/connection.php");
  $recieve_id = $_GET['id'];
  
  $getunivid = $_GET['uid'];
  
$selectqry = "SELECT * FROM universities WHERE id = '".$getunivid."'";
$runseleqry = mysql_query($selectqry);
$fetchvalues = mysql_fetch_array($runseleqry);

$getuniv_name = $fetchvalues['university_name'];
$getuniv_description = $fetchvalues['univ_description'];
$getuniv_featureimg = $fetchvalues['featureimg'];
  
  
  
  
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Faculty Members</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	<img src="../univ_img/<?php echo $getuniv_featureimg;?>" class="img-fluid img-thumbnail" width="100%" height="50%">
	<br><br>


		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<ul class="nav nav-tabs" >
					<?php
					$row =  mysql_query("SELECT * FROM department");
					while ($select = mysql_fetch_array($row)) {?>
    	 	   	   <li class="nav-item" ><a href="faculty.php?id=<?php echo $select['id'];?>&amp;uid=<?php echo $getunivid;?>" class="nav-link active" data-toggle="popover" data-content="please click here" title="Are you get inquiry about faculty ?" data-trigger="hover" data-placement="bottom" ><b><?php echo $select['department_name'];?></b></a></li>
    	 	   	    <?php } ?>
 	    	 	</ul>		
				</div>
			</div>
		</div>

<div class="container">
<div class="row">
<div class="col-sm-12">
<table class="table table-bordered">
<br>
<h4 class="text-center text-light bg-success">Overall University Departments Faculty</h4>
<thead>
<tr class="bg-warning" style="color:white">
<th>S.No</th>
<th>Name Of Faculty</th>
<th>Designation</th>
<th>Heighest Dagree</th>
<th>Dagree Institute</th>
</tr>
</thead>
<tbody style="color:white">
<?php 
$facultyqry = "SELECT * FROM faculty_members WHERE department_id =  '$recieve_id' AND university_id = '".$getunivid."'";
$result = mysql_query($facultyqry);
while ($row = mysql_fetch_array($result)) {?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['faculty_name'];?></td>
<td><?php echo $row['designation'];?></td>
<td><?php echo $row['heighest_degree'];?></td>
<td><?php echo $row['degree_institute'];?></td>
</tr>

<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
				<br><br>
				
				
</body>
</html>

<script>
	 $(document).ready(function(){
	 		$('[data-toggle="tooltip"]').tooltip();
	 		$('[data-toggle="popover"]').popover();
	 });
</script>
