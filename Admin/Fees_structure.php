<?php
include "include_files/connection.php";

include "include_files/side_bar.php";

if (isset($_POST['submit'])) {

$univ_id =  $_POST['univ_id'];
$department_name =  $_POST['input_dept'];
$semestername            =  $_POST['semestername'];
$admission_fee     =  $_POST['admission_fee'];
$reg_fee =  $_POST['reg_fee'];
$tution_fee       =  $_POST['tution_fee'];
$exam_fee =  $_POST['exam_fee'];
$misc_charges	 =  $_POST['misc_charges'];
$total	 =  $_POST['total'];

$result_query= mysql_query("INSERT INTO fee_structure VALUES ('','$univ_id' , '$department_name' , '$semestername' , '$admission_fee' , '$reg_fee','$tution_fee','$exam_fee','$misc_charges','$total') ")or die(mysql_error());

if ($result_query)
{
echo "<script>alert('Record Inserted successfully');</script>";
}
else
{
echo "<script>alert('Record Insertion');</script>";
}

} 
//////////// code for deletion//////////////




?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Data Tables</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
<!-- Logo -->
<a href="home.php" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>A</b>LT</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-envelope-o"></i>
<span class="label label-success">4</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 4 messages</li>
<li>
<!-- inner menu: contains the actual data -->
<ul class="menu">
<li><!-- start message -->
<a href="#">
  <div class="pull-left">
	<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <h4>
	Support Team
	<small><i class="fa fa-clock-o"></i> 5 mins</small>
  </h4>
  <p>Why not buy a new awesome theme?</p>
</a>
</li><!-- end message -->
<li>
<a href="#">
  <div class="pull-left">
	<img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
  </div>
  <h4>
	AdminLTE Design Team
	<small><i class="fa fa-clock-o"></i> 2 hours</small>
  </h4>
  <p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
  <div class="pull-left">
	<img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
  </div>
  <h4>
	Developers
	<small><i class="fa fa-clock-o"></i> Today</small>
  </h4>
  <p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
  <div class="pull-left">
	<img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
  </div>
  <h4>
	Sales Department
	<small><i class="fa fa-clock-o"></i> Yesterday</small>
  </h4>
  <p>Why not buy a new awesome theme?</p>
</a>
</li>
<li>
<a href="#">
  <div class="pull-left">
	<img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
  </div>
  <h4>
	Reviewers
	<small><i class="fa fa-clock-o"></i> 2 days</small>
  </h4>
  <p>Why not buy a new awesome theme?</p>
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell-o"></i>
<span class="label label-warning">10</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 10 notifications</li>
<li>
<!-- inner menu: contains the actual data -->
<ul class="menu">
<li>
<a href="#">
  <i class="fa fa-users text-aqua"></i> 5 new members joined today
</a>
</li>
<li>
<a href="#">
  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
</a>
</li>
<li>
<a href="#">
  <i class="fa fa-users text-red"></i> 5 new members joined
</a>
</li>

<li>
<a href="#">
  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
</a>
</li>
<li>
<a href="#">
  <i class="fa fa-user text-red"></i> You changed your username
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-flag-o"></i>
<span class="label label-danger">9</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 9 tasks</li>
<li>
<!-- inner menu: contains the actual data -->
<ul class="menu">
<li><!-- Task item -->
<a href="#">
  <h3>
	Design some buttons
	<small class="pull-right">20%</small>
  </h3>
  <div class="progress xs">
	<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	  <span class="sr-only">20% Complete</span>
	</div>
  </div>
</a>
</li><!-- end task item -->
<li><!-- Task item -->
<a href="#">
  <h3>
	Create a nice theme
	<small class="pull-right">40%</small>
  </h3>
  <div class="progress xs">
	<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	  <span class="sr-only">40% Complete</span>
	</div>
  </div>
</a>
</li><!-- end task item -->
<li><!-- Task item -->
<a href="#">
  <h3>
	Some task I need to do
	<small class="pull-right">60%</small>
  </h3>
  <div class="progress xs">
	<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	  <span class="sr-only">60% Complete</span>
	</div>
  </div>
</a>
</li><!-- end task item -->
<li><!-- Task item -->
<a href="#">
  <h3>
	Make beautiful transitions
	<small class="pull-right">80%</small>
  </h3>
  <div class="progress xs">
	<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
	  <span class="sr-only">80% Complete</span>
	</div>
  </div>
</a>
</li><!-- end task item -->
</ul>
</li>
<li class="footer">
<a href="#">View all tasks</a>
</li>
</ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
<span class="hidden-xs">University Finder</span>
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header">
<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
<p>
University Finder - Web Developer
<small>Member since Nov. 2012</small>
</p>
</li>
<!-- Menu Body -->
<li class="user-body">
<div class="row">
<div class="col-xs-4 text-center">
<a href="#">Followers</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Sales</a>
</div>
<div class="col-xs-4 text-center">
<a href="#">Friends</a>
</div>
</div><!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="#" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
<a href="#" class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
<!-- Control Sidebar Toggle Button -->
<li>
<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Appointment Tables
<small>All Record</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Appointment</a></li>
<li class="active">Appointment table</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-xs-12">
<!-- Horizontal Form -->
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Horizontal Form</h3>
</div><!-- /.box-header -->
<!-- form start -->
<form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
<div class="box-body">


<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Select University</label>
<div class="col-sm-6">
<select class="form-control" name="univ_id">

<?php 
$select_dept =  mysql_query("SELECT * FROM universities order by id DESC");
while ($row_dept = mysql_fetch_array($select_dept)) {?>
<option value="<?php echo $row_dept['id']; ?>"><?php echo $row_dept['university_name'];?></option>
<?php } ?>
</select>
</div>
</div>




<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Select dept</label>
<div class="col-sm-6">
<select class="form-control" name="input_dept">
  <option>select department</option>
  <?php 
 $select_dept =  mysql_query("SELECT * FROM department");
 while ($row_dept = mysql_fetch_array($select_dept)) {?>

  <option value="<?php echo $row_dept['id']; ?>"><?php echo $row_dept['department_name']?></option>
 <?php } ?>
</select>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Semester</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Semester" name="semestername">
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Admission Fee</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Admission Fee" name="admission_fee">
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Semester Regst Fee</label>
<div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Semester Registration Fee" name="reg_fee">
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Tuition Fee</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Tuition Fee" name="tution_fee">
</div>
</div> 

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Exam Fee</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Exam Fee" name="exam_fee">
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Tuition Fee</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Misc Charges" name="misc_charges">
</div>
</div> 

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Total</label>
<div class="col-sm-6">
<input type="text" class="form-control" placeholder="Total" name="total">
</div>
</div> 

</div><!-- /.box-body -->
<div class="box-footer">
<input type="submit" class="btn btn-info pull-right" name="submit">
</div><!-- /.box-footer -->
</form>
</div><!-- /.box -->
<div class="box">
<div class="box-header">
<h3 class="box-title">All Records of Faculty members</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>


<th>Universtity Name</th>
<th>Department Name</th>
<th>Semester</th>
<th>Admission Fees</th>
<th>Registration Fee</th>
<th>Tution Fee</th>
<th>Exams Fee</th>
<th>Misc Charges</th>
<th>Total</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<?php
$delete = mysql_query("SELECT * FROM fee_structure");
while ($row = mysql_fetch_array($delete)) {?>
<tr>
<td>
<?php $univ_id = $row['univ_id'];
$selectunivqry = mysql_query("SELECT * FROM universities WHERE id = '".$univ_id."'");
$fetchquery=mysql_fetch_array($selectunivqry);
echo $fetchquery['university_name'];
?>
</td>
<td>
<?php $dept_id = $row['dept_id'];
$selectunivqry = mysql_query("SELECT * FROM department WHERE id = '".$dept_id."'");
$fetchquery=mysql_fetch_array($selectunivqry);
echo $fetchquery['department_name'];
?>
</td>
<td><?php echo $row['semestername'];?></td>
<td><?php echo $row['admission_fee'];?></td>
<td><?php echo $row['reg_fee'];?></td>
<td><?php echo $row['tution_fee'];?></td>
<td><?php echo $row['exam_fee'];?></td>
<td><?php echo $row['misc_charges'];?></td>
<td><?php echo $row['total'];?></td>
<td nowrap="true">
<a href="delete_fees.php?id=<?php echo $row['id'];?>">Delete</a>
</td>
</tr>
<?php }?>
</tbody>

</table>
</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<footer class="main-footer">
<div class="pull-right hidden-xs">
<b>Version</b> 2.3.0
</div>
<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<!-- Home tab content -->
<div class="tab-pane" id="control-sidebar-home-tab">
<h3 class="control-sidebar-heading">Recent Activity</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-birthday-cake bg-red"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
<p>Will be 23 on April 24th</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-user bg-yellow"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
<p>New phone +1(800)555-1234</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
<p>nora@example.com</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-file-code-o bg-green"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
<p>Execution time 5 seconds</p>
</div>
</a>
</li>
</ul><!-- /.control-sidebar-menu -->

<h3 class="control-sidebar-heading">Tasks Progress</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Custom Template Design
<span class="label label-danger pull-right">70%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Update Resume
<span class="label label-success pull-right">95%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-success" style="width: 95%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Laravel Integration
<span class="label label-warning pull-right">50%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Back End Framework
<span class="label label-primary pull-right">68%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
</div>
</a>
</li>
</ul><!-- /.control-sidebar-menu -->

</div><!-- /.tab-pane -->
<!-- Stats tab content -->
<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
<!-- Settings tab content -->
<div class="tab-pane" id="control-sidebar-settings-tab">
<form method="post">
<h3 class="control-sidebar-heading">General Settings</h3>
<div class="form-group">
<label class="control-sidebar-subheading">
Report panel usage
<input type="checkbox" class="pull-right" checked>
</label>
<p>
Some information about this general settings option
</p>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Allow mail redirect
<input type="checkbox" class="pull-right" checked>
</label>
<p>
Other sets of options are available
</p>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Expose author name in posts
<input type="checkbox" class="pull-right" checked>
</label>
<p>
Allow the user to show his name in blog posts
</p>
</div><!-- /.form-group -->

<h3 class="control-sidebar-heading">Chat Settings</h3>

<div class="form-group">
<label class="control-sidebar-subheading">
Show me as online
<input type="checkbox" class="pull-right" checked>
</label>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Turn off notifications
<input type="checkbox" class="pull-right">
</label>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-sidebar-subheading">
Delete chat history
<a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
</label>
</div><!-- /.form-group -->
</form>
</div><!-- /.tab-pane -->
</div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
$("#example1").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false
});
});
</script>
</body>
</html>
