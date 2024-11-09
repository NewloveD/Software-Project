<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <link rel="canonical" href="https://www.example.com/">
        <!--Social Media Display-->
        <meta property="og:url" content="https://www.example.com/"/>
        
 <?php  include ("../public/PageDetail/pagecss.php") ?>

    <!-- Script for Netlify Identity -->
    <script defer src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    <script defer>
        if (window.netlifyIdentity) {
            window
                .netlifyIdentity
                .on('init', (user) => {
                    if (!user) {
                        window
                            .netlifyIdentity
                            .on('login', () => {
                                document.location.href = '../admin/';
                            });
                    }
                });
        }
    </script>


        <title>A Glimpse of Hope</title>
    </head>
    <body>
        <!--Screen reader skip main nav-->
        <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>


<!--                 Navigation                   -->
        <?php include ("../public/NavPort/Headernav.php") ?>

        <main id="main">
        
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
        <a href="../public/contact/index.php" class="cs-button-solid">Donate Now</a>
    </div>
    <picture>
        <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling.jpeg">
        <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Bowling-For-Autism/Bowling3.jpeg">
        <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="lazy" width="2500" height="1667">
    </picture>

</section>

        </main>

<!--                   Footer                     -->

<?php  include ("../public/NavPort/Footer.php") ?>

    </body>
</html>