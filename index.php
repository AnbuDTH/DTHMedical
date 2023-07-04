<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	//header('location: login.php');
	//header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  //include("header.php");
?>

<!DOCTYPE html>
<html>


<head>
  <!-- <title>NPTEL</title> -->
  <title>NPTEL, online courses and certification, Learn for free</title>
<meta charset="UTF-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
<meta name="google-site-verification" content="GIjkPY0yEfROBRvIBriinx_Q8Z-ZWKBhtRGa0Ezx5Vc" />
<meta name="description" content="NPTEL provides E-learning through online Web and Video courses various streams.">
<meta name="keywords" content="NPTEL,onlinecourses,studyonline,iitmadras">

<link rel="stylesheet" href="assets/nptel_assets/css/bootstrap.3.3.4.css">
<link rel="stylesheet"  href="assets/nptel_assets/css/header_style.css"/>

<meta name="description" content="Nptel  is a joint initiative from IITs and IISc to offer online courses & certification. Learn for free, Pay a small fee for exam and get a certificate">
<meta name="keywords" content="Nptel, iit, free course, free, iim, iit madras, gate, online, learning, swayam">
<meta name="keywords" content="management course, aerospace, mechanical, computer science, agriculture, cloud computing">
<meta name="keywords" content="block chain, database, python, c programming, soft skills, machine learning">
<meta name="keywords" content="programming, data structures, algorithms, python, fluid mechanics, strength of materials, artificial intelligence, internet of things">
<meta name="keywords" content="IOT, basic electrical technology, communication engineering, dbms, robotics, English, manage tb, ibm block chain course ">
<meta name="keywords" content="onlinelearning, elearning, learning, freelearning, freecourse, free, mooc, NPTEL, SWAYAM">
   
<link rel="icon" href="assets/nptel_assets/images/nptellogo.jpg" type="image/jpg" sizes="16x16">
<script src="assets/nptel_assets/js/jquery.1.10.2.js" type="text/javascript"></script>
<script src="assets/nptel_assets/js/bootstrap.3.3.4.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/nptel_assets/css/footer.css">
<link rel="stylesheet" href="assets/nptel_assets/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<script> 
$(function(){
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




<!-- slide-->


	<style>

.mySlides5 {display: none;}


/* Slideshow container */
.slideshow5-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot5 {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
		
		
		
		











<style>
   .blink_meee {
   animation: blinker 1s linear infinite;
   color:#fff;
   background:#DC143C;
   padding:2px 4px;
   border-radius:3px;
   font-size:10px;
   }
   .demo .item{
   margin-bottom: 60px;
   }
   .content-slider li{
   background-color: #ed3020;
   text-align: center;
   color: #FFF;
   }
   .content-slider h3 {
   margin: 0;
   padding: 70px 0;
   }
   .demo{
   width: 100%;
   }
   .demo img{width:100%; height: 685px;}
   .backgimg
   {
   position:relative;float: left; width: 100%; margin: 0; padding: 0;
   background-image: url('assets/nptel_assets/images/newbanner.jpg');
   /* background-position: 0px -30px;*/
   /* background-size: 1130px;*/
   background-repeat: no-repeat;
   height: 241px;}
   .text_vedios{position: absolute;float: right;
   right: 14px;
   top: 18px;}
   .text_vedios iframe{width: 400px; height: 215px;}
   .fnews {
   background-color: #FFF;
   padding: 0;
   min-height: 495px;
   border: 1px solid #DDD;
   height: 495px;
   }
   .fnewscol {
   padding-left: 10px;
   padding-right: 10px;
   max-height: 670px;
   overflow-y: hidden;
   }
   @keyframes blinker {
   50% { opacity: 0; }
   }
   .testimonial{
   margin: 20px 10px 0;
   position: relative;
   }
   .testimonial .pic{
   padding: 5px;
   background: #fff;
   border: 2px solid #831812;
   position: absolute;
   top: -20px;
   left: 5px;
   z-index: 1;
   }
   .testimonial .description:before{
   /*content: "";
   width: 35px;
   height: 101%;*/
   background: #831812;
   border-left: none !important;
   /*position: absolute;
   top: 0;
   right: -18px;
   transform: skewX(-13deg);*/
   }
   .testimonial .description
   {
   border: 1px solid #c9c3c3 !important;
   box-shadow: 0px 0px 11px #ccc;
   border-radius: 8px;
   color: #484444 !important;
   }
   .testimonial .description span
   {
   color: #8a1b0e;
   }
   .testimonial .testimonial-content{
   margin: 20px 0 0 34px;
   }
   .testimonial .title{
   display: inline-block;
   font-size: 14px;
   color: #fc6963;
   }
   .testimonial .post{
   display: block;
   font-size: 15px;
   line-height: 20px;
   margin-top: 2px;
   }
   .owl-theme .owl-controls{
   margin-top: 30px;
   }
   .owl-theme .owl-controls .owl-page span{
   background: #fc6963;
   }
   @media only screen and (max-width:990px){
   .testimonial .description:before{
   display: none;
   }


   .hero-text {
       padding: 0 300px 0 0;
}
.hero-text1 {
padding: 0 0 0 316px;
}
   }

   @media only screen and (max-width:600px){
 .hero-text {
       padding: 0 300px 0 0;
}
.hero-text1 {
   padding: 0 0 0 316px;
}
   }
   /*body{
   background-color:#1f1f1f;
   }
   #title {
   background-color:#000;
   padding:40px 0px;
   }*/
   h2   {
   text-align:top;
   font-weight:bold;
   color:#fff;
   }
   /* Ow; Slider CSS*/
   .owl-wrapper  {
   positon:relative;
   }
   .owl-controls {
   position: absolute;
   bottom: 10px;
   left: 0;
   right: 0;
   margin-left: auto;
   margin-right: auto;
   }
   .owl-theme .owl-controls .owl-page span {
   background: #fff  !important;
   }
   .owl-img   {
   width:100%;
   }
   .owl-text-overlay   {
   position: absolute;
   text-align: center;
   width: 56%;
   top: 51%;
   transform:      translateY(-50%);
   left: 0;
   right: 10;
   margin-left: auto;
   margin-right: auto;
   color: #fff;
   background-color: rgba(0, 0, 0, 0.4);
   background: rgba(0, 0, 0, 0.4);
   padding-bottom:20px;
   font-family: "Open Sans", sans-serif;
   border-radius: 15px 50px 30px 5px:
   }
   h2.owl-title  {
   font-size:24px;
   font-weight:bold;
   margin-bottom:20px;
   }
   p.owl-caption  {
   font-size:14px;
   line-height:24px;
   }
   .owl-theme .owl-controls .owl-page span:active {
   background: #fff !important;
   }
   /* hide previous and next */
   .owl-buttons {
   visibility: hidden;
   display: none;
   }
   .quotesouter{display: none;}
   .lofolist{float: none; width: 88%;}
   .iitlogos{float: left; z-index: 10; width: 100%;}
   /*.owl-wrapper .owl-item{width: 958px !important;}*/
   .left-imagesbx{float: left; width: 100%; margin: 0 23px; padding: 0;}
   .left-imagesbx .leftpanel{width: 84%;}
   .img{
   width: 551px;
   }
   .centered {
   width: 100%;
   margin: -137px 0 0 12px;
   /* position: absolute; */
   /* top: 41%; */
   /* left: 9%; */
   /* transform: translate(-50%, -50%); */
   }
   .bottom-right{
   position: absolute;
   bottom: 31%;
   left:6%;
   }
   .centered_live{
   position: absolute;
   top: 13%;
   left: 48%;
   transform: translate(-50%, -50%);
   }
   .modal-body {
   position: relative;
   padding: 47px;
   }
   .glyphicon {
   position: relative;
   /* top: -17px;*/
   left: -8px;
   display: inline-block;
   font-family: 'Glyphicons Halflings';
   font-style: normal;
   font-weight: normal;
   line-height: 1;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
   }




.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, 42%);
  color: white;
}


.hero-text a:hover{
   color: white;
}
.hero-text1 {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, 50%);
  color: white;
}


.hero-text1 a:hover{
   color: white;
}
</style>
</head>
 <header></header>

    <div class="container">
  
   <div class="homeslider">
      <div class="row sliderrow">
          <div class="col-lg-12 carousel-left">
              <div class="col-lg-8 col-md-6 col-sm-12" style="padding: 0;">
                 <!-- <div class="backgimg">
                      <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                          <div class="hero-text">
                            <h2><b>NPTEL PROGRAMME FOR  BIOLOGICAL AND HEALTH SCIENCES</b></h2>
                          </div>
                      </div>-->
                      <!-- <div class="col-lg-6 col-md-6" style="padding: 0;">
                          <div class="hero-text1">
                            <h4><b>To access new courses offered from July 2019 semester, go to <br><br><a href="https://swayam.gov.in/" target="_blank">https://swayam.gov.in/</a></b></h4>
                          </div>
                       </div>-->
                 <!-- </div>-->
				 
				 
				 
				 
				 
				 
				 
				 <div class="slideshow5-container" >

<div class="mySlides5 ">
 
  <img src="assets/img/Anatomy.jpg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Anatomy</b></p>
</div>

<div class="mySlides5 ">
 
  <img src="assets/img/Biochemistry.jpg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Biochemistry</b></p>
</div>

<div class="mySlides5 ">
 
  <img src="assets/img/Microbiology 1.jpg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Microbiology</b></p>
</div>

<div class="mySlides5 ">
 
  <img src="assets/img/Pathology.jpg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Pathology</b></p>
</div>

<div class="mySlides5 ">
 
  <img src="assets/img/Pharmacology.jpg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Pharmacology</b></p>
</div>

<div class="mySlides5 ">
 
  <img src="assets/img/Physiology.jpeg" style="width:700px; height:300px">
   <p class="text" style="display:block!important"><b>Physiology</b></p>
</div>








</div>
<br>

<div style="text-align:center;">
  <span class="dot5"></span> 
  <span class="dot5"></span> 
  <span class="dot5"></span> 
  <span class="dot5"></span>
  <span class="dot5"></span>
  <span class="dot5"></span>
 
  
</div> 

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides5");
  var dots = document.getElementsByClassName("dot5");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
		                   
		                    
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
              </div>
              <div class="col-lg-4  col-md-6 col-sm-12" style="padding: 0 0 0 5px;margin: 0 0 0 -15px;">
                 <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wJOESS9VSzw?&amp;loop=1&amp;playlist=SNbbQs-iwJE" frameborder="0" allowfullscreen style="width: 100%;height: 300px;"></iframe>
              </div> 
          </div>
      </div>
      <br>
      <h5 style="text-align:  center;font-size: 24px;background:#ffff"><a href="http://trendtamil.com/nptel/national.php" target="_blank"><b style="color:#167ac6"> National Coordinators </b></a>
      </h5>
     

      <div class="col-lg-2 carousel-rightpanel">
        <div class="row-centered">
        </div>
      </div>
         
    </div>
   <!-- TESTIMONIAL -->
   <div class="container">
      <div class="row">
         <div class="col-md-16 sliderrow">
            
                
               <div class="col-md-offset-1 iitlogos" align="center">
                 <!-- <div class="lofolist">
                     <div class="imground">
					
                        <a href="#" ><img class="img-responsive img-circle" alt="AIIMS" src="assets/ia_assets/College logos/AIIMS.png" data-toggle="tooltip" title="All India Institutes of Medical Sciences" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="#" ><img class="img-responsive" alt="BJGMC" src="assets/ia_assets/College logos/BJ GOV MED COLL.png" data-toggle="tooltip" title="BJ GOV Medical College" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="#" ><img class="img-responsive" alt="CMC" src="assets/ia_assets/College logos/CMC.png" data-toggle="tooltip" title="Christian Medical College" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="#" ><img class="img-responsive" alt="MU" src="assets/ia_assets/College logos/MANIPAL UNIVERSITY V2.png" data-toggle="tooltip" title="Manipal University" data-placement="bottom"></a>
                     </div>
                          <div class="imground">
                        <a href="#" ><img class="img-responsive" alt="SRMC" src="assets/ia_assets/College logos/SRI RAMACHANDRA MED COLL.png" data-toggle="tooltip" title="Sri Ramachandra Medical College" data-placement="bottom"></a>
                     </div>
                     
                
                     </div>-->
					 
					 
					  <div class="lofolist">
                     <div class="imground">
                        <a href="#" target="_blank"><img class="img-responsive img-circle" alt="AIIMS" src="assets/ia_assets/College logos/aiims1.png" data-toggle="tooltip" title="All India Institutes of Medical Sciences" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="#" target="_blank"><img class="img-responsive" alt="BJGMC" src="assets/ia_assets/College logos/bj.png" data-toggle="tooltip" title="BJ GOV Medical College" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="#" target="_blank"><img class="img-responsive" alt="CMC" src="assets/ia_assets/College logos/cmc1.png" data-toggle="tooltip" title="Christian Medical College" data-placement="bottom"></a>
                     </div>
                     <div class="" style="width: 236px;
    /* height: 100%; */
    float: left;
    margin-left: 1%;
    margin-top: 6%;
    height: 23px!important;">
                        <a href="#" target="_blank"><img class="img-responsive" alt="MU" src="assets/ia_assets/College logos/MANIPAL.png" data-toggle="tooltip" title="Manipal University" data-placement="bottom"></a>
                     </div>
                          <div class="imground">
                        <a href="#" target="_blank"><img class="img-responsive" alt="SRMC" src="assets/ia_assets/College logos/ramachandra.png" data-toggle="tooltip" title="Sri Ramachandra Medical College" data-placement="bottom"></a>
                     </div>
                     
                
                     </div>
					 
					 
					 
					 
                     <!--<div class="imground">
                        <a href="http://www.iitkgp.ac.in/" target="_blank"><img class="img-responsive" alt="IIT KHARAGPUR" src="assets/nptel_assets/images/institute_logos/iitkharagpur.png" data-toggle="tooltip" title="IIT KHARAGPUR" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="http://www.iitm.ac.in/" target="_blank"><img class="img-responsive" alt="IIT MADRAS" src="assets/nptel_assets/images/institute_logos/iitmadras.png" data-toggle="tooltip" title="IIT MADRAS" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="http://www.iitr.ac.in/" target="_blank"><img class="img-responsive" alt="IIT ROORKEE" src="assets/nptel_assets/images/institute_logos/iitroorkee.jpg" data-toggle="tooltip" title="IIT ROORKEE" data-placement="bottom"></a>
                     </div>
                     <div class="imground">
                        <a href="http://www.iisc.ernet.in/" target="_blank"><img class="img-responsive" alt="IISc BANGALORE" src="assets/nptel_assets/images/institute_logos/iisbangalore.png" data-toggle="tooltip" title="IISc BANGALORE" data-placement="bottom"></a>
                     </div>-->
                  </div>
               </div>
               &nbsp;
               &nbsp;
              
           
            
         </div>
      </div>
   </div>
   
   
    <div class="container">
      <div class="row">
         <div class="col-md-12 sliderrow">
             
              <div class="row nptel-features">
                  <div class="col-lg-12 fnews">
                     <div class="alert featuretitle">Featured News</div>
                     <div class="fnewscol">
                        <div>
                                                                                 <!-- <div class="ftitle text-success">Workshops</div> -->
                           
                          
                           <div class="well">
                              <div class="ftitle text-success">Upcoming Live sessions</div>
                              <div class="ftext"><a href = "#" target="_blank">Click here </a></div>
                           </div>
                           <div class="well">
                              <div class="ftitle text-success">Upcoming - Final Course List</div>
                              <div class="ftext"><a href = "#" target="_blank">Click here </a></div>
                           </div>
                                                       <!-- <div class="ftitle text-success">Workshops</div> -->
                           <div class="well">
                              <div class="ftitle text-success">Upcoming Workshops</div>
                              <div class="ftext">-</div>
                           </div>
                                                   </div>
                     </div>
                  </div>
                 
                 
                 <!-- <div class="col-md-8 featured-course">
                     <div class="fcourse" style="width: 100%;">
                        <div class="alert featuretitle">NPTEL other initiatives</div>
                        <div class="demo">
                           <div class="item">
							    <div class="col-md-12" style="padding-bottom: 35px;">
							  <div class="col-sm-4"><a href="LocalChapter/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="Gate Preparation" src="assets/nptel_assets/images/sub_portal_images/localchapter_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="noc/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/noc_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="AICTE_FDP/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/aicte_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="Translation_page/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/Home%20Page_ICON-18.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="http://textofvideo.nptel.ac.in/" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/textofvideo_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>

							  <div class="col-sm-4"><a href="workshops/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/workshop_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="gate_paper.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="Gate Preparation" src="assets/nptel_assets/images/sub_portal_images/gate_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>

							  <div class="col-sm-4"><a href="IndustryAssociate/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/industry_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
							  <div class="col-sm-4"><a href="internship/index.php" target="_blank"><img class="img-responsive img-thumbnail leftpanel" alt="nptel workshop" src="assets/nptel_assets/images/sub_portal_images/internship_new_logo.jpg" data-holder-rendered="true" style="height: 105px;width: 125px;"></a></div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>-->
                  
                  
                  
                  
               </div>
             
             
            </div>
            </div> 
            </div>
             
             
   
   <!-- </div> -->
   <!-- TESTIMONIAL -->
</div>
</div>
<footer></footer>

</body>
