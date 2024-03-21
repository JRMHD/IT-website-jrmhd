<footer class="footer">
    <div class="footer-top section">
        <div class="container">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="logo">
                    <img src="img/JRMHD TECH LOGO TRANSPARENT PNG.png" alt="JRMHD Logo" class="logo-img">
                </a>
                <p class="footer-text">
                    Welcome to JRMHD, your destination for cutting-edge digital solutions. Let's transform your online
                    presence together.
                </p>


                <style>
                    .newsletter-form {
                        display: flex;
                        flex-wrap: wrap;
                    }

                    .input-group {
                        margin-bottom: 10px;
                        width: 100%;
                    }

                    input[type="text"],
                    input[type="email"] {
                        width: 100%;
                        padding: 10px;
                        border-radius: 5px;
                        border: 1px solid #ccc;
                        font-size: 16px;
                    }

                    button[type="submit"] {
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 16px;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    button[type="submit"]:hover {
                        background-color: #0056b3;
                    }
                </style>

                <form id="newsletter-form" class="newsletter-form">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Name" required>

                    </div>
                    <div class="input-group">
                        <input type="email" name="email_address" placeholder="Email" required>

                    </div>
                    <button type="submit" class="form-btn">Subscribe</button>

                </form>

                @if ($errors->has('email_address'))
                    <div class="error-message">{{ $errors->first('email_address') }}</div>
                @endif

                @if (session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

            </div>
            <ul class="footer-list">
                <li>
                    <p class="footer-list-title">Our Services</p>
                </li>
                <li>
                    <a href="#" class="footer-link">Web Development</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Web App Development</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Digital Marketing</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Graphic Designing</a>
                </li>
                <li>
                    <a href="#" class="footer-link">UI/UX Design</a>
                </li>
                <!-- Add more services as needed -->
            </ul>
            <ul class="footer-list">
                <li>
                    <p class="footer-list-title">Company</p>
                </li>
                <li>
                    <a href="{{ url('about') }}" class="footer-link">About JRMHD</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Portfolio</a>
                </li>
                <li>
                    <a href="#faq" class="footer-link">FQs</a>
                </li>
                <!-- Add more company-related links as needed -->
            </ul>
            <ul class="footer-list">
                <li>
                    <p class="footer-list-title">Contact Us</p>
                </li>
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
                <li class="footer-item">
                    <ul class="social-list">
                        <li>
                            <a href="https://www.facebook.com/JRMHDD?mibextid=ZbWKwL" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@reaganmukabana?_t=8kjcMrgu6oH&_r=1" class="social-link">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/Reaganmukabana?t=QXcK3CLUQ9cZACGfVKFAJw&s=09" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/reaganmukabana?igsh=dmhzcnE0Z3psbDhu"
                                class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <!-- Add more social media icons and links as needed -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">
                &copy; <span id="currentYear"></span> JRMHD | All Rights <a href="#" class="copyright-link"></a>
            </p>
            <ul class="footer-bottom-list">
                <li>
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="footer-bottom-link">Terms of Use</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{ asset('js/subscribe.js') }}"></script>


<script>
    function hideElement(element, time) {
        setTimeout(function() {
            element.style.display = 'none';
        }, time);
    }

    var errorMessage = document.querySelector('.error-message');
    var successMessage = document.querySelector('.alert-success');

    if (errorMessage) {
        hideElement(errorMessage, 6000);
    }

    if (successMessage) {
        hideElement(successMessage, 6000);
    }
</script>


<script>
    function getUserCountry() {
        return fetch('https://ipapi.co/json/')
            .then(response => response.json())
            .then(data => data.country_code);
    }

    async function setContactInfo() {
        const userCountryCode = await getUserCountry();

        const locationElement = document.getElementById('location');
        const phoneNumberElement = document.getElementById('phoneNumber');

        if (userCountryCode === 'US') {
            locationElement.textContent = 'New Jersey, USA';
            phoneNumberElement.href = 'tel:(862)201-3375';
            phoneNumberElement.textContent = '(862) 201-3375';
        } else if (['KE', 'TZ', 'UG', 'RW', 'BI', 'SS', 'ET', 'SO', 'DJ', 'ER', 'KM', 'MU', 'MG', 'SC', 'MZ', 'ZM',
                'ZW', 'MW', 'LS', 'NA', 'BW', 'SZ', 'ZA', 'AO', 'CF', 'TD', 'CM', 'CG', 'GQ', 'GA', 'GW', 'GN',
                'SL', 'LR', 'CI', 'BF', 'GH', 'TG', 'BJ', 'NE', 'NG', 'ML', 'SN', 'GM', 'CV', 'ST', 'MR', 'EH',
                'DZ', 'TN', 'LY', 'EG', 'SD'
            ].includes(userCountryCode)) {
            locationElement.textContent = 'Nairobi, Kenya';
            phoneNumberElement.href = 'tel:+254706378245';
            phoneNumberElement.textContent = '+254 706 378 245';
        } else {
            locationElement.textContent = 'New York, USA';
            phoneNumberElement.href = 'tel:(862)201-3375';
            phoneNumberElement.textContent = '(862) 201-3375';
        }
    }

    window.addEventListener('DOMContentLoaded', setContactInfo);


    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>
