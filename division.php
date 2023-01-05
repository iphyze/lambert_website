<?php
include_once('includes/connection.php');
if(!isset($_GET['pid']) || $_GET['pid'] == ""){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('includes/head.php'); ?>
    <title>Lambert Electromec - Division</title>
</head>
    
<body>
    
<?php
    
$home_active_link = "divisions";
    
//This is the menu header
    
include_once('includes/menu_header.php'); 
?>
    
    
<!--
<div class="all-projects-header about-overlay-image">
    <div class="all-projects-overlay">
        <div class="all-projects-header-text wow fadeInLeft">Divisions</div>
        <div class="all-projects-header-briefs wow fadeInUp back-link"><?php echo $_GET['pid']; ?></div>
        <div class="all-projects-header-briefs wow fadeInUp back-link">Home &rarr; <a href="index.php">Back</a></div>
    </div>
</div>
-->

    
<div class="all-projects-container">
    
    
    
    <div class="all-projects-form-container">
        
        <div class="allpform-swiper-container wow fadeInLeft">
            <div class="allpform-swiper-flexbox">
                
              <?php
                
                $find = mysqli_query($db, "SELECT * FROM divisions_table");
                $found = mysqli_fetch_assoc($find);
                $findNum = mysqli_num_rows($find);
                
                if($findNum > 0){
                foreach($find as $found){
                    $division_title = $found['division_title'];
                ?>
                
                
                <?php
                  
                    if(isset($_GET['pid']) && $division_title == $_GET['pid']){
                        $p_link = "project-act-link";
                    }else{
                        $p_link = "";
                    }
                    
                ?>
                
                
                
                <a href="division.php?pid=<?php echo $division_title; ?>" class="allpform-swiper-slide 
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
        
        
    </div>
    
    
</div>

        
    

<?php
  
if(isset($_GET['pid'])){
$pid = mysqli_real_escape_string($db, $_GET['pid']);
$select = mysqli_query($db, "SELECT * FROM divisions_table WHERE division_title = '$pid'");
$selected = mysqli_fetch_assoc($select);

//$division_title = $selected['division_title'];

$num = mysqli_num_rows($select);

if($num > 0 && $pid == "Building and Factories"){
    
include_once('includes/building_and_factories.php');    
    
}elseif($num > 0 && $pid == "Power Generation and Transmission"){
    
include_once('includes/power.php');
    
}elseif($num > 0 && $pid == "Data Center"){
    
include_once('includes/data_center.php');
    
}elseif($num > 0 && $pid == "Oil and Gas"){
    
include_once('includes/oil_&_gas.php');

}elseif($num == 0){    
    
?>    
    
<!-- ISO Container -->
<div class="iso-container">
    
<i class="fas fa-cogs wow fadeInDown bg-ash-icons"></i>
<i class="fas fa-helmet-safety wow fadeInDown bg-ash-icons bg-ai-2"></i>
<i class="far fa-lightbulb wow fadeInDown bg-ash-icons bg-ai-3"></i>
<i class="fas fa-cog wow fadeInDown bg-ash-icons bg-ai-4"></i>
<i class="fas fa-screwdriver-wrench wow fadeInDown bg-ash-icons bg-ai-5"></i>
<i class="fas fa-toolbox wow fadeInDown bg-ash-icons bg-ai-6"></i>

<div class="iso-flexbox iso-fb-jus-top">

<div class="iso-flexbox-col">

    <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
        404
    </div>
    <span class="theme-color wow fadeInUp">No results found!</span><br><br>
    <a href="javascript:history.back()" class="theme-color wow fadeInUp">&larr; Back</a><br>

</div>

<div class="iso-flexbox-col">

</div>
    
</div>

    
</div>
    
<!-- End Iso Container -->
    
    
<?php    
    }
}
    
?>    


<?php
  
if($num > 0 && $pid != ""){
$project_division = mysqli_real_escape_string($db, $_GET['pid']);
    
$get_projects = mysqli_query($db, "SELECT * FROM project_table WHERE project_division = '$project_division'");
$gotten_projects = mysqli_fetch_assoc($get_projects);
$gotten_num = mysqli_num_rows($get_projects);


?>
  
<!-- Projects -->
    
<div class="section-five">
    <div class="s5-wrapper">
        
        <div class="s5-wrapper-flexbox">
            <div class="s5w-col">
                <div class="s5w-header-icon wow fadeInDown"></div>
                <div class="s5w-header-title wow fadeInDown">Projects</div>
                <div class="s5w-header-text wow fadeInLeft"><?php if($pid == "Power Generation and Transmission"){echo "POWER GENERATIONS & HYBRID SOLUTIONS"; }else{ echo $pid; } ?></div>
            </div>
            
            <div class="s5w-col s5wc-right">
                <a href="projects.php" class="s5w-header-link">View All Projects</a>
            </div>
        </div>    
    
<?php
    
if($gotten_num > 0){
    
?>
    
<div class="s5-swiper-container s5-project-container">
            
<div class="swiper-wrapper">        
    
<?php    
    
foreach($get_projects as $gotten_projects){
$id = $gotten_projects['id'];
$project_title = $gotten_projects['project_title'];
$project_description = $gotten_projects['project_description'];
$project_city = $gotten_projects['project_city'];
$work_done = $gotten_projects['work_done'];
$project_year = $gotten_projects['project_year'];
$project_image = $gotten_projects['project_image'];
$project_country = $gotten_projects['project_country'];
$project_division = $gotten_projects['project_division'];

?>    
    
<div class="swiper-slide">
    <div class="s5s-project-content">

        <div class="s5s-project-image-box">
            <img src="assets/css/img/projects/<?php echo $project_image; ?>" alt="project-image"/>
        </div>

        <div class="s5s-project-items">
            <div class="s5s-project-title"><?php echo $project_title; ?></div>
            <div class="s5s-project-country"><?php echo $project_country; ?></div>
            <a href="projects-single.php?id=<?php echo $id; ?>" class="s5s-project-link theme-color">Details</a>
        </div>

    </div>
</div>
    
<?php
    }
?>
  
</div>
</div>
            
    <!-- Add Arrows -->
    <div class="fas fa-caret-left s5-slider-btn-next"></div>
    <div class="fas fa-caret-right s5-slider-btn-prev"></div>    
    
<?php
}else{
?>
    
            
<div class="s5w-header-title wow fadeInDown">No Projects Available for this division!</div>
        
        
<?php        
}
?>
    </div>
</div>
    

<!-- End Projects -->    
<?php
}
    
?>    
    
    
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