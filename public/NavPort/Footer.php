<footer id="footer">
    <div class="container">
        
        <!-- Left Section with Logo -->
        <?php echo '
        <div class="left-section">
            <a class="logo" href="/">
                <img loading="lazy" decoding="async" src="../assets/svgs/logo-black2.webp" alt="logo" width="264" height="78">
            </a>
        </div>
        '; ?>

        <!-- Right Section with Lists -->
        <div class="right-section">
            <div class="lists">
                
                <!-- Information Section -->
                <?php echo '
                <ul>
                    <li><h2>Information</h2></li>
                    <li><a href="../">Home</a></li>
                    <li><a href="../about">About Us</a></li>
                    <li><a href="../projects">Projects</a></li>
                    <li><a href="../reviews">Reviews</a></li>
                    <li><a href="../contact">Contact</a></li>
                </ul>
                '; ?>

                <!-- Services Section -->
                <?php echo '
                <ul>
                    <li><h2>Services</h2></li>
                    <li>Service1</li>
                    <li>Service2</li>
                    <li>Service4</li>
                    <li>Service5</li>
                </ul>
                '; ?>

                <!-- Contact Section -->
                <?php echo '
                <ul>
                    <li><h2>Contact</h2></li>
                    <li>
                        <a href="../contact">
                            First Address Line<br>
                            Second Address Line<br>
                            Denver, CO 80206
                        </a>
                    </li>
                    <li>
                        <a href="tel:555-779-4407">T: (555) 779-4407</a>
                    </li>
                    <li>
                        <a href="mailto:help@codestitch.app">Click to Email</a>
                    </li>
                </ul>
                '; ?>

            </div>
        </div>
    </div>

    <!-- Footer Credit Section -->
    <?php echo '
    <div class="credit">
        <span>Designed and Hand Coded by</span>
        <a href="../" target="_blank" rel="noopener">Your Company Name</a>
        <span class="copyright">Copyright 2024 - Present</span>
    </div>
    '; ?>

</footer>
