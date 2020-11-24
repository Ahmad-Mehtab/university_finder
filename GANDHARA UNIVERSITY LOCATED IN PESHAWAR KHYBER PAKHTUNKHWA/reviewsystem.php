<?php
include("../config/connection.php");

if(isset($_POST['submitbtn']))
{

$rating = $_POST['rating'];
$comments = $_POST['comments'];
$universityname = $_POST['universityname'];
$userid = $_SESSION["UniversityFinder"]["userid"];


$getdate = date("Y-m-d");

$insquery= "INSERT INTO user_comments VALUES ('','$userid','$universityname','$rating','$comments','1','$getdate')";
$runquery = mysql_query($insquery) or die(mysql_error());





$commentsqry = "SELECT * FROM user_comments WHERE university_name = '".$universityname."' AND status = '1' order by id DESC";
$getcomments = mysql_query($commentsqry);
$univeristycount = mysql_num_rows($getcomments);



$commentsqrycount = "SELECT SUM(rating_value) as totalrating FROM user_comments WHERE university_name = '".$universityname."' AND status = '1' order by id DESC";
$runcountqry = mysql_query($commentsqrycount);
$totalgetvalue = mysql_fetch_array($runcountqry);

$get_totalratings = $totalgetvalue['totalrating'];
$finalratingvalue = $get_totalratings / $univeristycount;
 $getfinalratingsystemvalue = number_format($finalratingvalue,1);


$update_qryrating = "UPDATE universities SET 
										total_rating = '".$getfinalratingsystemvalue."' WHERE id = '".$universityname."'";


$runinsqryrating = mysql_query($update_qryrating);




if($runquery)
{
 $okmsg = base64_encode("Thanks for your comments");
 header("Location:index.php?uid=$universityname");
 exit;
}
else
{
	
	$errormsg = base64_encode("Not Register please try Again. ");
	header("Location:index.php?errormsg=$errormsg");
	exit;
}

	
}
	


/////////////////////////// login code /////////////////////////


if(isset($_POST['loginbtn']))
{

$useremail = $_POST['email'];

$userpass = $_POST['password'];


$selectqry = "SELECT * FROM users WHERE email = '".$useremail."' AND password = '".$userpass."' AND status = '1'";
$runselectqry = mysql_query($selectqry);

$fetchvalues = mysql_fetch_array($runselectqry);
$userid = $fetchvalues['id'];
$username = $fetchvalues['name'];

$records = mysql_num_rows($runselectqry);
if($records > 0)
{
	
	
	$_SESSION["PeshawarFurnitureHouse"]["userid"] = $userid;
	$_SESSION["PeshawarFurnitureHouse"]["username"] = $username;
	
	
	$okmsg=base64_encode("You are login successfully.");
	header("Location:dashboard.php?okmsg=$okmsg");
	exit;		
}
else
{
$errormsg = base64_encode("Invalid username and password.");	
header("Location:login.php?errormsg=$errormsg");
	exit;	
}
	
}

?>