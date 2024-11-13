<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Meta description for the page">
        <meta name="keywords" content="">
        <link rel="canonical" href="https://www.example.com/gallery-four/">

        <!--Social Media Display-->
        <meta property="og:title" content="Project One | Code Stitch Web Designs"/>
        <meta property="og:description" content="Meta description for the page"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://www.example.com/gallery-four/"/>
        <meta property="og:image" content="../assets/images/logo-small.png"/>
        <meta property="og:image:secure_url" content="../assets/images/logo-small.png"/>

        <!--Favicons-->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png?v1">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="../assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Preloads -->
        <link rel="preload" as="image" href="../assets/svgs/logo-white.svg">
        <link rel="preload" as="font" type="font/woff2" href="../assets/fonts/roboto-v29-latin-regular.woff2" crossorigin>
        <link rel="preload" as="font" type="font/woff2" href="../assets/fonts/roboto-v29-latin-700.woff2" crossorigin>

        <!-- Preload an image - tag not rendered if preloadImg is blank to stop console errors -->
        
            <link rel="preload" as="image" href="../assets/images/cabinets2.jpg"/>
        

        <!-- Sitewide Stylesheets and Scripts -->
        <link rel="stylesheet" href="../assets/css/root.css">
        <link rel="stylesheet" href="../assets/css/dark.css">
        <script defer src="../assets/js/dark.js"></script>
        <script defer src="../assets/js/nav.js"></script>

        
    <link rel="stylesheet" href="../assets/css/gallery.css">


        <title>Project One | Code Stitch Web Designs</title>
    </head>
    <body>
        <!--Screen reader skip main nav-->
        <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>

        <!-- ============================================ -->
<!--                 Navigation                   -->
<!-- ============================================ -->

<?php include ("../NavPort/Headernav.php") ?>

        <main id="main">
            

    <!-- ============================================ -->
    <!--                    LANDING                   -->
    <!-- ============================================ -->

    <section id="int-hero">
        <h1 id="home-h">National Night Out</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night.jpeg">
            <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night.jpeg">
            <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="eager" width="2500" height="1667">
        </picture>
    </section>

    <!-- ============================================ -->
    <!--                   Gallery                    -->
    <!-- ============================================ -->

    <section id="gallery">
        <div class="cs-container">
            <div class="cs-image-group">
                <!-- Row 1-->
                <div class="cs-row cs-row-1">
                    <picture class="cs-picture cs-picture1">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night4.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night4.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/National-Night-Out/Night4.jpeg" alt="new hallway" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture2">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/National-Night-Out/Night.jpeg" alt="new home construction" loading="lazy" width="400" height="560">
                    </picture>
                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
                <!-- Row 2 -->
                <div class="cs-row cs-row-2">
                  <picture class="cs-picture cs-picture1">
                    <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night3.jpeg">
                    <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night3.jpeg">
                    <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/National-Night-Out/Night3.jpeg" alt="new hallway" loading="lazy" width="400" height="560">
                </picture>
                <picture class="cs-picture cs-picture2">
                    <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night2.jpeg">
                    <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night2.jpeg">
                    <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/National-Night-Out/Night2.jpeg" alt="new home construction" loading="lazy" width="400" height="560">
                </picture>
                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
                <!-- Row 3 -->
                <div class="cs-row cs-row-3">
                  <picture class="cs-picture cs-picture1">
                    <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night1.jpeg">
                    <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night1.jpeg">
                    <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/National-Night-Out/Night1.jpeg" alt="new hallway" loading="lazy" width="400" height="560">
                </picture>

                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
            </div>
            <a href="../about" class="cs-button-solid">Learn more</a>
        </div>
    </section>

    <!-- ============================================ -->
<!--             Final Call to Action             -->
<!-- ============================================ -->

<section id="cta">
    <div class="container">
        <h2 class="title">
            Help Your Community
            <br/>
            Make a Donation Today
        </h2>
        <p>
            Your support can make a real difference! Click the button now to help us bring positive change to those who need it most. Every donation counts—be a part of something impactful today!
        </p>
        <a href="/donate" class="cs-button-solid">Donate Now</a>
    </div>
    <picture>
        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg">
        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg">
        <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="lazy" width="2500" height="1667">
    </picture>

</section>


        </main>
        <!-- ============================================ -->
<!--                   Footer                     -->
<!-- ============================================ -->

<?php include ("../NavPort/Footer.php") ?>

    </body>
</html>