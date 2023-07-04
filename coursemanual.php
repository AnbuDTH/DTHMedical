<?php 
 /* session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  */
  
  
  
//echo 'sas'.$_SESSION['username'];
//include("header.php");
  ?>
  

<!DOCTYPE html>
<html>


<head>
<title>NPTEL :: Courses</title>
<meta http-equiv="Content-Type" content="text; charset=iso-8859-1" />
<meta charset="UTF-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
<meta name="description" content="NPTEL provides E-learning through online Web and Video courses various streams." />
<link rel="icon" href="assets/nptel_assets/images/nptellogo.jpg" type="image/jpg" sizes="16x16">
<meta name="keywords" content="NPTEL,onlinecourses,studyonline,iitmadras" />
<link rel="stylesheet" href="assets/nptel_assets/css/bootstrap.3.3.4.css" />
<link rel="stylesheet" href="assets/nptel_assets/css/header_style.css" />
<link rel="stylesheet" type="text/css" href="assets/nptel_assets/css/style.css" />
<link href="assets/nptel_assets/css/coursestabs.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="assets/nptel_assets/css/menu_new.css" rel="stylesheet"  />
<link rel="stylesheet" href="assets/nptel_assets/css/font-awesome.min.css" />
<script src="assets/nptel_assets/js/jquery.1.10.2.js" type="text/javascript"></script>
<script src="assets/nptel_assets/js/bootstrap.3.3.4.js" type="text/javascript"></script>
<link href="assets/nptel_assets/css/jquery.dataTables.min.css" rel="stylesheet">
<script src='assets/nptel_assets/js/jquery.dataTables.min.js'></script>
</head>
<body>

<!--<div class="content">
  	<!-- notification message -->
  	<?php //if (isset($_SESSION['success'])) : ?>
    <!--  <div class="error success" >
      	<h3>
          <?php 
          //	echo $_SESSION['success']; 
          //	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>-->
  	<?php //endif ?>

    <!-- logged in user information -->
    <?php  //if (isset($_SESSION['username'])) : ?>
    <!--	<p>Welcome <strong><?php //echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php //endif ?>
</div>-->








<script> 

$(function(){
	//alert("sds78");
  $("header").load("header.php"); 
  $("footer").load("footer.php"); 
   $('#toTop').fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

});
</script>
<style>
.modal-backdrop{z-index:1 !important;}

</style>
<header></header>
<div class="container coursecontainer">



<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    	<p> <a href="index.php?logout='1'" style="color: red;"><u>logout</u></a> </p>
    <?php endif ?>
</div>


	<div class="row">
		<div class="col-md-3">
			<div class="panel-group" id="accordion">
			  	<div class="panel panel-default">
			    	<div class="panel-heading listhead">
				      	<h4 class="panel-title">
						<!-- List By Discipline -->
				        	<div class="" data-toggle="collapse" data-target="#discipline">All Courses<i class="arrow glyphicon glyphicon-triangle-bottom"></i></div>
				      	</h4>
			    	</div>
					<div id="discipline" class="showlist panel-collapse collapse in">
				    	<div class="panel-body">
				      		<ul class="list-group displist">
				      												<li class="list-group-item">
										<input type="checkbox" class="ccheck checkAerospaceEngineering" onchange="filterme(	)" value="Anatomy" name="discipline"
										 >
										<div class="dispname">Anatomy</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkAgriculture" onchange="filterme(	)" value="Biochemistry" name="discipline"
										 >
										<div class="dispname">Biochemistry</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkArchitecture" onchange="filterme(	)" value="Microbiology" name="discipline"
										 >
										<div class="dispname">Microbiology</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkAtmosphericScience" onchange="filterme(	)" value="Pathology" name="discipline"
										 >
										<div class="dispname">Pathology </div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkBasiccourses(Sem1and2)" onchange="filterme(	)" value="Pharmacology" name="discipline"
										 >
										<div class="dispname">Pharmacology</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkBiotechnology" onchange="filterme(	)" value="Physiology" name="discipline"
										 >
										<div class="dispname">Physiology</div>
									</li>
						        								
						        								
						        								
						        								<!--	<li class="list-group-item">
										<input type="checkbox" class="ccheck checkChemicalEngineering" onchange="filterme(	)" value="Chemical Engineering" name="discipline"
										 >
										<div class="dispname">Chemical Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkChemistryandBiochemistry" onchange="filterme(	)" value="Chemistry and Biochemistry" name="discipline"
										 >
										<div class="dispname">Chemistry and Biochemistry</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkCivilEngineering" onchange="filterme(	)" value="Civil Engineering" name="discipline"
										 >
										<div class="dispname">Civil Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkComputerScienceandEngineering" onchange="filterme(	)" value="Computer Science and  Engineering" name="discipline"
										 >
										<div class="dispname">Computer Science and  Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkElectricalEngineering" onchange="filterme(	)" value="Electrical Engineering" name="discipline"
										 >
										<div class="dispname">Electrical Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkElectronics&CommunicationEngineering" onchange="filterme(	)" value="Electronics & Communication Engineering" name="discipline"
										 >
										<div class="dispname">Electronics & Communication Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkEngineeringDesign" onchange="filterme(	)" value="Engineering Design" name="discipline"
										 >
										<div class="dispname">Engineering Design</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkEnvironmentalScience" onchange="filterme(	)" value="Environmental Science" name="discipline"
										 >
										<div class="dispname">Environmental Science</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkGeneral" onchange="filterme(	)" value="General" name="discipline"
										 >
										<div class="dispname">General</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkHumanitiesandSocialSciences" onchange="filterme(	)" value="Humanities and Social Sciences" name="discipline"
										 >
										<div class="dispname">Humanities and Social Sciences</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkManagement" onchange="filterme(	)" value="Management" name="discipline"
										 >
										<div class="dispname">Management</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkMathematics" onchange="filterme(	)" value="Mathematics" name="discipline"
										 >
										<div class="dispname">Mathematics</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkMechanicalEngineering" onchange="filterme(	)" value="Mechanical Engineering" name="discipline"
										 >
										<div class="dispname">Mechanical Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkMetallurgyandMaterialScience" onchange="filterme(	)" value="Metallurgy and Material Science" name="discipline"
										 >
										<div class="dispname">Metallurgy and Material Science</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkMiningEngineering" onchange="filterme(	)" value="Mining Engineering" name="discipline"
										 >
										<div class="dispname">Mining Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkMultidisciplinary" onchange="filterme(	)" value="Multidisciplinary" name="discipline"
										 >
										<div class="dispname">Multidisciplinary</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkNanotechnology" onchange="filterme(	)" value="Nanotechnology" name="discipline"
										 >
										<div class="dispname">Nanotechnology</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkOceanEngineering" onchange="filterme(	)" value="Ocean Engineering" name="discipline"
										 >
										<div class="dispname">Ocean Engineering</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkPhysics" onchange="filterme(	)" value="Physics" name="discipline"
										 >
										<div class="dispname">Physics</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkSpecialSeries" onchange="filterme(	)" value="Special Series" name="discipline"
										 >
										<div class="dispname">Special Series</div>
									</li>
						        									<li class="list-group-item">
										<input type="checkbox" class="ccheck checkTextileEngineering" onchange="filterme(	)" value="Textile Engineering" name="discipline"
										 >
										<div class="dispname">Textile Engineering</div>
									</li>
									
									
									
									-->
									
						        					        </ul>
				      	</div>
				    </div>
			  	</div>
			  <!--	<div class="panel panel-default">
				    <div class="panel-heading">
				    	<h4 class="panel-title">
				        	<div data-toggle="collapse" data-target="#contenttype">List By content type<i class="arrow glyphicon glyphicon-triangle-bottom"></i></div>
				      	</h4>
				    </div>
				    <div id="contenttype" class="showlist panel-collapse collapse in">
				    	<div class="panel-body">
				      		<ul class="list-group contlist">
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="contenttype" onchange="filterme()" value="Video"><div class="contname">Video Course</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="contenttype" onchange="filterme()" value="Web"><div class="contname">Web Course</div></li>
					        </ul>
				  		</div>
				    </div>
			  	</div>-->
			  	<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h4 class="panel-title">
				        	<div data-toggle="collapse" data-target="#institute">List By Institutions<i class="arrow glyphicon glyphicon-triangle-bottom"></i></div>
				    	</h4>
				    </div>
				    <div id="institute" class="showlist panel-collapse collapse in">
				    	<div class="panel-body">
				    		<ul class="list-group instlist">
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Sri Ramachandra University"><div class="inname">Sri Ramachandra University</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Kempegowda Institute of Medical Sciences"><div class="inname">Kempegowda Institute of Medical Sciences </div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Pondicherry institute of Medical sciences"><div class="inname">Pondicherry institute of Medical sciences</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Saveetha Medical College and Hospital Saveetha Institute of Medical and Technical Sciences"><div class="inname">Saveetha Medical College and Hospital Saveetha Institute of Medical and Technical Sciences</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="KMCH IHSR"><div class="inname">KMCH IHSR</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Govt. Medical College Amritsar"><div class="inname">Govt. Medical College Amritsar</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="KLE Jawaharlal Nehru Medical college"><div class="inname">KLE Jawaharlal Nehru Medical college</div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="B. J. Govt. Medical College Pune"><div class="inname">B. J. Govt. Medical College </div></li>
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Grant Medical College  Sir J. J. Group of Hospitals, Byculla"><div class="inname">Grant Medical College Sir J. J. Group of Hospitals</div></li>
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Manipal University"><div class="inname">Manipal University </div></li>
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Lady Hardinge Medical college New Delhi"><div class="inname">Lady Hardinge Medical college </div></li>
								
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="St John's Medical College Bangalore"><div class="inname">St John's Medical College </div></li>
							
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Kasturba Medical College, Mangalore"><div class="inname">Kasturba Medical College</div></li>
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="All India Institute of Medical Sciences"><div class="inname">All India Institute of Medical Sciences</div></li>
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="School of Tropical Medicine Kolkata"><div class="inname">School of Tropical Medicine </div></li>
								
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Postgraduate Institute of Medical Education and Research,Chandigarh"><div class="inname">Postgraduate Institute of Medical Education and Research</div></li>
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Christian Medical College, Vellore"><div class="inname">Christian Medical College, Vellore</div></li>
								
								
								
								
							</ul>
				  		</div>
				    </div>
			  	</div>
			  	
			  	
			</div>
		</div>
		<div class="col-md-9 courseinfo">
			<div class="overallcourse" id="overallcs">
				<table class="table" id="request" >
        <thead>
            <tr>
                <th style="width: 248px !important;">Subject Name</th>
                <th style="width: 72px !important;">Discipline</th>
                <th style="width: 180px !important;">SME Name</th>
                <th style="width: 132px !important;">Institute</th>
                <th style="width: 3px !important;">Content</th>
            </tr>
        </thead>
        <tbody>

<!--<tr>
    <td><a href='courses/127/106/127106134/index.php' target='_blank'>Basic course in Biomedical Research</a></td>
    <td>Multidisciplinary</td>
    <td>Dr. Sanjay Mehendale</td>
    <td>IIT Madras</td>
    <td>Video</td>
 <tr>
        <td><a href='courses/108/102/108102145/index.php' target='_blank'>NOC:Power Electronics</a></td>
        <td>Electrical Engineering</td><td>Prof. G.Bhuvaneshwari</td>
        <td>IIT Delhi</td>
        <td>Video</td>
<tr>
            <td><a href='courses/108/102/108102146/index.php' target='_blank'>NOC:Electrical Machines</a></td>
            <td>Electrical Engineering</td>
            <td>Prof. G.Bhuvaneshwari</td>
            <td>IIT Delhi</td>
            <td>Video</td>
<tr>
                <td><a href='courses/112/107/112107282/index.php' target='_blank'>NOC:Product Design Using Value Engineering</a></td>
                <td>Mechanical Engineering</td>
                <td>Dr. Inderdeep Singh </td>
                <td>IIT Roorkee</td>
                <td>Video</td>
<tr>
                    <td><a href='courses/112/107/112107283/index.php' target='_blank'>NOC:Selection Of Nanomaterials For Energy Harvesting And Storage Application</a></td>
                    <td>Mechanical Engineering</td>
                    <td>Prof. Kaushik Pal</td>
                    <td>IIT Roorkee</td>
                    <td>Video</td>
<tr>
                        <td><a href='courses/105/106/105106197/index.php' target='_blank'>NOC:Design of Masonry Structures</a></td>
                        <td>Civil Engineering</td><td>Prof. Arun Menon</td>
                        <td>IIT Madras</td>
                        <td>Video</td>
<tr>
                            <td><a href='courses/110/106/110106135/index.php' target='_blank'>NOC:Decision making using financial accounting</a></td>
                            <td>Management</td>
                            <td>Prof. G Arun Kumar</td>
                            <td>IIT Madras</td>
                            <td>Video</td>-->

<tr>
    <td><a href='courses/anatomy/1/1/index.php' target='_blank'>Kidney</a></td>
    <td>Anatomy</td>
    <td>Dr. Vijaya Sagar</td>
    <td>Sri Ramachandra University </td>
    <td>Video</td>
<tr>
    <td><a href='courses/anatomy/1/2/index.php' target='_blank'>Hip Joint</a></td>
    <td>Anatomy</td>
    <td>Dr. Vijaya Sagar</td>
    <td>Sri Ramachandra University </td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/anatomy/1/3/index.php' target='_blank'>Knee joint</a></td>
    <td>Anatomy</td>
    <td>Dr. Vijaya Sagar</td>
    <td>Sri Ramachandra University </td>
    <td>Video</td>
   
   
<tr>
    <td><a href='courses/anatomy/1/4/index.php' target='_blank'>Brachial Plexus</a></td>
    <td>Anatomy</td>
    <td>Dr. Vijaya Sagar</td>
    <td>Sri Ramachandra University</td>
    <td>Video</td>
    
    
<tr>
    <td><a href='courses/anatomy/1/5/index.php' target='_blank'>Tongue</a></td>
    <td>Anatomy</td>
    <td>Dr. Vijaya Sagar</td>
    <td>Sri Ramachandra University</td>
    <td>Video</td>    
    
    
<tr>
    <td><a href='courses/anatomy/2/1/index.php' target='_blank'> Caecum and appendix</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan</td>
    <td>Kempegowda Institute of Medical Sciences </td>
    <td>Video</td>

 <tr>
    <td><a href='courses/anatomy/2/2/index.php' target='_blank'>Thyroid gland</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences </td>
    <td>Video</td>  
    
<tr>
    <td><a href='courses/anatomy/2/3/index.php' target='_blank'>Pharynx</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/anatomy/2/4/index.php' target='_blank'>Sciatic nerve</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>    
    
    
 <tr>
    <td><a href='courses/anatomy/2/5/index.php' target='_blank'>Prostate Gland</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>
    
    
<tr>
    <td><a href='courses/anatomy/2/6/index.php' target='_blank'>Coronary circulation</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>
    
    
<tr>
    <td><a href='courses/anatomy/2/7/index.php' target='_blank'>Median Nerve</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>    
    


<tr>
    <td><a href='courses/anatomy/2/8/index.php' target='_blank'>Mediastinum Part I</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>  




<tr>
    <td><a href='courses/anatomy/2/9/index.php' target='_blank'>Mediastinum Part II</a></td>
    <td>Anatomy</td>
    <td>Dr. Shubha Sudharsan </td>
    <td>Kempegowda Institute of Medical Sciences</td>
    <td>Video</td>  



<tr>
    <td><a href='courses/anatomy/3/1/index.php' target='_blank'>Middle ear</a></td>
    <td>Anatomy </td>
    <td>Dr. Rema Dev </td>
    <td>Pondicherry institute of Medical sciences</td>
    <td>Video</td>  


<tr>
    <td><a href='courses/anatomy/3/2/index.php' target='_blank'>Arches of foot</a></td>
    <td>Anatomy</td>
    <td>Dr. Rema Dev</td>
    <td>Pondicherry institute of Medical sciences</td>
    <td>Video</td>      

<tr>
    <td><a href='courses/anatomy/3/3/index.php' target='_blank'>Lungs</a></td>
   <td>Anatomy</td>
    <td>Dr. Rema Dev</td>
    <td>Pondicherry institute of Medical sciences</td>
    <td>Video</td>  
    
<tr>
    <td><a href='courses/anatomy/3/4/index.php' target='_blank'>Radial nerve</a></td>
    <td>Anatomy </td>
    <td>Dr. Rema Dev</td>
    <td>Pondicherry institute of Medical sciences</td>
    <td>Video</td>   
    
    
<tr>
    <td><a href='courses/anatomy/4/1/index.php' target='_blank'>Duodenum</a></td>
    <td>Anatomy </td>
    <td>Dr. Gunapriya  </td>
    <td>Saveetha Medical College and Hospital <br>Saveetha Institute of Medical and Technical Sciences</td>
    <td>Video</td>  
    
<tr>
    <td><a href='courses/anatomy/4/2/index.php' target='_blank'>Shoulder joint</a></td>
    <td>Anatomy </td>
    <td>Dr. Gunapriya  </td>
    <td>Saveetha Medical College and Hospital <br>Saveetha Institute of Medical and Technical Sciences</td>
    <td>Video</td>     
      
 <tr>
    <td><a href='courses/anatomy/5/1/index.php' target='_blank'> Testis & Spermatic cord</a></td>
    <td>Anatomy</td>
    <td>Dr. Ravichandran Doraiswamy </td>
    <td> KMCH IHSR</td>
    <td>Video</td> 
  



  <tr>
    <td><a href='courses/anatomy/5/2/index.php' target='_blank'>Popliteal fossa</a></td>
    <td>Anatomy</td>
    <td>Dr. Ravichandran Doraiswamy </td>
    <td> KMCH IHSR</td>
    <td>Video</td> 
    
  <tr>
    <td><a href='courses/anatomy/5/3/index.php' target='_blank'>Pericardium</a></td>
    <td>Anatomy</td>
    <td>Dr. Ravichandran Doraiswamy </td>
    <td> KMCH IHSR</td>
    <td>Video</td> 
    
<tr>
    <td><a href='courses/anatomy/6/1/index.php' target='_blank'>Gross anatomy of liver</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td>    

<tr>
    <td><a href='courses/anatomy/6/2/index.php' target='_blank'>Portal vein</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/6/3/index.php' target='_blank'>Soft palate
</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/6/4/index.php' target='_blank'>Submandibular gland</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td> 
    
    
<tr>
    <td><a href='courses/anatomy/6/5/index.php' target='_blank'>Anterior triangle of neck</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td>     
<tr>
    <td><a href='courses/anatomy/6/6/index.php' target='_blank'>Ischioanal fossa</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri</td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td>  
    

<tr>
    <td><a href='courses/anatomy/6/7/index.php' target='_blank'>Gross anatomy of heart</a></td>
    <td>Anatomy</td>
    <td>Dr. Ravichandran Doraiswamy </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/6/8/index.php' target='_blank'>Mammary gland</a></td>
    <td>Anatomy</td>
    <td>Dr. Gaurav Agnihotri </td>
    <td>Govt. Medical College Amritsar</td>
    <td>Video</td>  
    
<tr>
    <td><a href='courses/anatomy/7/1/index.php' target='_blank'>  Stomach</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>  
  
<tr>
    <td><a href='courses/anatomy/7/2/index.php' target='_blank'>Inguinal canal</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/3/index.php' target='_blank'>Pancreas</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/4/index.php' target='_blank'>Parotid gland</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/5/index.php' target='_blank'>Dural folds Venous sinuses</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/6/index.php' target='_blank'>Larynx</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/7/index.php' target='_blank'>Venous drainage LL</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/8/index.php' target='_blank'>Uterus</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/9/index.php' target='_blank'>Palmar spaces</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/anatomy/7/10/index.php' target='_blank'>Lateral wall of nose</a></td>
    <td>Anatomy</td>
    <td>  Dr. Daksha Dixit </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 
	
	
	<!-- new -->
	
<tr>
    <td><a href='courses/anatomy/8/1/index.php' target='_blank'>General Anatomy of the Muscle
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias
 </td>
    <td>Goa Medical College & Hospital
</td>
    <td>Video</td> 
	
	
	<tr>
    <td><a href='courses/anatomy/8/2/index.php' target='_blank'>Bone
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias </td>
    <td>Goa Medical College & Hospital
</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/8/3/index.php' target='_blank'>Joints
</a></td>
    <td>Anatomy</td>
    <td>  Dr Pallavi Bajpaee
 </td>
    <td>Dr DY Patil Medical College & Research Centre, Pimpri, Pune
</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/8/4/index.php' target='_blank'>Skin and Fascia
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Mouna Subbaramaiah
 </td>
    <td>KIMS, Bengaluru
</td>
    <td>Video</td> 
	
	
	<!--h-->
	
	<tr>
    <td><a href='courses/anatomy/9/1/index.php' target='_blank'>Histology of Bone
</a></td>
    <td>Anatomy</td>
    <td>  Dr Pallavi Bajpaee
 </td>
    <td>Dr DY Patil Medical College & Research Centre, Pimpri, Pune
</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/9/2/index.php' target='_blank'>Nerve & Ganglia histology
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias
 </td>
    <td>Goa Medical College & Hospital
</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/9/3/index.php' target='_blank'>Blood vessels histology
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias
 </td>
    <td>Goa Medical College & Hospital

</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/9/4/index.php' target='_blank'>Lymphatic system
</a></td>
    <td>Anatomy</td>
    <td>  Dr. K. Aparna Vedapriya
 </td>
    <td>Osmania Medical College
</td>
    <td>Video</td> 
	
	<!--g-->
	
	<tr>
    <td><a href='courses/anatomy/10/1/index.php' target='_blank'>Gametogenesis
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	
	<tr>
    <td><a href='courses/anatomy/10/2/index.php' target='_blank'>Female Reproductive Cycle
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/3/index.php' target='_blank'>Fertilization
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/4/index.php' target='_blank'>Implantation 1st Week Of Intrauterine Life
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/5/index.php' target='_blank'>Week 2 of Intrauterine life
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/6/index.php' target='_blank'>Week 3 of Intrauterine life

</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/7/index.php' target='_blank'>4th to 8th Week of Intrauterine life - Part 1
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/8/index.php' target='_blank'>4th to 8th Week of Intrauterine life - Part 2
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/9/index.php' target='_blank'>3rd month to birth
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/10/index.php' target='_blank'>Development of Gut tubes
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/11/index.php' target='_blank'>Pharyngeal Appartus
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/12/index.php' target='_blank'>Placenta
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/10/13/index.php' target='_blank'>Twinning
</a></td>
    <td>Anatomy</td>
    <td>  Dr Rose</td>
    <td>Govt Medical College, Thrissur, Kerala</td>
    <td>Video</td> 
	
	
	<!--k-->
	
	<tr>
    <td><a href='courses/anatomy/11/1/index.php' target='_blank'>Axilla and Axillary Artery
</a></td>
    <td>Anatomy</td>
    <td>  Dr Pallavi Bajpaee</td>
    <td>Dr DY Patil Medical College & Research Centre, Pimpri, Pune</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/2/index.php' target='_blank'>Ankle joint and subtalar joint
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias</td>
    <td>Goa Medical College & Hospital</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/3/index.php' target='_blank'>Arch of Aorta
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Mouna Subbaramaiah</td>
    <td>KIMS, Bengaluru</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/4/index.php' target='_blank'>Abdominal aorta & inferior vena cava
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias</td>
    <td>Goa Medical College & Hospital</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/5/index.php' target='_blank'>Gross Anatomy of Anal Canal
</a></td>
    <td>Anatomy</td>
    <td>  Dr. Kalpana Ramachandran </td>
    <td>Sri Muthukumaran Medical College Hospital & RI, Chennai</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/6/index.php' target='_blank'>Deep Cervical Fascia
</a></td>
    <td>Anatomy</td>
    <td>  Dr Pallavi Bajpaee</td>
    <td>Dr DY Patil Medical College & Research Centre, Pimpri, Pune</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/7/index.php' target='_blank'>3,4,6 Cranial nerves

</a></td>
    <td>Anatomy</td>
    <td>  Dr. K. Aparna Vedapriya</td>
    <td>Osmania Medical College</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/8/index.php' target='_blank'>Glossopharyngeal and Hypoglossal Nerves

</a></td>
    <td>Anatomy</td>
    <td>  Dr. K. Aparna Vedapriya</td>
    <td>Osmania Medical College</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/9/index.php' target='_blank'>Facial Nerve
</a></td>
    <td>Anatomy</td>
    <td>  Dr. K. Aparna Vedapriya</td>
    <td>Osmania Medical College</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/10/index.php' target='_blank'>Histology of the liver,Gall ladder & Pancreas

</a></td>
    <td>Anatomy</td>
    <td>  Dr. Medora C. D'Souza Dias</td>
    <td>Goa Medical College & Hospital</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/11/index.php' target='_blank'>Functions of Kidney

</a></td>
    <td>Anatomy</td>
    <td>  Dr. Kalpana Ramachandran </td>
    <td>Sri Muthukumaran Medical College Hospital & RI, Chennai
</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/anatomy/11/12/index.php' target='_blank'>Microscopic anatomy of ureter & Urinary bladder

</a></td>
    <td>Anatomy</td>
    <td>  Dr. Kalpana Ramachandran 

</td>
    <td>Sri Muthukumaran Medical College Hospital & RI, Chennai
</td>
    <td>Video</td> 
	
	
    
    <!---end anatomy-->


 <!---start MICROBIOLOGY -->

<tr>
    <td><a href='courses/biochemistry/block-1/1/index.php' target='_blank'>The active site of enzymes  (Active site)</a></td>
    <td>Biochemistry</td>
    <td> Dr. Pragna Rao </td>
    <td>Manipal University</td>
    <td>Video</td>
	
<tr>
   
   <td><a href='courses/biochemistry/block-1/2/index.php' target='_blank'>Mechanism of enzyme action</a></td>
    <td>Biochemistry</td>
    <td> Dr. Vinutha R Bhat </td>
    <td>Manipal University</td>
    <td>Video</td>
	
	
<tr>
   
   <td><a href='courses/biochemistry/block-1/3/index.php' target='_blank'>Applications and importance of factors affecting enzyme action</a></td>
    <td>Biochemistry</td>
    <td> Dr. Krishnananda Prabhu R V </td>
    <td>Manipal University</td>
    <td>Video</td>
		
	
<tr>
   
   <td><a href='courses/biochemistry/block-1/4/index.php' target='_blank'>  Coenzymes and cofactors</a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishnananda Prabhu R V </td>
    <td>Manipal University</td>
    <td>Video</td>

	
<tr>
   
   <td><a href='courses/biochemistry/block-1/5/index.php' target='_blank'>Types of enzymes</a></td>
    <td>Biochemistry</td>
    <td> Ms Nagamma T</td>
    <td>Manipal University</td>
    <td>Video</td>	

	
<tr>
   
   <td><a href='courses/biochemistry/block-1/6/index.php' target='_blank'>Zymogens</a></td>
    <td>Biochemistry</td>
    <td>Dr. Indira Adiga K</td>
    <td>Manipal University</td>
    <td>Video</td>	

	
<tr>
   
   <td><a href='courses/biochemistry/block-1/7/index.php' target='_blank'>Isoenzymes</a></td>
    <td>Biochemistry</td>
    <td>Mr Bijay K Barik</td>
    <td>Manipal University</td>
    <td>Video</td>	
	
	
<tr>
   
   <td><a href='courses/biochemistry/block-1/8/index.php' target='_blank'>Role of enzymes in IEM</a></td>
    <td>Biochemistry</td>
    <td>Dr. Anupama Hegde</td>
    <td>Manipal University</td>
    <td>Video</td>	


	
<tr>
   
   <td><a href='courses/biochemistry/block-1/9/index.php' target='_blank'>Epigenetics</a></td>
    <td>Biochemistry</td>
    <td>Mr Babi Dutta </td>
    <td>Manipal University</td>
    <td>Video</td>

	
<tr>
   
   <td><a href='courses/biochemistry/block-1/10/index.php' target='_blank'>Post translational modifications</a></td>
    <td>Biochemistry</td>
    <td>Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	
	
<tr>
   
   <td><a href='courses/biochemistry/block-1/11/index.php' target='_blank'>Clinical applications of enzyme inhibition</a></td>
    <td>Biochemistry</td>
    <td>Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>		
	
<!---BLOCK-1 END-->

<!---BLOCK-2 start-->
	
<tr>
   
   <td><a href='courses/biochemistry/block-2/1/index.php' target='_blank'>understanding structural organization of protiens as a basis for understanding its function</a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>		
	
<tr>
   
   <td><a href='courses/biochemistry/block-2/2/index.php' target='_blank'>Plasma protiens in health and disease
</a></td>
    <td>Biochemistry</td>
    <td>Dr. Maya Roche</td>
    <td>Manipal University</td>
		
    <td>Video</td>		

<tr>
   
   <td><a href='courses/biochemistry/block-2/3/index.php' target='_blank'>Immunoglobilins</a></td>
    <td>Biochemistry</td>
    <td>Dr. Maya Roche</td>
    <td>Manipal University</td>
		
    <td>Video</td>		

<tr>
   
   <td><a href='courses/biochemistry/block-2/4/index.php' target='_blank'>Ammonia detoxification</a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>		


<tr>
   
   <td><a href='courses/biochemistry/block-2/5/index.php' target='_blank'>Sources of Ammonia</a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>		


<tr>
   
   <td><a href='courses/biochemistry/block-2/6/index.php' target='_blank'>Disorders of ammonia metabolism </a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi </td>
    <td>Manipal University</td>
		
    <td>Video</td>		


<tr>
   
   <td><a href='courses/biochemistry/block-2/7/index.php' target='_blank'>Overview of metabolism of sulfur conaining amino acids</a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>		


<tr>
   
   <td><a href='courses/biochemistry/block-2/8/index.php' target='_blank'>Associated inborn errors of sulfur containing amino acid metabolism </a></td>
    <td>Biochemistry</td>
    <td>Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>		


<tr>
   
   <td><a href='courses/biochemistry/block-2/9/index.php' target='_blank'>Overview of neurotransmitter metabolism with emphasis on myasthenia gravis and Parkinson's disease</a></td>
    <td>Biochemistry</td>
    <td>Ms Nagamma T</td>
    <td>Manipal University</td>
		
    <td>Video</td>		



<!---BLOCK-2 END-->	


<!---BLOCK-3 START-->	

<tr>
   
   <td><a href='courses/biochemistry/block-3/1/index.php' target='_blank'>Porphyria </a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishnananda Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	
<tr>
   
   <td><a href='courses/biochemistry/block-3/2/index.php' target='_blank'>heme containing compunds</a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishnananda Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/3/index.php' target='_blank'>heme synthesis </a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishnananda Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/4/index.php' target='_blank'>Application of structural knowledge of hemoglobin in understanding the genetics and pathogenesis of major hemoglobinopathies</a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishnananda Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/5/index.php' target='_blank'>Catabolism of heme</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/6/index.php' target='_blank'>Formation & fate of bilibrium </a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
 <td><a href='courses/biochemistry/block-3/12/index.php' target='_blank'>Bilibrium formation</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>


<tr>
   
   <td><a href='courses/biochemistry/block-3/7/index.php' target='_blank'>Jaundice: A introduction classification and causes of each type with emphasis on physiologic jaundice</a></td>
    <td>Biochemistry</td>
    <td> Dr. B Shivananda Baliga</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/8/index.php' target='_blank'>Biochemical basis for jaundice </a></td>
    <td>Biochemistry</td>
    <td> D Vijetha Shenoy Belle</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/9/index.php' target='_blank'>Investigations for differential diagnosis of jaundice </a></td>
    <td>Biochemistry</td>
    <td> D Vijetha Shenoy Belle</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-3/10/index.php' target='_blank'>Alcohol metabolism</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>		

<tr>
   
   <td><a href='courses/biochemistry/block-3/11/index.php' target='_blank'>Biochemical basis for consequences of acute alcohol intoxication</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>

<!---BLOCK-3 END-->	

<!---BLOCK-4 START-->	


<tr>
   
   <td><a href='courses/biochemistry/block-4/1/index.php' target='_blank'>Carbohydrate absorption, enzymes involved, glycemic index and factors affecting absorption</a></td>
    <td>Biochemistry</td>
    <td> Dr. Krishnanada Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	
<tr>
   
   <td><a href='courses/biochemistry/block-4/2/index.php' target='_blank'>Glucose transporters and disorders</a></td>
    <td>Biochemistry</td>
    <td> Dr. Krishnanada Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-4/3/index.php' target='_blank'>Regulation of blood glucose </a></td>
    <td>Biochemistry</td>
    <td> Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-4/4/index.php' target='_blank'>Fate of absorbed glucose preferantil use of glucose in feed and fasting condition </a></td>
    <td>Biochemistry</td>
    <td> Dr. Ravindra Maradi</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-4/5/index.php' target='_blank'>Screening, diagnosis & monitoring of diabetes mellitus newer markers</a></td>
    <td>Biochemistry</td>
    <td> Dr. Guruprasad Rao</td>
    <td>Manipal University</td>
		
    <td>Video</td>		

<!---BLOCK-4 END-->	

<!---BLOCK-5 START-->	

<tr>
   
   <td><a href='courses/biochemistry/block-5/1/index.php' target='_blank'>Lipoprotein structure, chemistry and functions</a></td>
    <td>Biochemistry</td>
    <td> Dr. Ullas Kamath</td>
    <td>Manipal University</td>
		
    <td>Video</td>	

<tr>
   
   <td><a href='courses/biochemistry/block-5/2/index.php' target='_blank'>LDL receptors and metabolism; Lp(a)</a></td>
    <td>Biochemistry</td>
    <td> Dr. Vijetha Shenoy Belle</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/3/index.php' target='_blank'>Biochemistry of atherosclerosis</a></td>
    <td>Biochemistry</td>
    <td> Dr. Vijetha Shenoy Belle</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/4/index.php' target='_blank'>Role of mitochondria in lipid metabolism</a></td>
    <td>Biochemistry</td>
    <td> Dr. Vijetha Shenoy Belle</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/5/index.php' target='_blank'>Cholesterol important aspects of its structure and biochemical functions</a></td>
    <td>Biochemistry</td>
    <td> Dr. Somashekar Shetty</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/6/index.php' target='_blank'>Extended lipid profile L1 </a></td>
    <td>Biochemistry</td>
    <td> Dr. Varashree B S<</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/7/index.php' target='_blank'>Extended lipid profile L2 </a></td>
    <td>Biochemistry</td>
    <td> Dr. Varashree B S</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	
	
<tr>
   
   <td><a href='courses/biochemistry/block-5/8/index.php' target='_blank'>Digestion and absorption of lipids  </a></td>
    <td>Biochemistry</td>
    <td>Dr. Krishanananda Prabhu R V</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/9/index.php' target='_blank'>Inborn errors of lipid metabolism (Lipid storage, lysosomal, oxidation disorders)</a></td>
    <td>Biochemistry</td>
    <td> Mr Babi Dutta</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/10/index.php' target='_blank'>Biochemistry of lipid lowering drugs</a></td>
    <td>Biochemistry</td>
    <td> Dr. Rukmini M S</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/11/index.php' target='_blank'>VLDL, fatty liver & lipotropic factors</a></td>
    <td>Biochemistry</td>
    <td>Dr. Pragna Rao</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/12/index.php' target='_blank'>Understanding ketosis: Conditions predisposing to ketone body formation and their significance</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/13/index.php' target='_blank'>Sweets are fattening: The carbohydrate to fat link</a></td>
    <td>Biochemistry</td>
    <td> Dr. Chandrika D Nayak</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/14/index.php' target='_blank'>Adipose tissue metabolism</a></td>
    <td>Biochemistry</td>
    <td> Mr Sambit Dash </td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

<tr>
   
   <td><a href='courses/biochemistry/block-5/15/index.php' target='_blank'>Dysregulation of lipid metabolism in diabetes mellitus</a></td>
    <td>Biochemistry</td>
    <td> Mr Abhishek Chaturvedi</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	
<tr>
   
   <td><a href='courses/biochemistry/block-5/16/index.php' target='_blank'>Hyperlipoproteinemias</a></td>
    <td>Biochemistry</td>
    <td> Dr. Somashekar Shetty B</td>
    <td>Manipal University</td>
		
    <td>Video</td>	
	

	
	
	
<!---BLOCK-5 END-->	
	
    <!---end anatomy-->
   

   <!---start MICROBIOLOGY -->
<tr>
    <td><a href='courses/Microbiology/block-1/1/index.php' target='_blank'>Introduction to the course</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td> 
    
   
<tr>
    <td><a href='courses/Microbiology/block-1/2/index.php' target='_blank'>Introduction to pathogenic Bacteria and their Laboratory Diagnosis
 (Direct Methods)</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti Nagmoti </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td> 

    <tr>
    <td><a href='courses/Microbiology/block-1/3/index.php' target='_blank'>Immunology in the diagnosis of Bacterial diseases & Molecular diagnosis.
 (Indirect Methods)</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td> 


    <tr>
    <td><a href='courses/Microbiology/block-1/4/index.php' target='_blank'>Introduction to pathogenic Viruses and their Laboratory Diagnosiss</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td> 




    <tr>
    <td><a href='courses/Microbiology/block-1/5/index.php' target='_blank'>Introduction to pathogenic Fungi and their Laboratory diagnosis</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur</td>
    <td>Lady Hardinge Medical college New Delhi  </td>
    <td>Video</td> 




    <tr>
    <td><a href='courses/Microbiology/block-1/6/index.php' target='_blank'>Introduction to Medically important Parasitesand their Laboratory Diagnosis</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>Lady Hardinge Medical college New Delhi</td>
    <td>Video</td> 




   <!--block-1 end--> 


 <tr>
    <td><a href='courses/Microbiology/block-2/1/index.php' target='_blank'>Superficial Infections</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>




    <tr>
    <td><a href='courses/Microbiology/block-2/2/index.php' target='_blank'>Gas Gangrene</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>

    <tr>
    <td><a href='courses/Microbiology/block-2/3/index.php' target='_blank'>Anthrax</a></td>
    <td>Microbiology</td>
    <td>Dr. Renu Bharadwaj</td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>


    <tr>
    <td><a href='courses/Microbiology/block-2/4/index.php' target='_blank'>Superficial Mycoses</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>




    <tr>
    <td><a href='courses/Microbiology/block-2/5/index.php' target='_blank'>Superficial & Subcutaneous Mycoses</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>




    <tr>
    <td><a href='courses/Microbiology/block-2/6/index.php' target='_blank'>Actinomycosis</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>Lady Hardinge Medical college New Delhi</td>
    <td>Video</td>




    <tr>
    <td><a href='courses/Microbiology/block-2/7/index.php' target='_blank'>Leprosy</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>






    <tr>
    <td><a href='courses/Microbiology/block-2/8/index.php' target='_blank'>Viral Infections of the skin</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>






      <!--block-2 end--> 





 <tr>
    <td><a href='courses/Microbiology/block-3/1/index.php' target='_blank'>Upper Respiratory Tract infections (URTI)</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>



    <tr>
    <td><a href='courses/Microbiology/block-3/2/index.php' target='_blank'>Diphtheria</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti </td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>



    
 <tr>
    <td><a href='courses/Microbiology/block-3/3/index.php' target='_blank'>Whooping Cough</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>





    
 <tr>
    <td><a href='courses/Microbiology/block-3/4/index.php' target='_blank'>Viral URTI</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande  </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>





    
 <tr>
    <td><a href='courses/Microbiology/block-3/5/index.php' target='_blank'>Community acquired pneumonia</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti</td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>




    
 <tr>
    <td><a href='courses/Microbiology/block-3/6/index.php' target='_blank'>Atypical Pneumonia</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>




    
 <tr>
    <td><a href='courses/Microbiology/block-3/7/index.php' target='_blank'>Fungi causing Pulmonary Mycoses</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur  </td>
    <td> Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>




    
 <tr>
    <td><a href='courses/Microbiology/block-3/8/index.php' target='_blank'>Tuberculosis</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>




    
 <tr>
    <td><a href='courses/Microbiology/block-3/9/index.php' target='_blank'>Non-Tubercular Mycobacteria</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>



 <!--block-3 end--> 


 <tr>
    <td><a href='courses/Microbiology/block-4/1/index.php' target='_blank'>Diarrhea</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>


 <tr>
    <td><a href='courses/Microbiology/block-4/2/index.php' target='_blank'>Viral Diarrhea</a></td>
    <td>Microbiology</td>
    <td>Dr. Chhaya Chande  </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>



 <tr>
    <td><a href='courses/Microbiology/block-4/3/index.php' target='_blank'>Cholera</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>


 <tr>
    <td><a href='courses/Microbiology/block-4/4/index.php' target='_blank'>Bacillary Dysentery</a></td>
    <td>Microbiology</td>
    <td>Dr. Jyoti M. Nagmoti</td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>

 <tr>
    <td><a href='courses/Microbiology/block-4/5/index.php' target='_blank'>Protozoal Dysentery</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti</td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>


 <tr>
    <td><a href='courses/Microbiology/block-4/6/index.php' target='_blank'>Intestinal Protozoa causing diarrhea</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>Lady Hardinge Medical college New Delhi  </td>
    <td>Video</td>



 <tr>
    <td><a href='courses/Microbiology/block-4/7/index.php' target='_blank'>Intestinal Sporozoa</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur  </td>
    <td>Lady Hardinge Medical college New Delhi  </td>
    <td>Video</td>



 <tr>
    <td><a href='courses/Microbiology/block-4/8/index.php' target='_blank'>Parasitic infestations: Intestinal Nematodes</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>





 <tr>
    <td><a href='courses/Microbiology/block-4/9/index.php' target='_blank'>Parasitic infestations: Intestinal Nematodes Part 2</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>




 <tr>
    <td><a href='courses/Microbiology/block-4/10/index.php' target='_blank'>Parasitic infestations:
 Cestodes</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>




    
 <tr>
    <td><a href='courses/Microbiology/block-4/11/index.php' target='_blank'>Food Poisoning</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande  </td>
    <td> Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>


  <!--block-4 end-->   

<tr>
    <td><a href='courses/Microbiology/block-5/1/index.php' target='_blank'>Urinary Tract Infection</a></td>
    <td>Microbiology</td>
    <td>Dr. Renu Bharadwaj </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>

<tr>
    <td><a href='courses/Microbiology/block-5/2/index.php' target='_blank'>Urethritis - Gonorrhoea</a></td>
    <td>Microbiology</td>
    <td>Dr. Jyoti M. Nagmoti </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>


<tr>
    <td><a href='courses/Microbiology/block-5/3/index.php' target='_blank'>Non-Gonococcal Urethritis
 (NGU)</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>


<tr>
    <td><a href='courses/Microbiology/block-5/4/index.php' target='_blank'>Genital Ulcers & other Genital tract infections</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti </td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>


<tr>
    <td><a href='courses/Microbiology/block-5/5/index.php' target='_blank'>Viral STD:HIV</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande   </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla
</td>
    <td>Video</td>  


<!--block-5 end--> 


<tr>
    <td><a href='courses/Microbiology/block-6/1/index.php' target='_blank'>Acute Hepatitis</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande   </td>
    <td> Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>

<tr>
    <td><a href='courses/Microbiology/block-6/2/index.php' target='_blank'>Chronic Hepatitis</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>  Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>

         
<!--block-6 end--> 



<tr>
    <td><a href='courses/Microbiology/block-7/1/index.php' target='_blank'>Meningitis</a></td>
    <td>Microbiology</td>
    <td>Dr. Renu Bharadwaj </td>
    <td> Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>

<tr>
    <td><a href='courses/Microbiology/block-7/2/index.php' target='_blank'>Chronic meningitis</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>  Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>


<tr>
    <td><a href='courses/Microbiology/block-7/3/index.php' target='_blank'>Encephalitis</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande   </td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>


<tr>
    <td><a href='courses/Microbiology/block-7/4/index.php' target='_blank'>Acute Flaccid Paralysis</a></td>
    <td>Microbiology</td>
    <td>  Dr. Chhaya Chande</td>
    <td>Grant Medical College Sir J. J. Group of Hospitals, Byculla</td>
    <td>Video</td>



<tr>
    <td><a href='courses/Microbiology/block-7/5/index.php' target='_blank'Brain abscess>Brain abscess</a></td>
    <td>Microbiology</td>
    <td>Dr. Jyoti M. Nagmotil </td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>



<tr>
    <td><a href='courses/Microbiology/block-7/6/index.php' target='_blank'>Parasites infecting the CNS</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur  </td>
    <td>Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>


 <tr>
    <td><a href='courses/Microbiology/block-7/7/index.php' target='_blank'>Bacterial Toxins affecting the Nervous system</a></td>
    <td>Microbiology</td>
    <td> Dr. Renu Bharadwaj</td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>



 <tr>
    <td><a href='courses/Microbiology/block-7/8/index.php' target='_blank'>Other Viral CNS infections</a></td>
    <td>Microbiology</td>
    <td> Dr. Chhaya Chande </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>



         
 <!--block-7 end--> 

 

 <tr>
    <td><a href='courses/Microbiology/block-8/1/index.php' target='_blank'>PUO
 Typhoid and Paratyphoid fevers</a></td>
    <td>Microbiology</td>
    <td>Dr. Renu Bharadwaj</td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>

<tr>
    <td><a href='courses/Microbiology/block-8/2/index.php' target='_blank'>Brucellosis, Leptospirosis</a></td>
    <td>Microbiology</td>
    <td>Dr. Renu Bharadwaj</td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>
         


 <tr>
    <td><a href='courses/Microbiology/block-8/3/index.php' target='_blank'>Rickettsialinfections</a></td>
    <td>Microbiology</td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>


 
 <tr>
    <td><a href='courses/Microbiology/block-8/4/index.php' target='_blank'>Viral fevers</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur </td>
    <td>   Lady Hardinge Medical college New Delhi  </td>
    <td>Video</td>




 <tr>
    <td><a href='courses/Microbiology/block-8/5/index.php' target='_blank'>Malaria</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>

 
<tr>
    <td><a href='courses/Microbiology/block-8/6/index.php' target='_blank'>Filariasis</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti </td>
    <td> KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>   


 <!--block-8 end--> 


 

 <tr>
    <td><a href='courses/Microbiology/block-9/1/index.php' target='_blank'>Hospital Acquired Infections
 (HAI)</a></td>
    <td>Microbiology</td>
    <td> Dr. Jyoti M. Nagmoti</td>
    <td>KLE Jawaharlal Nehru Medical college</td>
    <td>Video</td>


 
<tr>
    <td><a href='courses/Microbiology/block-9/2/index.php' target='_blank'>Prevention of HAI</a></td>
    <td>Microbiology</td>
    <td> Dr. Anju Kagal </td>
    <td>B. J. Govt. Medical College Pune</td>
    <td>Video</td>   

    
 <tr>
    <td><a href='courses/Microbiology/block-9/3/index.php' target='_blank'>Biomedical Waste its Management</a></td>
    <td>Microbiology</td>
    <td> Dr. Ravinder Kaur  </td>
    <td>Lady Hardinge Medical college New Delhi </td>
    <td>Video</td>

         
<!--block-9 end-->






    

 <!---END MICROBIOLOGY -->



 <!---start PATHOLOGY-->





     <tr>
    <td><a href='courses/pathology/6/3/index.php' target='_blank'>What is Pathology? 1.1</a></td>
    <td>Pathology</td>
    <td> Dr. K. Ramnarayan</td>
    <td>Manipal University</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/pathology/7/2/index.php' target='_blank'>Cell Adaptations - Adapt to survive 1.2</a></td>
    <td>Pathology</td>
    <td>Dr. Annamma Kurien</td>
    <td>Manipal University</td>
    <td>Video</td> 

 <tr>
    <td><a href='courses/pathology/7/3/index.php' target='_blank'>Differentiation and altered differentiation 1.3</a></td>
    <td>Pathology</td>
    <td>Dr. Annamma Kurien</td>
    <td>Manipal University</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/pathology/6/1/index.php' target='_blank'>Necrosis 1.4</a></td>
    <td>Pathology</td>
    <td> Dr. K. Ramnarayan</td>
    <td>Manipal University</td>
    <td>Video</td> 
	
	<tr>
    <td><a href='courses/pathology/7/1/index.php' target='_blank'>Apoptosis 1.5</a></td>
    <td>Pathology</td>
    <td>Dr. Annamma Kurien</td>
    <td>Manipal University</td>
    <td>Video</td> 


 
 <tr>
    <td><a href='courses/pathology/7/4/index.php' target='_blank'>Intracellular accumulations 1.6</a></td>
    <td>Pathology</td>
    <td>Dr. Annamma Kurien</td>
    <td>Manipal University</td>
    <td>Video</td>





<tr>
    <td><a href='courses/pathology/3/1/index.php' target='_blank'>Inflammation-1  2.1</a></td>
    <td>Pathology</td>
    <td>Dr. Kanthilatha Pai </td>
    <td>Manipal University</td>
    <td>Video</td>   

    
<tr>
    <td><a href='courses/pathology/3/2/index.php' target='_blank'>Inflammation-2  2.2</a></td>
    <td>Pathology</td>
    <td>Dr. Kanthilatha Pai </td>
    <td>Manipal University</td>
    <td>Video</td>   

    
<tr>
    <td><a href='courses/pathology/3/3/index.php' target='_blank'>Inflammation-3  2.3</a></td>
    <td>Pathology</td>
    <td>Dr. Kanthilatha Pai </td>
    <td>Manipal University</td>
    <td>Video</td>   

    
<tr>
    <td><a href='courses/pathology/3/4/index.php' target='_blank'>Chemical mediators of inflammation 2.4 & 2.5</a></td>
    <td>Pathology</td>
    <td>Dr. Kanthilatha Pai </td>
    <td>Manipal University</td>
    <td>Video</td>   

    
<tr>
    <td><a href='courses/pathology/3/5/index.php' target='_blank'>Patterns of acute inflammation 2.6</a></td>
    <td>Pathology</td>
    <td>Dr. Kanthilatha Pai </td>
    <td>Manipal University</td>
    <td>Video</td>       
    
	  <tr>
    <td><a href='courses/pathology/3/6/index.php' target='_blank'>Granulomatous inflammation 2.7</a></td>
    <td>Pathology</td>
    <td>Dr. K. Ramnarayan </td>
    <td>Manipal University</td>
    <td>Video</td>   


<tr>
    <td><a href='courses/pathology/4/6/index.php' target='_blank'>Cell cycle 3.1</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>   





<tr>
    <td><a href='courses/pathology/4/3/index.php' target='_blank'>Wound healing 3.2</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pathology/4/4/index.php' target='_blank'>Factors affecting wound healing and common complications 3.3</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pathology/4/5/index.php' target='_blank'>Fracture healing 3.4</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>  
    
 

<tr>
    <td><a href='courses/pathology/5/1/index.php' target='_blank'>Edema 4.1</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pathology/5/6/index.php' target='_blank'>Hyperemia and Congestion 4.2</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>    	


<tr>
    <td><a href='courses/pathology/5/2/index.php' target='_blank'>Embolism-1  4.3</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>      


<tr>
    <td><a href='courses/pathology/5/3/index.php' target='_blank'>Embolism-2  4.4</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>  
	
	
	
	<tr>
    <td><a href='courses/pathology/5/4/index.php' target='_blank'>Infarction 4.5</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>      
    


<tr>
    <td><a href='courses/pathology/5/5/index.php' target='_blank'>Shock 4.6</a></td>
    <td>Pathology</td>
    <td>Dr. Hema Kini </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td> 
	
	
	
	
	<tr>
    <td><a href='courses/pathology/8/1/index.php' target='_blank'> Prenatal diagnosis of genetic conditions 5.1</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td>
    


<tr>
    <td><a href='courses/pathology/8/2/index.php' target='_blank'>Genetic counseling 5.2</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td>
    

<tr>
    <td><a href='courses/pathology/8/3/index.php' target='_blank'>Patterns of inheritance 5.3</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td> 
    
<tr>
    <td><a href='courses/pathology/8/4/index.php' target='_blank'>Genetic testing 5.4</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td> 


<tr>
    <td><a href='courses/pathology/8/5/index.php' target='_blank'>Genetic basis of cancer and familial cancers 5.5
</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pathology/8/6/index.php' target='_blank'>Approach to a dysmorphic child 5.6</a></td>
    <td>Pathology</td>
    <td>Dr. Girisha. K. M</td>
    <td>Manipal University</td>
    <td>Video</td>   




<tr>
    <td><a href='courses/pathology/1/1/index.php' target='_blank'>Diseases of the immune system 6.1</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td>    

<tr>
    <td><a href='courses/pathology/1/2/index.php' target='_blank'>Hypersensitivity reactions 6.2</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td>    

<tr>
    <td><a href='courses/pathology/1/3/index.php' target='_blank'>Autoimmunity 6.3</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td>    
    
<tr>
    <td><a href='courses/pathology/1/4/index.php' target='_blank'>Systemic Lupus Erythematosus S L E 6.4</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Kasturba Medical College, Manipal</td>
    <td>Video</td>    
                

<tr>
    <td><a href='courses/pathology/1/5/index.php' target='_blank'>Rejections of tissue transplants 6.5</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pathology/1/6/index.php' target='_blank'>Immunodeficiency : HIV & AIDS 6.6 & 6.7</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pathology/1/7/index.php' target='_blank'>Amyloidosis 6.8
</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University </td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pathology/4/2/index.php' target='_blank'>Tuberculosis 7.1 & 7.2</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pathology/4/1/index.php' target='_blank'>Leprosy 7.3</a></td>
    <td>Pathology</td>
    <td>Dr. Sharada Rai </td>
    <td>Kasturba Medical College, Mangalore</td>
    <td>Video</td> 	
	
	
	
	
	
	<tr>
    <td><a href='courses/pathology/2/1/index.php' target='_blank'>Neoplasia-1 Properties of cancers 8.1</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td> 


<tr>
    <td><a href='courses/pathology/2/2/index.php' target='_blank'>Neoplasia-2 Cancer epidemiology 8.2</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>


<tr>
    <td><a href='courses/pathology/2/3/index.php' target='_blank'>Neoplasia-3 Cancer genes 8.3</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>


<tr>
    <td><a href='courses/pathology/2/4/index.php' target='_blank'>Neoplasia-4 Hallmarks of cancer 8.4</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>


<tr>
    <td><a href='courses/pathology/2/5/index.php' target='_blank'>Neoplasia-5 Tumor suppressor genes, viral oncogenesis  8.5</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/pathology/2/6/index.php' target='_blank'>Neoplasia-6 Sustained angiogenesis, invasion and metastasis  8.6</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pathology/2/7/index.php' target='_blank'>Neoplasia-7 Tumor immunity, genomic instability and cancer  8.7</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pathology/2/8/index.php' target='_blank'>Neoplasia-8 Clinical aspects of neoplasia 8.8</a></td>
    <td>Pathology</td>
    <td>Dr. Anuradha Ananthamurthy </td>
    <td>St John's Medical College Bangalore</td>
    <td>Video</td>   
    

  
<tr>
    <td><a href='courses/pathology/1/8/index.php' target='_blank'>Diabetes Mellitus 9.1</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td>     

<tr>
    <td><a href='courses/pathology/1/9/index.php' target='_blank'>Diabetes Mellitus - Clinical features 9.2</a></td>
    <td>Pathology</td>
    <td> Dr. Deepak Nayak M </td>
    <td>Manipal University</td>
    <td>Video</td> 
    
   
    <!--h-->



<tr>
    <td><a href='courses/pathology/9/1/index.php' target='_blank'>Anatomy and Physiology of Urinary System</a></td>
    <td>Pathology</td>
    <td> Dr. Neha Kawatra Madan
 </td>
    <td>AIIMS, New Delhi</td>
    <td>Video</td> 


<tr>
    <td><a href='courses/pathology/9/2/index.php' target='_blank'>Urinary System Introduction & General Consideration
</a></td>
    <td>Pathology</td>
    <td> Prof. Amit Kumar Dinda
</td>
    <td>AIIMS, New Delhi</td>
    <td>Video</td> 


<tr>
    <td><a href='courses/pathology/9/3/index.php' target='_blank'>Glomerulonephritis : Pathology
</a></td>
    <td>Pathology</td>
    <td> Prof. Amit Kumar Dinda
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/4/index.php' target='_blank'>Glomerular involvement in systemic diseases
</a></td>
    <td>Pathology</td>
    <td> Prof. Amit Kumar Dinda
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/5/index.php' target='_blank'>Acute Renal Failure (Acute kidney injury)
</a></td>
    <td>Pathology</td>
    <td> Dr. Soumita Bagchi 
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/6/index.php' target='_blank'> Acute Renal Failure(ARF)
</a></td>
    <td>Pathology</td>
    <td> Prof. Amit Kumar Dinda
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/7/index.php' target='_blank'>Moocs (Renal System) Nephrotic Syndrome in children
</a></td>
    <td>Pathology</td>
    <td> Dr. Aditi Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/8/index.php' target='_blank'>Hematuria
</a></td>
    <td>Pathology</td>
    <td> Dr. Anil Goyal
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/9/index.php' target='_blank'>Urine Examination (Physical & Chemical)
</a></td>
    <td>Pathology</td>
    <td> Dr. Geetika Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/10/index.php' target='_blank'>Interstitial Nephritis
</a></td>
    <td>Pathology</td>
    <td> Dr. Geetika Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/11/index.php' target='_blank'>Pyelonephritis,obstructive / reflux nephropathy and Urolithiasis
</a></td>
    <td>Pathology</td>
    <td> Dr. Geetika Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/12/index.php' target='_blank'>Renal Tumors
</a></td>
    <td>Pathology</td>
    <td> Dr. Geetika Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/13/index.php' target='_blank'>Renal Tumors
</a></td>
    <td>Pathology</td>
    <td> Prof. Amlesh Seth
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 



<tr>
    <td><a href='courses/pathology/9/14/index.php' target='_blank'>Renal cell carcinoma
</a></td>
    <td>Pathology</td>
    <td> Dr. Geetika Singh
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td> 

<!--h -->

 <tr>
    <td><a href='courses/pathology/10/1/index.php' target='_blank'>Introduction of Respiratory System

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    


	<tr>
    <td><a href='courses/pathology/10/2/index.php' target='_blank'>Respiratory Defence Mechanisms

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	
	
	<tr>
    <td><a href='courses/pathology/10/3/index.php' target='_blank'>Lung Infections - I

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/4/index.php' target='_blank'>Lung Infections - II

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/5/index.php' target='_blank'>Lung Infections - III

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/6/index.php' target='_blank'>Respiratory Atelectasis

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/7/index.php' target='_blank'>Pulmonary Edema

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/8/index.php' target='_blank'>Acute Lung Injury

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/9/index.php' target='_blank'>Chronic non infectious diffuse pulmonary diseases

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/10/index.php' target='_blank'>Chronical Bronchitis

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
	
	<tr>
    <td><a href='courses/pathology/10/11/index.php' target='_blank'>Bronchiectasis

</a></td>
    <td>Pathology</td>
    <td> Dr. Sudheer Kumar Arava
 </td>
    <td>AIIMS, New Delhi
</td>
    <td>Video</td>    
     


  
    <!---END Dr. Hema Kini-->
    
     <!---START Dr. K. Ramnarayan-->
   

 
    
<!---END Dr. K. Ramnarayan-->

  <!---START Dr. Annamma Kurien-->
 

  <!---START Dr. Girisha. K.-->

    
   
<!---START 	PHARMACOLOGY-->

<!---START Dr. Y. K. Gupta-->


<tr>
    <td><a href='courses/pharmacology/1/1/index.php' target='_blank'>Drugs used in Asthma</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/1/2/index.php' target='_blank'>Constipation</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pharmacology/1/3/index.php' target='_blank'>Diarrhea and constipation</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/pharmacology/1/4/index.php' target='_blank'>Glaucoma</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/pharmacology/1/5/index.php' target='_blank'>Myasthenia gravis</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pharmacology/1/6/index.php' target='_blank'>Emetics and anti-emetics</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td>    
      

<tr>
    <td><a href='courses/pharmacology/1/7/index.php' target='_blank'>Drugs used in parkinsons disease</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/1/8/index.php' target='_blank'>How Drug Act?
</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/1/9/index.php' target='_blank'>Drugs used in Peptic ulcer disease
</a></td>
    <td>Pharmacology</td>
    <td>Dr. Y. K. Gupta</td>
    <td>All India Institute of Medical Sciences</td>
    <td>Video</td> 


<!---START Dr. Santanu Kumar Tripathi-->

<tr>
    <td><a href='courses/pharmacology/2/1/index.php' target='_blank'>Analgesics and anti-inflammatory agents</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td> 
<tr>
    <td><a href='courses/pharmacology/2/2/index.php' target='_blank'>Bioavailablity and Bioequivalenlence</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pharmacology/2/3/index.php' target='_blank'>Analgesics and antiinflammatory agents_12-11-18</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>



<tr>
    <td><a href='courses/pharmacology/2/4/index.php' target='_blank'>Uterotonics and Tocolytics</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>


<tr>
    <td><a href='courses/pharmacology/2/5/index.php' target='_blank'>Uterotonics contd.</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pharmacology/2/6/index.php' target='_blank'>Antimuscarinic drugs</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pharmacology/2/7/index.php' target='_blank'>Drug abuse and drug dependence</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>

<tr>
    <td><a href='courses/pharmacology/2/8/index.php' target='_blank'>Cancer Chemotherapy Principles and Practice</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td>

<!--<tr>
    <td><a href='courses/pharmacology/2/9/index.php' target='_blank'>Analgesics and anti-inflammatory agents</a></td>
    <td>Pharmacology</td>
    <td>Dr. Santanu Kumar Tripathi</td>
    <td>School of Tropical Medicine Kolkata</td>
    <td>Video</td> --> 


   <!---START Dr. Bikash Medhi--> 



<tr>
    <td><a href='courses/pharmacology/3/1/index.php' target='_blank'>Pharmacology of Beta Blockers</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pharmacology/3/2/index.php' target='_blank'>Autocoids</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>  

<tr>
    <td><a href='courses/pharmacology/3/3/index.php' target='_blank'>Local anesthetics</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>
    
    
<tr>
    <td><a href='courses/pharmacology/3/4/index.php' target='_blank'>Pharmacokinetics:Biotransformation and eliminaton</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>    
    
<tr>
    <td><a href='courses/pharmacology/3/5/index.php' target='_blank'>Adrenaline and other sympathomimetics</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/3/6/index.php' target='_blank'>Contraceptive agents</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research
Chandigarh
</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/3/7/index.php' target='_blank'>Pharmacotherapy in glaucoma</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>     

<tr>
    <td><a href='courses/pharmacology/3/8/index.php' target='_blank'>Anti-Epileptic Drugs</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research
Chandigarh
</td>
    <td>Video</td>     

<tr>
    <td><a href='courses/pharmacology/3/9/index.php' target='_blank'>Anti-Hypertensive agents</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>     

<tr>
    <td><a href='courses/pharmacology/3/10/index.php' target='_blank'>Anticoagulants</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>   

<tr>
    <td><a href='courses/pharmacology/3/11/index.php' target='_blank'>Antiplatelet drugs</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>   



 
    
  <tr>
    <td><a href='courses/pharmacology/3/12/index.php' target='_blank'>
Thrombolytics</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>     

<tr>
    <td><a href='courses/pharmacology/3/13/index.php' target='_blank'>Pharmacokinetics:Absorbtion and distribution</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td> 

<tr>
    <td><a href='courses/pharmacology/3/14/index.php' target='_blank'>Alzheimer's Disease and Drug Therapy</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td> 
    
    
  <tr>
    <td><a href='courses/pharmacology/3/15/index.php' target='_blank'>Corticosteroids</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>   

  <tr>
    <td><a href='courses/pharmacology/3/16/index.php' target='_blank'>Drug Therapy of Parasitic Infestations</a></td>
    <td>Pharmacology</td>
    <td>Dr. Bikash Medhi</td>
    <td>Postgraduate Institute of Medical Education and Research,Chandigarh
</td>
    <td>Video</td>     

  <!---START	PHYSIOLOGY-->

  <!---START Dr. Sathya Subramani-->



<tr>
    <td><a href='courses/physiology/1/1/index.php' target='_blank'>GP-1 The Cell Membrane: lipids </a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>


<tr>
    <td><a href='courses/physiology/1/2/index.php' target='_blank'>GP-2 The Cell Membrane: Proteins</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
  
 <tr>
    <td><a href='courses/physiology/2/1/index.php' target='_blank'>GP-3 Membrane Transport: Ion channels part 1</a></td>
    <td>Physiology</td>
    <td>Dr. Vinay Timothy Oommen</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  
    
    
<tr>
    <td><a href='courses/physiology/2/2/index.php' target='_blank'>GP-4 Membrane Transport: Ion channels part 2</a></td>
    <td>Physiology</td>
    <td>Dr. Vinay Timothy Oommen</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  

<tr>
    <td><a href='courses/physiology/1/3/index.php' target='_blank'>GP-5 Membrane Transport: Facilitated diffusion</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/4/index.php' target='_blank'>GP-6 Membrane transport:  Secondary active transporters</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/5/index.php' target='_blank'>GP-7 Membrane Transport: Primary active transporters and ABC transporters  </a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>


    
<tr>
    <td><a href='courses/physiology/1/6/index.php' target='_blank'>GP-8 Cell signaling mechanisms part I</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/7/index.php' target='_blank'>GP-9 Cell signaling mechanisms part II</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    
 <tr>
    <td><a href='courses/physiology/1/8/index.php' target='_blank'>GP-10 Cell signaling mechanisms part III</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
      
<tr>
    <td><a href='courses/physiology/1/9/index.php' target='_blank'>GP-11 Cell signaling mechanisms part IV</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
       
     
<tr>
    <td><a href='courses/physiology/1/10/index.php' target='_blank'>GP-12 Cell signaling mechanisms part V</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    

  
<tr>
    <td><a href='courses/physiology/1/11/index.php' target='_blank'>GP-13 Cell signaling VI ionotropic receptors</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/physiology/1/12/index.php' target='_blank'>GP-14 Donnan effect and equilibrium</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/physiology/1/13/index.php' target='_blank'>GP-15 Membrane potential</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/14/index.php' target='_blank'>GP-16 Action potential part 1</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/15/index.php' target='_blank'>GP-17 Action potential part 2
</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
	
	 <tr>
    <td><a href='courses/physiology/3/1/index.php' target='_blank'>GP-18 Calcium transporters</a></td>
    <td>Physiology</td>
    <td>Dr. Anand Bhaskar </td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/3/2/index.php' target='_blank'>GP-19 Cardiac action potentials</a></td>
    <td>Physiology</td>
    <td>Dr. Anand Bhaskar </td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/physiology/2/3/index.php' target='_blank'>GP-20 Body fluids</a></td>
    <td>Physiology</td>
    <td>Dr. Vinay Timothy Oommen</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td> 
<tr>
    <td><a href='courses/physiology/2/4/index.php' target='_blank'>GP-21 Osmosis</a></td>
    <td>Physiology</td>
    <td>Dr. Vinay Timothy Oommen</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
  
  <!---START Dr. Anand Bhaskar -->  
  
 
 <tr>
    <td><a href='courses/physiology/3/3/index.php' target='_blank'>GP-22 Oedema</a></td>
    <td>Physiology</td>
    <td>Dr. Anand Bhaskar </td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
<tr>
    <td><a href='courses/physiology/1/16/index.php' target='_blank'>HH-1 Introduction and sources of acid</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>


<tr>
    <td><a href='courses/physiology/1/17/index.php' target='_blank'>HH-2 Chemical Fundamentals</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>    
    
  
<tr>
    <td><a href='courses/physiology/1/18/index.php' target='_blank'>HH-3 Buffering of carbon dioxide in venous blood</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  

<tr>
    <td><a href='courses/physiology/1/19/index.php' target='_blank'>HH-4 Buffering of fixed acids</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>

<tr>
    <td><a href='courses/physiology/1/20/index.php' target='_blank'>HH-5 Role of kidneys</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>
    
<tr>
    <td><a href='courses/physiology/1/21/index.php' target='_blank'>HH-6 Overview of acid-base disorders</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>    
 <tr>
    <td><a href='courses/physiology/1/22/index.php' target='_blank'>HH-7 Metabolic acidosis</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  

<tr>
    <td><a href='courses/physiology/1/23/index.php' target='_blank'>HH-8 Metabolic acidosis - renal tubular acidosis</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>     
    
    
<tr>
    <td><a href='courses/physiology/1/24/index.php' target='_blank'>HH-9 Metabolic alkalosis</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  


<tr>
    <td><a href='courses/physiology/1/25/index.php' target='_blank'>HH-10 Respiratory alkalosis</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  
  
  
 <tr>
    <td><a href='courses/physiology/3/4/index.php' target='_blank'>HH-11 Respiratory acidosis
</a></td>
    <td>Physiology</td>
    <td>Dr. Sathya Subramani</td>
    <td>Christian Medical College, Vellore </td>
    <td>Video</td>  
   
  
  
  <!---START Dr. Vinay Timothy -->

    
    


   
  
  
  

</tbody>
</table>


				</div>
			</div>
	</div>
</div>
<script src='assets/nptel_assets/js/courses_script.js'></script>

</body>
<footer></footer>
 <?php //include("footer.php"); ?>
