<?php
include("config/connection.php");

if(isset($_POST['submitbtn']))
{

$name = $_POST['name'];

$email = $_POST['email'];

$username = $_POST['username'];

$password = $_POST['password'];

$phone = $_POST['phone'];

$country = $_POST['country'];

$address = $_POST['address'];


$selquery = "SELECT * FROM users WHERE email = '".$email."'";
$runselquery = mysql_query($selquery);
$fetchvalues = mysql_num_rows($runselquery);
if($fetchvalues > 0)
{
	$errormsg = base64_encode("Email Already Exisits");
	header("Location:index.php?errormsg=$errormsg");
	exit;	
}

$getdate = date("Y-m-d");

$insquery= "INSERT INTO users VALUES ('','$name','$username','$email','$phone','$country','$password','$getdate','$address','1')";

$runquery = mysql_query($insquery) or die(mysql_error());

if($runquery)
{
 $okmsg = base64_encode("Your Account Created Successfully. Please Login Now..");
 header("Location:index.php?okmsg=$okmsg");
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
	
	
	$_SESSION["UniversityFinder"]["userid"] = $userid;
	$_SESSION["UniversityFinder"]["username"] = $username;
	
	
	$okmsg=base64_encode("You are login successfully, You can comment and Review on Universities. ");
	header("Location:index.php?okmsg=$okmsg");
	exit;		
}
else
{
$errormsg = base64_encode("Invalid username and password.");	
header("Location:index.php?errormsg=$errormsg");
	exit;	
}
	
}





















//////////////////////// delete code ///////////////////////////////


if(isset($_GET['action']) && ($_GET['action'] == 'delete'))
{
	$userid = $_GET['id'];
	
	$delquery = "DELETE FROM users WHERE id = '".$userid."'";
	$runquery = mysql_query($delquery) or die(mysql_error());
	
	if($runquery)
	{
	header("Location:list.php");
 	exit;
	}
	else
	{
	header("Location:list.php");
 	exit;
	}
	
	
	
}


///////////////////////////// update user //////////////////


if(isset($_POST['updatebtn']))
{

    
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	$password = $_POST['password'];
	$address = $_POST['address'];

	   



$updateqry = "UPDATE users SET 

							   name = '".$name."',
							   username = '".$username."',
							   email = '".$email."',
							   phone = '".$phone."',
							   country = '".$country."',
							   password = '".$password."',
							   address = '".$address."'
							   WHERE id = '".$_SESSION["UniversityFinder"]["userid"]."'";
							  
							   $runquery=mysql_query($updateqry)  or die(mysql_error());

							  
						 
$runupdateqry = mysql_query($updateqry);

if($runupdateqry)
	{
	$okmsg = base64_encode("Account Updated Successfully.");
	header("Location:index.php?okmsg=$okmsg");
	exit;
	}
	else
	{
	
	$errormsg = base64_encode("Account not Updated, please try again.");
	header("Location:index.php?errormsg=$errormsg");
	exit;
	}




	   	
}






///////////////////////////// Business update account code //////////////////


if(isset($_POST['businessupdatebtn']))
{

    
$brand_name = $_POST['brand_name'];
$business_address = $_POST['business_address'];
	
	
$mylogo = $_FILES['logoimg']['name'];
$myfeature = $_FILES['featureimg']['name'];


	
if($mylogo)
{

$dir = "user.img";
$photoname1 = date('ymdghsi').$_FILES['logoimg']['name'];
$tempname1 = $_FILES['logoimg']['tmp_name'];
$uploadresult = move_uploaded_file($tempname1,$dir."/".$photoname1);
$updateqrylogo = "UPDATE users SET  
							   logoimg = '".$photoname1."'
							   WHERE id = '".$_SESSION["PeshawarFurnitureHouse"]["userid"]."'";
							   $updateqrylogorun=mysql_query($updateqrylogo)  or die(mysql_error());
}
	
	
	
	
	
	
if($myfeature)
{

$dir = "user.img";
$photoname2 = date('ymdghsi').$_FILES['featureimg']['name'];
$tempname2 = $_FILES['featureimg']['tmp_name'];
$uploadresult1 = move_uploaded_file($tempname2,$dir."/".$photoname2);
$updateqryfeature = "UPDATE users SET  
							   featureimg = '".$photoname2."'
							   WHERE id = '".$_SESSION["PeshawarFurnitureHouse"]["userid"]."'";
							   $updateqryfeaturerun=mysql_query($updateqryfeature)  or die(mysql_error());
}	






	
$updateqry = "UPDATE users SET 

							   brand_name = '".$brand_name."',
							   business_address = '".$business_address."'
							   WHERE id = '".$_SESSION["PeshawarFurnitureHouse"]["userid"]."'";
							   $runquery=mysql_query($updateqry)  or die(mysql_error());

							  



						 
$runupdateqry = mysql_query($updateqry);

if($runupdateqry)
	{
	$okmsg = base64_encode("Bussiness Account Updated Successfully.");
	header("Location:dashboard.php?okmsg=$okmsg");
	exit;
	}
	else
	{
	
	$errormsg = base64_encode("Bussiness Account not Updated, please try again.");
	header("Location:dashboard.php?errormsg=$errormsg");
	exit;
	}




	   	
}
?>