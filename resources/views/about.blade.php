 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>About Us | JRMHD Tech</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="keywords"
         content="JRMHD Tech, About Us, IT solutions, web development, graphic design, digital marketing">
     <meta name="description"
         content="Learn more about JRMHD Tech - Your trusted partner for professional IT solutions. Discover our expertise in web development, graphic design, and digital marketing services.">

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

     <!--
        - #ABOUT
      -->

     <section class="section about" id="about" aria-label="about">
         <div class="container">

             <figure class="about-banner">
                 <img src="./assets/images/about-banner.png" width="802" height="654" loading="lazy"
                     alt="about banner" class="w-100">
             </figure>

             <div class="about-content">

                 <h2 class="h2-sm section-title">Empowering Your Digital Presence</h2>

                 <p class="section-text">
                     At JRMHD, we specialize in crafting innovative digital solutions that propel your business forward.
                     Our team of experts is dedicated to understanding your unique needs and delivering tailored
                     strategies to ensure your success.
                 </p>

                 <ul class="about-list">

                     <li class="has-before">
                         Customized solutions to meet your specific requirements
                     </li>

                     <li class="has-before">
                         Expert guidance throughout your digital journey
                     </li>

                     <li class="has-before">
                         Satisfaction guaranteed with our commitment to excellence
                     </li>

                 </ul>

                 <div class="btn-group">
                     <a href="{{ url('contact') }}" class="btn btn-primary">Learn More</a>
                 </div>

             </div>

         </div>
     </section>



     <!--
        - #FEATURES
      -->

     <section class="section features" id="features" aria-label="features">
         <div class="container">

             <p class="section-subtitle text-center">-Why Choose Us-</p>

             <h2 class="h2 section-title text-center">Reasons to Choose Us</h2>

             <p class="section-text text-center">
                 Discover the advantages of choosing JRMHD for your digital needs.
             </p>

             <ul class="grid-list">

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="01">01</data>

                         <h3 class="h3 card-title">Affordable Pricing</h3>

                         <p class="card-text">
                             Enjoy competitive pricing tailored to your budget without compromising quality.
                         </p>

                     </div>
                 </li>

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="02">02</data>

                         <h3 class="h3 card-title">6 Months Free Support</h3>

                         <p class="card-text">
                             Benefit from six months of complimentary support to ensure your satisfaction.
                         </p>

                     </div>
                 </li>

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="03">03</data>

                         <h3 class="h3 card-title">Tailored Customer Strategy</h3>

                         <p class="card-text">
                             Receive personalized strategies to address your specific business needs and goals.
                         </p>

                     </div>
                 </li>

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="04">04</data>

                         <h3 class="h3 card-title">Premium Image Assets</h3>

                         <p class="card-text">
                             Access high-quality image assets to enhance the visual appeal of your digital presence.
                         </p>

                     </div>
                 </li>

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="05">05</data>

                         <h3 class="h3 card-title">Cutting-Edge Features</h3>

                         <p class="card-text">
                             Stay ahead of the competition with the latest and most advanced digital features.
                         </p>

                     </div>
                 </li>

                 <li>
                     <div class="features-card">

                         <data class="card-number" value="06">06</data>

                         <h3 class="h3 card-title">Transparent Pricing Policy</h3>

                         <p class="card-text">
                             Experience peace of mind with our transparent pricing policy and no hidden fees.
                         </p>

                     </div>
                 </li>

             </ul>

         </div>
     </section>



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

 </body>

 </html>
