<?php


$selectDivisionsTable = mysqli_query($db, "SELECT * FROM building_and_factories_table");    
$selectedDivisionsTable = mysqli_fetch_assoc($selectDivisionsTable);
$selectDivisionsTableNum = mysqli_num_rows($selectDivisionsTable);

if($selectDivisionsTableNum > 0){
$page_title = $selectedDivisionsTable['page_title'];
$section_bullet = $selectedDivisionsTable['section_bullet'];
$section_heading = $selectedDivisionsTable['section_heading'];
$content_one_heading = $selectedDivisionsTable['content_one_heading'];
$content_one_text = nl2br($selectedDivisionsTable['content_one_text']);
$content_two_heading = $selectedDivisionsTable['content_two_heading'];
$content_two_text = $selectedDivisionsTable['content_two_text'];
$content_right_heading = $selectedDivisionsTable['content_right_heading'];
$content_right_subheading = $selectedDivisionsTable['content_right_subheading'];
$content_right_text = $selectedDivisionsTable['content_right_text'];
$content_right_subheading_two = $selectedDivisionsTable['content_right_subheading_two'];
$content_right_text_two = $selectedDivisionsTable['content_right_text_two'];
$content_right_subheading_three = $selectedDivisionsTable['content_right_subheading_three'];
$content_right_text_three = $selectedDivisionsTable['content_right_text_three'];
$content_right_subheading_four = $selectedDivisionsTable['content_right_subheading_four'];
$content_right_text_four = $selectedDivisionsTable['content_right_text_four'];

}


?>


<!-- ISO Container -->
<div class="iso-container">
    
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
            <div class="cc-header-text wow fadeInLeft"><?php echo $section_heading; ?></div>
        </div>
    </div>
    
<div class="iso-flexbox iso-fb-jus-top">
        
        <div class="iso-flexbox-col">
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            <?php echo $content_one_heading; ?>
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $content_one_text; ?>
            </div>
            
            
            <?php
            
                $getHeadingOne = mysqli_query($db, "SELECT * FROM list_headings_table WHERE id = 1");
                $gottenHeaderOne = mysqli_fetch_assoc($getHeadingOne);
            
                if($gottenHeaderOne){
                    $list_heading_name = $gottenHeaderOne['list_heading_name'];
                    echo '<span class="theme-color wow fadeInUp">' . $list_heading_name . '</span><br>';
                }
            ?>
                
            
                <?php
            
                    $findList = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = '$list_heading_name' && status = 'Active' ORDER BY created_at ASC");
                    $foundList = mysqli_fetch_assoc($findList);
                    $listNum = mysqli_num_rows($findList);
            
                    if($listNum > 0){
                        foreach($findList as $foundList){
                            $list_content = $foundList['list_content'];
                ?>
            
                    <div class="isofb-box isofb-box-pad wow fadeInUp">
                    <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_content; ?></span><br>
                    </div>
            
                <?php
                        }
                    }
                ?>
                    
                <br>
            
            
                
                <?php
            
                $getHeadingTwo = mysqli_query($db, "SELECT * FROM list_headings_table WHERE id = 2");
                $gottenHeaderTwo = mysqli_fetch_assoc($getHeadingTwo);
            
                if($gottenHeaderTwo){
                    $list_heading_name_two = $gottenHeaderTwo['list_heading_name'];
                    echo '<span class="theme-color wow fadeInUp">' . $list_heading_name_two . '</span><br>';
                    }
                ?>
                
                <?php
            
                    $findList = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = '$list_heading_name_two' && status = 'Active' ORDER BY created_at ASC");
                    $foundList = mysqli_fetch_assoc($findList);
                    $listNum = mysqli_num_rows($findList);
            
                    if($listNum > 0){
                        foreach($findList as $foundList){
                            $list_content = $foundList['list_content'];
                ?>
            
                    <div class="isofb-box isofb-box-pad wow fadeInUp">
                    <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_content; ?></span><br>
                    </div>
            
                <?php
                        }
                    }
                ?>
                    
                <br>
            
        </div>
        
        <div class="iso-flexbox-col">
            <div class="strf-col-text">
                
                <?php
            
                $getHeadingThree = mysqli_query($db, "SELECT * FROM list_headings_table WHERE id = 3");
                $gottenHeaderThree = mysqli_fetch_assoc($getHeadingThree);
            
                if($gottenHeaderThree){
                    $list_heading_name_three = $gottenHeaderThree['list_heading_name'];
                    echo '<span class="theme-color wow fadeInUp">' . $list_heading_name_three . '</span><br>';
                    }
                ?>
                
                <?php
            
                    $findList = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = '$list_heading_name_three' && status = 'Active' ORDER BY created_at ASC");
                    $foundList = mysqli_fetch_assoc($findList);
                    $listNum = mysqli_num_rows($findList);
            
                    if($listNum > 0){
                        foreach($findList as $foundList){
                            $list_content_three = $foundList['list_content'];
                ?>
            
                    <div class="isofb-box isofb-box-pad wow fadeInUp">
                    <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_content_three; ?></span><br>
                    </div>
            
                <?php
                        }
                    }
                ?>
                    
                <br>
                
            </div>
        </div>
    </div>

    
</div>
    
<!-- End Iso Container -->    
    
    
<!-- ISO Container -->
<div class="iso-container iso-container-inverted">
    
    <i class="fas fa-cogs wow fadeInDown bg-faded-icons"></i>
    <i class="fas fa-helmet-safety wow fadeInDown bg-faded-icons bg-fi-2"></i>
    <i class="far fa-lightbulb wow fadeInDown bg-faded-icons bg-fi-3"></i>
    <i class="fas fa-cog wow fadeInDown bg-faded-icons bg-fi-4"></i>
    <i class="fas fa-screwdriver-wrench wow fadeInDown bg-faded-icons bg-fi-5"></i>
    <i class="fas fa-toolbox wow fadeInDown bg-faded-icons bg-fi-6"></i>
    
    <div class="iso-flexbox iso-fb-jus-top">
        
        <div class="iso-flexbox-col">
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            <?php echo $content_two_heading; ?>
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $content_two_text; ?>
            </div><br>
            
            
            
            <?php
            
                $getHeadingFour = mysqli_query($db, "SELECT * FROM list_headings_table WHERE id = 4");
                $gottenHeaderFour = mysqli_fetch_assoc($getHeadingFour);
            
                if($gottenHeaderFour){
                    $list_heading_name_four = $gottenHeaderFour['list_heading_name'];
                    echo '<span class="theme-color wow fadeInUp">' . $list_heading_name_four . '</span><br>';
                    }
            ?>
            
            
            
            <?php
            
                    $findList = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = '$list_heading_name_four' && status = 'Active' ORDER BY created_at ASC");
                    $foundList = mysqli_fetch_assoc($findList);
                    $listNum = mysqli_num_rows($findList);
            
                    if($listNum > 0){
                        foreach($findList as $foundList){
                            $list_content_four = $foundList['list_content'];
                ?>
            
                    <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                    <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_content_four; ?></span><br>
                    </div>
            
                <?php
                        }
                    }
                ?>
                    
                <br>
            
        </div>
        
        <div class="iso-flexbox-col">
            <div class="strf-col-text">
                
                <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $content_right_heading; ?>
                </div>
                
                <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $content_right_subheading; ?>
                </div>

                <div class="strf-col-text wow fadeInUp">
                <?php echo $content_right_text; ?>
                </div>
                
                <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $content_right_subheading_two; ?>
                </div>

                <div class="strf-col-text wow fadeInUp">
                <?php echo $content_right_text_two; ?>
                </div>
                
                
                <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $content_right_subheading_three; ?>
                </div>

                <div class="strf-col-text wow fadeInUp">
                <?php echo $content_right_text_three; ?>
                </div>
                
                <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $content_right_subheading_four; ?>
                </div>

                <div class="strf-col-text wow fadeInUp">
                <?php echo $content_right_text_four; ?>
                </div>
                
            </div>
        </div>
    </div>

    
</div>
    
<!-- End Iso Container -->