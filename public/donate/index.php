<!-- A fully fleshed-out <head>, dynamically changing based on client.json and the page front matter -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta tags -->
        <link rel="canonical" href="https://www.example.com/donate/">

        <!--Social Media Display-->
        <meta property="og:url" content="https://www.example.com/donate/"/>
        
        <?php  include ("../PageDetail/pagecss.php") ?>
        <link rel="stylesheet" href="../assets/css/donate.css">

        <title>Reviews | Code Stitch Web Designs</title>
    </head>
    <body>
        <!--Screen reader skip main nav-->
        <a class="skip" aria-label="skip to main content" href="#main" tabindex="1">Click To Skip To Main Content</a>

        <!-- ============================================ -->
<!--                 Navigation                   -->

        <?php   include ("../NavPort/Headernav.php") ?>

        <main id="main">
            

    <!-- ============================================ -->
    <!--                    LANDING                   -->
    <!-- ============================================ -->

    <section id="int-hero">
        <h1 id="home-h">Donate Today</h1>
        <picture class="cs-picture">
            <source media="(max-width: 600px)" srcset="../assets/images/Gallery/Partnering-with-Police-Unions/Police-Union3.jpeg">
                    <source media="(min-width: 601px)" srcset="../assets/images/Gallery/Partnering-with-Police-Unions/Police-Union3.jpeg">
            <img aria-hidden="true" decoding="async" src="../assets/images/landing.jpg" alt="new home" width="2500" height="1667" loading="eager">
        </picture>
    </section>

    <!-- ============================================ -->
    <!--                  Reviews                     -->
    <!-- ============================================ -->

    <section id="reviews">
        <div class="container">
            <!-- Existing review cards... -->
        </div>
    </section>

    <!-- ============================================ -->
    <!--                  Donation Section            -->
    <!-- ============================================ -->

    <section class="o-donate-hero" data-moduletype="Donate Hero">
        <h1 class="o-donate-hero__title">Donate to Glimpse of Hope</h1>
        <p class="o-donate-hero__text">
            Your generosity fuels our work. Help us continue to provide essential services and resources to those in need. Click to donate and be the spark of change!
        </p>
        <div class="o-donate-hero__form">
            <div class="m-donate-form js-donate-form" data-row="" data-modulecount="" data-contenttype="Donation Form" data-contentid="037306dc-91b8-4136-b489-f70b19f0e390">
                <form class="ps-donation_form_hero-" id="donation-form" name="donation-form">
                    <div class="m-donate-form__tabs" role="radiogroup" aria-labelledby="frequency">
                        <p class="visually-hidden" id="frequency">Frequency</p>
                        <label class="a-radio a-radio--large a-radio--boxed" for="onetime">
                            <input class="a-radio__field" type="radio" id="onetime" name="frequency">
                            <span class="a-radio__label">One-time</span>
                        </label>
                        <label class="a-radio a-radio--large a-radio--boxed" for="monthly">
                            <input class="a-radio__field" type="radio" id="monthly" name="frequency">
                            <span class="a-radio__label">Monthly</span>
                        </label>
                    </div>
                    <div class="m-donate-form__elements">
                        <div class="m-donate-form__amount" role="radiogroup" aria-labelledby="amount">
                            <p class="visually-hidden" id="amount">how much do you want to donate?</p>
                            <label class="a-radio a-radio--boxed" for="50">
                                <input class="a-radio__field" type="radio" id="50" name="amount">
                                <span class="a-radio__label">$25</span>
                            </label>
                            <label class="a-radio a-radio--boxed" for="100">
                                <input class="a-radio__field" type="radio" id="100" name="amount">
                                <span class="a-radio__label">$50</span>
                            </label>
                            <label class="a-radio a-radio--boxed" for="250">
                                <input class="a-radio__field" type="radio" id="250" name="amount">
                                <span class="a-radio__label">$100</span>
                            </label>
                            <label class="a-radio a-radio--boxed" for="500">
                                <input class="a-radio__field" type="radio" id="500" name="amount">
                                <span class="a-radio__label">$500</span>
                            </label>
                        </div>
                        <div class="m-donate-form__amount--other">
                            <div class="a-inline-field">
                                <label class="a-inline-field__label" for="other_amount">Other Amount</label>
                                <input class="a-inline-field__input" id="other_amount" type="number">
                            </div>
                        </div>
                        <div class="form-actions">
                            <!-- add code to link the donations to the info page to put in credit card number, name, email -->
                            <input type="submit" class="a-button a-button--tertiary" value="Next: Payment Information &gt;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="o-donate-hero__content">
            <div class="m-featured-content-donate">
                <h1 class="m-featured-content-donate__title">Donate to Teach For America</h1>
                <div class="m-featured-content-donate__text">
                    Students are counting on us. Your investment fuels Teach For America’s work towards educational excellence and equity for all children.
                </div>
                <div class="m-featured-content-donate__stats">
                    <div class="m-featured-content-donate__stats-wrapper">
                        <p class="m-featured-content-donate__stats-title">Driving Students’ Academic Growth</p>
                        <p class="m-featured-content-donate__stats-number">94%</p>
                        <p class="m-featured-content-donate__stats-text">
                            <em>94% of principals</em> agree that corps members have a positive impact on students’ academic growth.
                        </p>
                    </div>
                    <div class="m-featured-content-donate__stats-wrapper">
                        <p class="m-featured-content-donate__stats-title">Proving What’s Possible For Kids</p>
                        <p class="m-featured-content-donate__stats-number">70K</p>
                        <p class="m-featured-content-donate__stats-text">
                            <em>At nearly 70,000 strong</em>, our movement has expanded opportunity for millions of students since 1990.
                        </p>
                    </div>
                    <div class="m-featured-content-donate__stats-wrapper">
                        <p class="m-featured-content-donate__stats-title">Working Toward Educational Equity</p>
                        <p class="m-featured-content-donate__stats-number">4/5</p>
                        <p class="m-featured-content-donate__stats-text">
                            <em>4 out of 5 of alumni remain</em> working full-time in education or in careers that impact low-income communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        </main>
        <!-- ============================================ -->
<!--                   Footer                     -->
<!-- ============================================ -->

    <?php include ("../NavPort/Footer.php") ?>

    </body>
</html>