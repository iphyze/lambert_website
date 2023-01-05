<?php

include_once('includes/connection.php');

if(isset($_GET['id']) && $_GET['id'] != ""){
$id = $_GET['id'];
    
$select = mysqli_query($db, "SELECT * FROM project_table WHERE id = '$id'");
$selected = mysqli_fetch_assoc($select);
$num = mysqli_num_rows($select);
    

if($num > 0){    
$project_title = $selected['project_title'];
$project_description = $selected['project_description'];
$project_city = $selected['project_city'];
$work_done = $selected['work_done'];
$project_year = $selected['project_year'];
$project_image = $selected['project_image'];
$project_country = $selected['project_country'];
$project_division = $selected['project_division'];
}
}else{

header('location:projects.php');
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec - Projects Single</title>
</head>
    
<body>
    
    <?php
    
        $project_active_link = "project";
    
    ?>
    
    <!-- This is the menu header -->
    <?php include_once('includes/menu_header.php'); ?>
    
    

<div class="all-projects-header">
    <div class="all-projects-overlay">
        <div class="all-projects-header-text all-projects-small-ht wow fadeInLeft"><?php echo $project_title; ?></div>
        <div class="all-projects-header-briefs wow fadeInUp"><?php echo $project_country . " - " . $project_city ; ?></div>
        <a href="projects.php" class="all-projects-header-briefs  theme-color wow fadeInUp">Back</a>
    </div>
</div>    
    

<div class="single-project-header">
    
    <div class="single-project-flexbox wow fadeInUp">
        
        <div class="single-project-fb-col">
            
            <div class="single-swiper-container">
                
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                          <div class="single-project-imgbox">
                            <img src="assets/css/img/projects/<?php echo $project_image; ?>" alt="project_image">
                          </div>
                        </div>
                        
                        
                        <?php
                        
                            $pick = mysqli_query($db, "SELECT * FROM project_images WHERE project_id = '$id'");
                            $picked = mysqli_fetch_assoc($pick);
                            $picked_num = mysqli_num_rows($pick);
                            
                        
                            if($picked_num > 0){
                                foreach($pick as $picked){
                                $featured_image = $picked['project_image'];
                        ?>
                        
                            <div class="swiper-slide">
                              <div class="single-project-imgbox">
                                <img src="assets/css/img/projects-others/<?php echo $featured_image; ?>" alt="project_image">
                              </div>
                            </div>
                        
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                
                    <div class="swiper-pagination"></div>
            </div>
        </div>
        
        
        <div class="single-project-fb-col spfc-desc">
            
            <div class="spfc-project-name wow fadeInDown" data-wow-delay="0.2s"><?php echo $project_title; ?></div>
            <div class="spfc-project-briefs wow fadeInUp"><?php echo $project_description; ?></div>
            <div class="spfc-project-details wow fadeInUp" data-wow-delay="0.5s">
                <span class="spfcpd-bold">LOCATION</span>
                <span class="spfcpd-normal"><?php echo $project_country . " - " . $project_city ; ?></span>
            </div>
            
            
            <?php
            if($work_done != ""){
            ?>    
            
            <div class="spfc-project-details wow fadeInUp" data-wow-delay="0.7s">
                <span class="spfcpd-bold">WORK DONE</span>
                <span class="spfcpd-normal"><?php echo $work_done; ?></span>
            </div>
            
            <?php
            }
            ?>
            
            
            <?php
            if($project_year != ""){
            ?>    
            
            <div class="spfc-project-details wow fadeInUp" data-wow-delay="0.9s">
                <span class="spfcpd-bold">PROJECT YEAR</span>
                <span class="spfcpd-normal"><?php echo $project_year; ?></span>
            </div>
            
            <?php
            }
            ?>
            
        </div>
        
    </div>
    
</div>    

<!--    
<div class="parallax-container">
    <div class="parallax-overlay">
        <div class="parallax-text wow fadeInDown">Our Partners</div>
        <a class="parallax-link wow fadeInUp">See our various partners below</a>
    </div>
</div>    
-->

<!-- Clients Container -->
<!--
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
-->
    
<div class="footer-container">
    <?php 
    include_once('includes/footer.php');
    ?>
</div>

    
<!--    
<div class="footer-notes">
    &copy; Copyright <?php echo date('Y'); ?> | Lambert Electromec Ltd
</div>
-->
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