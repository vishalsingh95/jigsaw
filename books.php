<?php include_once 'admin/config/config.php';
    $logo = mysqli_query($db,"Select * from samplepaper");
    $logoQ = mysqli_fetch_assoc($logo);
?>
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
<h1>Sample Papers</h1>
<div class="breadcrumb">
<a href="index.php">Home</a>
<span class="fa fa-angle-double-right"></span>
<a href="#">Sample Papers</a>


</div>
</div>
</div>

<div class="dt-sc-hr"></div>


<section class="">

<div class="container">

          <?php
             $content1 = mysqli_query($db,"Select * from samplepaper");
               $contentone=$data = mysqli_num_rows($content1)>0;

             if($contentone) {
               while($row = mysqli_fetch_assoc($content1))
               {
                    
                 $assign_id=$row['id'];
          
                 $od_evn=$assign_id%2;
          
         ?>
         

<div class="dt-sc-one-half column <?php if($od_evn!=0){ echo "first"; }?>">
<!--<h2>Sample Papers</h2>-->

<div class="events-list">
<div class="event-thumb">
<a href="books-details.php?id=<?php echo $assign_id;?>" title="">
<img src="images/vector-pdf-icon-symbol-sign.jpg" class="" alt="" title="">
</a>
</div>

<div class="event-details">
<div class="event-meta">
<span class="fa fa-calendar"> </span> <?php echo  $row['time']; ?>
</div>
<h2><a href="books-details.php?id=<?php echo $assign_id;?>"><?php echo  $row['heading']; ?></a></h2>
<div class="event-excerpt">
<p><?php echo  $row['paragraph']; ?></p>
</div>
</div>
</div>

</div>



  <?php } ?>

  <?php } ?>














<div class="dt-sc-hr-very-small"></div>
 






</div>




</section>
 

</div>


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
