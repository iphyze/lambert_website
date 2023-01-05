<?php
include_once('includes/connection.php');
include_once('includes/functions.php');

//contactFormSubmit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec - Home</title>
</head>
    
<body>
    
    <?php
    
        $home_active_link = "home";
    
    ?>
    <!-- This is the menu header -->
    <?php include_once('includes/menu_header.php'); ?>
    
    <div class="header-slider-container swiper-scale-effect">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="header-slider-overlay swiper-slide-cover" style="background-image:url(assets/css/images/all/Slide-1.jpg)"></div>
                
                    <div class="header-slider-overlay-content">
                        <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one wow fadeInRight hide-div" data-wow-delay='1s'>Lambert Electromec</div>
                            <div class="hso-text-two wow fadeIn" data-wow-delay='1s'>Bringing Life <br> to Great Structure</div>
                            <div class="hso-text-three wow fadeInLeft" data-wow-delay='2.5s'>We have provided complete remodeling and lighting solutions for residential and commercial properties in cities</div>
                            <a href="#section-three" class="right-margin hso-text-link hide-div" data-wow-delay='3.5s'>Explore</a>
                        </div>
                    </div>    
            </div>
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover" style="background-image:url(assets/css/images/all/Slide-2.jpg)"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-two"><!--Superior Quality<br> Sets Us Apart--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover slider-bg-3"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-three"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover slider-bg-4"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-four"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover slider-bg-5"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-five"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover slider-bg-6"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-six"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover" style="background-image:url(assets/css/images/all/slide-7.jpg)"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-seven"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 swiper-slide-cover" style="background-image:url(assets/css/images/all/Slide-8.jpg)"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-eight"><!--Eco Friendly <br> Technologies--></div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
            
            <div class="swiper-slide">
                <div class="header-slider-overlay sl-overlay-2 slide-nine swiper-slide-cover slider-bg-9"></div>
                
                    <div class="header-slider-overlay-content">
                       <div class="hso-content hso-content-align-center">
                            <div class="hso-text-one hide-div">CERTIFIED</div>
                            <div class="hso-text-two hsotext-nine">ISO 9001, ISO 14001, ISO 45001 <br> Quality at the heart of our system</div>
                            <div class="hso-text-three">Quality at the Heart of Our Systems. We provide you with quality management systems to meet your needs & regulatory requirements.</div><br>
                            <a href="#" class="hso-text-link hide-div">Projects</a>
                        </div>
                    </div>    
            </div>
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="fas fa-caret-left slider-btn-next"></div>
        <div class="fas fa-caret-right slider-btn-prev"></div>
  </div>

    <div class="section-two">
        <div class="section-two-flexbox">
            
            <div class="stf-col">
                <a href="#divisions" class="stf-col-fb wow fadeInUp" data-wow-delay=".2s">
                    <i class="fas fa-building stf-col-icon"></i>
                    <div class="stf-col-text">BUILDING AND FACTORIES</div>
                </a>
                
                <a href="#divisions" class="stf-col-fb wow fadeInUp" data-wow-delay=".5s">
                    <i class="fas fa-charging-station stf-col-icon"></i>
                    <div class="stf-col-text">POWER GENERATION & TRANSMISSION</div>
                </a>
                
                <a href="#divisions" class="stf-col-fb wow fadeInUp" data-wow-delay=".8s">
                    <i class="fas fa-database stf-col-icon"></i>
                    <div class="stf-col-text">DATA CENTER & TELECOM</div>
                </a>
                
                <a href="#divisions" class="stf-col-fb wow fadeInUp" data-wow-delay="1.1s">
                    <i class="fas fa-oil-can stf-col-icon"></i>
                    <div class="stf-col-text">OIL & GAS</div>
                </a>

            </div>
            
        </div>
    </div>
    
    <!--<div class="page-separation"></div>-->
    
    
    <?php
    
    
        $select = mysqli_query($db, "SELECT * FROM home_about_us_table");
        $selected = mysqli_fetch_assoc($select);
    
        $num = mysqli_num_rows($select);
    
        if($num > 0){
            $sub_title = $selected['sub_title'];
            $page_title = $selected['page_title'];
            $profile_title = $selected['profile_title'];
            $profile_content = $selected['profile_content'];
            $profile_sub_content = $selected['profile_sub_content'];
            $profile_link_title = $selected['profile_link_title'];
            $profile_link_ref = $selected['profile_link_ref'];
            $vision_statement_title = $selected['vision_statement_title'];
            $vision_statement_content = $selected['vision_statement_content'];
            $vision_statement_icon = $selected['vision_statement_icon'];
            $mission_statement_title = $selected['mission_statement_title'];
            $mission_statement_content = $selected['mission_statement_content'];
            $mission_statement_icon = $selected['mission_statement_icon'];
            $history_title = $selected['history_title'];
            $history_content = $selected['history_content'];
            $history_icon = $selected['history_icon'];
            $read_me = $selected['read_me'];
            $read_me_ref = $selected['read_me_ref'];
        }
    
    
    ?>
    
    
    <div class="section-three" id="section-three">
        
        <div class="cc-wrapper-flexbox">
        <div class="cc-col">
            <div class="cc-header-icon wow fadeInDown"></div>
            <div class="cc-header-title wow fadeInDown"><?php echo $sub_title; ?></div>
            <div class="cc-header-text wow fadeInLeft"><?php echo $page_title; ?></div>
        </div>
        </div>
        
        <div class="section-three-flexbox">
            
            <div class="strf-col wow fadeInLeft" data-wow-duration="2s">
                <div class="strf-col-bold def-color">
                    <?php echo $profile_title; ?>
                </div>
                
                <div class="strf-col-medium ab-pc-align-left">
                    <?php echo $profile_content; ?>
                    <!--
                   Lambert Electromec Ltd is a leading Engineering, Procurement, and Construction <span class="strf-col-medium def-color">EPC</span> company with an international presence and expertise in Mechanical, Electrical, and Plumbing <span class="strf-col-medium def-color">MEP</span>, particularly across West Africa.
                    -->
                </div>
                
                <div class="strf-col-text">
                    
                    <?php echo $profile_sub_content; ?>
                    <!--
                    An EPC contractor that specializes in executing complex infrastructural projects that require the highest level of technical knowhow in Oil & Gas and Modular Refineries, Power Generation and Distribution, Data Centre & Telecom Infrastructures and in Buildings and Factories.
                    -->
        
                </div>
                
                <a href="<?php echo $profile_link_ref; ?>" class="strf-col-link">
                    <?php echo $profile_link_title; ?>
                </a>
            </div>
            
            <div class="strf-col">
                
                <div class="strfc-flexbox wow fadeInUp" data-wow-delay='.2s'>
                    
                    <div class="<?php echo $vision_statement_icon; ?> strfc-icon"></div>
                    
                    <div class="strfc-text-wrapper">
                        <div class="strfc-text-header"><?php echo $vision_statement_title; ?></div>
                        <div class="strfc-text">
                            
                            <?php echo $vision_statement_content; ?>
                            
                            <!--
                            Our vision is to be the no1 Electro-mechanical Engineering firm in West Africa, pioneers of new technologies in EPC onstruction, Modular Refineries and Oil & Gas, Data Centres and Power Generations.
                            -->


                        </div>
                    </div>
                    
                </div>
                
                <div class="strfc-flexbox wow fadeInUp" data-wow-delay='.5s'>
                    
                    <div class="<?php echo $mission_statement_icon; ?> strfc-icon"></div>
                    
                    <div class="strfc-text-wrapper">
                        <div class="strfc-text-header"><?php echo $mission_statement_title; ?></div>
                        <div class="strfc-text">
                            <?php echo $mission_statement_content; ?>
                            <!--
                          Our mission is to build the future of comfort and safety in West Africa by providing a wide range of high quality and innovative solutions.
                            -->
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class="strfc-flexbox wow fadeInUp" data-wow-delay='.8s'>
                    
                    <div class="<?php echo $history_icon; ?> strfc-icon"></div>
                    
                    <div class="strfc-text-wrapper">
                        <div class="strfc-text-header"><?php echo $history_title; ?></div>
                        <div class="strfc-text">
                            <?php echo $history_content; ?>
                            <!--
                           Lambert Electromec Limited was created in affiliation with lambert Somec Inc., itself founded in 1954 in Quebec, Canada. Lambert Somec Inc passed on its heritage of first-class professionalism, top engineers, and its exceptional overall operational system to Lambert Electromec Ltd. which operates independently in the West African region.
                            -->
                            <a href="<?php echo $read_me_ref; ?>" style="color:#4ca54c;"><?php echo $read_me; ?></a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    

    
<?php
    
    
$selectNum = mysqli_query($db, "SELECT * FROM numbers_table");
$selectedNum = mysqli_fetch_assoc($selectNum);

$numNum = mysqli_num_rows($selectNum);

if($numNum > 0){
$numbers_heading = $selectedNum['numbers_heading'];
$completed_projects_number = $selectedNum['completed_projects_number'];
$completed_projects_text = $selectedNum['completed_projects_text'];
$staff_strength_number = $selectedNum['staff_strength_number'];
$staff_strength_text = $selectedNum['staff_strength_text'];
$partners_number = $selectedNum['partners_number'];
$partners_text = $selectedNum['partners_text'];
$cities_num = $selectedNum['cities_num'];
$cities_text = $selectedNum['cities_text'];
}


?>
    
    
    
<div class="numbers-container">
    <div class="numbers-container-overlay">
        <div class="numbers-container-heading wow fadeInDown"><?php echo $numbers_heading; ?></div>
        
        <div class="numbers-flexbox wow fadeInUp">

            <div class="numbers-fb-col" data-count="<?php echo $completed_projects_number; ?>">
                <span class="numbers-num">
                    0
                </span>
                <div class="numbers-text">
                    <?php echo $completed_projects_text; ?>
                </div>
            </div>

            <div class="numbers-fb-col" data-count="<?php echo $staff_strength_number; ?>">
                <span class="numbers-num">
                    0
                </span>
                <div class="numbers-text">
                    <?php echo $staff_strength_text; ?>
                </div>
            </div>

            <div class="numbers-fb-col" data-count="<?php echo $partners_number; ?>">
                <span class="numbers-num">
                    0
                </span>
                <div class="numbers-text">
                    <?php echo $partners_text; ?>
                </div>
            </div>
            
            <div class="numbers-fb-col" data-count="<?php echo $cities_num; ?>">
                <span class="numbers-num">
                    0
                </span>
                <div class="numbers-text">
                    <?php echo $cities_text; ?>
                </div>
            </div>

            <!--
            <div class="numbers-fb-col" data-count="27">
                <div class="numbers-num">
                    0
                </div>
                <div class="numbers-text">
                    COUNTRIES OF OPERATION
                </div>
            </div>
            -->

        </div>
    </div>
</div>    
  
    
    
    
    
    
    
<div class="division-container" id="divisions">
    
    
<?php
    
    
$selectDivision = mysqli_query($db, "SELECT * FROM home_divisions_table");
$selectedDivision = mysqli_fetch_assoc($selectDivision);

$numDivision = mysqli_num_rows($selectDivision);

if($numDivision > 0){
$section_bullet = $selectedDivision['section_bullet'];
$section_title = $selectedDivision['section_title'];
$col_one_header = $selectedDivision['col_one_header'];
$col_one_text_one = $selectedDivision['col_one_text_one'];
$col_one_ht_one = $selectedDivision['col_one_ht_one'];
$col_one_ht_two = $selectedDivision['col_one_ht_two'];
$col_one_ht_three = $selectedDivision['col_one_ht_three'];
$col_one_ht_four = $selectedDivision['col_one_ht_four'];
$col_one_text_two = $selectedDivision['col_one_text_two'];
$col_two_header = $selectedDivision['col_two_header'];
$col_two_text_one = $selectedDivision['col_two_text_one'];
$col_two_ht_one = $selectedDivision['col_two_ht_one'];
$col_two_ht_two = $selectedDivision['col_two_ht_two'];
$col_two_ht_three = $selectedDivision['col_two_ht_three'];
$col_two_ht_four = $selectedDivision['col_two_ht_four'];
$col_two_text_two = $selectedDivision['col_two_text_two'];
$col_three_header = $selectedDivision['col_three_header'];
$col_three_text_one = $selectedDivision['col_three_text_one'];
$col_three_ht_one = $selectedDivision['col_three_ht_one'];
$col_three_ht_two = $selectedDivision['col_three_ht_two'];
$col_three_ht_three = $selectedDivision['col_three_ht_three'];
$col_three_ht_four = $selectedDivision['col_three_ht_four'];  
$col_three_text_two = $selectedDivision['col_three_text_two'];    
$col_four_header = $selectedDivision['col_four_header'];
$col_four_text_one = $selectedDivision['col_four_text_one'];
$col_four_ht_one = $selectedDivision['col_four_ht_one'];
$col_four_ht_two = $selectedDivision['col_four_ht_two'];
$col_four_ht_three = $selectedDivision['col_four_ht_three'];
$col_four_ht_four = $selectedDivision['col_four_ht_four'];
$col_four_text_two = $selectedDivision['col_four_text_two'];
}


?>    
    
    
    <div class="cc-wrapper-flexbox">
        <div class="cc-col">
            <div class="cc-header-icon wow fadeInDown"></div>
            <div class="cc-header-title wow fadeInDown"><?php echo $section_bullet; ?></div>
            <div class="cc-header-text wow fadeInLeft"><?php echo $section_title; ?></div>
        </div>
    </div>
    
    <div class="division-flexbox">
        
        <div class="division-fb-col wow fadeInUp">
            
            
            <div class="division-name"><?php echo $col_one_header; ?></div>
            
            
            <div class="division-briefs">
                <?php echo $col_one_text_one; ?>
            </div>
            
            
            <div class="division-flex-wrapper">
                <div class="dfw-col">
                    <?php echo $col_one_ht_one; ?> <span class="dfw-span"><?php echo $col_one_ht_two; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/building_1.png" class="dfw-icon dfw-icon-animate-2">
                </div>
            </div>
            
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col">
                    <?php echo $col_one_ht_three; ?> <span class="dfw-span"><?php echo $col_one_ht_four; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/building_2.png" class="dfw-icon">
                </div>
            </div>
            
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col dfw-col-txt">
                    <?php echo $col_one_text_two; ?>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/building_3.png" class="dfw-icon-3">
                </div>
            </div>
            
            
            <a href="division.php?pid=Building and Factories" class="division-box-link" class="division-box-link">Building & Factories</a>

        </div>
        
        <div class="division-fb-col fb-col-2 wow fadeInDown">
            <div class="division-name"><?php echo $col_two_header; ?></div>
            
            
            <div class="division-briefs">
                <?php echo $col_two_text_one; ?>
            </div>
            
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col">
                    <?php echo $col_two_ht_one; ?> <span class="dfw-span dfws-2"><?php echo $col_two_ht_two; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/power_1.png" class="dfw-icon dfw-icon-animate">
                </div>
            </div>
            
            <div class="division-flex-wrapper dfwrapper-3">
                <div class="dfw-col dfw-col-other">
                    <?php echo $col_two_ht_three; ?> <span class="dfw-span dfws-2"><?php echo $col_two_ht_four; ?></span>
                </div>
                <div class="dfw-col dfw-col-other dfwc-icon-box">
                    <img src="assets/css/images/lamb/power_2.png" class="dfw-icon dfw-icon-animate-2">
                </div>
            </div>
            
            <div class="division-flex-wrapper df-wrapper-2 bg-white">
                <div class="dfw-col dfw-col-txt col-black">
                  <?php echo $col_two_text_two; ?>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/power_3.png" class="dfw-icon dfw-icon-animate">
                </div>
            </div>
            
            <a href="division.php?pid=Power Generation and Transmission" class="division-box-link" class="division-box-link">Power Generation</a>
            
        </div>
            
        
        <div class="division-fb-col fb-col-3 wow fadeInUp">
            
            <div class="division-name"><?php echo $col_three_header; ?></div>
            
            
            <div class="division-briefs">
                <?php echo $col_three_text_one; ?>
            </div>
            
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col dfw-data">
                    <?php echo $col_three_ht_one; ?> <span class="dfw-span dfws-3"> <?php echo $col_three_ht_two; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/Data_1.png" class="dfw-data-icon">
                </div>
            </div>
            
            <div class="division-flex-wrapper dfwrapper-3">
                <div class="dfw-col dfw-col-other dfw-data">
                    <?php echo $col_three_ht_three; ?> <br><span class="dfw-span dfws-3"><?php echo $col_three_ht_four; ?></span>
                </div>
                <div class="dfw-col dfw-col-other dfwc-icon-box">
                    <img src="assets/css/images/lamb/Data_2.png" class="dfw-icon-4">
                </div>
            </div>
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col dfw-col-txt">
                   <?php echo $col_three_text_two; ?>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/Data_3.png" class="dfw-icon-5 dfw-icon-animate-2">
                </div>
            </div>
            
            <a href="division.php?pid=Data Center" class="division-box-link" class="division-box-link">Data Center</a>
            
        </div>
        
        <div class="division-fb-col fb-col-4 wow fadeInDown">
            
            <div class="division-name black-bg-color"><?php echo $col_four_header; ?></div>
            
            
            <div class="division-briefs col-black">
                <?php echo $col_four_text_one; ?>
            </div>
            
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col black-bg-color">
                    <?php echo $col_four_ht_one; ?> <br> <span class="dfw-span col-black"> <?php echo $col_four_ht_two; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/Oil_1.png" class="dfw-icon dfw-icon-animate">
                </div>
            </div>
            
            <div class="division-flex-wrapper dfwrapper-2">
                <div class="dfw-col black-bg-color">
                    <?php echo $col_four_ht_three; ?> <span class="dfw-span dfws-2 col-black"><?php echo $col_four_ht_four; ?></span>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/Oil_2.png" class="dfw-icon dfw-icon-animate-3">
                </div>
            </div>
            
            <div class="division-flex-wrapper df-wrapper-2">
                <div class="dfw-col dfw-col-txt col-black">
                   <?php echo $col_four_text_two; ?>
                </div>
                <div class="dfw-col dfwc-icon-box">
                    <img src="assets/css/images/lamb/Oil_3.png" class="dfw-icon-6">
                </div>
            </div>
            
            <a href="division.php?pid=Oil and Gas" class="division-box-link" class="division-box-link">Oil & Gas</a>
            
        </div>
        
    </div>
</div>    
    
    
    <!-- Section Four -->
<div class="section-four" id="section-four">
  <div class="section-four-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide project-img-1">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        The Heritage Place
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Lagos - Nigeria
                   </div>
                   <div class="project-briefs">
                        The Heritage Place achieved LEED Certification in both Design and Construction.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=6">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-2">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        One Airport Square
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Accra - Ghana
                   </div>
                   <div class="project-briefs">
                        One Airport Square is a 4 Green Star (SA-Ghana) Certified Building.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=4">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-3">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        Waltersmith Modular Refinery
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Imo - Nigeria
                   </div>
                   <div class="project-briefs">
                        VFuels and Lambert Electromec carried out the engineering, procurement, and construction (EPC) contract for the initial 5,000bpd modular refinery project.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=8">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-4">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        Alpha One Tower
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Lagos - Nigeria
                   </div>
                   <div class="project-briefs">
                        Alpha One Tower achieved EDGE certification from thinkstep-SGS.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=10">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-5">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        World Bank / IFC OFFICE
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Accra - Ghana
                   </div>
                   <div class="project-briefs">
                        This landmark eco-friendly 5-storey structure exhibits unique technological systems which is EDGE certified from thinkstep-SGS.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=9">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        
        
        <div class="swiper-slide project-img-6">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        Total Power Plant 
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Nigeria
                   </div>
                   <div class="project-briefs">
                        16.5MW Gas Turbines Power Plant & Substation.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=5">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-7">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        Railway Village
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Delta State - Nigeria
                   </div>
                   <div class="project-briefs">
                        The Itakpe-Ajaokuta-Warri Ore Rail Line development is a  multipurpose railway line that comprises of a railway maintenance depot and 20 Bridges over the railway line.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=15">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-8">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        IVOIRE TRADE CENTER
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Abijan - Côte d'Ivoire
                   </div>
                   <div class="project-briefs">
                        The Ivoire Trade Center (ITC) is an exclusive business unit with EDGE certification.
                   </div>
                   <div class="project-links">
                        <a href="projects-single.php?id=19">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
        <div class="swiper-slide project-img-9">
            <div class="sf-overlay">
               <div class="sf-content-container">
                    <div class="project-title wow fadeInUp" data-wow-iteration="1">
                        EKO TOWERS I & II
                    </div>
                    <hr class="project-line">
                   <div class="project-location">
                        Lagos - Nigeria
                   </div>
                   <div class="project-briefs">
                        The 20 and 27 Storey mixed-use towers boast of the best technologies in Electro-Mechanical applications.
                   </div>
                   <div class="project-links">
                        <a href="projects.php">Details</a>
                        <a href="projects.php">All Projects</a>
                   </div>
                </div> 
            </div>
        </div>
        
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
      
    <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
  </div>
</div>    
    
    
<div class="section-five">
    <div class="s5-wrapper">
        
        <div class="s5-wrapper-flexbox">
            <div class="s5w-col">
                <div class="s5w-header-icon wow fadeInDown"></div>
                <div class="s5w-header-title wow fadeInDown">SERVICES</div>
                <div class="s5w-header-text wow fadeInLeft">Our Services</div>
            </div>
            
            <div class="s5w-col s5wc-right">
                <a href="division.php?pid=Building and Factories" class="s5w-header-link">VIEW ALL SERVICES</a>
            </div>
        </div>
        
        <div class="s5-swiper-container">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-helmet-safety s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Facility Management</div>
                        <div class="s5s-text wow fadeInUp">Our range of services include Preventive Maintenance, Routine/Day-to-Day Maintenance, Major Repairs/Replacement, Renovations & Retrofit.</div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-bolt s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Electrical Engineering</div>
                        <div class="s5s-text wow fadeInUp">We have developed our Electrical Engineering arm into a veritable industry source noted for excellence in low, medium and high voltage installations. 
                           
                        </div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-server s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Data Center Infrastructure</div>
                        <div class="s5s-text wow fadeInUp">Complete Design/Engineering/Build from inception to completion</div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-shield-halved s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Security & Audiovisual Systems</div>
                        <div class="s5s-text wow fadeInUp">We design security systems such as IP Surveillance/CCTV systems & Access Control Systems.</div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-bolt-lightning s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Power Generation & Hybrid Solutions</div>
                        <div class="s5s-text wow fadeInUp">Power Plants Design, Installation, Operation & Maintenance.</div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s5s-content">
                        
                        <div class="fas fa-gear s5s-icon wow fadeInDown"></div>
                        <div class="s5s-heading wow fadeInDown">Mechanical Engineering</div>
                        <div class="s5s-text wow fadeInUp">We render Piped & HVAC services for commercial & residential Buildings, Factories & Warehouses, Data Centers & Hospitals.</div>
                        <!--<a href="#" class="s5s-link wow fadeInUp">READ MORE</a>-->
                        
                    </div>
                </div>
            </div>
        </div>
            
    <!-- Add Arrows -->
    <div class="fas fa-caret-left s5-slider-btn-next"></div>
    <div class="fas fa-caret-right s5-slider-btn-prev"></div>
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

<!-- Clients Container
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

      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="client-pagination"></div>
    </div>
</div>
-->    

    
<div class="contact-container" id="contact-container">
    <div class="cc-wrapper">
        
        <div class="cc-wrapper-flexbox">
            <div class="cc-col">
                <div class="cc-header-icon wow fadeInDown"></div>
                <div class="cc-header-title wow fadeInDown">CONTACT US</div>
                <div class="cc-header-text wow fadeInLeft">Contact Us</div>
            </div>
        </div>
        
        <div class="contact-box">
        
            <div class="contact-box-overlay">
                
                <div class="cbo-flexbox">
                    <div class="cbof-col wow fadeIn">
                        <div class="cbof-col-btn wow fadeInUp" data-wow-delay='1s'></div>
                        <div class="cbof-col-btn cbc-btn-2 wow fadeInUp" data-wow-delay='1s'></div>
                        <div class="cbof-col-btn cbc-btn-3 wow fadeInUp" data-wow-delay='1s'></div>
                    </div>
                    
                    <div class="cbof-col cbof-box wow fadeIn">
                        
                        <div class="cbofc-col hide-div">
                            <div class="cbofc-heading">Contact</div>
                            <div class="cbofc-wrapper">
                                <span class="cbofc-icon fas fa-phone"></span>
                                <a class="cbofc-text">+234 (0) 1 462 92 93</a>
                            </div>
                            
                            <!--
                            <div class="cbofc-wrapper">
                                <span class="cbofc-icon fas fa-location-arrow"></span>
                                <a class="cbofc-text">1682 Sanusi Fafunwa St. Victoria Island, Lagos - Nigeria P.O. Box 60096, Ikoyi</a>
                            </div>
                            -->


                            <div class="cbofc-wrapper">
                                <span class="cbofc-icon fas fa-envelope"></span>
                                <a class="cbofc-text">info@lambertelectromec.com</a>
                            </div>
                            
                            <div class="cbofc-icon-wrapper">
                                <a href="https://www.facebook.com/LambertElectromec" class="cbofciw-icon fab fa-facebook-f" target="_blank"></a>
                                <a href="https://twitter.com/LambertElecLtd?t=yMl94Fmx8GbpNS2zPJWZoQ&s=09" class="cbofciw-icon fab fa-twitter" target="_blank"></a>
                                <a href="https://www.linkedin.com/company/lambert-electromec-ltd/" class="cbofciw-icon fab fa-linkedin" target="_blank"></a>
                                <a href="https://instagram.com/lambertelectromec?igshid=YmMyMTA2M2Y=" class="cbofciw-icon fab fa-instagram" target="_blank"></a>
                            </div>
                            
                        </div>
                        
                        <div class="cbofc-col cbofc-col-main">
                            
                            <!--https://formspree.io/f/xeqdebya-->
                            <!--https://formcarry.com/s/COxBmH5rr-->
                            
                            
                            <div class="form-container" id="form-container">
                                
                                <form method="post" action="action.php" id="form_container" enctype="multipart/form-data">
                                    
                                    <?php 
                                        //if(!empty($_SESSION['prompt'])){
                                            //echo $_SESSION['prompt'];
                                            //unset($_SESSION['prompt']);
                                        //}
                                    ?>
                                    
                                    <div class="form-group">
                                        <select name="subject" id="select-box-hold" class="select-box-hold">
                                            <option value="" class="option-box" id="subject">Select Subject</option>
                                            <option value="General Inquiries" class="option-box">General Enquiry</option>
                                            <option value="Job Vacancy" class="option-box">Job Vacancy</option>
                                            <option value="Technical / Commercial Request" class="option-box">Technical / Commercial Request</option>
                                            <option value="Become A Supplier / Vendor" class="option-box">Become A Supplier / Vendor</option>
                                            <option value="Maintenance Enquiry" class="option-box">Maintenance Inquiry</option>
                                            <option value="Customer Feedback" class="option-box">Customer Feedback</option>
                                        </select>
                                        <span class="selectbox-icon fas fa-sort"></span>
                                    </div>
                                    
                                    <!--<div id="subjectErr"></div>-->
                                    
                                    <div class="form-group-heading">
                                        <div id="general-inquries">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">General Enquiry</div>
                                        </div>
                                        
                                        <div id="technical-request">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">Technical / Commercial Request</div>
                                        </div>
                                        
                                        <div id="job-application">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">Job Vacancy</div>
                                            <div class="fgh-text">
                                                Lambert Electromec is an equal opportunity employer. To apply, kindly select the position you're applying for.
                                            </div>
                                        </div>
                                        
                                        <div id="press-inquries">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">Become A Supplier / Vendor</div>
                                        </div>
                                        
                                        <div id="maintenance-enquiry">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">Maintenance Inquiry</div>
                                        </div>
                                        
                                        <div id="customer-feedback">
                                            <div class="fgh-subject">Subject</div>
                                            <div class="fgh-title">Customer Feedback</div>
                                        </div>
                                        
                                        
                                        <div id="file-box">
                                            <div class="fgh-title-small">Upload CV - (Max Size: 2mb, File Type: Pdf, Word)</div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    <div class="form-group" id="file">
                                        <input type="file" name="file" class="file" id="file" placeholder="Upload CV">
                                        <span for="file" class="file-label" id="file-label"><i class="fas fa-upload" style="color: white"></i>&nbsp; Upload</span>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['fileErr'])){
                                            echo $_SESSION['fileErr'];
                                            unset($_SESSION['fileErr']);
                                    }?>
                                    
                                    <?php if(!empty($_SESSION['fileTypeErr'])){
                                            echo $_SESSION['fileTypeErr'];
                                            unset($_SESSION['fileTypeErr']);
                                    }?>
                                    
                                    <?php if(!empty($_SESSION['fileSizeErr'])){
                                            echo $_SESSION['fileSizeErr'];
                                            unset($_SESSION['fileSizeErr']);
                                    }?>
                                    
                                    
                                    <?php //if(!empty($fileErr)){echo $fileErr; }?>
                                    <?php //if(!empty($fileTypeErr)){echo $fileTypeErr; }?>
                                    <?php //if(!empty($fileSizeErr)){echo $fileSizeErr; }?>
                                    
                                    
                                    <div class="form-group" id="position-box-hold">
                                        <select name="position" class="position" id="position">
                                            <option value="">Select Position</option>
                                            <option value="Account Officer">Account Officer</option>
                                            <option value="Admin Asst / Front Desk">Admin Asst / Front Desk</option>
                                            <option value="Others">Other Positions</option>
                                        </select>
                                        <span class="selectbox-icon fas fa-sort position-selectbox"></span>
                                    </div>
                                    
                                    <!--<div id="positionErr"></div>-->
                                    
                                    <div class="form-group other_position_class" id="other_position_class">
                                        <input type="text" name="other_position" id="other_position" placeholder="Enter Position (If Others)">
                                        <label for="other_position">Enter Position (If Others)</label>
                                    </div>
                                    <div class="otherPosErr"></div>
                                    
                                    <div class="form-group" id="location-box-hold" class="location-box-hold">
                                        <select name="location" class="location">
                                            <option value="">Select Location</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Cote D Ivoire">Cote D'Ivoire</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Others">Other Countries</option>
                                        </select>
                                        <span class="selectbox-icon fas fa-sort position-selectbox"></span>
                                    </div>
                                    
                                    <div class="form-group other_country_class" id="other_country_class">
                                        <input type="text" name="other_country" id="other_country" placeholder="Enter Country (If Others)">
                                        <label for="other_country">Enter Country (If Others)</label>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['otherCountryErr'])){
                                            echo $_SESSION['otherCountryErr'];
                                            unset($_SESSION['otherCountryErr']);
                                    }?>
                                    
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
                                        <label for="fullname">Full Name</label>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['fullnameErr'])){
                                            echo $_SESSION['fullnameErr'];
                                            unset($_SESSION['fullnameErr']);
                                    }?>
                                    
                                    <?php //if(!empty($fullnameErr)){echo $fullnameErr; }?>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Email" required>
                                        <label for="email">Email</label>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['emailErr'])){
                                            echo $_SESSION['emailErr'];
                                            unset($_SESSION['emailErr']);
                                    }?>
                                    
                                    <?php if(!empty($_SESSION['invalidEmail'])){
                                            echo $_SESSION['invalidEmail'];
                                            unset($_SESSION['invalidEmail']);
                                    }?>
                                    
                                    <?php //if(!empty($emailErr)){echo $emailErr; }?>
                                    <?php //if(!empty($invalidEmail)){echo $invalidEmail; }?>
                                    
                                    <div class="form-group">
                                        <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                                        <label for="phone">Phone</label>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['phoneErr'])){
                                            echo $_SESSION['phoneErr'];
                                            unset($_SESSION['phoneErr']);
                                    }?>
                                    
                                    <?php //if(!empty($phoneErr)){echo $phoneErr; }?>
                                    
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" id="message" maxlength="500" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <?php if(!empty($_SESSION['messageErr'])){
                                            echo $_SESSION['messageErr'];
                                            unset($_SESSION['messageErr']);
                                    }?>
                                    
                                    <?php //if(!empty($messageErr)){echo $messageErr; }?>
                                    
                                    <div class="form-group-full">
                                            <div class="checkbox-holder">
                                            <input type="checkbox" name="terms" id="terms" class="termsbox" value="Accepted" required>
                                            </div>
                                            <label class="termslabel" for="terms">
                                                I have read & understood the <a href="terms.php" target="_blank">Terms & Conditions</a>
                                            </label>
                                    </div>
                                    
                                    <?php if(!empty($_SESSION['termsErr'])){
                                            echo $_SESSION['termsErr'];
                                            unset($_SESSION['termsErr']);
                                    }?>
                                    
                                    <?php //if(!empty($termsErr)){echo $termsErr; }?>
                                    
                                    <input type="hidden" name="_gotcha"><!-- use this to prevent spam -->
                                    
                                    <div class="form-group-btn">
                                        <button type="submit" name="submit" id="submit_btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                
                                <div id="message_box"></div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        
        </div>
            
    </div>
</div>
    
    
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
<script>

$("#file").change(function(event){
    var media_file = event.target.files[0].name;
    $('#file-label').text(media_file);
});

    
/*    
$("#file").change(function(){
var file = $('#file').prop("files")[0];

// Making the form object
var form = new FormData();

// Adding the image to the form
form.append("image", file);
});
*/

</script>
<script src="action.js"></script>