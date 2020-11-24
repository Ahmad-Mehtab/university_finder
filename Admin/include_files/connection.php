<?php 
		error_reporting(0);
		$connection = mysql_connect("localhost" , "root" , "")or die(mysql_error());
		mysql_select_db("university_finder" , $connection)or die(mysql_error());
 ?> 