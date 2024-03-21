<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us | Jrmhd.tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Jrmhd.tech, Contact Us, Contact Information, Email, Phone Number, Address">
    <meta name="description"
        content="Contact Jrmhd.tech for any queries. Find our contact information, including email, phone number, and address, and reach out to us with any questions or inquiries.">
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




    <section id="contact" style="background-color: #f9f9f9; padding: 50px 0; padding: 100px 0; text-align: center;">

        <h1 class="section-header" style="font-size: 2.5rem; font-weight: bold; color: #333; margin-bottom: 50px;">
            Contact Us</h1>

        <div class="contact-wrapper"
            style="display: flex; justify-content: center; align-items: flex-start; flex-wrap: wrap;">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form"
                style="max-width: 400px; width: 100%; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-bottom: 20px; text-align: left;">

                <div class="form-group" style="margin-bottom: 20px;">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                        value="" required
                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <input type="tel" class="form-control" id="phone" placeholder="Phone Number" name="phone"
                        value="" required
                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                        value="" required
                        style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>

                <textarea class="form-control" rows="5" placeholder="Message" name="message" required
                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>


                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif


                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND"
                    style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">Send</button>
            </form>

            <!-- Right contact page -->

            <div class="direct-contact-container"
                style="max-width: 400px; width: 100%; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-bottom: 20px; text-align: left;">
                <h2 style="font-size: 1.8rem; font-weight: bold; color: #333; margin-bottom: 20px;">Get in Touch</h2>
                <p style="font-size: 1.2rem; color: #555; margin-bottom: 20px;">Have a project in mind or need
                    assistance with our services? Feel free to reach out to us, and our team will be happy to help.</p>

                <ul class="contact-list" style="list-style: none; padding: 0; margin: 0;">
                    <li class="footer-item">
                        <ion-icon name="location" aria-hidden="true"></ion-icon>
                        <address class="contact-link address" id="location"></address>
                    </li>
                    <li class="footer-item">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                        <a href="#" class="contact-link" id="phoneNumber"></a>
                    </li>
                    <li class="footer-item">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                        <a href="mailto:info@jrmhd.com" class="contact-link">info@jrmhd.tech</a>
                    </li>

                </ul>

                <hr style="border-color: #ddd; margin-bottom: 20px;">

                <ul class="social-media-list" style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: inline-block; margin-right: 10px;"><a href="#" target="_blank"
                            class="contact-icon" style="color: #007bff; text-decoration: none; font-size: 2rem;"><i
                                class="fab fa-tiktok"></i></a></li>
                    <li style="display: inline-block; margin-right: 10px;"><a href="#" target="_blank"
                            class="contact-icon" style="color: #007bff; text-decoration: none; font-size: 2rem;"><i
                                class="fab fa-instagram"></i></a></li>
                    <li style="display: inline-block; margin-right: 10px;"><a href="#" target="_blank"
                            class="contact-icon" style="color: #007bff; text-decoration: none; font-size: 2rem;"><i
                                class="fab fa-facebook"></i></a></li>
                    <li style="display: inline-block; margin-right: 10px;"><a href="#" target="_blank"
                            class="contact-icon" style="color: #007bff; text-decoration: none; font-size: 2rem;"><i
                                class="fab fa-twitter"></i></a></li>
                    <li style="display: inline-block;"><a href="#" target="_blank" class="contact-icon"
                            style="color: #007bff; text-decoration: none; font-size: 2rem;"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

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
