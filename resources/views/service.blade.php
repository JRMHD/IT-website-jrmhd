     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="utf-8">
         <title>Our Services | JRMHD Tech</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="keywords"
             content="JRMHD Tech, Our Services, IT solutions, web development, graphic design, digital marketing">
         <meta name="description"
             content="Explore JRMHD Tech's comprehensive range of IT solutions and services, including web development, graphic design, and digital marketing. Learn how we can help your business grow.">

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
        - #SERVICE
      -->

         <section class="section service" id="services" aria-label="service">
             <div class="container">

                 <p class="section-subtitle text-center">-Our Services-</p>

                 <h2 class="h2 section-title text-center">Empower Your Business with Our Services</h2>

                 <p class="section-text text-center">
                     Elevate your digital presence and reach new heights with our comprehensive range of services
                     tailored for your success.
                 </p>

                 <ul class="grid-list">

                     <li>
                         <div class="service-card has-after">

                             <figure class="card-icon">
                                 <img src="img/web-development.png" width="140" height="140" loading="lazy"
                                     alt="Web Development" class="img">
                             </figure>

                             <div class="card-content">

                                 <h3 class="h3 card-title">Web Development</h3>

                                 <p class="card-text">
                                     Build dynamic and responsive websites that reflect your brand identity and drive
                                     engagement.
                                 </p>

                                 <a href="#" class="btn-link">
                                     <span class="span">Read More</span>
                                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                 </a>

                             </div>

                         </div>
                     </li>

                     <li>
                         <div class="service-card has-after">

                             <figure class="card-icon">
                                 <img src="img/web-app-development.png" width="140" height="140" loading="lazy"
                                     alt="Web App Development" class="img">
                             </figure>

                             <div class="card-content">

                                 <h3 class="h3 card-title">Web App Development</h3>

                                 <p class="card-text">
                                     Create powerful web applications tailored to your business needs for seamless user
                                     experiences.
                                 </p>

                                 <a href="#" class="btn-link">
                                     <span class="span">Read More</span>
                                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                 </a>

                             </div>

                         </div>
                     </li>

                     <li>
                         <div class="service-card has-after">

                             <figure class="card-icon">
                                 <img src="img/digital-marketing.png" width="140" height="140" loading="lazy"
                                     alt="Digital Marketing" class="img">
                             </figure>

                             <div class="card-content">

                                 <h3 class="h3 card-title">Digital Marketing</h3>

                                 <p class="card-text">
                                     Drive traffic, generate leads, and boost conversions with our targeted digital
                                     marketing strategies.
                                 </p>

                                 <a href="#" class="btn-link">
                                     <span class="span">Read More</span>
                                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                 </a>

                             </div>

                         </div>
                     </li>

                     <li>
                         <div class="service-card has-after">

                             <figure class="card-icon">
                                 <img src="img/graphic-designing.png" width="140" height="140" loading="lazy"
                                     alt="Graphic Designing" class="img">
                             </figure>

                             <div class="card-content">

                                 <h3 class="h3 card-title">Graphic Designing</h3>

                                 <p class="card-text">
                                     Create visually stunning graphics and illustrations that leave a lasting impression
                                     on your audience.
                                 </p>

                                 <a href="#" class="btn-link">
                                     <span class="span">Read More</span>
                                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                 </a>

                             </div>

                         </div>
                     </li>

                     <li>
                         <div class="service-card has-after">

                             <figure class="card-icon">
                                 <img src="img/ui-ux-design.png" width="140" height="140" loading="lazy"
                                     alt="UI/UX Design" class="img">
                             </figure>

                             <div class="card-content">

                                 <h3 class="h3 card-title">UI/UX Design</h3>

                                 <p class="card-text">
                                     Craft intuitive and user-friendly interfaces that enhance user satisfaction and
                                     engagement.
                                 </p>

                                 <a href="#" class="btn-link">
                                     <span class="span">Read More</span>
                                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                 </a>

                             </div>

                         </div>
                     </li>

                 </ul>

                 <a href="{{ url('contact') }}" class="btn btn-primary">Explore More</a>

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
