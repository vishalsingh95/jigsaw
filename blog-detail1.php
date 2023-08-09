  <?php
   require_once 'admin/config/config.php';
     $iid=$_GET['id'];
     $query=mysqli_query($db,"SELECT * FROM blog where id = '$iid'");
     $about=mysqli_fetch_assoc($query);
  ?>
<!DOCTYPE HTML>

<html lang="en-gb" class="no-js"> 


<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php 
      $server = 'localhost';
        $user = 'sabredge_jigsaw';
        $password = 'sabredge_jigsaw';
        $database = 'sabredge_jigsaw';
        
$db_cd=mysqli_connect("$server","$user","$password", "$database");



    


$qry = $db_cd->query("SELECT * FROM metainfo where id='38' ");
$row= $qry->fetch_assoc();
            
     
                    
?>
<meta name="keywords" content="<?php echo ($row['keyword']) ?> " />
<title><?php echo ($row['title']) ?> </title>
<meta name="description" content="<?php echo ($row['description']) ?>">
<link rel="shortcut icon" href="images/jlogo.png" type="image/x-icon"/>











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
<h1>Blog Section</h1>
<div class="breadcrumb">
<a href="index.php">Home</a>
<span class="fa fa-angle-double-right"></span>
<a href="blog.php">Blog</a>
<!-- <span class="fa fa-angle-double-right"></span>
<span class="current">Activities Improves Mind</span> -->
</div>
</div>
</div>


<div class="container">

<section id="primary" class="with-sidebar">
<article class="blog-entry">
<div class="blog-entry-inner">

<div class="entry-thumb">
<a href="#"><img src="admin/<?php echo $about ['image'];?>" alt="" title=""></a>
</div>
<div class="entry-details">
<div class="entry-title">
<h3><?php echo $about['heading'];?> </h3>
</div>

<div class="entry-body">
    <!-- <h2>The true sign of intelligence is not knowledge but imagination. Albert Einstein</h2> -->
<p> <?php echo $about['paragraph'];?></p>

</div>
</div>
</div>
</article>

<!-- <div class="commententries">
<h2 class="dt-sc-title"><span>Comments</span></h2>
<ul class="commentlist">
<li>
<article class="comment">
<header class="comment-author">
<img class="item-mask" src="images/author-hexa-bg.png" alt="" title="">
<img src="images/comment1.jpg" alt="" title="">
</header>
<section class="comment-details">
<div class="author-name">
<a href="#">Jeniffer Conolley</a>
</div>
<div class="commentmetadata">21 Nov 2012</div>
<div class="comment-body">
<div class="comment-content">
<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
</div>
</div>
<div class="reply">
<a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
</div>
</section>
</article>
<ul class="children">
<li>
<article class="comment">
<header class="comment-author">
<img class="item-mask" src="images/author-hexa-bg.png" alt="" title="">
<img src="images/comment2.jpg" alt="" title="">
</header>
<section class="comment-details">
<div class="author-name">
<a href="#">Lilly Dafoe</a>
</div>
<div class="commentmetadata">21 Nov 2012</div>
<div class="comment-body">
<div class="comment-content">
<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
</div>
</div>
<div class="reply">
<a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
</div>
</section>
</article>
</li>
</ul>
</li>
<li>
<article class="comment">
<header class="comment-author">
<img class="item-mask" src="images/author-hexa-bg.png" alt="" title="">
<img src="images/comment3.jpg" alt="" title="">
</header>
<section class="comment-details">
<div class="author-name">
<a href="#">Michael Richards</a>
</div>
<div class="commentmetadata">21 Nov 2012</div>
<div class="comment-body">
<div class="comment-content">
<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
</div>
</div>
<div class="reply">
<a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
</div>
</section>
</article>
</li>
</ul>
<div id="respond" class="comment-respond">
<h2>Enroll Your Words</h2>
<form method="post" action="#" id="commentform" class="comment-form">
<p class="column dt-sc-one-half first">
<input id="author" name="author" type="text" placeholder="Name" required="">
</p>
<p class="column dt-sc-one-half">
<input id="email" name="email" type="email" placeholder="Email ID" required="">
</p>
<p>
<textarea id="comment" name="comment" placeholder="Message"></textarea>
</p>
<p>
<input name="submit" type="submit" id="submit" value="Add Comment">
</p>
</form>
</div>
</div> -->

</section>




<section id="secondary">
<aside class="widget widget_categories">
<h3 class="widgettitle">Our Courses</h3>
<ul>
<li>
<a href="https://jigsawabacus.com/ganit-gyan.php">Ganit Gyan</a>
</li>
<li>
<a href="https://jigsawabacus.com/jigsawenglish.php">Jigsaw English</a>
</li>
<li>
<a href="https://jigsawabacus.com/calligraphy.php">Calligraphy</a>
</li>
<li>
<a href="https://jigsawabacus.com/membrain.php">Membrain</a>
</li>
<li>
<a href="https://jigsawabacus.com/jigsawschprog.php">Jigsaw English</a>
</li>
<li>
<a href="https://jigsawabacus.com/handwriting.php">Hand Writing</a>
</li>
</ul>
</aside>
<aside class="widget widget_text">
<h3 class="widgettitle">Teachers Achievements</h3>
<p>Our Teachers have an experience of more than 10+ years, making them fully capable of imparting high level skills. They come from a great social standing which helps them nurture student’s mindset & help them understand valuable lessons of life as well.</p>
</aside>
<aside class="widget widget_text">
<h3 class="widgettitle">Visual Guidance</h3>
<p>Our methods of teaching and level of quality instructors all add up to a well-rounded experience.</p>
<!--<iframe src="https://player.vimeo.com/video/21195297" width="420" height="200"></iframe>-->
</aside>

<aside class="widget widget_tag_cloud">
<h3 class="widgettitle">Hit on Tags</h3>
<div class="tagcloud">
<a href="#">Listen</a>
<a href="#">Observe</a>
 <a href="#">Admire</a>
<a href="#">Accomplish</a>
<a href="#">Perform</a>
<a href="#">Achieve</a>
<a href="#">Target</a>
</div>
</aside>
</section>





</div>

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

<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>
</body>

</html>