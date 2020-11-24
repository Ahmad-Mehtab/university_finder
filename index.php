<?php 
include("config/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>University Finder</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Jquery slider" />
<!-- slidercode -->
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


</head>


<?php
if(isset($_GET['okmsg']))
{
?>

<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success. </strong> <?php echo base64_decode($_GET['okmsg']);?>
</div>

<?php
}
else if(isset($_GET['errormsg']))
{
?>

<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Failed. </strong> <?php echo base64_decode($_GET['errormsg']);?>
</div>
<?php
}
?>


<body class="bg-dark">
<nav class="navbar  navbar-expand-sm navbar-dark bg-dark">
		<a href="#" class="navbar-brand"><h4 style="color:grey;font-style: italic;;font-family:plaster">University Finder</h4></a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#khan">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="khan">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item mr-5"><a class="nav-link active" href="" >HOME</a></li>
			<li class="nav-item mr-5"><a class="nav-link" href="about.html" >ABOUT US</a></li>
			<li class="nav-item mr-5"><a class="nav-link" href="" >CATEGORIES</a></li>
			<li class="nav-item mr-5"><a class="nav-link" href="" >CONTACT US</a></li>
		</ul>
		</div>
		
		
		

<?php
$useractive = $_SESSION["UniversityFinder"]["userid"];
if(isset($useractive))
{
?> 



<button type="button"  style="margin:0 5px;"  class="btn btn-primary" data-toggle="modal" data-target="#updateModalregister">Welcome, <?php echo $_SESSION["UniversityFinder"]["username"];?></button>

<!--<a class="btn btn-primary" style="margin:0 5px;" href="dashboard.php">Welcome, <?php echo $_SESSION["UniversityFinder"]["username"];?></a>-->


<a href="logout.php" style="margin:0 5px;" class="btn btn-primary">Logout</a>   
<?php
}
else
{
?>
<button type="button"  style="margin:0 5px;"  class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login
</button>
<button type="button"  style=""  class="btn btn-primary" data-toggle="modal" data-target="#myModalregister">Register</button>                     
<?php
}
?>





	

		

	</nav>
	<!-- Slidercode start -->
	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
<li><img src="data1/images/4.jpg" alt="Instruction does much, but encouragement everything." title="Instruction does much, but encouragement everything." id="wows1_3"/></li>
<li><img src="data1/images/5.jpg" alt="Children must be taught how to think, not what to think." title="Children must be taught how to think, not what to think." id="wows1_4"/></li>
<li><img src="data1/images/6.jpg" alt="Teaching kids to count is fine, but teaching them what counts is best. " title="Teaching kids to count is fine, but teaching them what counts is best. " id="wows1_5"/></li>
<li><img src="data1/images/7.jpg" alt="Kids don’t remember what you try to teach them. They remember what you are." title="Kids don’t remember what you try to teach them. They remember what you are." id="wows1_6"/></li>
<li><img src="data1/images/8.jpg" alt="They know enough who know how to learn." title="They know enough who know how to learn." id="wows1_7"/></li>
<li><img src="data1/images/9.jpg" alt="I would rather entertain and hope that people learned something than educate people and hope they were entertained" title="I would rather entertain and hope that people learned something than educate people and hope they were entertained" id="wows1_8"/></li>
<li><img src="data1/images/10.jpg" alt="Skepticism: the mark and even the pose of the educated mind." title="Skepticism: the mark and even the pose of the educated mind." id="wows1_9"/></li>
<li><img src="data1/images/12.jpg" alt="People learn more on their own rather than being force fed. " title="People learn more on their own rather than being force fed. " id="wows1_11"/></li>
<li><img src="data1/images/13.jpg" alt="The giving of love is an education in itself." title="The giving of love is an education in itself." id="wows1_12"/></li>
<li><img src="data1/images/14.jpg" alt="You educate a man; you educate a man. You educate a woman; you educate a generation." title="You educate a man; you educate a man. You educate a woman; you educate a generation." id="wows1_13"/></li>
<li><img src="data1/images/15.jpg" alt="The best teachers are those who show you where to look but don’t tell you what to see." title="The best teachers are those who show you where to look but don’t tell you what to see." id="wows1_14"/></li>
<li><img src="data1/images/16.jpg" alt="Education begins the gentleman, but reading, good company and reflection must finish him. " title="Education begins the gentleman, but reading, good company and reflection must finish him. " id="wows1_15"/></li>
<li><img src="data1/images/17.jpg" alt="Life itself is your teacher, and you are in a state of constant learning. " title="Life itself is your teacher, and you are in a state of constant learning. " id="wows1_16"/></li>
<li><img src="data1/images/18.jpg" alt="Play is the highest form of research." title="Play is the highest form of research." id="wows1_17"/></li>
<li><a href="http://wowslider.net"><img src="data1/images/19.jpg" alt="bootstrap image slider" title="Who questions much, shall learn much, and retain much. " id="wows1_18"/></a></li>
<li><img src="data1/images/20.jpg" alt="I have never let my schooling interfere with my education." title="I have never let my schooling interfere with my education." id="wows1_19"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Instruction does much, but encouragement everything."><span><img src="data1/tooltips/4.jpg" alt="Instruction does much, but encouragement everything."/>4</span></a>
<a href="#" title="Children must be taught how to think, not what to think."><span><img src="data1/tooltips/5.jpg" alt="Children must be taught how to think, not what to think."/>5</span></a>
<a href="#" title="Teaching kids to count is fine, but teaching them what counts is best. "><span><img src="data1/tooltips/6.jpg" alt="Teaching kids to count is fine, but teaching them what counts is best. "/>6</span></a>
<a href="#" title="Kids don’t remember what you try to teach them. They remember what you are."><span><img src="data1/tooltips/7.jpg" alt="Kids don’t remember what you try to teach them. They remember what you are."/>7</span></a>
<a href="#" title="They know enough who know how to learn."><span><img src="data1/tooltips/8.jpg" alt="They know enough who know how to learn."/>8</span></a>
<a href="#" title="I would rather entertain and hope that people learned something than educate people and hope they were entertained"><span><img src="data1/tooltips/9.jpg" alt="I would rather entertain and hope that people learned something than educate people and hope they were entertained"/>9</span></a>
<a href="#" title="Skepticism: the mark and even the pose of the educated mind."><span><img src="data1/tooltips/10.jpg" alt="Skepticism: the mark and even the pose of the educated mind."/>10</span></a>
<a href="#" title="People learn more on their own rather than being force fed. "><span><img src="data1/tooltips/12.jpg" alt="People learn more on their own rather than being force fed. "/>12</span></a>
<a href="#" title="The giving of love is an education in itself."><span><img src="data1/tooltips/13.jpg" alt="The giving of love is an education in itself."/>13</span></a>
<a href="#" title="You educate a man; you educate a man. You educate a woman; you educate a generation."><span><img src="data1/tooltips/14.jpg" alt="You educate a man; you educate a man. You educate a woman; you educate a generation."/>14</span></a>
<a href="#" title="The best teachers are those who show you where to look but don’t tell you what to see."><span><img src="data1/tooltips/15.jpg" alt="The best teachers are those who show you where to look but don’t tell you what to see."/>15</span></a>
<a href="#" title="Education begins the gentleman, but reading, good company and reflection must finish him. "><span><img src="data1/tooltips/16.jpg" alt="Education begins the gentleman, but reading, good company and reflection must finish him. "/>16</span></a>
<a href="#" title="Life itself is your teacher, and you are in a state of constant learning. "><span><img src="data1/tooltips/17.jpg" alt="Life itself is your teacher, and you are in a state of constant learning. "/>17</span></a>
<a href="#" title="Play is the highest form of research."><span><img src="data1/tooltips/18.jpg" alt="Play is the highest form of research."/>18</span></a>
<a href="#" title="Who questions much, shall learn much, and retain much. "><span><img src="data1/tooltips/19.jpg" alt="Who questions much, shall learn much, and retain much. "/>19</span></a>
<a href="#" title="I have never let my schooling interfere with my education."><span><img src="data1/tooltips/20.jpg" alt="I have never let my schooling interfere with my education."/>20</span></a>
</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css image gallery</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<br><br><br>

 <h3 class="text-center text-light">Search Universities</h3>
 <p class="text-center text-light">Find Out & Explore best Univeristies near your area and see what's happening !!!</p>
<br>
<form method="post" action="search.php" enctype="multipart/form-data">

<div class="container">
 <div class="row">
 
 
 <div class="clearfix"></div><br>

 <div class="col-sm-3">
 <label style="color:#fff;">Rarting</label>
 <select class="form-control" name="ratings">
 
 <option value="5">5.0</option>
 <option value="4">4.0</option>
 <option value="3">3.0</option>
 <option value="2">2.0</option>
 <option value="1">1.0</option>
 
 
 </select></div>
 <div class="col-sm-3">
 <label style="color:#fff;">Department</label>
 <select class="form-control" name="deptid">
 
 <?php 
 $departmentqry = mysql_query("SELECT * FROM department");
 while($getdpt = mysql_fetch_array($departmentqry))
 {
 ?>
 <option value="<?php echo $getdpt['id'];?>"><?php echo $getdpt['department_name'];?></option>
 <?php
 }
 ?>
 </select></div>
 <div class="col-sm-3">
 <label style="color:#fff;">Fees</label>
 <select class="form-control" name="fees">
 
    <option value="600000">300000 - 600000</option>
    <option value="1500000">700000 - 1500000</option>
    <option value="2000000">1500000 - 2000000</option>
    <option value="3000000">2000000+</option>
 
 </select></div>
 <div class="col-sm-3">
 <br>
 <input type="submit" value="Search" name="search" style="margin-top:10px;" class="btn btn-primary btn-block"></div>
 
 
 </div>
</div>

</form>

<br>
<br>

<hr>

<br>
<br>






<div class="container">
<div class="row">
<div class="col-sm-12">
<h3 class="text-center text-light">Our Featured Ads</h3>
<p class="text-center text-light">Find Out & Explore best Univeristies near your area and see what's happening !!!</p>
</div>
</div>
<br><br>
<div class="row">


<?php
$counter = 1;
$selectqry = "SELECT * FROM Universities order by total_rating DESC";
$runselqry = mysql_query($selectqry);
while($getuniv=mysql_fetch_array($runselqry))
{
?>    

<div class="col-sm-3" style="margin-bottom:20px;">
<div class="card">
	<div class="card-body">
	 <a href="cecos/index.php?uid=<?php echo $getuniv['id'];?>"><img style="width:200px; height:200px;" src="univ_img/<?php echo $getuniv['university_logo'];?>" class="img-fluid"></a>
	</div>
	<div class="card-footer bg-dark">
		<h6 class="text-light"><?php echo $getuniv['university_name'];?></h6>
	</div>
</div>
</div>

<?php

if($counter%4==0)
{
	echo "<br><br>";	
}


$counter++;




}
?>	


</div>
<br><br>

<br><br>

</div>
<br><br>
<!-- CONTAINER CLOSE FOR UYNIVERSITIES -->





<!-- Modal Register -->
<div id="myModalregister" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Register</h4>
</div>
<div class="modal-body">

<form action="usermgm.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<label for="name">Name *</label>
<input type="text" class="form-control" name="name" id="name">
</div>
<div class="col-sm-6">
<label for="email">Email *</label>
<input type="email" class="form-control" name="email" id="email">
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6">
<label for="username">User Name*</label>
<input type="text" class="form-control" name="username">
</div>
<div class="col-sm-6">
<label for="password">password *</label>
<input type="password" class="form-control" name="password" >
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6">
<label for="Mobile">Mobile *</label>
<input type="number" class="form-control" name="phone" >
</div>
<div class="col-sm-6">
<label for="Location">Location *</label>
<select name="country" id="city" class="form-control" required>
<option class="option" value="Please Choose">Please Choose</option>
<option class="option" value="Peshawar">Peshawar</option>
<option class="option" value="Abbottabad">Abbottabad</option>
<option class="option" value="Adezai">Adezai</option>
<option class="option" value="Ali Bandar">Ali Bandar</option>
<option class="option" value="Amir Chah">Amir Chah</option>
<option class="option" value="Attock">Attock</option>
<option class="option" value="Ayubia">Ayubia</option>
<option class="option" value="Bahawalpur">Bahawalpur</option>
<option class="option" value="Baden">Baden</option>
<option class="option" value="Bagh">Bagh</option>
<option class="option" value="Bahawalnagar">Bahawalnagar</option>
<option class="option" value="Burewala">Burewala</option>
<option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
<option class="option" value="Bannu district|Bannu">Bannu</option>
<option class="option" value="Batagram">Batagram</option>
<option class="option" value="Bazdar">Bazdar</option>
<option class="option" value="Bela">Bela</option>
<option class="option" value="Bellpat">Bellpat</option>
<option class="option" value="Bhag">Bhag</option>
<option class="option" value="Bhakkar">Bhakkar</option>
<option class="option" value="Bhalwal">Bhalwal</option>
<option class="option" value="Bhimber">Bhimber</option>
<option class="option" value="Birote">Birote</option>
<option class="option" value="Buner">Buner</option>
<option class="option" value="Burj">Burj</option>
<option class="option" value="Chiniot">Chiniot</option>
<option class="option" value="Chachro">Chachro</option>
<option class="option" value="Chagai">Chagai</option>
<option class="option" value="Chah Sandan">Chah Sandan</option>
<option class="option" value="Chailianwala">Chailianwala</option>
<option class="option" value="Chakdara">Chakdara</option>
<option class="option" value="Chakku">Chakku</option>
<option class="option" value="Chakwal">Chakwal</option>
<option class="option" value="Chaman">Chaman</option>
<option class="option" value="Charsadda">Charsadda</option>
<option class="option" value="Chhatr">Chhatr</option>
<option class="option" value="Chichawatni">Chichawatni</option>
<option class="option" value="Chitral">Chitral</option>
<option class="option" value="Dadu">Dadu</option>
<option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
<option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
<option class="option" value="Dalbandin">Dalbandin</option>
<option class="option" value="Dargai">Dargai</option>
<option class="option" value="Darya Khan">Darya Khan</option>
<option class="option" value="Daska">Daska</option>
<option class="option" value="Dera Bugti">Dera Bugti</option>
<option class="option" value="Dhana Sar">Dhana Sar</option>
<option class="option" value="Digri">Digri</option>
<option class="option" value="Dina City|Dina">Dina</option>
<option class="option" value="Dinga">Dinga</option>
<option class="option" value="Diplo, Pakistan|Diplo">Diplo</option>
<option class="option" value="Diwana">Diwana</option>
<option class="option" value="Dokri">Dokri</option>
<option class="option" value="Drosh">Drosh</option>
<option class="option" value="Duki">Duki</option>
<option class="option" value="Dushi">Dushi</option>
<option class="option" value="Duzab">Duzab</option>
<option class="option" value="Faisalabad">Faisalabad</option>
<option class="option" value="Fateh Jang">Fateh Jang</option>
<option class="option" value="Ghotki">Ghotki</option>
<option class="option" value="Gwadar">Gwadar</option>
<option class="option" value="Gujranwala">Gujranwala</option>
<option class="option" value="Gujrat">Gujrat</option>
<option class="option" value="Gadra">Gadra</option>
<option class="option" value="Gajar">Gajar</option>
<option class="option" value="Gandava">Gandava</option>
<option class="option" value="Garhi Khairo">Garhi Khairo</option>
<option class="option" value="Garruck">Garruck</option>
<option class="option" value="Ghakhar Mandi">Ghakhar Mandi</option>
<option class="option" value="Ghanian">Ghanian</option>
<option class="option" value="Ghauspur">Ghauspur</option>
<option class="option" value="Ghazluna">Ghazluna</option>
<option class="option" value="Girdan">Girdan</option>
<option class="option" value="Gulistan">Gulistan</option>
<option class="option" value="Gwash">Gwash</option>
<option class="option" value="Hyderabad">Hyderabad</option>
<option class="option" value="Hala">Hala</option>
<option class="option" value="Haripur">Haripur</option>
<option class="option" value="Hab Chauki">Hab Chauki</option>
<option class="option" value="Hafizabad">Hafizabad</option>
<option class="option" value="Hameedabad">Hameedabad</option>
<option class="option" value="Hangu">Hangu</option>
<option class="option" value="Harnai">Harnai</option>
<option class="option" value="Hasilpur">Hasilpur</option>
<option class="option" value="Haveli Lakha">Haveli Lakha</option>
<option class="option" value="Hinglaj">Hinglaj</option>
<option class="option" value="Hoshab">Hoshab</option>
<option class="option" value="Islamabad">Islamabad</option>
<option class="option" value="Islamkot">Islamkot</option>
<option class="option" value="Ispikan">Ispikan</option>
<option class="option" value="Jacobabad">Jacobabad</option>
<option class="option" value="Jamshoro">Jamshoro</option>
<option class="option" value="Jhang">Jhang</option>
<option class="option" value="Jhelum">Jhelum</option>
<option class="option" value="Jamesabad">Jamesabad</option>
<option class="option" value="Jampur">Jampur</option>
<option class="option" value="Janghar">Janghar</option>
<option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
<option class="option" value="Jauharabad">Jauharabad</option>
<option class="option" value="Jhal">Jhal</option>
<option class="option" value="Jhal Jhao">Jhal Jhao</option>
<option class="option" value="Jhatpat">Jhatpat</option>
<option class="option" value="Jhudo">Jhudo</option>
<option class="option" value="Jiwani">Jiwani</option>
<option class="option" value="Jungshahi">Jungshahi</option>
<option class="option" value="Karachi">Karachi</option>
<option class="option" value="Kotri">Kotri</option>
<option class="option" value="Kalam">Kalam</option>
<option class="option" value="Kalandi">Kalandi</option>
<option class="option" value="Kalat">Kalat</option>
<option class="option" value="Kamalia">Kamalia</option>
<option class="option" value="Kamararod">Kamararod</option>
<option class="option" value="Kamber">Kamber</option>
<option class="option" value="Kamokey">Kamokey</option>
<option class="option" value="Kanak">Kanak</option>
<option class="option" value="Kandi">Kandi</option>
<option class="option" value="Kandiaro">Kandiaro</option>
<option class="option" value="Kanpur">Kanpur</option>
<option class="option" value="Kapip">Kapip</option>
<option class="option" value="Kappar">Kappar</option>
<option class="option" value="Karak City">Karak City</option>
<option class="option" value="Karodi">Karodi</option>
<option class="option" value="Kashmor">Kashmor</option>
<option class="option" value="Kasur">Kasur</option>
<option class="option" value="Katuri">Katuri</option>
<option class="option" value="Keti Bandar">Keti Bandar</option>
<option class="option" value="Khairpur">Khairpur</option>
<option class="option" value="Khanaspur">Khanaspur</option>
<option class="option" value="Khanewal">Khanewal</option>
<option class="option" value="Kharan">Kharan</option>
<option class="option" value="kharian">kharian</option>
<option class="option" value="Khokhropur">Khokhropur</option>
<option class="option" value="Khora">Khora</option>
<option class="option" value="Khushab">Khushab</option>
<option class="option" value="Khuzdar">Khuzdar</option>
<option class="option" value="Kikki">Kikki</option>
<option class="option" value="Klupro">Klupro</option>
<option class="option" value="Kohan">Kohan</option>
<option class="option" value="Kohat">Kohat</option>
<option class="option" value="Kohistan">Kohistan</option>
<option class="option" value="Kohlu">Kohlu</option>
<option class="option" value="Korak">Korak</option>
<option class="option" value="Korangi">Korangi</option>
<option class="option" value="Kot Sarae">Kot Sarae</option>
<option class="option" value="Kotli">Kotli</option>
<option class="option" value="Lahore">Lahore</option>
<option class="option" value="Larkana">Larkana</option>
<option class="option" value="Lahri">Lahri</option>
<option class="option" value="Lakki Marwat">Lakki Marwat</option>
<option class="option" value="Lasbela">Lasbela</option>
<option class="option" value="Latamber">Latamber</option>
<option class="option" value="Layyah">Layyah</option>
<option class="option" value="Leiah">Leiah</option>
<option class="option" value="Liari">Liari</option>
<option class="option" value="Lodhran">Lodhran</option>
<option class="option" value="Loralai">Loralai</option>
<option class="option" value="Lower Dir">Lower Dir</option>
<option class="option" value="Shadan Lund">Shadan Lund</option>
<option class="option" value="Multan">Multan</option>
<option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
<option class="option" value="Mansehra">Mansehra</option>
<option class="option" value="Mian Chanu">Mian Chanu</option>
<option class="option" value="Mirpur">Mirpur</option>
<option class="option" value="Moro, Pakistan|Moro">Moro</option>
<option class="option" value="Mardan">Mardan</option>
<option class="option" value="Mach">Mach</option>
<option class="option" value="Madyan">Madyan</option>
<option class="option" value="Malakand">Malakand</option>
<option class="option" value="Mand">Mand</option>
<option class="option" value="Manguchar">Manguchar</option>
<option class="option" value="Mashki Chah">Mashki Chah</option>
<option class="option" value="Maslti">Maslti</option>
<option class="option" value="Mastuj">Mastuj</option>
<option class="option" value="Mastung">Mastung</option>
<option class="option" value="Mathi">Mathi</option>
<option class="option" value="Matiari">Matiari</option>
<option class="option" value="Mehar">Mehar</option>
<option class="option" value="Mekhtar">Mekhtar</option>
<option class="option" value="Merui">Merui</option>
<option class="option" value="Mianwali">Mianwali</option>
<option class="option" value="Mianez">Mianez</option>
<option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
<option class="option" value="Mirpur Khas">Mirpur Khas</option>
<option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
<option class="option" value="Mithi">Mithi</option>
<option class="option" value="Mongora">Mongora</option>
<option class="option" value="Murgha Kibzai">Murgha Kibzai</option>
<option class="option" value="Muridke">Muridke</option>
<option class="option" value="Musa Khel Bazar">Musa Khel Bazar</option>
<option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
<option class="option" value="Muzaffarabad">Muzaffarabad</option>
<option class="option" value="Nawabshah">Nawabshah</option>
<option class="option" value="Nazimabad">Nazimabad</option>
<option class="option" value="Nowshera">Nowshera</option>
<option class="option" value="Nagar Parkar">Nagar Parkar</option>
<option class="option" value="Nagha Kalat">Nagha Kalat</option>
<option class="option" value="Nal">Nal</option>
<option class="option" value="Naokot">Naokot</option>
<option class="option" value="Nasirabad">Nasirabad</option>
<option class="option" value="Nauroz Kalat">Nauroz Kalat</option>
<option class="option" value="Naushara">Naushara</option>
<option class="option" value="Nur Gamma">Nur Gamma</option>
<option class="option" value="Nushki">Nushki</option>
<option class="option" value="Nuttal">Nuttal</option>
<option class="option" value="Okara">Okara</option>
<option class="option" value="Ormara">Ormara</option>
<option class="option" value="Panjgur">Panjgur</option>
<option class="option" value="Pasni City">Pasni City</option>
<option class="option" value="Paharpur">Paharpur</option>
<option class="option" value="Palantuk">Palantuk</option>
<option class="option" value="Pendoo">Pendoo</option>
<option class="option" value="Piharak">Piharak</option>
<option class="option" value="Pirmahal">Pirmahal</option>
<option class="option" value="Pishin">Pishin</option>
<option class="option" value="Plandri">Plandri</option>
<option class="option" value="Pokran">Pokran</option>
<option class="option" value="Pounch">Pounch</option>
<option class="option" value="Quetta">Quetta</option>
<option class="option" value="Qambar">Qambar</option>
<option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
<option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
<option class="option" value="Qila Abdullah">Qila Abdullah</option>
<option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
<option class="option" value="Qila Safed">Qila Safed</option>
<option class="option" value="Qila Saifullah">Qila Saifullah</option>
<option class="option" value="Rawalpindi">Rawalpindi</option>
<option class="option" value="Rabwah">Rabwah</option>
<option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
<option class="option" value="Rajan Pur">Rajan Pur</option>
<option class="option" value="Rakhni">Rakhni</option>
<option class="option" value="Ranipur">Ranipur</option>
<option class="option" value="Ratodero">Ratodero</option>
<option class="option" value="Rawalakot">Rawalakot</option>
<option class="option" value="Renala Khurd">Renala Khurd</option>
<option class="option" value="Robat Thana">Robat Thana</option>
<option class="option" value="Rodkhan">Rodkhan</option>
<option class="option" value="Rohri">Rohri</option>
<option class="option" value="Sialkot">Sialkot</option>
<option class="option" value="Sadiqabad">Sadiqabad</option>
<option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
<option class="option" value="Sahiwal">Sahiwal</option>
<option class="option" value="Saidu Sharif">Saidu Sharif</option>
<option class="option" value="Saindak">Saindak</option>
<option class="option" value="Sakrand">Sakrand</option>
<option class="option" value="Sanjawi">Sanjawi</option>
<option class="option" value="Sargodha">Sargodha</option>
<option class="option" value="Saruna">Saruna</option>
<option class="option" value="Shabaz Kalat">Shabaz Kalat</option>
<option class="option" value="Shadadkhot">Shadadkhot</option>
<option class="option" value="Shahbandar">Shahbandar</option>
<option class="option" value="Shahpur">Shahpur</option>
<option class="option" value="Shahpur Chakar">Shahpur Chakar</option>
<option class="option" value="Shakargarh">Shakargarh</option>
<option class="option" value="Shangla">Shangla</option>
<option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
<option class="option" value="Sheikhupura">Sheikhupura</option>
<option class="option" value="Shikarpur">Shikarpur</option>
<option class="option" value="Shingar">Shingar</option>
<option class="option" value="Shorap">Shorap</option>
<option class="option" value="Sibi">Sibi</option>
<option class="option" value="Sohawa">Sohawa</option>
<option class="option" value="Sonmiani">Sonmiani</option>
<option class="option" value="Sooianwala">Sooianwala</option>
<option class="option" value="Spezand">Spezand</option>
<option class="option" value="Spintangi">Spintangi</option>
<option class="option" value="Sui">Sui</option>
<option class="option" value="Sujawal">Sujawal</option>
<option class="option" value="Sukkur">Sukkur</option>
<option class="option" value="Suntsar">Suntsar</option>
<option class="option" value="Surab">Surab</option>
<option class="option" value="Swabi">Swabi</option>
<option class="option" value="Swat">Swat</option>
<option class="option" value="Tando Adam">Tando Adam</option>
<option class="option" value="Tando Bago">Tando Bago</option>
<option class="option" value="Tangi">Tangi</option>
<option class="option" value="Tank City">Tank City</option>
<option class="option" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
<option class="option" value="Thalo">Thalo</option>
<option class="option" value="Thatta">Thatta</option>
<option class="option" value="Toba Tek Singh">Toba Tek Singh</option>
<option class="option" value="Tordher">Tordher</option>
<option class="option" value="Tujal">Tujal</option>
<option class="option" value="Tump">Tump</option>
<option class="option" value="Turbat">Turbat</option>
<option class="option" value="Umarao">Umarao</option>
<option class="option" value="Umarkot">Umarkot</option>
<option class="option" value="Upper Dir">Upper Dir</option>
<option class="option" value="Uthal">Uthal</option>
<option class="option" value="Vehari">Vehari</option>
<option class="option" value="Veirwaro">Veirwaro</option>
<option class="option" value="Vitakri">Vitakri</option>
<option class="option" value="Wadh">Wadh</option>
<option class="option" value="Wah Cantt">Wah Cantt</option>
<option class="option" value="Warah">Warah</option>
<option class="option" value="Washap">Washap</option>
<option class="option" value="Wasjuk">Wasjuk</option>
<option class="option" value="Wazirabad">Wazirabad</option>
<option class="option" value="Yakmach">Yakmach</option>
<option class="option" value="Zhob">Zhob</option>
</select>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<label for="message">Address</label>
<textarea name="address" id="message" class="form-control"></textarea>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<input class="btn btn-primary btn-lg filled" type="submit" name="submitbtn" value="Submit">
<button class="btn btn-primary btn-lg filled" type="reset">Reset</button>
</div>
</div> 
</form>



</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>







<!-- Modal Register -->

<?php
$selquery = "SELECT * FROM users WHERE id = '".$_SESSION["UniversityFinder"]["userid"]."'";
$runselquery = mysql_query($selquery);
$fetchvalues = mysql_fetch_array($runselquery);
?>


<div id="updateModalregister" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Update User</h4>
</div>
<div class="modal-body">

<form action="usermgm.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<label for="name">Name *</label>
<input type="text" class="form-control" value="<?php echo $fetchvalues['name'];?>" name="name" id="name">
</div>
<div class="col-sm-6">
<label for="email">Email *</label>
<input type="email" class="form-control" value="<?php echo $fetchvalues['email'];?>" name="email" id="email">
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6">
<label for="username">User Name*</label>
<input type="text" class="form-control" value="<?php echo $fetchvalues['username'];?>" name="username">
</div>
<div class="col-sm-6">
<label for="password">password *</label>
<input type="text" class="form-control" value="<?php echo $fetchvalues['password'];?>" name="password" >
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6">
<label for="Mobile">Mobile *</label>
<input type="number" class="form-control" value="<?php echo $fetchvalues['phone'];?>" name="phone" >
</div>
<div class="col-sm-6">
<label for="Location">Location *</label>
<select name="country" id="city" class="form-control" required>
<option class="option" value="<?php echo $fetchvalues['country'];?>"><?php echo $fetchvalues['country'];?></option>
<option class="option" value="Peshawar">Peshawar</option>
<option class="option" value="Abbottabad">Abbottabad</option>
<option class="option" value="Adezai">Adezai</option>
<option class="option" value="Ali Bandar">Ali Bandar</option>
<option class="option" value="Amir Chah">Amir Chah</option>
<option class="option" value="Attock">Attock</option>
<option class="option" value="Ayubia">Ayubia</option>
<option class="option" value="Bahawalpur">Bahawalpur</option>
<option class="option" value="Baden">Baden</option>
<option class="option" value="Bagh">Bagh</option>
<option class="option" value="Bahawalnagar">Bahawalnagar</option>
<option class="option" value="Burewala">Burewala</option>
<option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
<option class="option" value="Bannu district|Bannu">Bannu</option>
<option class="option" value="Batagram">Batagram</option>
<option class="option" value="Bazdar">Bazdar</option>
<option class="option" value="Bela">Bela</option>
<option class="option" value="Bellpat">Bellpat</option>
<option class="option" value="Bhag">Bhag</option>
<option class="option" value="Bhakkar">Bhakkar</option>
<option class="option" value="Bhalwal">Bhalwal</option>
<option class="option" value="Bhimber">Bhimber</option>
<option class="option" value="Birote">Birote</option>
<option class="option" value="Buner">Buner</option>
<option class="option" value="Burj">Burj</option>
<option class="option" value="Chiniot">Chiniot</option>
<option class="option" value="Chachro">Chachro</option>
<option class="option" value="Chagai">Chagai</option>
<option class="option" value="Chah Sandan">Chah Sandan</option>
<option class="option" value="Chailianwala">Chailianwala</option>
<option class="option" value="Chakdara">Chakdara</option>
<option class="option" value="Chakku">Chakku</option>
<option class="option" value="Chakwal">Chakwal</option>
<option class="option" value="Chaman">Chaman</option>
<option class="option" value="Charsadda">Charsadda</option>
<option class="option" value="Chhatr">Chhatr</option>
<option class="option" value="Chichawatni">Chichawatni</option>
<option class="option" value="Chitral">Chitral</option>
<option class="option" value="Dadu">Dadu</option>
<option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
<option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
<option class="option" value="Dalbandin">Dalbandin</option>
<option class="option" value="Dargai">Dargai</option>
<option class="option" value="Darya Khan">Darya Khan</option>
<option class="option" value="Daska">Daska</option>
<option class="option" value="Dera Bugti">Dera Bugti</option>
<option class="option" value="Dhana Sar">Dhana Sar</option>
<option class="option" value="Digri">Digri</option>
<option class="option" value="Dina City|Dina">Dina</option>
<option class="option" value="Dinga">Dinga</option>
<option class="option" value="Diplo, Pakistan|Diplo">Diplo</option>
<option class="option" value="Diwana">Diwana</option>
<option class="option" value="Dokri">Dokri</option>
<option class="option" value="Drosh">Drosh</option>
<option class="option" value="Duki">Duki</option>
<option class="option" value="Dushi">Dushi</option>
<option class="option" value="Duzab">Duzab</option>
<option class="option" value="Faisalabad">Faisalabad</option>
<option class="option" value="Fateh Jang">Fateh Jang</option>
<option class="option" value="Ghotki">Ghotki</option>
<option class="option" value="Gwadar">Gwadar</option>
<option class="option" value="Gujranwala">Gujranwala</option>
<option class="option" value="Gujrat">Gujrat</option>
<option class="option" value="Gadra">Gadra</option>
<option class="option" value="Gajar">Gajar</option>
<option class="option" value="Gandava">Gandava</option>
<option class="option" value="Garhi Khairo">Garhi Khairo</option>
<option class="option" value="Garruck">Garruck</option>
<option class="option" value="Ghakhar Mandi">Ghakhar Mandi</option>
<option class="option" value="Ghanian">Ghanian</option>
<option class="option" value="Ghauspur">Ghauspur</option>
<option class="option" value="Ghazluna">Ghazluna</option>
<option class="option" value="Girdan">Girdan</option>
<option class="option" value="Gulistan">Gulistan</option>
<option class="option" value="Gwash">Gwash</option>
<option class="option" value="Hyderabad">Hyderabad</option>
<option class="option" value="Hala">Hala</option>
<option class="option" value="Haripur">Haripur</option>
<option class="option" value="Hab Chauki">Hab Chauki</option>
<option class="option" value="Hafizabad">Hafizabad</option>
<option class="option" value="Hameedabad">Hameedabad</option>
<option class="option" value="Hangu">Hangu</option>
<option class="option" value="Harnai">Harnai</option>
<option class="option" value="Hasilpur">Hasilpur</option>
<option class="option" value="Haveli Lakha">Haveli Lakha</option>
<option class="option" value="Hinglaj">Hinglaj</option>
<option class="option" value="Hoshab">Hoshab</option>
<option class="option" value="Islamabad">Islamabad</option>
<option class="option" value="Islamkot">Islamkot</option>
<option class="option" value="Ispikan">Ispikan</option>
<option class="option" value="Jacobabad">Jacobabad</option>
<option class="option" value="Jamshoro">Jamshoro</option>
<option class="option" value="Jhang">Jhang</option>
<option class="option" value="Jhelum">Jhelum</option>
<option class="option" value="Jamesabad">Jamesabad</option>
<option class="option" value="Jampur">Jampur</option>
<option class="option" value="Janghar">Janghar</option>
<option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
<option class="option" value="Jauharabad">Jauharabad</option>
<option class="option" value="Jhal">Jhal</option>
<option class="option" value="Jhal Jhao">Jhal Jhao</option>
<option class="option" value="Jhatpat">Jhatpat</option>
<option class="option" value="Jhudo">Jhudo</option>
<option class="option" value="Jiwani">Jiwani</option>
<option class="option" value="Jungshahi">Jungshahi</option>
<option class="option" value="Karachi">Karachi</option>
<option class="option" value="Kotri">Kotri</option>
<option class="option" value="Kalam">Kalam</option>
<option class="option" value="Kalandi">Kalandi</option>
<option class="option" value="Kalat">Kalat</option>
<option class="option" value="Kamalia">Kamalia</option>
<option class="option" value="Kamararod">Kamararod</option>
<option class="option" value="Kamber">Kamber</option>
<option class="option" value="Kamokey">Kamokey</option>
<option class="option" value="Kanak">Kanak</option>
<option class="option" value="Kandi">Kandi</option>
<option class="option" value="Kandiaro">Kandiaro</option>
<option class="option" value="Kanpur">Kanpur</option>
<option class="option" value="Kapip">Kapip</option>
<option class="option" value="Kappar">Kappar</option>
<option class="option" value="Karak City">Karak City</option>
<option class="option" value="Karodi">Karodi</option>
<option class="option" value="Kashmor">Kashmor</option>
<option class="option" value="Kasur">Kasur</option>
<option class="option" value="Katuri">Katuri</option>
<option class="option" value="Keti Bandar">Keti Bandar</option>
<option class="option" value="Khairpur">Khairpur</option>
<option class="option" value="Khanaspur">Khanaspur</option>
<option class="option" value="Khanewal">Khanewal</option>
<option class="option" value="Kharan">Kharan</option>
<option class="option" value="kharian">kharian</option>
<option class="option" value="Khokhropur">Khokhropur</option>
<option class="option" value="Khora">Khora</option>
<option class="option" value="Khushab">Khushab</option>
<option class="option" value="Khuzdar">Khuzdar</option>
<option class="option" value="Kikki">Kikki</option>
<option class="option" value="Klupro">Klupro</option>
<option class="option" value="Kohan">Kohan</option>
<option class="option" value="Kohat">Kohat</option>
<option class="option" value="Kohistan">Kohistan</option>
<option class="option" value="Kohlu">Kohlu</option>
<option class="option" value="Korak">Korak</option>
<option class="option" value="Korangi">Korangi</option>
<option class="option" value="Kot Sarae">Kot Sarae</option>
<option class="option" value="Kotli">Kotli</option>
<option class="option" value="Lahore">Lahore</option>
<option class="option" value="Larkana">Larkana</option>
<option class="option" value="Lahri">Lahri</option>
<option class="option" value="Lakki Marwat">Lakki Marwat</option>
<option class="option" value="Lasbela">Lasbela</option>
<option class="option" value="Latamber">Latamber</option>
<option class="option" value="Layyah">Layyah</option>
<option class="option" value="Leiah">Leiah</option>
<option class="option" value="Liari">Liari</option>
<option class="option" value="Lodhran">Lodhran</option>
<option class="option" value="Loralai">Loralai</option>
<option class="option" value="Lower Dir">Lower Dir</option>
<option class="option" value="Shadan Lund">Shadan Lund</option>
<option class="option" value="Multan">Multan</option>
<option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
<option class="option" value="Mansehra">Mansehra</option>
<option class="option" value="Mian Chanu">Mian Chanu</option>
<option class="option" value="Mirpur">Mirpur</option>
<option class="option" value="Moro, Pakistan|Moro">Moro</option>
<option class="option" value="Mardan">Mardan</option>
<option class="option" value="Mach">Mach</option>
<option class="option" value="Madyan">Madyan</option>
<option class="option" value="Malakand">Malakand</option>
<option class="option" value="Mand">Mand</option>
<option class="option" value="Manguchar">Manguchar</option>
<option class="option" value="Mashki Chah">Mashki Chah</option>
<option class="option" value="Maslti">Maslti</option>
<option class="option" value="Mastuj">Mastuj</option>
<option class="option" value="Mastung">Mastung</option>
<option class="option" value="Mathi">Mathi</option>
<option class="option" value="Matiari">Matiari</option>
<option class="option" value="Mehar">Mehar</option>
<option class="option" value="Mekhtar">Mekhtar</option>
<option class="option" value="Merui">Merui</option>
<option class="option" value="Mianwali">Mianwali</option>
<option class="option" value="Mianez">Mianez</option>
<option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
<option class="option" value="Mirpur Khas">Mirpur Khas</option>
<option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
<option class="option" value="Mithi">Mithi</option>
<option class="option" value="Mongora">Mongora</option>
<option class="option" value="Murgha Kibzai">Murgha Kibzai</option>
<option class="option" value="Muridke">Muridke</option>
<option class="option" value="Musa Khel Bazar">Musa Khel Bazar</option>
<option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
<option class="option" value="Muzaffarabad">Muzaffarabad</option>
<option class="option" value="Nawabshah">Nawabshah</option>
<option class="option" value="Nazimabad">Nazimabad</option>
<option class="option" value="Nowshera">Nowshera</option>
<option class="option" value="Nagar Parkar">Nagar Parkar</option>
<option class="option" value="Nagha Kalat">Nagha Kalat</option>
<option class="option" value="Nal">Nal</option>
<option class="option" value="Naokot">Naokot</option>
<option class="option" value="Nasirabad">Nasirabad</option>
<option class="option" value="Nauroz Kalat">Nauroz Kalat</option>
<option class="option" value="Naushara">Naushara</option>
<option class="option" value="Nur Gamma">Nur Gamma</option>
<option class="option" value="Nushki">Nushki</option>
<option class="option" value="Nuttal">Nuttal</option>
<option class="option" value="Okara">Okara</option>
<option class="option" value="Ormara">Ormara</option>
<option class="option" value="Panjgur">Panjgur</option>
<option class="option" value="Pasni City">Pasni City</option>
<option class="option" value="Paharpur">Paharpur</option>
<option class="option" value="Palantuk">Palantuk</option>
<option class="option" value="Pendoo">Pendoo</option>
<option class="option" value="Piharak">Piharak</option>
<option class="option" value="Pirmahal">Pirmahal</option>
<option class="option" value="Pishin">Pishin</option>
<option class="option" value="Plandri">Plandri</option>
<option class="option" value="Pokran">Pokran</option>
<option class="option" value="Pounch">Pounch</option>
<option class="option" value="Quetta">Quetta</option>
<option class="option" value="Qambar">Qambar</option>
<option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
<option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
<option class="option" value="Qila Abdullah">Qila Abdullah</option>
<option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
<option class="option" value="Qila Safed">Qila Safed</option>
<option class="option" value="Qila Saifullah">Qila Saifullah</option>
<option class="option" value="Rawalpindi">Rawalpindi</option>
<option class="option" value="Rabwah">Rabwah</option>
<option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
<option class="option" value="Rajan Pur">Rajan Pur</option>
<option class="option" value="Rakhni">Rakhni</option>
<option class="option" value="Ranipur">Ranipur</option>
<option class="option" value="Ratodero">Ratodero</option>
<option class="option" value="Rawalakot">Rawalakot</option>
<option class="option" value="Renala Khurd">Renala Khurd</option>
<option class="option" value="Robat Thana">Robat Thana</option>
<option class="option" value="Rodkhan">Rodkhan</option>
<option class="option" value="Rohri">Rohri</option>
<option class="option" value="Sialkot">Sialkot</option>
<option class="option" value="Sadiqabad">Sadiqabad</option>
<option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
<option class="option" value="Sahiwal">Sahiwal</option>
<option class="option" value="Saidu Sharif">Saidu Sharif</option>
<option class="option" value="Saindak">Saindak</option>
<option class="option" value="Sakrand">Sakrand</option>
<option class="option" value="Sanjawi">Sanjawi</option>
<option class="option" value="Sargodha">Sargodha</option>
<option class="option" value="Saruna">Saruna</option>
<option class="option" value="Shabaz Kalat">Shabaz Kalat</option>
<option class="option" value="Shadadkhot">Shadadkhot</option>
<option class="option" value="Shahbandar">Shahbandar</option>
<option class="option" value="Shahpur">Shahpur</option>
<option class="option" value="Shahpur Chakar">Shahpur Chakar</option>
<option class="option" value="Shakargarh">Shakargarh</option>
<option class="option" value="Shangla">Shangla</option>
<option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
<option class="option" value="Sheikhupura">Sheikhupura</option>
<option class="option" value="Shikarpur">Shikarpur</option>
<option class="option" value="Shingar">Shingar</option>
<option class="option" value="Shorap">Shorap</option>
<option class="option" value="Sibi">Sibi</option>
<option class="option" value="Sohawa">Sohawa</option>
<option class="option" value="Sonmiani">Sonmiani</option>
<option class="option" value="Sooianwala">Sooianwala</option>
<option class="option" value="Spezand">Spezand</option>
<option class="option" value="Spintangi">Spintangi</option>
<option class="option" value="Sui">Sui</option>
<option class="option" value="Sujawal">Sujawal</option>
<option class="option" value="Sukkur">Sukkur</option>
<option class="option" value="Suntsar">Suntsar</option>
<option class="option" value="Surab">Surab</option>
<option class="option" value="Swabi">Swabi</option>
<option class="option" value="Swat">Swat</option>
<option class="option" value="Tando Adam">Tando Adam</option>
<option class="option" value="Tando Bago">Tando Bago</option>
<option class="option" value="Tangi">Tangi</option>
<option class="option" value="Tank City">Tank City</option>
<option class="option" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
<option class="option" value="Thalo">Thalo</option>
<option class="option" value="Thatta">Thatta</option>
<option class="option" value="Toba Tek Singh">Toba Tek Singh</option>
<option class="option" value="Tordher">Tordher</option>
<option class="option" value="Tujal">Tujal</option>
<option class="option" value="Tump">Tump</option>
<option class="option" value="Turbat">Turbat</option>
<option class="option" value="Umarao">Umarao</option>
<option class="option" value="Umarkot">Umarkot</option>
<option class="option" value="Upper Dir">Upper Dir</option>
<option class="option" value="Uthal">Uthal</option>
<option class="option" value="Vehari">Vehari</option>
<option class="option" value="Veirwaro">Veirwaro</option>
<option class="option" value="Vitakri">Vitakri</option>
<option class="option" value="Wadh">Wadh</option>
<option class="option" value="Wah Cantt">Wah Cantt</option>
<option class="option" value="Warah">Warah</option>
<option class="option" value="Washap">Washap</option>
<option class="option" value="Wasjuk">Wasjuk</option>
<option class="option" value="Wazirabad">Wazirabad</option>
<option class="option" value="Yakmach">Yakmach</option>
<option class="option" value="Zhob">Zhob</option>
</select>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<label for="message">Address</label>
<textarea name="address" id="message" class="form-control"><?php echo $fetchvalues['address'];?></textarea>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<input class="btn btn-primary btn-lg filled" type="submit" name="updatebtn" value="Update">
<button class="btn btn-primary btn-lg filled" type="reset">Reset</button>
</div>
</div> 
</form>



</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>






<!-- Modal Login -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title">Login</h4>
</div>
<div class="modal-body">
<form action="usermgm.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="email">Email address:</label>
<input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pwd" name="password">
</div>


<input type="submit" class="btn btn-default" value="Login" name="loginbtn">
<input type="reset" class="btn btn-default" value="Reset" name="">



</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>








</body>
</html>