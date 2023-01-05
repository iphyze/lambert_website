<?php

include_once('includes/connection.php');

if(isset($_POST['search_media'])){
$search = mysqli_real_escape_string($db, $_POST['search']);
}


if($search == ""){
    header('location:media_center.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec</title>
</head>
    
<body>
    
    <!-- This is the menu header -->
    <?php include_once('includes/menu_header.php'); ?>
    
    

<div class="all-projects-header">
    <div class="all-projects-overlay">
        <div class="all-projects-header-text wow fadeInLeft">Media Center</div>
        <div class="all-projects-header-briefs wow fadeInUp">Search Result - <?php echo $search; ?></div>
    </div>
</div>    
        
<div class="all-projects-container">
    
    
    
    <div class="all-projects-form-container">
        
        <div class="allpform-flexbox wow fadeInRight">
            
            <div class="allpform-box">
                <form action="search_media.php" method="post">
                    <div class="allpform-group">
                        <input type="search" name="search" placeholder="Search" required>
                        <button type="submit" name="search_media" class="fas fa-search"></button>
                    </div>
                </form>
            </div>
            
            <!--
            <div class="allpform-box">
                <form action="search.php" method="post">
                    <div class="allpform-group">
                        <input type="text" name="country" placeholder="Search by Country" required>
                        <button type="submit" name="search_country" class="fas fa-search"></button>
                    </div>
                </form>
            </div>
            -->
        </div>
        
    </div>
    
    <div class="all-project-flexbox">
        
        
        <?php
        
        $select = mysqli_query($db, "SELECT * FROM media_table WHERE media_image LIKE '%$search%' || media_title LIKE '%$search%' || created_at LIKE '%$search%' ORDER BY created_at DESC");
        $selected = mysqli_fetch_assoc($select);
        $number = mysqli_num_rows($select);
        
        
        if($number > 0){
            foreach($select as $selected){
                $id = $selected['id'];
                $media_image = $selected['media_image'];
                $media_title = $selected['media_title'];
                $media_doc = $selected['media_doc'];
                $date = date('jS M, Y', strtotime($selected['created_at']));
                $time = date('h:iA', strtotime($selected['created_at']));
                
        ?>
        
        <div class="all-project-fb-col wow fadeInUp">
            <div class="apfb-col-img-box">
                <img src="assets/css/media/images/<?php echo $media_image; ?>">    
            </div>
            
            <div class="apfb-col-textbox">
                <div class="apfb-col-title wow fadeInUp"><?php echo $media_title; ?></div>
                <div class="apfb-col-location wow fadeInUp" data-wow-delay=".5s"><span class="apfb-col-location-span"><?php echo $date; ?></span> - <?php echo $time; ?></div>
                <a href="assets/css/media/docs/<?php echo $media_doc; ?>" target="_blank" class="apfb-col-link wow fadeInUp" data-wow-delay="1s"><i class="fas fa-download theme-color"></i> &nbsp; Download</a>
            </div>
            
        </div>
        
        
        <?php
            }
        }else{
        ?>    
          
        
        <div class="apfb-col-textbox wow fadeInUp">No results found!</div>
        
        
        <?php
        }
        
        ?>

    </div>
    
    
</div>    
    
    
<div class="parallax-container">
    <div class="parallax-overlay">
        <div class="parallax-text wow fadeInDown">Our Partners</div>
        <a class="parallax-link wow fadeInUp">See our various partners below</a>
    </div>
</div>    


<!-- Clients Container -->
<div class="client-container">
    <div class="swiper myClients">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/css/images/clients/abb.png" alt="abb"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/siemens.png" alt="siemens"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/alcad.png" alt="alcad"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/caterpillar.png" alt="caterpillar"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/daikin.png" alt="daikin"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/van.png" alt="van"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/ge.png" alt="ge"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/schneider.png" alt="schneider"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/grun.png" alt="grun"></div>
        <div class="swiper-slide"><img src="assets/css/images/clients/legrand.png" alt="legrand"></div>
      </div>

    </div>
</div>    
    
<div class="footer-container">
    <?php 
    include_once('includes/footer.php');
    ?>
</div>

    
<div class="footer-notes">
    &copy; Copyright 2022 | Lambert Electromec Ltd
</div>
<a data-scroll href="#menu-container" id="scroll-to-top"><i class="fas fa-caret-up"></i></a>
    
    
<div class="preloader-container">
   <div class="loader"><img src="assets/css/images/fa.png"/></div>
</div>    
        
   	
</body>
</html>

<script src="assets/js/libraries/slick.js"></script>
<script src="assets/js/libraries/jquery.magnific-popup.js"></script>
<script src="assets/js/libraries/jquery.magnific-popup.min.js"></script>
<script src="assets/js/libraries/smooth-scroll.min.js"></script>
<script src="assets/js/libraries/swiper-bundle.min.js"></script>
<!--
<script src="assets/js/libraries/swiper.js"></script>
-->
<script src="assets/js/typed.js"></script>
<script type="text/javascript" src="assets/js/style.js"></script>
<script src="assets/js/libraries/wow.min.js"></script>
<script src="assets/js/custom_wow.js"></script>
<script src="assets/js/custom_typed.js"></script>