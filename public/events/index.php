<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <link rel="canonical" href="https://www.example.com/events/">

        <!--Social Media Display-->
        <meta property="og:title" content="Blog | Code Stitch Web Designs"/>
        <meta property="og:url" content="https://www.example.com/events/"/>

            <?php include ("../PageDetail/pagecss.php"); ?>
    <link rel="stylesheet" href="/assets/css/blog.css">

        <title>Blog | Code Stitch Web Designs</title>
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
        <h1 id="home-h">Events</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="../assets/images/cabinets2-m.jpg">
            <source media="(min-width: 601px)" srcset="../assets/images/cabinets2.jpg">
            <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="eager" width="2500" height="1667">
        </picture>
    </section>

    <!-- ============================================ -->
    <!--              Main Blog Content               -->
    <!-- ============================================ -->

    <div class="blog-container main-content-wrapper">
        <!--Main content -->
        <div class="main-content">
            <!-- ============================================ -->
            <!--                 Blog Articles                -->
            <!-- ============================================ -->

            <article class="recent-articles">
                        <!--Main Article Image-->
                        <picture class="blog-mainImage">
                            <img
                            src="/assets/images/blog/landing.jpg"
                            alt="Kitchen"
                            width="795"
                            height="400"
                            decoding="async"/>
                        </picture>
                        <!--Article Info-->
                        <div class="article-group">
                            <div class="blog-authorGroup">
                                <!--Author Image-->
                                <picture class="blog-author-img">
                                    <img
                                    src="/assets/svgs/profile.svg"
                                    alt="house"
                                    width="32"
                                    height="32"
                                    decoding="async"/>
                                </picture>
                                <span class="blog-author">Code Stitch</span>
                                <span aria-hidden="true" class="blog-dot"></span>
                                <!--Blog Date-->
                                <span class="blog-date">Jun 8, 2023</span>
                            </div>
                            <h2 class="blog-h1">
                                Canitiem Saxa
                            </h2>
                            <p class="blog-desc">
                                Lorem markdownum trabeati dicere deus.
                            </p>
                            <a href="/blog/canitiem-saxa/" class="blog-link">Continue Reading</a>
                        </div>
                    </article><article class="recent-articles">
                        <!--Main Article Image-->
                        <picture class="blog-mainImage">
                            <img
                            src="/assets/images/blog/landing.jpg"
                            alt="Kitchen"
                            width="795"
                            height="400"
                            decoding="async"/>
                        </picture>
                        <!--Article Info-->
                        <div class="article-group">
                            <div class="blog-authorGroup">
                                <!--Author Image-->
                                <picture class="blog-author-img">
                                    <img
                                    src="/assets/svgs/profile.svg"
                                    alt="house"
                                    width="32"
                                    height="32"
                                    decoding="async"/>
                                </picture>
                                <span class="blog-author">Code Stitch</span>
                                <span aria-hidden="true" class="blog-dot"></span>
                                <!--Blog Date-->
                                <span class="blog-date">Jun 8, 2023</span>
                            </div>
                            <h2 class="blog-h1">
                                Sucos Creati
                            </h2>
                            <p class="blog-desc">
                                Lorem markdownum Talia. Carinae equis.
                            </p>
                            <a href="/blog/sucos-creati/" class="blog-link">Continue Reading</a>
                        </div>
                    </article><article class="recent-articles">
                        <!--Main Article Image-->
                        <picture class="blog-mainImage">
                            <img
                            src="/assets/images/blog/landing.jpg"
                            alt="Kitchen"
                            width="795"
                            height="400"
                            decoding="async"/>
                        </picture>
                        <!--Article Info-->
                        <div class="article-group">
                            <div class="blog-authorGroup">
                                <!--Author Image-->
                                <picture class="blog-author-img">
                                    <img
                                    src="/assets/svgs/profile.svg"
                                    alt="house"
                                    width="32"
                                    height="32"
                                    decoding="async"/>
                                </picture>
                                <span class="blog-author">Code Stitch</span>
                                <span aria-hidden="true" class="blog-dot"></span>
                                <!--Blog Date-->
                                <span class="blog-date">Jun 8, 2023</span>
                            </div>
                            <h2 class="blog-h1">
                                Acuti modo
                            </h2>
                            <p class="blog-desc">
                                Lorem markdownum tardantis unam mitissima dissimulator inposuit   corpus sintque tura tremenda, nec coetum.
                            </p>
                            <a href="/blog/acuti-modo/" class="blog-link">Continue Reading</a>
                        </div>
                    </article>
        </div>

        <!-- ============================================ -->
<!--                Featured Posts                -->
<!-- ============================================ -->

<div class="blog-sidebar">
    <!--Featured-->
    <div class="blog-featured-group">
        <span class="blog-header">Featured Posts</span><a class="blog-feature" href="/blog/canitiem-saxa/">
                <picture class="blog-featureImage">
                    <img
                        src="/assets/images/blog/landing.jpg" 
                        alt="Kitchen"
                        width="60"
                        height="60"
                        decoding="async">
                </picture>
                <div class="content-group">
                    <h3 class="feature-h3">Canitiem Saxa</h3>
                    <span class="feature-date">Jun 8, 2023</span>
                </div>
            </a></div>
    <!--Add anything else in the sidebar below-->
</div>
    </div>

        </main>
        <!-- ============================================ -->
<!--                   Footer                     -->
<!-- ============================================ -->

<?php include ("../NavPort/Footer.php"); ?>


    </body>
</html>