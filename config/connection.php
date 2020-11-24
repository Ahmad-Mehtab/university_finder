<?php
ob_start();
session_start();
error_reporting(0);

$connect = mysql_connect("localhost","root","");

$selectdb = mysql_select_db("university_finder");



if($selectdb && $connect)
{
	//echo "connected";	
}
else
{
	echo "Not connected.";	
}






?>