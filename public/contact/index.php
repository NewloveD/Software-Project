<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
         <?php include ("../PageDetail/pagecss.php")    ?>
         <link rel="stylesheet" href="../assets/css/contact.css">
         <!-- link to contact page once givin domail name-->
        <link rel="canonical" href="https://www.example.com/contact/">
        <!-- link to contact page once givin domail name-->
        <meta property="og:url" content="https://www.example.com/contact/"/>

        <title>Contact | Code Stitch Web Designs</title>
    </head>
    <body>
        <!--Screen reader skip main nav-->
        <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>

<!--                 Navigation                   -->

        <?php include ("../NavPort/Headernav.php")        ?>
        <main id="main">
            
    <!-- ============================================ -->
    <!--                    LANDING                   -->
    <!-- ============================================ -->

    <section id="int-hero">
        <h1 id="home-h">Contact Us</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Partnering-with-Police-Unions/Police-Union3.jpeg">
                    <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Partnering-with-Police-Unions/Police-Union3.jpeg">
            <img aria-hidden="true" decoding="async" src="../assets/images/cabinets2.jpg" alt="kitchen cabinets" loading="eager" width="2500" height="1667">
        </picture>
    </section>

    <!-- ============================================ -->
    <!--                Contact Form                  -->
    <!-- ============================================ -->

    <section id="cs-contact">
        <div class="cs-container">
            <form id="cs-form" name="Contact Form" method="post">
                <div class="cs-content">
                    <span class="cs-topper">Contact</span>
                    <h2 class="cs-title">Get in Touch</h2>
                    <p class="cs-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus elementum ullamcorper ipsum porttitor aliquam. Id magna urna ultrices odio pulvinar. Sed ut.
                    </p>
                </div>
                <label>
                    Name
                    <input required type="text" id="name" name="name" placeholder="Name">
                </label>
                <label>
                    Email
                    <input required type="text" id="email" name="email" placeholder="Email">
                </label>
                <label>
                    Phone
                    <input required type="text" id="phone" name="phone" placeholder="Phone">
                </label>
                <label>
                    How Did You Find Us
                    <input type="text" id="find" name="find-us" placeholder="How did you find us?">
                </label>
                <label class="cs-label-message">
                    Message
                    <textarea required name="Message" id="message" placeholder="Write message..."></textarea>
                </label>
                <button class="cs-button-solid" type="submit">Submit Message</button>
            </form>
            <div class="cs-right-section">
                <!--Email-->
                <span class="cs-header">Email</span>
                <a class="cs-link" href="mailto:help@codestitch.app">help@codestitch.app</a>
                <!--Phone-->
                <span class="cs-header">Phone</span>
                <a class="cs-link" href="tel:555-779-4407">(555) 779-4407</a>
                <!--Address-->
                <span class="cs-header">Address</span>
                <a class="cs-link" href="https://goo.gl/maps/UAQn4vuGDiwv7DV39">
                    First Address Line,
                    <br/>
                    Second Address Line,
                    <br/>
                    <span class="cs-block">
                        Denver
                        CO
                        80206
                    </span>
                </a>

                <!-- Background Image-->
                <picture class="cs-bg-picture">
                    <source media="(min-width: 601px)" srcset="../assets/images/skyscraper.jpg">
                    <img aria-hidden="true" decoding="async" src="../assets/images/skyscraper.jpg" alt="building" loading="lazy" width="2500" height="1667">
                </picture>

            </div>
        </div>
    </section>

        </main>

<!--                   Footer                     -->
 <?php include ("../NavPort/Footer.php") ?>
    </body>

</html>