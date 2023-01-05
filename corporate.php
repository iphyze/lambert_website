<?php 
include_once('includes/connection.php');
include_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec - Corporate</title>
</head>
    
<body>
    
<?php
    
$home_active_link = "corporate";
    
//This is the menu header
    
include_once('includes/menu_header.php'); 
?>

    

<?php
    
    
$selectAboutTable = mysqli_query($db, "SELECT * FROM corporate_table");    
$selectedAboutTable = mysqli_fetch_assoc($selectAboutTable);
$selectAboutTableNum = mysqli_num_rows($selectAboutTable);

if($selectAboutTableNum > 0){
$page_title = $selectedAboutTable['page_title'];
$section_heading_one = $selectedAboutTable['section_heading_one'];
$section_heading_two = $selectedAboutTable['section_heading_two'];
$section_content = $selectedAboutTable['section_content'];
$section_sub_content = $selectedAboutTable['section_sub_content'];
$section_list_heading = $selectedAboutTable['section_list_heading'];
$list_one_icon = $selectedAboutTable['list_one_icon'];
$list_one_text = $selectedAboutTable['list_one_text'];
$list_two_icon = $selectedAboutTable['list_two_icon'];
$list_two_text = $selectedAboutTable['list_two_text'];
$list_three_icon = $selectedAboutTable['list_three_icon'];
$list_three_text = $selectedAboutTable['list_three_text'];
$list_four_icon = $selectedAboutTable['list_four_icon'];
$list_four_text = $selectedAboutTable['list_four_text'];
$list_five_icon = $selectedAboutTable['list_five_icon'];
$list_five_text = $selectedAboutTable['list_five_text'];
$hse_heading = $selectedAboutTable['hse_heading'];
$hse_content = $selectedAboutTable['hse_content'];
$hse_icon = $selectedAboutTable['hse_icon'];
$hse_sub_content = $selectedAboutTable['hse_sub_content'];
$section_bullet = $selectedAboutTable['section_bullet'];
$iso_heading = $selectedAboutTable['iso_heading'];
$iso_text = $selectedAboutTable['iso_text'];
$iso_image = $selectedAboutTable['iso_image'];
$iso_subtext = $selectedAboutTable['iso_subtext'];
$iso_subtext_two = $selectedAboutTable['iso_subtext_two'];
$section_bullet_two = $selectedAboutTable['section_bullet_two'];
$csr_heading = $selectedAboutTable['csr_heading'];
$csr_image_one = $selectedAboutTable['csr_image_one'];
$csr_text_heading_one = $selectedAboutTable['csr_text_heading_one'];
$csr_date_one = $selectedAboutTable['csr_date_one'];
$csr_text_one = $selectedAboutTable['csr_text_one'];
$csr_image_two = $selectedAboutTable['csr_image_two'];
$csr_text_heading_two = $selectedAboutTable['csr_text_heading_two'];
$csr_date_two = $selectedAboutTable['csr_date_two'];
$csr_text_two = $selectedAboutTable['csr_text_two'];

//$updated_at = date('jS F, Y - H:i:sA', strtotime($selectedAboutTable['updated_at']));
//$updated_by = $_SESSION['email'];
}


?>    
    
    

<div class="all-projects-header about-overlay-image">
    <div class="all-projects-overlay">
        <div class="all-projects-header-text wow fadeInLeft"><?php echo $page_title; ?></div>
        <div class="all-projects-header-briefs wow fadeInUp back-link">Home &rarr; <a href="index.php">Back</a></div>
    </div>
</div>
    

<div class="corporate-container">
    <div class="corporate-container-solutions wow fadeInLeft" data-wow-delay='.2s'><?php echo $section_heading_one; ?></div>
    <div class="corporate-container-providers wow fadeInLeft" data-wow-delay='.5s'><?php echo $section_heading_two; ?></div>
    <div class="corporate-container-text wow fadeInUp">
        <?php echo $section_content; ?>
    </div>
    
    <div class="corporate-container-txt wow fadeInUp">
        <?php echo $section_sub_content; ?>
    </div>
    
    <div class="corporate-container-txt wow fadeInUp">
        <?php echo $section_list_heading; ?>
    </div>
    
    
    
    <div class="corporate-container-flexbox" id="hse-container-flexcol">
        
        <div class="corporate-container-fbcol wow slideInUp">
            <div class="corporate-container-box">
                <i class="<?php echo $list_one_icon; ?>"></i>
                <?php echo $list_one_text; ?>    
            </div>    
        </div>
        
        <div class="corporate-container-fbcol wow slideInUp">
            <div class="corporate-container-box">
                <i class="<?php echo $list_two_icon; ?>"></i>
                <?php echo $list_two_text; ?>    
            </div>    
        </div>
        
        <div class="corporate-container-fbcol wow slideInUp">
            <div class="corporate-container-box">
                <i class="<?php echo $list_three_icon; ?>"></i>
                <?php echo $list_three_text; ?>    
            </div>    
        </div>
        
        <div class="corporate-container-fbcol wow slideInUp">
            <div class="corporate-container-box">
                <i class="<?php echo $list_four_icon; ?>"></i>
                <?php echo $list_four_text; ?>    
            </div>    
        </div>
        
        <div class="corporate-container-fbcol wow slideInUp">
            <div class="corporate-container-box">
                <i class="<?php echo $list_five_icon; ?>"></i>
                <?php echo $list_five_text; ?>    
            </div>    
        </div>
        
    </div>
    
</div>


    
<div class="hse-container">

<div class="hse-container-overlay">
<div class="hse-container-flexbox">
    
    <div class="hse-container-flexcol">
        <div class="hse-container-fb-heading wow fadeInLeft">
            <?php echo $hse_heading; ?> <i class="<?php echo $hse_icon; ?>"></i>
        </div>
        <div class="hse-container-fb-text wow fadeInUp" data-wow-delay='.5s'>
            <?php echo $hse_content; ?>
        </div>
    </div>
    
</div>
    
    
<div class="hse-container-outer wow fadeInUp">
    <?php echo $hse_sub_content; ?>
</div>    
    
</div>
    
    
</div>

<!-- End HSE Page -->    

<!-- ISO Container -->
<div class="iso-container" id="iso-container">
    
    <i class="fas fa-cogs wow fadeInDown bg-ash-icons"></i>
    <i class="fas fa-helmet-safety wow fadeInDown bg-ash-icons bg-ai-2"></i>
    <i class="far fa-lightbulb wow fadeInDown bg-ash-icons bg-ai-3"></i>
    <i class="fas fa-cog wow fadeInDown bg-ash-icons bg-ai-4"></i>
    <i class="fas fa-screwdriver-wrench wow fadeInDown bg-ash-icons bg-ai-5"></i>
    <i class="fas fa-toolbox wow fadeInDown bg-ash-icons bg-ai-6"></i>
    
    <div class="cc-wrapper-flexbox">
        <div class="cc-col">
            <div class="cc-header-icon wow fadeInDown"></div>
            <div class="cc-header-title wow fadeInDown"><?php echo $section_bullet; ?></div>
            <div class="cc-header-text wow fadeInLeft"><?php echo $iso_heading; ?> <img src="assets/css/images/afaq.png" class='iso-logo'></div>
        </div>
    </div>
    
    <div class="iso-flexbox">
        
        <div class="iso-flexbox-col">
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            <?php echo $iso_text; ?>
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $iso_subtext; ?> 
            </div>
        </div>
        
        <div class="iso-flexbox-col">
            <div class="strf-col-text wow fadeInUp">
            <span class="theme-color">In achieving the international standard, Lambert Electromec Ltd:</span><br>
                
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Identifies and meets customer needs, requirements and specifications.</span><br>
                </div>
                    
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Identifies and conforms with relevant statutory and regulatory requirements.</span><br>
                </div>
                    
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Selects and engages the services of qualified personnel and contractors with necessary steps taken to continually improve their competencies.</span><br>
                </div>
                    
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Ensures that adequate materials and tools are consistently acquired and utilized for the execution of projects.</span><br>
                </div>
                    
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Ensures the use of customer feedback to continually improve the quality of our products and services.</span><br>
                </div>
                    
                <div class="isofb-box">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Ensures the timely delivery of our products/services.</span><br>
                </div>
                
            </div>
        </div>
    </div>
</div>
    
<!-- End Iso Container -->

<!-- ISO Container -->
<div class="iso-wrapper">

    <div class="iso-wrapper-flexbox">
        
        <div class="isowfb-col isfb-img-box">
            <div class="isowfb-img-box wow fadeInLeft">
                <img src="assets/css/images/<?php echo $iso_image; ?>" alt="iso-image">
            </div>
        </div>
        
        <div class="isowfb-col">            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $iso_subtext_two; ?>
            </div>
        </div>
        
    </div>
    
</div>
    

    
    
<section class="csr-container" id="csr-container">
    
    <div class="cc-wrapper-flexbox">
        <div class="cc-col">
            <div class="cc-header-icon wow fadeInDown"></div>
            <div class="cc-header-title wow fadeInDown"><?php echo $section_bullet_two; ?></div>
            <div class="cc-header-text wow fadeInLeft"><?php echo $csr_heading; ?></div>
        </div>
    </div>
    
    
    <div class="csr-flexbox-container csr-flexbox-reversed wow fadeInUp">
        
        <div class="csr-fb-col csr-fb-textbox">
            <div class="csr-fb-title">
                <?php echo $csr_text_heading_one; ?>
            </div>
            <!--<div class="csr-fb-date"><?php echo $csr_date_one; ?></div>-->
            <div class="csr-fb-text">
                <?php echo $csr_text_one; ?>
            </div>
        </div>
        
        <div class="csr-fb-col csr-fb-imgbox">
            <img src="assets/css/images/<?php echo $csr_image_one; ?>" alt="image-icon">
        </div>
        
    </div>
    
    
    <div class="csr-flexbox-container wow fadeInUp">
        
        <div class="csr-fb-col csr-fb-textbox">
            <div class="csr-fb-title">
                <?php echo $csr_text_heading_two; ?>
            </div>
            <!--<div class="csr-fb-date"><?php echo $csr_date_two; ?></div>-->
            <div class="csr-fb-text">
                <?php echo $csr_text_two; ?>
            </div>
        </div>
        
        <div class="csr-fb-col csr-fb-imgbox">
            <img src="assets/css/images/<?php echo $csr_image_two; ?>" alt="image-icon">
        </div>
        
    </div>
    
</section>    
    
    
    
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
<a data-scroll href="#menu-container" id="scroll-to-top"><i class="fas fa-caret-up"></i></a>
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