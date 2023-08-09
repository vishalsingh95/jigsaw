<?php
include('admin/config/config.php');
?>
<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->

<!-- Mirrored from wedesignthemes.com/html/kidslife/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 06:51:34 GMT -->
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
<!--[if IE 7]>
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
<h1>Abacus School Form</h1>
<div class="breadcrumb">
<a href="index.php">Home</a>
<span class="fa fa-angle-double-right"></span>
<a href="#">Abacus School Form</a>


</div>
</div>
</div>



<section class="fullwidth-background turquoise-plain-bg">

<div class="container">
<h2 class="dt-sc-hr-white-title">Abacus School Form</h2>
<h5 style="color:#ffff">Please Fill The Details Below We Will Get back To You Shortly.</h5>
<form method="post" action="" id="admissionform"  class="admission-form">
<p class="dt-sc-one-third column first">
<input  name="sclName" type="text" placeholder="Name" required="" style="margin-top:15px;">
</p>
<p class="dt-sc-one-third column">
<input  name="sclEmail" type="text" placeholder="Email" required="" style="margin-top:15px;">
</p>
<p class="dt-sc-one-third column">
<input  name="sclContact" type="text" placeholder="Phone No." required="" style="margin-top:15px;">
</p>
<p>
<textarea id="admission" name="sclAddress" placeholder="Enter Your Address" style="margin-top:15px;"></textarea>
</p>
<p class="dt-sc-one-third column first">
<input id="age" name="sclSchoolname" type="text" placeholder="School Name." required="" style="margin-top:15px;">
</p>
<div id="ajax_admission_msg"> </div>
<p class="aligncenter">
<button class="dt-sc-button medium burnt-orange" name="sclsubmit" type="submit" id="submit" value="Submit Form">Submit</button>
</p>
</form>

 <?php 
        if(isset($_POST['sclsubmit']))
        {

        $sclName=$_POST['sclName'];
        $sclEmail=$_POST['sclEmail'];
        $sclContact=$_POST['sclContact'];
        $sclAddress=$_POST['sclAddress'];
        $sclSchoolname=$_POST['sclSchoolname'];
    
        




        $ad_prdt="insert into abacusschool set
        sclName='$sclName',
        sclEmail='$sclEmail',
        sclContact='$sclContact',
        sclAddress='$sclAddress',
        sclSchoolname='$sclSchoolname'";

        $qst_ad_prdt=$db->query($ad_prdt);

        if($qst_ad_prdt)
        {
             include('abacus-school-form-mail.php');
        echo "<script>window.alert('Submited Successfully');window.location='';</script>";

        }
        else
        {
            echo "<script>window.alert('Error');window.location='';</script>";
        }


        }
        ?>
</div>

</section>
 

</div>

<?php include_once "footer.php";?>

</div>

<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery.js"></script>
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

<!-- Mirrored from wedesignthemes.com/html/kidslife/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 06:52:18 GMT -->
</html>
