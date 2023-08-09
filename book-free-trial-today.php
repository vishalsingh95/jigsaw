<!DOCTYPE HTML>

<html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
include('meta.php'); ?>

<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="css/layerslider.css" type='text/css' media='all' />

<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel='stylesheet' type='text/css'>

<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">

<div class="wrapper">
<?php include_once "header.php";?>
<div id="main">

<div class="breadcrumb-section">
<div class="container">
<h1>Book Free Trial Today</h1>
<div class="breadcrumb">
<a href="index.php">Home</a>
<span class="fa fa-angle-double-right"></span>
<a href="#">Book Free Trial Today</a>


</div>
</div>
</div>



<section class="fullwidth-background turquoise-plain-bg">

<div class="container">
<h2 class="dt-sc-hr-white-title">Book Free Trial Today</h2>
<form method="post" action="" id="admissionform" name="admissionform" class="admission-form">
<p class="dt-sc-one-third column first">
<input id="name" name="txtname" type="text" placeholder="Name" required="">
</p>

<p class="dt-sc-one-third column">
<input id="age" name="txtemail" type="text" placeholder="Email" required="">
</p>
<p class="dt-sc-one-third column">
<input id="course" name="txtcourse" type="text" placeholder="Course" required="">
</p>
<p>
<textarea id="admission" name="txtmessage" placeholder="Message" style="margin-top:15px;"></textarea>
</p>
<div id="ajax_admission_msg"> </div>
<p class="aligncenter">
<input name="submit" type="submit" id="submit" value="Submit Form">
</p>
</form>
</div>

</section>
 

</div>



 <?php 
        if(isset($_POST['submit']))
        {

        $txtname=$_POST['txtname'];
        $txtemail=$_POST['txtemail'];
        $txtcourse=$_POST['txtcourse'];
        $txtmessage=$_POST['txtmessage'];




        $ad_prdt="insert into freetrial set
        txtname='$txtname',
        txtemail='$txtemail',
        txtsubject='$txtsubject',
        txtmessage='$txtmessage'";

        $qst_ad_prdt=$db->query($ad_prdt);

        if($qst_ad_prdt)
        
        
        {
            //  include('contact-form-mail.php');
        echo "<script>window.alert('Submited Successfully');window.location='';</script>";

        }
        else
        {
            echo "<script>window.alert('Error');window.location='';</script>";
        }


        }
        ?>
<?php include_once "footer.php";?>

</div>

<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>


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

<script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>
</body>

</html>
