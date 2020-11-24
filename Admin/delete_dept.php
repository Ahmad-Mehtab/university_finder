<?php 
$connect = mysql_connect("localhost" , "root" , "")or die(mysql_error());
   mysql_select_db('university_finder' , $connect)or die(mysql_error());

   		$Edit_record = $_GET['id'];

		mysql_query("DELETE FROM department WHERE id = $Edit_record " ) or die (mysql_error());

		if (
   		$Edit_record)
               {
               echo "<script>alert('Record inserted successfully');</script>";
               header("location:add_dept.php");
               }
               else
               {
                  echo "<script>alert('Record inserted failed');</script>";
               }

 ?>