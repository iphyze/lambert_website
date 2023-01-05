<?php

include_once('includes/connection.php');

$project = "";
$country = "";

if(isset($_POST['search_project'])){
$project = mysqli_real_escape_string($db, $_POST['project']);
}

if(isset($_POST['search_country'])){
$country = mysqli_real_escape_string($db, $_POST['country']);
}


if($project != ""){
    $search = $project;
}elseif($country != ""){
    $search = $country;
}elseif($project == "" && $country == ""){
    header('location:projects.php');
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
        <div class="all-projects-header-text wow fadeInLeft">Projects</div>
        <div class="all-projects-header-briefs wow fadeInUp">Search Result - <?php echo $search; ?></div>
    </div>
</div>    



<div class="all-projects-container">
    
    
    
    <div class="all-projects-form-container">
        
        <div class="allpform-swiper-container wow fadeInLeft">
            <div class="allpform-swiper-flexbox">
                
                <a href="projects.php" class="allpform-swiper-slide">All</a>
                
              <?php
                
                $find = mysqli_query($db, "SELECT * FROM divisions_table");
                $found = mysqli_fetch_assoc($find);
                $findNum = mysqli_num_rows($find);
                
                if($findNum > 0){
                foreach($find as $found){
                    $division_title = $found['division_title'];
                ?>
                
                
                <?php
                  
                    if(isset($_GET['division']) && $division_title == $_GET['division']){
                        $p_link = "project-act-link";
                    }else{
                        $p_link = "";
                    }
                    
                ?>
                
                
                
                <a href="project_search.php?division=<?php echo $division_title; ?>" class="allpform-swiper-slide 
                <?php 
                    
                    if(!empty($p_link)){
                        echo $p_link;
                    }else
                    
                                                                                            
                
                ?>
                                                                                            
                "><?php if($division_title == "Power Generation and Transmission"){echo "Power Generation & Hybrid Solutions"; }else{echo $division_title; } ?></a>
                <?php
                }    
                }
                
                ?>
            </div>
        </div>
        
        <div class="allpform-flexbox wow fadeInRight">
            
            <div class="allpform-box">
                <form action="search.php#project-container" method="post">
                    <div class="allpform-group">
                        <input type="text" name="project" placeholder="Search by Project or Country" required>
                        <button type="submit" name="search_project" class="fas fa-search"></button>
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
    
    <div class="all-project-flexbox" id="project-container">
        
        
        <?php
        
        $select = mysqli_query($db, "SELECT * FROM project_table WHERE project_country LIKE '%$search%' || project_title LIKE '%$search%' ORDER BY id ASC");
        $selected = mysqli_fetch_assoc($select);
        $number = mysqli_num_rows($select);
        
        
        if($number > 0){
            foreach($select as $selected){
                $id = $selected['id'];
                $project_title = $selected['project_title'];
                $project_description = $selected['project_description'];
                $project_city = $selected['project_city'];
                $work_done = $selected['work_done'];
                $project_year = $selected['project_year'];
                $project_image = $selected['project_image'];
                $project_country = $selected['project_country'];
                $project_division = $selected['project_division'];
                
        ?>
        
        <div class="all-project-fb-col wow fadeInUp">
            <div class="apfb-col-img-box">
                <img src="assets/css/img/projects/<?php echo $project_image; ?>">    
            </div>
            
            <div class="apfb-col-textbox">
                <div class="apfb-col-title wow fadeInUp"><?php echo $project_title; ?></div>
                <div class="apfb-col-location wow fadeInUp" data-wow-delay=".5s"><?php echo $project_division; ?></div>
                <div class="apfb-col-location wow fadeInUp" data-wow-delay=".5s"><?php echo $project_city; ?> - <span class="apfb-col-location-span"><?php echo $project_country; ?></span></div>
                <a href="projects-single.php?id=<?php echo $id ?>" class="apfb-col-link wow fadeInUp" data-wow-delay="1s">Details</a>
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