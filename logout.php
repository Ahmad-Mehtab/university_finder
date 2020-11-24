<?php
session_start();

unset($_SESSION["UniversityFinder"]);

$okmsg = base64_encode("Your are successfully logged out.");	
header("Location:index.php?okmsg=$okmsg");
exit;	



?>