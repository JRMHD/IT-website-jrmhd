<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pricing | Jrmhd.tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Jrmhd.tech, Pricing, Web Development Pricing, Graphic Design Pricing, Digital Marketing Pricing">
    <meta name="description"
        content="Explore the pricing options for Jrmhd.tech's services, including web development, graphic design, and digital marketing. Find the package that best suits your needs and budget.">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" type="image/png" href="img\JRMHD-TECH-LOGO-TRANSPARENT-PNG.ico">




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




    <div class="pricing-container">
        <div class="pricing-plan">
            <div class="plan-title">Web Development</div>
            <div class="plan-price">$90 and up</div>
            <ul class="plan-features">
                <li>Custom Website Design</li>
                <li>Responsive Layout</li>
                <li>SEO Optimization</li>
                <li>Content Management System</li>
            </ul>
            <a href="{{ url('Quote') }}" class="plan-button">Get Started</a>
        </div>
        <div class="pricing-plan">
            <div class="plan-title">Web App Development</div>
            <div class="plan-price">$150 and up</div>
            <ul class="plan-features">
                <li>Custom Web Application</li>
                <li>User Authentication</li>
                <li>Database Integration</li>
                <li>API Development</li>
            </ul>
            <a href="{{ url('Quote') }}" class="plan-button">Get Started</a>
        </div>
        <div class="pricing-plan">
            <div class="plan-title">Digital Marketing</div>
            <div class="plan-price">$90 and up</div>
            <ul class="plan-features">
                <li>SEO</li>
                <li>Social Media Marketing</li>
                <li>Email Marketing</li>
                <li>Analytics and Reporting</li>
            </ul>
            <a href="{{ url('Quote') }}" class="plan-button">Get Started</a>
        </div>
        <div class="pricing-plan">
            <div class="plan-title">Graphic Designing</div>
            <div class="plan-price">$50 and up</div>
            <ul class="plan-features">
                <li>Logo Design</li>
                <li>Branding</li>
                <li>Print Design</li>
                <li>Illustration</li>
            </ul>
            <a href="{{ url('Quote') }}" class="plan-button">Get Started</a>
        </div>
        <div class="pricing-plan">
            <div class="plan-title">UI/UX Design</div>
            <div class="plan-price">$80 and up</div>
            <ul class="plan-features">
                <li>Wireframing</li>
                <li>Prototyping</li>
                <li>User Testing</li>
                <li>Responsive Design</li>
            </ul>
            <a href="{{ url('Quote') }}" class="plan-button">Get Started</a>
        </div>
    </div>
    <div class="custom-pricing">
        <p>For custom pricing or other services, please contact us.</p>
        {{-- <button class="plan-button">Contact Us</button> --}}
    </div>

    <a href="{{ url('contact') }}"
        style="display: inline-block; padding: 10px 20px; background-color: black; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; margin-bottom: 50px;">
        Contact Us
    </a>








    @include('footer')




    <!--
    - custom js link

  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
