<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Welcome to JRMHD Tech - Your one-stop destination for professional IT solutions. We specialize in web development, graphic design, and digital marketing services. Contact us today to elevate your online presence!">
    <meta name="keywords"
        content="JRMHD Tech, IT solutions, web development, graphic design, digital marketing, online presence">
    <meta name="author" content="JRMHD Tech">
    <title>JRMHD Tech | Professional IT Solutions</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" type="image/png" href="img/JRMHD-TECH-LOGO-TRANSPARENT-PNG.ico">


    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body>

    @include('navbar')




    <main>
        <article>

            <!--
        - #HERO
      -->





            <section class="section hero" id="home" aria-label="hero">
                <div class="container">
                    <div class="hero-content">
                        <p class="hero-subtitle has-before">Welcome to JRMHD Services</p>
                        <h1 class="h1 hero-title">
                            < Transforming Your Digital Presence />
                        </h1>
                        <p class="hero-text">
                            At JRMHD Services, we specialize in crafting innovative solutions tailored to enhance your
                            digital presence. Whether you need a stunning website, robust web application, or engaging
                            mobile app, we've got you covered.
                        </p>
                        <div class="btn-group">
                            <a href="{{ url('service') }}" class="btn btn-primary">Explore Our Services</a>
                            <button class="flex-btn">
                                <div class="btn-icon">
                                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                                </div>
                                <span class="span">How it works</span>
                            </button>
                        </div>
                    </div>
                    <figure class="hero-banner has-before img-holder" style="--width: 650; --height: 650;">
                        <img src="img\group.jpg" width="650" height="650" alt="hero banner" class="img-cover">
                    </figure>
                </div>
            </section>

            <!--
        - #FAQ
      -->



            <div
                style="display: flex; justify-content: space-between; align-items: center; background-color: #f5f5f5; padding: 20px; border-radius: 10px; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);">
                <div>
                    <a href="#" style="text-decoration: none;">
                        <div
                            style="display: inline-block; padding: 8px 12px; background-color: #007bff; color: #fff; border-radius: 5px; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);">
                            <span id="phoneNumber" style="font-size: 18px; font-weight: bold;"></span>
                        </div>
                    </a>
                    <br>
                    <span style="font-size: 14px; color: #555; font-weight: bold;">We're here to help! Contact us for
                        inquiries or assistance.</span>
                </div>
                <a href="{{ url('Quote') }}" style="text-decoration: none;">
                    <button
                        style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; transition: background-color 0.3s;">
                        Request a Free Quote
                    </button>
                </a>
            </div>







            <section class="section faq" aria-label="frequently asked questions">
                <div class="container">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Frequently Asked Questions</h2>
                        <a href="{{ url('contact') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                    <ul class="grid-list">
                        <li>
                            <div class="faq-card">
                                <button class="card-action" data-accordion-action>
                                    <h3 class="h3 card-title">01. What services does JRMHD offer?</h3>
                                    <div class="action-icon">
                                        <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                                        <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                                    </div>
                                </button>
                                <div class="card-content">
                                    <p>
                                        JRMHD offers a wide range of services including web development, mobile app
                                        development, UI/UX design, digital marketing, and more. We tailor our services
                                        to meet the unique needs of each client.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-card">
                                <button class="card-action" data-accordion-action>
                                    <h3 class="h3 card-title">02. How can I request a quote from JRMHD?</h3>
                                    <div class="action-icon">
                                        <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                                        <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                                    </div>
                                </button>
                                <div class="card-content">
                                    <p>
                                        Requesting a quote from JRMHD is easy! Simply fill out our contact form or give
                                        us a call, and one of our representatives will get back to you shortly with a
                                        personalized quote for your project.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-card">
                                <button class="card-action" data-accordion-action>
                                    <h3 class="h3 card-title">03. Does JRMHD provide ongoing support for projects?</h3>
                                    <div class="action-icon">
                                        <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                                        <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                                    </div>
                                </button>
                                <div class="card-content">
                                    <p>
                                        Yes, JRMHD offers ongoing support for all projects. Whether you need technical
                                        assistance, updates, or maintenance, our dedicated support team is here to help
                                        you every step of the way.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-card">
                                <button class="card-action" data-accordion-action>
                                    <h3 class="h3 card-title">04. What industries does JRMHD specialize in?</h3>
                                    <div class="action-icon">
                                        <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                                        <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                                    </div>
                                </button>
                                <div class="card-content">
                                    <p>
                                        JRMHD specializes in serving a wide range of industries including technology,
                                        healthcare, finance, e-commerce, and more. Our expertise allows us to deliver
                                        tailored solutions that meet the unique needs of each industry.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="faq-card">
                                <button class="card-action" data-accordion-action>
                                    <h3 class="h3 card-title">05. Can I see examples of projects JRMHD has completed?
                                    </h3>
                                    <div class="action-icon">
                                        <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                                        <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                                    </div>
                                </button>
                                <div class="card-content">
                                    <p>
                                        Absolutely! You can view our portfolio to see examples of projects we've
                                        completed for our clients. We take pride in showcasing our work and
                                        demonstrating the quality and effectiveness of our services.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>


        </article>
    </main>





    @include('footer')




    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65f89886a0c6737bd122384e/1hp9h7khb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->
</body>

</html>
