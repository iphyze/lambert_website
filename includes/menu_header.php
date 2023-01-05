<!-- Header Container -->
    <div class="menu-container" id="menu-container">
        
        <div class="sm-header-container">
            <div class="sm-hc-flexbox">
                <div class="sm-hc-fb-col hide-display">

                    <div class="sm-box wow fadeInUp">
                        <span class="fas fa-phone sm-icon-left"></span>
                        <a href="tel:+23414628290" class="sm-box-text">+234 (0) 1 462 82 90</a>
                    </div>

                    <div class="sm-box wow fadeInUp">
                        <span class="fas fa-envelope sm-icon-left"></span>
                        <a href="mailto:info@lambertelectromec.com" class="sm-box-text">info@lambertelectromec.com</a>
                    </div>

                </div>

                <div class="sm-hc-fb-col">
                    <div class="sm-hc-icon-box">
                        <a href="https://www.facebook.com/LambertElectromec" class="fab fa-facebook-f sm-icon-right wow fadeInUp"></a>
                        <a href="https://twitter.com/LambertElecLtd?t=yMl94Fmx8GbpNS2zPJWZoQ&s=09" class="fab fa-twitter sm-icon-right wow fadeInUp"></a>
                        <a href="https://www.linkedin.com/company/lambert-electromec-ltd/" class="fab fa-linkedin-in sm-icon-right wow fadeInUp"></a>
                        <a href="https://instagram.com/lambertelectromec?igshid=YmMyMTA2M2Y=" class="fab fa-instagram sm-icon-right wow fadeInUp"></a>
                        <a href="#" class="fab fa-whatsapp sm-icon-right wow fadeInUp"></a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="main-menu-wrapper">
            
            <i class="open-btn fas fa-bars"></i>
            <i class="close-btn fas fa-bars"></i>
            
            <div class="mmw-col">
                <div class="logo-image">
                    <a href="index.php"><img src="assets/css/images/Lambert.png" alt="logo" class="logo-img"></a>
                </div>
            </div>
            
            <div class="mmw-col mbox">
                <div class="menu-box">
                    <ul class="menu-lh">
                        <li class="menu-l"><a href="index.php" class="menu-ll <?php if($home_active_link == "home"){ echo "active-menu-link"; }?>">Home</a></li>
                        
                        <li class="menu-l">
                            <a class="menu-ll <?php if($home_active_link == "about"){ echo "active-menu-link"; }?>">About</a>
                            <i class="fas fa-plus sub-menu-open-icon"></i>
                            <i class="fas fa-times sub-menu-close-icon"></i>
                            <ul class="menu-sublist">
                                <li class="menu-sublist-l"><a href="about.php" class="menu-sublist-ll">Profile</a></li>
                                <li class="menu-sublist-l"><a href="about.php#about-history-container" class="menu-sublist-ll">History</a></li>
                                <li class="menu-sublist-l"><a href="about.php#mission" class="menu-sublist-ll">Mission & Vision</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="menu-l">
                            <a class="menu-ll <?php if($home_active_link == "corporate"){ echo "active-menu-link"; }?>">Corporate</a>
                            <i class="fas fa-plus sub-menu-open-icon"></i>
                            <i class="fas fa-times sub-menu-close-icon"></i>
                            <ul class="menu-sublist">
                                <li class="menu-sublist-l"><a href="corporate.php" class="menu-sublist-ll">Solution Providers</a></li>
                                <li class="menu-sublist-l"><a href="corporate.php#hse-container-flexcol" class="menu-sublist-ll">HSE</a></li>
                                <li class="menu-sublist-l"><a href="corporate.php#iso-container" class="menu-sublist-ll">QMS/ISO</a></li>
                                <li class="menu-sublist-l"><a href="corporate.php#csr-container" class="menu-sublist-ll">CSR</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="menu-l">
                            
                            <a class="menu-ll <?php if($home_active_link == "divisions"){ echo "active-menu-link"; }?>">Divisions</a>
                            <i class="fas fa-plus sub-menu-open-icon"></i>
                            <i class="fas fa-times sub-menu-close-icon"></i>
                            <ul class="menu-sublist">
                                <li class="menu-sublist-l"><a href="division.php?pid=Building and Factories" class="menu-sublist-ll">Building & Factories</a></li>
                                <li class="menu-sublist-l"><a href="division.php?pid=Power Generation and Transmission" class="menu-sublist-ll">Power Solutions</a></li>
                                <li class="menu-sublist-l"><a href="division.php?pid=Data Center" class="menu-sublist-ll">Data Center</a></li>
                                <li class="menu-sublist-l"><a href="division.php?pid=Oil and Gas" class="menu-sublist-ll">Oil & Gas</a></li>
                                <!--
                                <li class="menu-sublist-l"><a href="division.php?pid=Facility Management" class="menu-sublist-ll">Facility Management</a></li>
                                -->
                            </ul>
                        
                        </li>
                        
                        
                        <li class="menu-l"><a href="projects.php" class="menu-ll <?php if($project_active_link == "project"){ echo "active-menu-link"; }?>">Projects</a></li>
                        <!--<li class="menu-l"><a href="partners.php" class="menu-ll">Partners</a></li>-->
                        
                        <li class="menu-l"><a href="facility_management.php" class="menu-ll <?php if($lem_active_link == "lem"){ echo "active-menu-link"; }?>">Maintenance</a></li>
                        
                        <li class="menu-l"><a href="index.php#contact-container" class="menu-ll">Contact</a></li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>
        
        <!--
        <div class="logolayer"></div>
            <div class="old-menu">
                <a href="index.html" class="old-menu-img-container">
                    <img src="assets/css/images/Lambert-3.png">
                </a>
                
                <div class="om-menu">
                    <div class="om-box">
                        <ul class="om-lh">
                            <li class="om-l"><a href="index.html" class="om-ll active-om-link">Home</a></li>

                            <li class="om-l">
                                <a class="om-ll">About</a>
                                <ul class="om-sublist">
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/About/Profile" class="om-sublist-ll">Profile</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/About/History" class="om-sublist-ll">History</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/About/Mission" class="om-sublist-ll">Mission & Vision</a></li>
                                </ul>
                            </li>

                            <li class="om-l">
                            
                                <a class="om-ll">Corporate</a>
                                <ul class="om-sublist">
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Corporate/Solutions" class="om-sublist-ll">Solution Providers</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Corporate/ISO" class="om-sublist-ll">QMS/ISO</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Corporate/HSE" class="om-sublist-ll">HSE</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Corporate/CSR" class="om-sublist-ll">CSR</a></li>
                                </ul>
                                
                            </li>
                            
                            
                            <li class="om-l">
                            
                                <a class="om-ll">Divisions</a>
                                <ul class="om-sublist">
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Divisions/Building-Factories/ELECTRICAL-ENGINEERING" class="om-sublist-ll">Building & Factories</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Divisions/Power-Generation-Transmission" class="om-sublist-ll">Power Generation</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Divisions/DATA-CENTER-TELECOM/Data-Center-Infrastructures" class="om-sublist-ll">Data Center</a></li>
                                    <li class="om-sublist-l"><a href="http://lambertelectromec.com/Divisions/Oil-Gas-E-I-Piping" class="om-sublist-ll">Oil & Gas</a></li>
                                </ul>
                                
                            </li>
                            
                            
                            <li class="om-l"><a href="http://lambertelectromec.com/Projects" class="om-ll">Projects</a></li>
                            <li class="om-l"><a href="http://lambertelectromec.com/Partners" class="om-ll">Partners</a></li>
                            <li class="om-l"><a href="#contact-container" class="om-ll">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        -->

    </div>