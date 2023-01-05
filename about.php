<?php 
include_once('includes/connection.php');
include_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec - about</title>
</head>
    
<body>
    
<?php
    
    $home_active_link = "about";
    
?>

<!-- This is the menu header -->
<?php 
include_once('includes/menu_header.php'); 

$selectAboutTable = mysqli_query($db, "SELECT * FROM about_page_table");    
$selectedAboutTable = mysqli_fetch_assoc($selectAboutTable);
$selectAboutTableNum = mysqli_num_rows($selectAboutTable);
    
if($selectAboutTableNum > 0){
$page_title = $selectedAboutTable['page_title'];
$section_bullet = $selectedAboutTable['section_bullet'];
$section_heading = $selectedAboutTable['section_heading'];
$about_col_heading = $selectedAboutTable['about_col_heading'];
$about_col_content = $selectedAboutTable['about_col_content'];
$about_col_subtext = $selectedAboutTable['about_col_subtext'];
$about_col_two_heading = $selectedAboutTable['about_col_two_heading'];
$abt_icon_one = $selectedAboutTable['abt_icon_one'];
$abt_heading_one = $selectedAboutTable['abt_heading_one'];
$abt_text_one = $selectedAboutTable['abt_text_one'];
$abt_icon_two = $selectedAboutTable['abt_icon_two'];
$abt_heading_two = $selectedAboutTable['abt_heading_two'];
$abt_text_two = $selectedAboutTable['abt_text_two'];
$abt_icon_three = $selectedAboutTable['abt_icon_three'];
$abt_heading_three = $selectedAboutTable['abt_heading_three'];
$abt_text_three = $selectedAboutTable['abt_text_three'];
$abt_icon_four = $selectedAboutTable['abt_icon_four'];
$abt_heading_four = $selectedAboutTable['abt_heading_four'];
$abt_text_four = $selectedAboutTable['abt_text_four'];
$abt_sec_two_text = $selectedAboutTable['abt_sec_two_text'];
$abt_sec_two_subtext = $selectedAboutTable['abt_sec_two_subtext'];
$history_header = $selectedAboutTable['history_header'];
$history_text = $selectedAboutTable['history_text'];
$vision_header = $selectedAboutTable['vision_header'];
$vision_text = $selectedAboutTable['vision_text'];
$vision_subtext = $selectedAboutTable['vision_subtext'];
$mission_header = $selectedAboutTable['mission_header'];
$mission_text = $selectedAboutTable['mission_text'];
$mission_subtext = $selectedAboutTable['mission_subtext'];
}
    
?>
    
    

<div class="all-projects-header about-overlay-image">
    <div class="all-projects-overlay">
        <div class="all-projects-header-text wow fadeInLeft"><?php echo $page_title; ?></div>
        <div class="all-projects-header-briefs wow fadeInUp back-link">Home &rarr; <a href="index.php">Back</a></div>
    </div>
</div>
    

    
<div class="about-box-overlay">
<div class="cc-wrapper-flexbox">
<div class="cc-col">
    <div class="cc-header-icon wow fadeInDown"></div>
    <div class="cc-header-title wow fadeInDown"><?php echo $section_bullet; ?></div>
    <div class="cc-header-text wow fadeInLeft"><?php echo $section_heading; ?></div>
</div>
</div>    
    
<div class="about-box-flexbox">

<div class="about-box-fbcol">
   
    <div class="strf-col-bold def-color wow fadeInLeft">
        <?php echo $about_col_heading; ?>
    </div>
    
    <div class="strf-col-bold strf-col-medium ab-pc-align-left wow fadeInLeft">
        <?php echo $about_col_content; ?>
    </div>
    
    <div class="strf-col-text wow fadeInLeft">
        <?php echo $about_col_subtext; ?>
    </div>
    
</div>
    
<div class="about-box-fbcol abf-flexbox">
    
    <div class="strf-col-text strf-col-medium txt-left wow fadeInRight">
        <?php echo $about_col_two_heading; ?>
    </div>
    
    <div class="about-box-fbcol-col abfb-col-1">
        
        
        <img src="assets/css/images/division.png" alt="divisions-image" class="wow fadeInRight">
        
        
        <!--
        
        <div class="abfb-col-contentbox wow fadeInUp" data-wow-delay=".2s">
            <div class="<?php echo $abt_icon_one; ?> abfb-col-icon"></div>
            <div class="abfb-col-th"><?php echo $abt_heading_one; ?></div>
            <div class="abfb-col-td"><?php echo $abt_text_one; ?></div>
        </div>
        
        <div class="abfb-col-contentbox wow fadeInUp" data-wow-delay=".5s">
            <div class="<?php echo $abt_icon_two; ?> abfb-col-icon"></div>
            <div class="abfb-col-th"><?php echo $abt_heading_two; ?></div>
            <div class="abfb-col-td"><?php echo $abt_text_two; ?></div>
        </div>
        
    </div>
    <div class="about-box-fbcol-col abfb-col-2">
        
        <div class="abfb-col-contentbox wow fadeInUp" data-wow-delay=".8s">
           <div class="<?php echo $abt_icon_three; ?> abfb-col-icon"></div> 
           <div class="abfb-col-th"><?php echo $abt_heading_three; ?></div> 
           <div class="abfb-col-td"><?php echo $abt_text_three; ?></div> 
        </div>
        
        <div class="abfb-col-contentbox wow fadeInUp" data-wow-delay="1.1s">
           <div class="<?php echo $abt_icon_four; ?> abfb-col-icon"></div> 
           <div class="abfb-col-th"><?php echo $abt_heading_four; ?></div> 
           <div class="abfb-col-td"><?php echo $abt_text_four; ?></div> 
        </div>
        
    </div>

    -->
    
</div>

</div>

<!--
<div class="about-box-flexbox">

    <div class="about-box-fbcol">
       
        <div class="strf-col-bold def-color wow fadeInLeft">
            Profile
        </div>
        
        <div class="strf-col-bold strf-col-medium wow fadeInUp">
            Lambert Electromec Ltd is a leading Engineering, Procurement and Construction (EPC) company with an international presence and expertise in Mechanical, Electrical and Plumbing (MEP) particularly across West-Africa.
        </div>
        
        <div class="strf-col-text wow fadeInUp">
            An EPC contractor that specializes in executing complex infrastructural projects that require the highest level of technical knowhow in Oil & Gas and Modular Refineries, Power Generation and Distribution, Data Centre & Telecom Infrastructures and in Buildings and Factories.
        </div>
        
    </div>
        
    <div class="about-box-fbcol abf-flexbox abf-flexbox-img">
        <div class="strf-col-text wow fadeInRight">
        WE ARE FOCUSED IN THE CONSTRUCTION OF LARGE INFRASTRUCTURES, INCLUDING:
        </div>

        <img src="assets/css/images/Engineer.png" alt="engineering-image" class="wow fadeInUp">
        
    </div>
    
</div>
-->
    
</div>
</div>


<div class="about-profile-container">

<div class="about-profile-content">
<div class="about-pc-flexbox">
<div class="about-pc-fbcol">
    <img src="assets/css/images/profile.png" alt="about-image" class="wow zoomIn">
</div>
    
<div class="about-pc-fbcol">
    <div class="about-pc-fbcol-content">
        <div class="theme-color strf-col-medium ab-pc-align-left wow fadeInUp">
            <?php echo $abt_sec_two_text; ?>
        </div>
        
        <div class="strf-col-text wow fadeInUp">
            <?php echo $abt_sec_two_subtext; ?>
        </div>
    </div>
</div>
    
</div>
</div>    
    
</div>

    
<div class="about-history-container" id="about-history-container">
<div class="about-history-flexbox">
    <i class="fas fa-cogs wow fadeInDown bg-faded-icons"></i>
    <i class="fas fa-helmet-safety wow fadeInDown bg-faded-icons bg-fi-2"></i>
    <i class="far fa-lightbulb wow fadeInDown bg-faded-icons bg-fi-3"></i>
    <i class="fas fa-pen-ruler wow fadeInDown bg-faded-icons bg-fi-4"></i>
    <i class="fas fa-screwdriver-wrench wow fadeInDown bg-faded-icons bg-fi-5"></i>
    <i class="fas fa-toolbox wow fadeInDown bg-faded-icons bg-fi-6"></i>
    
    <div class="about-history-fbcol ahfcol-1">
        <div class="about-history-fbcol-heading wow slideInDown">
            <?php echo $history_header; ?>
            <hr class="history-line">
        </div>
        <div class="about-history-fbcol-text wow slideInUp">
            <?php echo $history_text; ?> 
        </div>
    </div>
    
    <div class="about-history-fbcol ahfcol-2" id="mission">
        <i class="fas fa-cogs wow fadeInDown bg-ash-icons"></i>
        <i class="fas fa-helmet-safety wow fadeInDown bg-ash-icons bg-ai-2"></i>
        <i class="far fa-lightbulb wow fadeInDown bg-ash-icons bg-ai-3"></i>
        <i class="fas fa-cog wow fadeInDown bg-ash-icons bg-ai-4"></i>
        <i class="fas fa-screwdriver-wrench wow fadeInDown bg-ash-icons bg-ai-5"></i>
        <i class="fas fa-toolbox wow fadeInDown bg-ash-icons bg-ai-6"></i>
        
        
        <div class="strfc-flexbox wow fadeInUp" data-wow-delay='.2s'>
                    
                    <div class="fas fa-eye strfc-icon"></div>
                    
                    <div class="strfc-text-wrapper">
                        <div class="strfc-text-header"><?php echo $vision_header; ?></div>
                        <div class="strfc-text">
                            <span class="theme-color">
                            <?php echo $vision_text; ?>
                            </span><br>
                            <?php echo $vision_subtext; ?>
                        </div>
                    </div>
                    
                </div>
                
                <div class="strfc-flexbox wow fadeInUp" data-wow-delay='.5s'>
                    
                    <div class="fas fa-bullseye strfc-icon"></div>
                    
                    <div class="strfc-text-wrapper">
                        <div class="strfc-text-header"><?php echo $mission_header; ?></div>
                        <div class="strfc-text">
                        <span class="theme-color">
                          <?php echo $mission_text; ?>
                        </span><br>
                        
                            <?php echo $mission_subtext; ?>
                        </div>
                    </div>
                    
                </div>
        
    </div>
</div>
</div>

    
    
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

       <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="client-pagination"></div>
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