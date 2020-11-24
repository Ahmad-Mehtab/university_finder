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
<title>Fee Strucuture</title>
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
<div class="container-fluid">
<div class="row">
<div class="col-sm-11 ml-5">


<?php 
$getdeptqry = "SELECT * FROM department";
$rundptqry = mysql_query($getdeptqry);
while($getdept=mysql_fetch_array($rundptqry))
{
?>

<table class="table table-bordered">
<br>
<h4 class="text-center text-light bg-success"><?php echo $getdept['department_name'];?></h4>
<thead>
<tr class="bg-warning" style="color:white">
<th>Semster</th>
<th>Admssion Fee</th>
<th>Semester Registration Fee</th>
<th>Tuition Fee</th>
<th>Exam Fee</th>
<th>Misc Charges</th>
<th>Total</th>
</tr>
</thead>
<tbody style="color:white">

<?php
$admissiontotal = 0;
$regfees = 0;
$tutionfees = 0;
$examfees = 0;
$miscfees = 0;
$totalfees = 0;


$selectfeesqry = mysql_query("SELECT * FROM fee_structure WHERE univ_id = '".$getunivid."' AND dept_id = '".$getdept['id']."'");
while($getfees=mysql_fetch_array($selectfeesqry))
{
?>
<tr>
<td><?php echo $getfees['semestername'];?> </td>
<td>
<?php echo $admission_fee = $getfees['admission_fee'];
$admissiontotal += $admission_fee;
?>
</td>
<td class="text-center">
<?php echo $reg_fee = $getfees['reg_fee'];
$regfees += $reg_fee;
?></td>
<td>
<?php echo $tution_fee = $getfees['tution_fee'];
$tutionfees += $tution_fee;
?></td>
<td><?php echo $exam_fee = $getfees['exam_fee'];

$examfees += $exam_fee;

?></td>
<td><?php echo $misc_charges = $getfees['misc_charges'];

$miscfees += $misc_charges;

?></td>
<td><?php echo $total = $getfees['total'];

$totalfees += $total;

?></td>
</tr>


<?php
}
?>

<tr>
<td>Complete Course</td>
<td><?php echo $admissiontotal;?></td>
<td class="text-center"><?php echo $regfees;?></td>
<td><?php echo $tutionfees;?></td>
<td><?php echo $examfees;?></td>
<td><?php echo $miscfees;?></td>
<td><?php echo $totalfees;?></td>
</tr>
</tbody>
</table>
<br>

<?php
}
?>





</div>
</div>
</body>
</html>