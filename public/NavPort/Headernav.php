<header id="cs-navigation">
    <div class="cs-container">
        


        <!-- Nav Logo -->
        <?php echo '
        <a href="/" class="cs-logo" aria-label="back to home" tabindex="2">
            <img src="../assets/svgs/logo-black2.webp" alt="Company Logo" width="210" height="29" aria-hidden="true" decoding="async">
        </a>
        '; ?>

        <!-- Navigation List -->
        <nav class="cs-nav" role="navigation">
            
            <!-- Mobile Nav Toggle -->
            <?php echo '
            <button class="cs-toggle" id="mobile-menu-toggle" aria-expanded="false" aria-controls="cs-expanded-ul" aria-label="mobile menu toggle" tabindex="4">
                <div class="cs-box" aria-hidden="true">
                    <span class="cs-line cs-line1" aria-hidden="true"></span>
                    <span class="cs-line cs-line2" aria-hidden="true"></span>
                    <span class="cs-line cs-line3" aria-hidden="true"></span>
                </div>
            </button>
            '; ?>
            
            <!-- Navigation Menu Wrapper -->
            <?php echo '
            <div class="cs-ul-wrapper">
                <ul id="cs-expanded" class="cs-ul">
            '; ?>
                    
                    <!-- Home Link -->
                    <?php echo '
                    <li class="cs-li">
                        <a href="../" class="cs-li-link">Home</a>
                    </li>
                    '; ?>
                    
                    <!-- About Us Link -->
                    <?php echo '
                    <li class="cs-li">
                        <a href="../about/index.php" class="cs-li-link">About Us</a>
                    </li>
                    '; ?>
                    
                    <!-- Gallery Dropdown -->
                    <?php echo '
                    <li class="cs-li cs-dropdown">
                        <button 
                            class="cs-li-link cs-dropdown-button"
                            aria-expanded="false"
                            aria-controls="dropdown-Gallery"
                            aria-label="dropdown-Gallery"
                        >
                            Gallery
                            <img class="cs-drop-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fdown.svg" alt="dropdown icon" width="15" height="15" decoding="async" aria-hidden="true">
                        </button>
                        <ul class="cs-drop-ul" id="dropdown-Gallery">
                            <li class="cs-drop-li"><a href="../gallery-one/" class="cs-li-link cs-drop-link">Gallery One</a></li>
                            <li class="cs-drop-li"><a href="../gallery/" class="cs-li-link cs-drop-link">Gallery Two</a></li>
                            <li class="cs-drop-li"><a href="../gallery-three/" class="cs-li-link cs-drop-link">Gallery Three</a></li>
                            <li class="cs-drop-li"><a href="../gallery-four/" class="cs-li-link cs-drop-link">Gallery Four</a></li>
                            <li class="cs-drop-li"><a href="../gallery-five/" class="cs-li-link cs-drop-link">Gallery Five</a></li>
                        </ul>
                    </li>
                    '; ?>
                    
                    <!-- Donate Link -->
                    <?php echo '
                    <li class="cs-li">
                        <a href="../donate/" class="cs-li-link">Donate</a>
                    </li>
                    '; ?>
                    
                    <!-- Events Link -->
                    <?php echo '
                    <li class="cs-li">
                        <a href="../events/" class="cs-li-link">Events</a>
                    </li>
                    '; ?>
                    
                    <!-- Contact Us Link (Mobile Only) -->
                    <?php echo '
                    <li class="cs-li cs-hide-on-desktop">
                        <a href="../contact/" class="cs-li-link cs-active" aria-current="page">Contact Us</a>
                    </li>
                    '; ?>



                    
            <?php echo '
                </ul>
            </div>
            '; ?>
        </nav>

        <!-- Donate  Us Button -->
        <?php echo '
        <a href="../donate/" class="cs-button-solid cs-nav-button"> Donate </a>
        '; ?>

        <?php  echo '
        <a href="../login/login.php" class="cs-button-solid cs-nav-button">Login</a>
        ';  ?>

        <!-- Dark Mode Toggle -->
        <?php echo '
        <button id="dark-mode-toggle" aria-label="dark mode toggle" tabindex="3">
            <svg class="cs-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve">
                <path d="M459.782 347.328c-4.288-5.28-11.488-7.232-17.824-4.96-17.76 6.368-37.024 9.632-57.312 9.632-97.056 0-176-78.976-176-176 0-58.4 28.832-112.768 77.12-145.472 5.472-3.712 8.096-10.4 6.624-16.832S285.638 2.4 279.078 1.44C271.59.352 264.134 0 256.646 0c-132.352 0-240 107.648-240 240s107.648 240 240 240c84 0 160.416-42.688 204.352-114.176 3.552-5.792 3.04-13.184-1.216-18.496z"/>
            </svg>
            <img class="cs-sun" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fsun.svg" decoding="async" alt="sun icon" width="15" height="15">
        </button>
        '; ?>
        
    </div>
</header>