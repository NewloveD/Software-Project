<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <link rel="canonical" href="https://www.example.com/about/">

        <!--Social Media Display-->
        <meta property="og:title" content="About | Code Stitch Web Designs"/>
        <meta property="og:url" content="https://www.example.com/about/"/>

        <?php  include ("../PageDetail/pagecss.php") ?>
        <link rel="stylesheet" href="../assets/css/about.css">
       
        <title>About | Code Stitch Web Designs</title>
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
        <h1 id="home-h">About Us</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="../assets/images/Gallery/National-Night-Out/Night2.jpeg">
            <source media="(min-width: 601px)" srcset="../assets/images/Gallery/National-Night-Out/Night2.jpeg">
            <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="eager" width="2500" height="1667">
        </picture>

    </section>


        </main>
        <!-- ============================================ -->
<!--                   Footer                     -->
<!-- ============================================ -->

    <?php include ("../NavPort/Footer.php") ?>

    </body>
</html>