<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard meta tags -->
    <link rel="canonical" href="https://www.example.com/">

    <!-- Social Media Display -->
    <meta property="og:title" content="Home | Code Stitch Web Designs"/>
    <meta property="og:url" content="https://www.example.com/"/>

    <!-- Include shared CSS and page-specific styles -->
    <?php include("../PageDetail/pagecss.php"); ?>
    <link rel="stylesheet" href="../assets/css/home.css">

    <title>Home | Code Stitch Web Designs</title>
</head>
<body>
    <!-- Screen reader skip main navigation -->
    <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>

    <!-- ============================================ -->
    <!--                   Navigation                 -->
    <!-- ============================================ -->
    <?php include("../NavPort/Headernav.php"); ?>

    <!-- Main content -->
    <main id="main">
        <!-- ============================================ -->
        <!--                 HERO SECTION                -->
        <!-- ============================================ -->
        <section id="hero">
            <h1 id="home-h">Welcome to Code Stitch Web Designs</h1>
            <picture>
                <source media="(max-width: 600px)" srcset="../assets/images/Hero/mobile-hero.jpg">
                <source media="(min-width: 601px)" srcset="../assets/images/Hero/desktop-hero.jpg">
                <img aria-hidden="true" decoding="async" src="../assets/images/Hero/desktop-hero.jpg" alt="Code Stitch Web Designs Hero Image" loading="eager" width="2500" height="1667">
            </picture>
        </section>

        <!-- ============================================ -->
        <!--              ABOUT SECTION                  -->
        <!-- ============================================ -->
        <section id="about">
            <div class="content">
                <h2>About Us</h2>
                <p>
                    At Code Stitch Web Designs, we specialize in crafting beautiful and functional websites that meet your unique needs. 
                    Our team is dedicated to delivering quality and ensuring your satisfaction at every step of the process.
                </p>
                <a href="../about/index.php" class="cta-button">Learn More About Us</a>
            </div>
        </section>

        <!-- ============================================ -->
        <!--                SERVICES SECTION             -->
        <!-- ============================================ -->
        <section id="services">
            <h2>Our Services</h2>
            <div class="service-cards">
                <div class="card">
                    <h3>Custom Web Design</h3>
                    <p>We design tailored websites that reflect your brand and engage your audience.</p>
                </div>
                <div class="card">
                    <h3>SEO Optimization</h3>
                    <p>Improve your visibility on search engines and drive more traffic to your site.</p>
                </div>
                <div class="card">
                    <h3>eCommerce Solutions</h3>
                    <p>Create a seamless shopping experience for your customers with our eCommerce services.</p>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!--              CONTACT SECTION                -->
        <!-- ============================================ -->
        <section id="contact">
            <h2>Get in Touch</h2>
            <p>
                Have a question or need a quote? Reach out to us, and we’ll get back to you as soon as possible!
            </p>
            <a href="../contact/" class="cta-button">Contact Us</a>
        </section>
    </main>

    <!-- ============================================ -->
    <!--                   Footer                     -->
    <!-- ============================================ -->
    <?php include("../NavPort/Footer.php"); ?>
</body>
</html>
