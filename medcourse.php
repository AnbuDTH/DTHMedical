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

<?php include('config.php'); ?>
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
				      		    
				      		     <?php
$s="select * from addcourse ORDER BY id ASC";		
$s1=mysqli_query($conn,$s);



while($s2=mysqli_fetch_array($s1)){
	$x++;
	
	
?>
         
				      		    
				      		    
				      												<li class="list-group-item">
										<input type="checkbox" class="ccheck checkAerospaceEngineering" onchange="filterme(	)" value="<?php echo $s2['coursename']; ?>" name="discipline"
										 >
										<div class="dispname"><?php echo $s2['coursename']; ?></div>
									</li>
									
									
									
						<?php } ?>			
									
						        								
						        		<!--						
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
				        	<div data-toggle="collapse" data-target="#institute">Total Duration<i class="arrow glyphicon glyphicon-triangle-bottom"></i></div>
				    	</h4>
				    </div>
				    <div id="institute" class="showlist panel-collapse collapse in">
				    	<div class="panel-body">
				    		<ul class="list-group instlist">
							  <?php
$sk="select * from courses";		
$s1k=mysqli_query($conn,$sk);



while($s2k=mysqli_fetch_array($s1k)){
	$x++;
	
	
?>

<script>

$(document).ready(function() {
    $('#sample').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>


<div class="container mt-5">
  
  <div class="side-by-side"> 
  <div class="row-3 mb-3">
    
          
<span>Anatomy : <?php $product = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Anatomy  FROM courses where course='Anatomy'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $product));                
                echo $dy['Anatomy']." ";?></span>

<br>

<span>Biochemistry : <?php $prod1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Biochemistry  FROM courses where course='Biochemistry'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod1));                
                echo $dy['Biochemistry']." ";?></span>
                <br>

<span>Microbiology : <?php $prod1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Microbiology  FROM courses where course='Microbiology'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod1));                
               echo $dy['Microbiology']." ";?></span>        
               <br>        

<span>Pathology : <?php $prod1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Pathology  FROM courses where course='Pathology'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod1));                
                echo $dy['Pathology']." ";?></span>
                <br>

<span>Pharmacology : <?php $prod1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Pharmacology  FROM courses where course='Pharmacology'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod1));                
                echo $dy['Pharmacology']." ";?></span>
                <br>

<span>Physiology : <?php $prod1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) as Physiology  FROM courses where course='Physiology'";              
                $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod1));                
                echo $dy['Physiology']." ";?></span>
                <br>
                <br>
            


<span>Total : <?php $prod2 = "SELECT  SEC_TO_TIME(SUM(TIME_TO_SEC(duration))) AS TotalTime from courses;" ; 
 $dy=mysqli_fetch_assoc(mysqli_query($conn, $prod2));                
 echo $dy['TotalTime']." ";?></span>





							
							<!---	<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="<?php echo $s2k['institutions']; ?>"><div class="inname"><?php echo $s2k['institutions']; ?></div></li>
								
						<?php } ?>		--->
								
							<!--	<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Kempegowda Institute of Medical Sciences"><div class="inname">Kempegowda Institute of Medical Sciences </div></li>
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
								
								<li class="list-group-item"><input type="checkbox" class="ccheck" name="checkinst" onchange="filterme()" value="Christian Medical College, Vellore"><div class="inname">Christian Medical College, Vellore</div></li>-->
								
								
								
								
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
                <th style="width: 3px !important;">Reviewer</th>
                <th style="width: 3px !important;">Duration</th>
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

    
            <?php
$sqq12l="select * from courses ORDER BY id ASC";		
$sqq12=mysqli_query($conn,$sqq12l);



while($rq=mysqli_fetch_array($sqq12)){
	$x++;
	
	
?>
         




<tr>
    <td><a href='course-inner.php?id=<?php echo $rq['id']; ?>' target='_blank'><?php echo $rq['subname']; ?></a></td>
    <td><?php echo $rq['course']; ?></td>
    <td><?php echo $rq['smename']; ?></td>
    <td><?php echo $rq['insti']; ?> </td>
    <td><?php echo $rq['reviewer']; ?></td>
    <td><?php echo $rq['duration']; ?></td>
    
    
    
    
    <?php } ?>

  
  
  

</tbody>
</table>


				</div>
			</div>
	</div>
</div>
<script src='assets/nptel_assets/js/courses_script.js'></script>

</body>


<!--
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
--->





<footer></footer>
 <?php //include("footer.php"); ?>
