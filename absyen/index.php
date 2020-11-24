<?php
include("../config/connection.php");
$dirname = trim(strrchr(__DIR__, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR);
?>
<!DOCTYPE html>
<html>
<head>
<title>Cecos University Of Information And Emerging Science</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Links for Gallery -->
<meta name="description" content="Blueprint: Blueprint: Google Grid Gallery" />
<meta name="keywords" content="google getting started gallery, image gallery, image grid, template, masonry" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>


<style>
             
            .rating{
                overflow: hidden;
                vertical-align: bottom;
                display: inline-block;
                width: auto;
                height: 30px;
            }
            .rating > input{
                opacity: 0;
                margin-right: -100%;
            }
            .rating > label{
                position: relative;
                display: block;
                float: right;
                background: url('star-off-big.png');
                background-size: 30px 30px;
            }
            .rating > label:before{
                display: block;
                opacity: 0;
                content: '';
                width: 30px;
                height: 30px;
                background: url('star-on-big.png');
                background-size: 30px 30px;
                transition: opacity 0.2s linear;
            }
            .rating > label:hover:before,
            .rating > label:hover ~ label:before,
            .rating:not(:hover) > :checked ~ label:before{
                opacity: 1;
            }

        </style>




</head>
<body class="bg-dark">
	<img src="images/20.jpg" class="img-fluid img-thumbnail" width="100%" height="100%">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				
				<div class="carousel-caption d-none d-sm-block">
					<h1 class="mb-5">IQRA NATIONAL UNIVERSITY PESHAWAR</h1>
				</div>
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
				<div class="col-sm-12">
			<div class="jumbotron" style="background-color:#92B6D5">
				<h1 class="text-light text-center" style="text-decoration: underline;">ABOUT US</h1>
				<br><br>
				<p class="text-light" style="text-align: justify;line-height: 2;">
					Defining possibilities, creating opportunities<br>
The synthesis of teaching and research is fundamental to Iqra National University (INU). Its our constant endeavor to produce, not only excellent engineers and business leaders but also well balanced human beings with strong sense of values. Therefore INU always focuses at imparting high quality education not only at undergraduate and postgraduate levels but also at its MS / PhD programs of international level offered in disciplines of Management Sciences, Computer Sciences, Engineering and Art & Design. Moreover, the expansion of facilities at INU, not only helps to ensure conducive environment to cater for the educational needs of a large number of talented students but it also provide opportunities to the students to get benefit from modern age technology and make themselves competent enough to face this challenging era.<br>

INU has established its unique position due to the impressive vision of an enlightened management and tireless efforts of a highly qualified faculty. The University, for its repute, faculty and unique academic curriculums attracts a large number of students every year although it offers admission to a measured number of student s from all regions of country.
				</p>
				<br>
				<a href="about.php" class="btn btn-outline-light">Read More</a>
			</div>
		</div>
	</div>
	</div>
	<br>
	<div class="container"><br><br><br>
    	  <h1 class="text-center text-light" style="text-decoration: underline;">OUR   SERVICES   ARE</h1>
    	  <br><br>
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						
						<li>
							<figure>
								<img src="img/thumb/d.jpg" alt="img02" class="img-fluid" />
								<figcaption><h4 class="text-primary">Departments</h4><hr><p  class="text-dark">Departments Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/thumb/f.jpg" alt="img03" class="img-fluid" />
								<figcaption><h4 class="text-primary">Faculty Members</h4><hr><p class="text-dark">Faculty Members Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
							</figcaption>
							</figure>
						</li>
						<li>
							<figure class="bg-dark">
								<img src="img/thumb/khan.jpeg" alt="img01" class="img-fluid"/>
								<figcaption><h4 class="text-primary">Fee Structure</h4><hr><p  class="text-dark">Fee Structure Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
								</figcaption>
							</figure>
						</li>
						<li >
							<figure>
								<img src="img/thumb/s11.jpg" alt="img04" class="img-fluid" />
								<figcaption><h4 class="text-primary">Student Facilities</h4><hr><p class="text-dark">Student Facilities Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
							</figcaption>
							</figure>
						</li>
						<li >
							<figure>
								<img src="img/thumb/bl1.jpg" alt="img04" class="img-fluid" />
								<figcaption><h4 class="text-primary">University Blogs</h4><hr><p class="text-dark">Blogs Of CECOS  University of Information Technology and Emerging Sciences </p><br><br><hr>
							</figcaption>
							</figure>
						</li>
						<li >
							<figure>
								<img src="img/thumb/re3.jpg" alt="img04" class="img-fluid" />
								<figcaption><h4 class="text-primary">Research Center</h4><hr><p class="text-dark">Research Center Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
							</figcaption>
							</figure>
						</li>
						<li >
							<figure>
								<img src="img/thumb/ad7.jpg" alt="img04" class="img-fluid" />
								<figcaption><h4 class="text-primary">Admission Form</h4><hr><p class="text-dark">Admssion Form Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
							</figcaption>
							</figure>
						</li>
						<li >
							<figure>
								<img src="img/thumb/mp1.jpg" alt="img04" class="img-fluid" />
								<figcaption><h4 class="text-primary">Google Map</h4><hr><p class="text-dark">Google Map  Of CECOS  University of Information Technology and Emerging Sciences </p><br><hr>
							</figcaption>
							</figure>
						</li>
						
											</ul>
                                            
                                            
                  
                  
                <br><br><br>
                
               
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <hr>
                  
                   
 
 
 
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
 



<h3 class="pull-left">University Rating / Review  </h3>

<?php
if(!isset($_SESSION["UniversityFinder"]["userid"]))
{
?> 
<a href="../index.php" class="btn btn-primary fa-pull-right">Please Login to Add Your Comments / Rating </a>
<?php
}

$flag = 0;

$selquery = "SELECT * FROM user_comments WHERE university_name = '".$dirname."' AND userid = '".$_SESSION["UniversityFinder"]["userid"]."'";
$runselquery = mysql_query($selquery);
$countvalue = mysql_num_rows($runselquery);

if($countvalue >0)
{
?>
<a href="../index.php" class="btn btn-success fa-pull-right">You Already Commented, Thank You. </a>

<?php
	$flag = 1;
}



?>

<?php
if($flag == 0)
{
?>
<div class="reviewsystem">
<?php
if(isset($_SESSION["UniversityFinder"]["userid"]))
{
?>            
<form method="post" action="reviewsystem.php" enctype="multipart/form-data">
<br>
<br>
<label>Rate Us</label><br>
<div class="wrapper">
<span class="rating" style="margin-left:-80px;">
<input id="rating5" type="radio" name="rating" value="5">
<label for="rating5">5</label>
<input id="rating4" type="radio" name="rating" value="4">
<label for="rating4">4</label>
<input id="rating3" type="radio" name="rating" value="3">
<label for="rating3">3</label>
<input id="rating2" type="radio" name="rating" value="2">
<label for="rating2">2</label>
<input id="rating1" type="radio" name="rating" value="1" checked>
<label for="rating1">1</label>
</span>
</div>

<label>Your Comments</label>
<br>

<textarea class="form-control" name="comments"></textarea>

<br>

<input type="submit" class="btn btn-primary" name="submitbtn" value="Submit">
<input type="reset" class="btn btn-primary" name="" value="Reset">

<input type="hidden" name="universityname" value="<?php echo trim(strrchr(__DIR__, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR);?>">

</form>  

<?php
}
?>


</div>


<?php
}
?>

<br><br><br>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>S#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ratings</th>
        <th>Comments</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    
    
    
<?php

$universityname = trim(strrchr(__DIR__, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR);
$i=1;
$commentsqry = "SELECT * FROM user_comments WHERE university_name = '".$universityname."' AND status = '1' order by id DESC";
$getcomments = mysql_query($commentsqry);
$univeristycount = mysql_num_rows($getcomments);
while($getcatdata=mysql_fetch_array($getcomments))
{
?>

    
    
<tr>
<td><?php echo $i;?></td>
<td><?php $userid = $getcatdata['userid'];

$userquery = "SELECT * FROM users WHERE id = '".$userid."'";
$runuserquery = mysql_query($userquery);
$fetchuser = mysql_fetch_array($runuserquery);
echo $fetchuser['name'];

?></td>
<td><?php echo $fetchuser['email'];?></td>
<td><?php echo number_format($getcatdata['rating_value'],1);?></td>
<td><?php echo $getcatdata['comments']?></td>
<td><?php echo date("d-m-Y",strtotime($getcatdata['add_date']));?></td>
</tr>

<?php
$i++;
}
?>      
      
      
    </tbody>
  </table>
 
 
 <br>

<hr>

<br>

 
 
 <h3>Website Total Statistics</h3>                           



<?php 






?>




 <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>University Total Rating</th>
        <th>Total Number of Comments</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>
        
        
<?php 

$commentsqrycount = "SELECT sum(rating_value) as totalrating FROM user_comments WHERE university_name = '".$universityname."' AND status = '1' order by id DESC";

$runcountqry = mysql_query($commentsqrycount);

$totalgetvalue = mysql_fetch_array($runcountqry);

$get_totalratings = $totalgetvalue['totalrating'];


$finalratingvalue = $get_totalratings / $univeristycount;

echo number_format($finalratingvalue,1);

?>
        
        
        
        </td>
        <td><?php echo $univeristycount;?></td>
      </tr>
      
    </tbody>
  </table>                                         
 
 
                                           
				
                
             
                
                
                </section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
						
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Departments</h3>
									<p style="color: black">An academic department is a division of a university or school faculty devoted to a particular academic discipline. In the United Kingdom and other Commonwealth countries, universities tend to use the term faculty; faculties are typically further divided into schools or departments.</p>
									<br>
									 <a href="department.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/d.jpg" alt="img02"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Faculty Member's</h3>
									<p style="color: black">A Faculty is a university division specializing in teaching in areas traditionally classified as "arts" for academic purposes, generally including creative arts, writing, philosophy, and humanities.</p>
									<br>
									<a href="faculty.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/f.jpg" alt="img03"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Fee Structure</h3>
									<p style="color: black">The following fee structure is applicable for students paying full tuition fees. CECOS is proud to offer generous financial assistance to qualifying students, which ranges from partial to full coverage of tuition and living costs.</p>
									<br>
									<a href="table.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/khan.jpeg" alt="img01"/>

							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Student Facilities</h3>
									<p style="color: black">With a blend of knowledgeable instructors and zealous students CECOS UNIVERSITY offers a life full of new challenges and advancement to all those who yearn to fulfill their dreams and achieve their objectives in their selected field of interest.</p>
									<br>
									<a href="student.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/s11.jpg" alt="img04"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">University Blogs</h3>
									<p style="color: black">A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries</p>
									<br>
									<a href="blog.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/bl1.jpg" alt="img04"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Research Center</h3>
									<p style="color: black">A research center (also known as research group) is a facility or building dedicated to research, commonly with the focus on a specific area. There are over 14,000 research centers in the United States.</p>
									<br>
									<a href="research.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/re3.jpg" alt="img04"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Admssion Form</h3>
									<p style="color: black">Here at this page we are going to offer you the admission forms for almost all the educational level. Students can get the admission form online and they are also ...</p>
									<br>
									<a href="admission.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/ad7.jpg" alt="img04"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3 class="text-primary">Cecos University Map</h3>
									<p style="color: black">Peshawar is a city found in Khyber Pakhtunkhwa, Pakistan. It is located 34.01 latitude and 71.58 longitude and it is situated at 340 meters above sea level.</p>
									<br>
									<a href="map.php" class="btn btn-outline-primary">Read More</a>
								</figcaption>
								<img src="img/large/mp1.jpg" alt="img04"/>
							</figure>
						</li>
						</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				
                
                
                
                
                
                </section><!-- // slideshow -->
			
            
            
            
            
            </div><!-- // grid-gallery -->
            
            
             
              
            
		</div> 
        
        
       
	<!-- container close for Our Team -->
      <br>
      <br>
      <br>
      
      
      <a name="review"></a> 
      
      
	
</body>
</html>
<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
