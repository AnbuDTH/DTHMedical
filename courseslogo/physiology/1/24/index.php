<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
	   //header("location: http://localhost/nptel/login.php");
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	//header("location: http://localhost/nptel/login.php");
  }
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from nptel.ac.in/courses/127/106/127106134/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 13:15:28 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>NPTEL : PHYSIOLOGY - Metabolic alkalosis </title>


<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
<meta name="description" content="NPTEL provides E-learning through online Web and Video courses various streams." />
<meta name="keywords" content="NPTEL,onlinecourses,studyonline,iitmadras" />
<link rel="icon" href="../../../../assets/nptel_assets/images/nptellogo.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="../../../../assets/nptel_assets/css/bootstrap.3.3.4.css" />
<link rel="stylesheet" href="../../../../assets/nptel_assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="../../../../assets/nptel_assets/css/style.css" />
<link href="../../../../assets/nptel_assets/css/coursestabs.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="../../../../assets/nptel_assets/css/menu_new.css" rel="stylesheet"  />
<link rel="stylesheet" href="../../../../assets/nptel_assets/css/font-awesome.min.css" />
<script src="../../../../assets/nptel_assets/js/jquery.1.10.2.js" type="text/javascript"></script>
<script src="../../../../assets/nptel_assets/js/bootstrap.3.3.4.js" type="text/javascript"></script>
	<link rel="stylesheet"  href="../../../../assets/nptel_assets/css/header_style.css"/>	
<script type="text/javascript">
function getHeight(){
  var mozht = window.innerHeight;
  var ieht= document.body.clientHeight;
  var docht = document.documentElement.clientHeight;
  if (mozht > 0){
  	return mozht;
  } else if(docht > 0){
  	return docht;
  } else if(ieht > 0){
  	return ieht;
  } else
  	return 500;
}
</script>
</head>
<body>
<nav class="navbar navbar-inverse">
      <div class="head-container navcontrol">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../../../index.php"><img src="../../../../assets/nptel_assets/images/nptel-logo.png" class="img-responsive nptellogo" style="margin-top: 40px;"></a>
          <div class="navbran-text" style="margin-top: 40px;">A Project funded by<br>MHRD, Govt. of India</div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="right">
            <ul class="nav navbar-nav">
              <li><a href="../../../../about_nptel.php">About us</a></li>
             
			 <li><a href="../../../../course.php">All Courses</a></li>
			  
			  
			 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Syllabus <span class="caret"></span></a>
                    <ul class="dropdown-menu">


                        <li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/ANATOMY.pdf" target="_blank">Anatomy </a>
							
                           
                        </li>
						
						<li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/Biochemistry.pdf" target="_blank">Biochemistry </a>
                           
                        </li>
						<li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/Physiology.pdf" target="_blank">Physiology </a>
                           
                        </li>
						<li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/Microbiology.pdf" target="_blank">Microbiology </a>
                           
                        </li>
						<li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/Pathology.pdf" target="_blank">Pathology </a>
                           
                        </li>
						<li class="dropdown-submenu">
                            <a class="submenu"  href="http://dth.ac.in/medical/assets/syllabus/Pharmacology.pdf" target="_blank">Pharmacology </a>
                           
                        </li>


                    </ul>
                </li>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
              <li><a href="../../../../national.php">National Coordinators</a></li>
			 
			 
			 
			 
			 <li><a href="../../../../download.php">Download</a></li>
			 
			 
			 
			 
			 
			 
			 
              <li><a href="../../../../contactus.php">Contact Us</a></li>
             <!-- <li><a href="feedback.php">Feedback</a></li>
            <li><a href="careers.php">Careers</a></li>
             <li><a href="help_video.php">Help Videos</a></li>
             <li><a href="http://bit.ly/NPTELLIVE" target="_blank">Live Sessions</a></li>-->
            </ul>
            <a class="navbar-brand" style="margin-right: -53px;" href="../../../../index.php"><img src="../../../../assets/nptel_assets/images/iitlogo.png" class="img-responsive "></a>
          </div>
         
          
        </div><!--/.nav-collapse -->
        
         
         </div>
          
       
    </nav>
	<div class="container">
  		<div class="col-md-12">
			<ul id="breadcrumbs-course">
				  <li><a href="../../../../course.php">Courses</a></li>
				  <li><a href="#" style="cursor: default;">Physiology	</a></li>
				  <li><a href="#" style="cursor: default;">Metabolic alkalosis &nbsp;(Video)&nbsp;</a></li>
					<!-- <li><a href='../../../../content/syllabus_pdf/127106134.php' target='_blank'><b>Syllabus</b></a></li>	-->			  
					 
					 
					 
					 <li><a href="#" style="cursor: default;">Co-ordinated by : <span style="color:#7f0804;">IIT Madras</span></a></li>
			<!---	<li><a href="#" style="cursor: default;">Available from : <span style="color:#7f0804;">2019-08-01</span></a></li>
				 </a></li>
				<li><a href="#" style="cursor: default;">Lec :<span style="color:#7f0804;" id="lecid">1</span></a></li>   ----->
			  </ul>
		</div>
		<div id="contentContainer" class="col-md-12 coursedetails_area">
			<!------------------------ modules start -->
			<div class="col-md-4 course_lectures">
				<div title='Course outline' class="well csoutline">Modules / Lectures</div>
				<div class="course_lectures_list" id="menuiframe">
				<div id="div_main">
				<div class="" id="div_lm">
					<ul>
					<li class="first"><a style=border:none class="header" href="#" title=".Anatomy.">PHYSIOLOGY</a><ul><li class=here  id=lec1><a style=border:none href="" class="header" 									onclick ="change_video_path(1,'Zc2ds5gTp60')";
									 >Metabolic alkalosis </a></li>	
										
									 </ul>
					</div></div>
				</div>
			</div>
			<!-- modules end -->
			<!-- video start -->
			 <div class="col-md-8">
        		<div style="float:left;width:820px; margin:0px 0px 0px 5px;">
            	<div style="float:left;width:100%;">
              <div style="float:left;width:100%;" id="tabs">
                                    
              <div id="myiframe">
                <ul class="nav nav-tabs video-tabs">
   <li class="active"><a data-toggle="tab" href="#watch" aria-expanded="true">Watch on YouTube</a></li>
  </ul>
<div class="tab-content video-contents">
	<!-- youtube video start-->
	<div id="watch" class="tab-pane active">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Zc2ds5gTp60" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
      </div>
  <!-- youtube video end -->
  <!-- download notes start-->
	 <div id="downloads" class="tab-pane fade">
	 			 		<ul class="nav nav-tabs">
						</ul>
			<div class="tab-content">
			<div id='tab3' class='tab-pane fade '><table class='table'><thead><th>Module Name</th><th>Download</th></thead><tbody></tbody></table></div> 
		</div>
			 	 </div>
	<!-- download notes end -->
  
	
</div>
              </div>
              <script>
                document.getElementById('myiframe').style.height = (getHeight()-150)+"px";
              </script>
                        </div>
         	 </div>
			<!------------------------video end -->
			
			
		</div>
	</div>
	
<script type="text/javascript">
var lectype='Video';
</script>
<script src='../../../../assets/nptel_assets/js/script_old_course.js'></script>
  </body>


