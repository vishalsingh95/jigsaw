<?php include_once 'admin/config/config.php';
    $logo = mysqli_query($db,"Select * from blog");
    $logoQ = mysqli_fetch_assoc($logo);
?>
<!DOCTYPE HTML>

<html lang="en-gb" class="no-js"> 


<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
include('meta.php'); 
$page = 'blog';
?>

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
   <h1>Blog</h1>
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="fa fa-angle-double-right"></span>
      <span class="current">Blog</span>
    </div>
  </div>
</div>


<div class="container">

<section id="primary" class="content-full-width">



          <?php
             $content1 = mysqli_query($db,"Select * from blog");
               $contentone=$data = mysqli_num_rows($content1)>0;

         
             if($contentone) {
               while($row = mysqli_fetch_assoc($content1))
               {
                    
          $assign_id=$row['id'];
          
          $od_evn=$assign_id%2;
          
         ?>
               



<div class="column dt-sc-one-half <?php if($od_evn!=0){ echo "first"; }?>">
    <article class="blog-entry">
        <div class="blog-entry-inner">
        
        <div class="entry-thumb">
        <a href="blog-detail1.php?id=<?php echo $assign_id;?>"><img src="<?php echo "admin/".$row['image'];?>" alt="" title=""></a>
        </div>
            <div class="entry-details">
                <div class="entry-title">
                <h3><a href="blog-detail1.php?id=<?php echo $assign_id;?>"><?php echo  $row['heading']; ?> </a></h3>
                </div>
            
                <div class="entry-body">
                <p><?php echo  substr($row['paragraph'] ,0, 390); ?></p>
                </div>
               <a href="blog-detail1.php?id=<?php echo $assign_id;?>" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
            </div>
        </div>
    </article>
</div>

  <?php } ?>

  <?php } ?>







</section>

</div>

</div>

<?php include_once "footer.php";?>


</div>

<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery.tabs.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="js/shortcodes.js"></script>

</body>

</html>
