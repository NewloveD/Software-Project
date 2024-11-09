<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <link rel="canonical" href="https://www.example.com/gallery/">

        <!--Social Media Display-->
        <meta property="og:title" content="Project Two | Code Stitch Web Designs"/>
        <meta property="og:url" content="https://www.example.com/gallery/"/>
        
        <?php include ("../PageDetail/pagecss.php"); ?>
        
    <link rel="stylesheet" href="/assets/css/gallery.css">


        <title>Project Two | Code Stitch Web Designs</title>
    </head>
    <body>
        <!--Screen reader skip main nav-->
        <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>

        <!-- ============================================ -->
<!--                 Navigation                   -->
<!-- ============================================ -->
<?php include ("../NavPort/Headernav.php"); ?>

        <main id="main">
            

    <!-- ============================================ -->
    <!--                    LANDING                   -->
    <!-- ============================================ -->

    <section id="int-hero">
        <h1 id="home-h">Bowling For Autism</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="/assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg">
            <source media="(min-width: 601px)" srcset="/assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg">
            <img aria-hidden="true" decoding="async" src="/assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="eager" width="2500" height="1667">
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
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg" alt="new hallway" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture2">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling1.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling1.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling1.jpeg" alt="new home construction" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture3">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg" alt="building a new wall" loading="lazy" width="400" height="560">
                    </picture>
                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
                <!-- Row 2 -->
                <div class="cs-row cs-row-2">
                    <picture class="cs-picture cs-picture1">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling2.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling2.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling2.jpeg" alt="new kitchen" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture2">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling4.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling4.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling4.jpeg" alt="apartment addition" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture3">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling5.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling5.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling5.jpeg" alt="kew kitchen cabinets" loading="lazy" width="400" height="560">
                    </picture>
                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
                <!-- Row 3 -->
                <div class="cs-row cs-row-3">
                    <picture class="cs-picture cs-picture1">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling6.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling6.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling6.jpeg" alt="new kitchen" loading="lazy" width="400" height="560">
                    </picture>
                    <picture class="cs-picture cs-picture2">
                        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling7.jpeg">
                        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling7.jpeg">
                        <img aria-hidden="true" decoding="async" src="../assets/images/Gallery/Bowling-For-Autism/Bowling7.jpeg" alt="apartment addition" loading="lazy" width="400" height="560">
                    </picture>

                    <!-- To add more images, copy and paste this row's picture tags here in order from cs-picture-1 to cs-picture-3 and they will maintain the same layout-->
                </div>
            </div>
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
        <a href="../donate" class="cs-button-solid">Donate Now</a>
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

<?php include ("../NavPort/Footer.php"); ?>

    </body>
</html>