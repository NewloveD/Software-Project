<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header id="cs-navigation">
    <div class="cs-container">
        <!-- Nav Logo -->
        <a href="/" class="cs-logo" aria-label="back to home" tabindex="2">
            <img src="../assets/svgs/logo-black2.webp" alt="Company Logo" width="210" height="29" aria-hidden="true" decoding="async">
        </a>

        <!-- Navigation List -->
        <nav class="cs-nav" role="navigation">
            <!-- Mobile Nav Toggle -->
            <button class="cs-toggle" id="mobile-menu-toggle" aria-expanded="false" aria-controls="cs-expanded-ul" aria-label="mobile menu toggle" tabindex="4">
                <div class="cs-box" aria-hidden="true">
                    <span class="cs-line cs-line1"></span>
                    <span class="cs-line cs-line2"></span>
                    <span class="cs-line cs-line3"></span>
                </div>
            </button>

            <!-- Navigation Menu Wrapper -->
            <div class="cs-ul-wrapper">
                <ul id="cs-expanded" class="cs-ul">
                    <li class="cs-li"><a href="../Home/index.php" class="cs-li-link">Home</a></li>
                    <li class="cs-li"><a href="../about/index.php" class="cs-li-link">About Us</a></li>
                    <li class="cs-li cs-dropdown">
                        <button 
                            class="cs-li-link cs-dropdown-button" 
                            aria-expanded="false" 
                            aria-controls="dropdown-Gallery" 
                            aria-label="dropdown-Gallery">
                            Gallery
                            <img class="cs-drop-icon" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fdown.svg" alt="dropdown icon" width="15" height="15">
                        </button>
                        <ul class="cs-drop-ul" id="dropdown-Gallery">
                            <li class="cs-drop-li"><a href="../gallery-one/" class="cs-li-link cs-drop-link">Gallery One</a></li>
                            <li class="cs-drop-li"><a href="../gallery/" class="cs-li-link cs-drop-link">Gallery Two</a></li>
                            <li class="cs-drop-li"><a href="../gallery-three/" class="cs-li-link cs-drop-link">Gallery Three</a></li>
                            <li class="cs-drop-li"><a href="../gallery-four/" class="cs-li-link cs-drop-link">Gallery Four</a></li>
                            <li class="cs-drop-li"><a href="../gallery-five/" class="cs-li-link cs-drop-link">Gallery Five</a></li>
                        </ul>
                    </li>
                    <li class="cs-li"><a href="../contact/" class="cs-li-link">Contact</a></li>
                    <li class="cs-li"><a href="../events/" class="cs-li-link">Events</a></li>
                </ul>
            </div>
        </nav>

        <!-- Donate Button -->
        <a href="../donate/" class="cs-button-solid cs-nav-button"> Donate </a>

        <!-- Login or Logout Button -->
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            // Display "Sign Out" if the user is logged in
            echo '<a href="../login/logout.php" class="cs-button-solid cs-nav-button">Sign Out</a>';
        } else {
            // Display "Login" if the user is not logged in
            echo '<a href="../login/login.php" class="cs-button-solid cs-nav-button">Login</a>';
        }
        ?>

        <!-- Dark Mode Toggle -->
        <button id="dark-mode-toggle" aria-label="dark mode toggle" tabindex="3">
            <svg class="cs-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                <path d="M459.782 347.328c-4.288-5.28-11.488-7.232-17.824-4.96-17.76 6.368-37.024 9.632-57.312 9.632-97.056 0-176-78.976-176-176 0-58.4 28.832-112.768 77.12-145.472 5.472-3.712 8.096-10.4 6.624-16.832S285.638 2.4 279.078 1.44C271.59.352 264.134 0 256.646 0c-132.352 0-240 107.648-240 240s107.648 240 240 240c84 0 160.416-42.688 204.352-114.176 3.552-5.792 3.04-13.184-1.216-18.496z"/>
            </svg>
            <img class="cs-sun" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fsun.svg" alt="sun icon" width="15" height="15">
        </button>
    </div>
</header>
