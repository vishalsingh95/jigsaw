<!DOCTYPE HTML>

<html lang="en-gb" class="no-js"> 


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
<h1>Centre Locator</h1>
<div class="breadcrumb">
<a href="index.php">Home</a>
<span class="fa fa-angle-double-right"></span>
<a href="centre-locator.php">Centre Locator</a>


</div>
</div>
</div>


<div class="container">

<section id="primary" class="content-full-width">
<div class="">




<table>
<thead>
<tr>
<th>City</th>
<th>State</th>
<th>Location</th>
<th>Centre Location</th>

</tr>
</thead>
<tbody>
      <?php
     $query=mysqli_query($db,"SELECT * FROM centrelocator where state = ".$_GET['id']);
    while($about=mysqli_fetch_assoc($query))
    {
        
        
        
        
        
    
  ?>
<tr>
<td><?php echo $about['city'];?></td>


                                 <?php
                                    $content1 = mysqli_query($db,"Select * from states where id=".$_GET['id']);
                                    $contentone=$data = mysqli_num_rows($content1)>0;

                                    $row = mysqli_fetch_assoc($content1);
                                      
                                 ?>
                                 
                                 
<td><?php echo $row['state'];?></td>
<td><?php echo $about['location'];?></td>
<td><?php echo $about['address'];?></td>

</tr>
<?php
}  ?>
</tbody>
</table>




<div class="dt-sc-hr-medium"></div>

</div>

</section>

</div>
<div class="dt-sc-hr"></div>

<?php include_once "footer.php";?>

</div>

<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

<!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
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

<!-- Mirrored from wedesignthemes.com/html/kidslife/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 06:52:18 GMT -->
</html>