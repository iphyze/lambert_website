<?php


$selectDivisionsTable = mysqli_query($db, "SELECT * FROM power_table");    
$selectedDivisionsTable = mysqli_fetch_assoc($selectDivisionsTable);
$selectDivisionsTableNum = mysqli_num_rows($selectDivisionsTable);

if($selectDivisionsTableNum > 0){
$section_bullet = $selectedDivisionsTable['section_bullet'];
$section_heading = $selectedDivisionsTable['section_heading'];
$section_text = nl2br($selectedDivisionsTable['section_text']);
$section_right_ht = $selectedDivisionsTable['section_right_ht'];
$section_right_text = nl2br($selectedDivisionsTable['section_right_text']);
$section_heading_two = $selectedDivisionsTable['section_heading_two'];
$section_two_text = $selectedDivisionsTable['section_two_text'];
$section_heading_three = $selectedDivisionsTable['section_heading_three'];
$section_three_text = $selectedDivisionsTable['section_three_text'];
$section_three_th_one = $selectedDivisionsTable['section_three_th_one'];
$section_three_th_two = $selectedDivisionsTable['section_three_th_two'];
$section_three_tt_one = $selectedDivisionsTable['section_three_tt_one'];
$section_three_tt_two = $selectedDivisionsTable['section_three_tt_two'];
$section_heading_four = $selectedDivisionsTable['section_heading_four'];
$section_four_text = $selectedDivisionsTable['section_four_text'];
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
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $section_text; ?>
            </div>
            
            
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                <?php echo $section_right_ht; ?>
            </div>

            <div class="strf-col-text wow fadeInUp">
                <?php echo $section_right_text; ?><br>
            </div>

            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">EPC: Engineering Procurement Construction</span><br>
            </div>


            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">BOT: Build Operate Transfer</span><br>
            </div>

            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">IPP/BOO: Build Own Operate - Independent Power Plant dedicated to your own needs</span><br>
            </div>
            
            
        </div>
        
        <div class="iso-flexbox-col">
            <div class="strf-col-text">
                
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
                SERVICES
            </div>

            <div class="strf-col-text wow fadeInUp">
                Lambert Power & Energy division is active in the fields of:<br>
            </div>

            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Power Generation</span><br>
            </div>


            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Power Distribution</span><br>
            </div>

            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Renewable Energy</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Energy Storage</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Energy Audit & Management</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Feasibility Studies (FEED & PRE-FEED)</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad wow fadeInUp">
            <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Operation & Maintenance</span><br>
            </div>
                
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
            <?php echo $section_heading_two; ?>
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $section_two_text; ?>
            </div>
            
            <!--
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            <?php //echo $section_heading_three; ?>
            </div>
            -->
            
            <div class="strf-col-text wow fadeInUp">
            <?php //echo $section_three_text; ?>
            
                
            <span class="theme-color"><?php echo $section_three_th_one; ?></span> <?php echo $section_three_tt_one; ?><br>
            
            <span class="theme-color"><?php echo $section_three_th_two; ?></span> <?php echo $section_three_tt_two; ?>
            </div><br>
            
            
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            RENEWABLE ENERGY
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            Lambert is a reputable provider of renewable energy and storage solutions serving residential and commercial establishments. We offer expertise in the design and installation of the following:
            </div>
            
            
            <?php
            
                $findList = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = 'Renewable Energy' && status = 'Active' ORDER BY created_at ASC");
                $foundList = mysqli_fetch_assoc($findList);
                $listNum = mysqli_num_rows($findList);

                if($listNum > 0){
                    foreach($findList as $foundList){
                        $list_content = $foundList['list_content'];
                        
            ?>
            
                <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_content; ?></span><br>
                </div>
            
            <?php
                    }
                }
                        
            ?><br>
            
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            <?php echo $section_heading_four; ?>
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            <?php echo $section_four_text; ?>
            </div>
            
            
            <?php
            
                $findEnergy = mysqli_query($db, "SELECT * FROM lists_table WHERE list_division = '{$_GET['pid']}' && list_heading = 'Energy Storage' && status = 'Active' ORDER BY created_at ASC");
                $foundEnergy = mysqli_fetch_assoc($findEnergy);
                $listNum = mysqli_num_rows($findEnergy);

                if($listNum > 0){
                    foreach($findEnergy as $foundEnergy){
                        $list_Energy = $foundEnergy['list_content'];
                        
            ?>
            
                <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text"><?php echo $list_Energy; ?></span><br>
                </div>
            
            <?php
                    }
                }
                        
            ?><br>
            
            
            <!--
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Biomass</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Landfill Gas</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Wind</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Waste to energy</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Waste heat and waste gas recovery</span><br>
            </div>
            -->
            
        </div>
        
        <div class="iso-flexbox-col">
            <div class="strf-col-text">    
                
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            ENERGY AUDIT & MANAGEMENT
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            We support you in making the most cost-effective investments for your energy setup, with good ROI and payback period.
            </div><br>
                
                
            <span class="theme-color wow fadeInUp">POWER ASSET SIZING</span><br>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Performing a comprehensive energy assessment, which includes energy production and consumption to eliminate waste in terms of capital and operating expenditure.</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">We eliminate waste and apply our power asset sizing model tailored to meet your energy needs.</span><br>
            </div><br>
                
                
                
            <span class="theme-color wow fadeInUp">SOLAR POWER ASSESSMENT</span><br>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Our energy consultants will provide you with a thorough evaluation to know if solar energy is a viable option that meet your needs, in a way that is best integrated to your power setup.</span><br>
            </div><br>
                
                
            <div class="strf-col-bold theme-color strf-col-medium  align-text-left wow fadeInUp">
            OPERATION & MAINTENANCE (O&M)
            </div>
            
            <div class="strf-col-text wow fadeInUp">
            In accordance with the requirements of international standards, our operation and maintenance services for power plants seek to offer a comprehensive customer-focused package. We meet the growing demand for renewable energy using innovative solutions and technological knowhow.<br><br>
            We provide a full scope of operation and maintenance services with our experienced operation and maintenance staff to guarantee high availability, high MW output, low heat rate and low overall O&M cost.

            </div>
                
                
            <!--    
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Photovoltaic solar and solar thermal</span><br>
            </div>
            
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Biomass</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Landfill Gas</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Wind</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Waste to energy</span><br>
            </div>
                
            <div class="isofb-box isofb-box-pad-inverse wow fadeInUp">
                <i class="fas fa-check theme-color mg-right-20"></i> <span class="isof-text">Waste heat and waste gas recovery</span><br>
            </div>
            -->
                
            </div>
        </div>
    </div>

    
</div>
    
<!-- End Iso Container -->