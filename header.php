<?php  include('admin/config/config.php'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NP76VR6');</script>
<!-- End Google Tag Manager -->

<!--whatsapp icon side bar-->

<div id='whtsappiconimg'>
    <a href="https://wa.me/+919350444666" target="_blank">
    <img src="images/icons/whatsapp.png" alt="image" title="abacus">
    </a>
</div>
<header>
    

    <!--For mobile-->
    <!--<div id='lllovvd' style="background: white;">-->
        
    <!--    <div>-->
              <!--<p style="margin:25px;">Head Office: Delhi,India | Available Worldwide | <a href="tel:+91 9350444666"> +91 9350444666 </p></h6>-->
    <!--        <a id="myBtndrp" class="myBtndrp">-->
    <!--           <img src="images/icons/Enquiry.png" alt="image" title="abacus" target="_blank" style="height:51px; margin-left:5px; border-radius:20px; width:39%;">-->
    <!--        </a> -->
    
    <!--        <a id="myBtn" class="myBtn">-->
    <!--         <img src="images/icons/demo_class.png" alt="image" title="abacus" target="_blank" style="height:51px;margin-left:20px;border-radius:20px;float: right; width:39%;">-->
    <!--        </a>-->
    
            
            
    <!--    </div> -->
        
        
    <!--</div>-->
    
    <!--end for mobile -->



<div class="logo " id='lgog'>
    
    
      <a href="https://jigsawabacus.com/">
      <img src="images/gal/JS Logo.png" class="llg" alt="jigsaw abacus logo" title="jigsaw abacus logo" style="margin-left:13px;">   
      </a>  
   
      
</div>


<div class="container" >
       <!--<a href="https://exam.jigsawabacus.com/public/student_login" class="dt-sc-button small burnt-orange" target="_blank" style=" margin-left:20px; border-radius:20px;">Franchise Enquiry <span class="fa fa-chevron-circle-right" > </span></a>-->

<div class="logo">
    <!--<a href="https://jigsawabacus.com/" title="Kids Life"><img src="images/Jigsaw.png" alt="jigsaw image " title="jigsaw png image" height="50"></a>-->
 
    <!--<a href="https://exam.jigsawabacus.com/public/student-result-jigsaw" class="dt-sc-button small burnt-orange" target="_blank" style=" margin-left:20px; border-radius:20px;">Student Result <span class="fa fa-chevron-circle-right" > </span></a>-->
 
    <!--<a href="https://wa.me/+919350444666" target="_blank">-->
    <!--<img src="images/icons/whatsapp.png" alt="image" title="abacus"  style="height:65px; margin-left:20px; border-radius:20px;">-->
    <!--</a>-->

    <b><p style="margin:25px; margin-left: 10px;">Head Office: Delhi,India   |   Available Worldwide |   <a href="tel:+91 9350444666"> +91 9350444666 </a></p></b>
  
</div>
    <!--<a id="myBtndrp" class="myBtndrp" style="cursor: pointer;">-->
    <!--<img src="images/icons/enquiry.webp" alt="image" title="abacus"  style="height:65px; margin-left:20px; border-radius:20px;">-->
    <!--</a>   -->


<a href="books.php" class="dt-sc-button small burnt-orange" target="_blank" style="  border-radius:20px; margin-left:20px; float:right;">Sample Papers</a>

<div class="contact-details">
    
        <form action="">
            <label for="cars">Centre Locator:</label>
                                <select class="form-control" id="dynamic_select" name="sttet" style="color:#4c7297">
                                    <option value="">-Select-</option>
                                          <?php
                                             $query = mysqli_query($db,"SELECT * FROM states");
                                              while($rownumb=mysqli_fetch_assoc($query)){
                                             $stname = $rownumb['state']
                                          ?>
                                                       
                                     <option class="form-control"  value="<?php echo $rownumb['id'];  ?>  "> <?php echo $stname ?> </option> <?php  } ?>
                                </select>
                                
        </form>

</div>

</div>

<div id="menu-container">
      
<div class="container">
    

<nav id="main-menu">
    
    
<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>

<ul id="menu-main-menu" class="menu">
    
<li class="   <?php if($page == 'home'){ echo'current_page_item';} ?>   menu-item-simple-parent menu-item-depth-0 red"> <a href="https://jigsawabacus.com/"> Home </a></li>
    <li class=" <?php if($page == 'about-jigsaw-courses'){ echo'current_page_item';} ?>   mustard menu-item-simple-parent menu-item-depth-0 violet"> <a href="about-jigsaw-courses.php"> About us </a>
        <!--<ul class="sub-menu">-->
        <!--<li><a href="company-profile.php">Company Profile</a></li>-->
        <!--<li><a href="mission-vision.php">Mission & Vision</a></li>-->
        <!--<li><a href="chairperson-message.php">Message From Chairperson</a></li>-->
        <!--<li><a href="our-teachers.php">Team</a></li>-->
        <!--</ul>-->
    </li>


    <li class="  <?php if($page == 'abacus'){ echo'current_page_item';} ?> menu-item-simple-parent menu-item-depth-0 green"> <a href="https://jigsawabacus.com/abacus.php"> Abacus </a>
        <!--<ul class="sub-menu">-->
        <!--<li><a href="book-free-trial-today.php">Book Free Trial Today : Form</a></li>-->
        <!--<li><a href="facts-of-brain.php">Facts Of Brain</a></li>-->
        <!--<li><a href="benefits-of-abacus.php">Benefits Of Abacus</a></li>-->
        <!--<li><a href="why-age-group-4-to-14-yrs.php">Why age group 4 to 14 years</a></li>-->
        <!--<li><a href="abacus-courses.php">Abacus Courses</a></li>-->
        <!--<li><a href="tools-concepts.php">Tools & Concepts</a></li>-->
        <!--<li><a href="benefit-to-students.php">Benefit to Students</a></li>-->
        
        <!--</ul>-->
        <!--<a class="dt-menu-expand">+</a>-->
    </li>


    <li class="<?php if($page == 'other-courses'){ echo'current_page_item';} ?> mustard menu-item-simple-parent menu-item-depth-0 burnt-orange"><a href="other-courses.php">Other Courses </a></li>
    
    
    <li class="<?php if($page == 'franchise'){ echo'current_page_item';} ?> mustard menu-item-simple-parent menu-item-depth-0 blue"> <a href="franchise.php"> Become Our Franchise </a></li>
    

    <!--<li class="mustard menu-item-simple-parent menu-item-depth-0 yellow"> <a href="gallery.php"> Gallery </a></li>-->
    
    
    <li class="<?php if($page == 'school-tieup'){ echo'current_page_item';} ?> mustard menu-item-simple-parent menu-item-depth-0 yellow"> <a href="school-tieup.php"> School Tie-Up </a></li>
    
    
    <li class="<?php if($page == 'blog'){ echo'current_page_item';} ?> menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog.php" title="">Blogs</a></li>
    
    
    <!--<li class="mustard menu-item-simple-parent menu-item-depth-0 purple"> <a href="whyjigsaw.php"> Why Jigsaw </a></li>-->
    
    
    <li class="<?php if($page == 'contact'){ echo'current_page_item';} ?>  pink"><a href="contact.php" title="">Contact us</a></li>
    
    <li class="<?php if($page == 'e-abacus'){ echo'current_page_item';} ?> menu-item-simple-parent menu-item-depth-0 steelblue"><a href="e-abacus.php" title="">E-Abacus</a></li>
    
    
    <!--<li class="pink"><a href="https://exam.jigsawabacus.com/public/student_login" target="_blank" title="">Student Login</a></li>-->
    <!--<li class="pink"><a href="https://exam.jigsawabacus.com/public/student-result-jigsaw" target="_blank" title="">Student Result</a></li>-->
    
     <!--<a href="https://exam.jigsawabacus.com/public/student_login" class="dt-sc-button small burnt-orange" target="_blank" style="  border-radius:20px; margin-left:20px;">Student Login</a>-->
    
    
    <!--<a id="" class="" style="cursor: pointer;">-->
    <!--         <img src="images/icons/login (2).png" alt="image" title="abacus" style="width:135px; margin-top: 14px;">-->
    <!--</a>-->

</ul>


</nav>


</div>

        <ul class="dt-sc-social-icons">
            <a href="https://exam.jigsawabacus.com/public/student-result-jigsaw" class="" style="cursor: pointer;" target="_blank">
                    <img src="images/icons/login (2).png" alt="image" title="abacus" style=" width:74%; margin-right: -14px; margin-top:8px;">
            </a>
        </ul>
</div>


</header>


<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = "https://jigsawabacus.com/centre-locator.php?id="+url; // redirect
          }
          return false;
      });
    });
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PXW0SDM4QW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PXW0SDM4QW');
</script>

<style>
@media screen and (min-width: 480px) {
  .llg {
  width:134px;
  height:135px; 
  float:left;
  position:absolute;
  z-index:100;
  margin:2px;
  }
}

   @media (max-width: 600px) {
            #lgog,#header_mbl {
             display:none;
            }
        }
     
        
        
        /* Media Query for Mobile Devices */
        @media (max-width: 480px) {
            .llg {
               width:134px;
               height:135px;
               position:inherit;
                
            }
        }
          
        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 481px) and (max-width: 767px) {
            .llg {
                background-color: yellow;
                width:134px;
                height:135px;
                position:inherit;
            }
        }
          
        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1149px){
            .llg {
                background-color: blue;
                width:116px;
                height:135px;
                float:left;
                position:unset;
            }
        }
          
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1150px) and (max-width: 1280px){
            .llg {
               
                width: 68px;
                height: 88px;
                float:left;
                position:unset;
            }
        }
          
        /* Media Query for Large screens */
        @media (min-width: 1281px) {
              .llg {
              width:90px;
              height:135px;
              float:left;
              position:absolute;
              z-index:100;
              margin:2px;
              }
        }
        
        
        /* Media Query for Laptops and Desktops */
        @media (min-width: 600px) {
            #lllovvd {
                
                display:none;
                
            }
        }
        
        
</style>
