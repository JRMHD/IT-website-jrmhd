 <!--
    - #HEADER
  -->

 <header class="header" data-header>
     <div class="container">

         <a href="{{ url('/') }}" class="logo">
             <img src="img\jrmhdlogoblack.png" alt="JRMHD Logo" class="logo-img">
         </a>

         <nav class="navbar" data-navbar>

             <div class="wrapper">
                 <a href="{{ url('/') }}" class="logo">JRMHD</a>

                 <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                     <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                 </button>
             </div>

             <ul class="navbar-list">
                 <li>
                     <a href="{{ url('/') }}" class="navbar-link" data-nav-link>Home</a>
                 </li>
                 <li>
                     <a href="{{ url('about') }}" class="navbar-link" data-nav-link>About</a>
                 </li>
                 <li>
                     <a href="{{ url('service') }}" class="navbar-link" data-nav-link>Services</a>
                 </li>
                 <li>
                     <a href="{{ url('pricing') }}" class="navbar-link" data-nav-link>Pricing</a>
                 </li>
                 <li>
                     <a href="{{ url('contact') }}" class="navbar-link" data-nav-link>Contact Us</a>
                 </li>
             </ul>

         </nav>

         <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
             <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
         </button>

         <a href="#" class="btn-outline" id="callBtn">Let's talk</a>

         <div class="overlay" data-nav-toggler data-overlay></div>

     </div>
 </header>





 <script>
     function getUserCountry() {
         return fetch('https://ipapi.co/json/')
             .then(response => response.json())
             .then(data => data.country_code);
     }

     const callBtn = document.getElementById('callBtn');

     callBtn.addEventListener('click', async (e) => {
         e.preventDefault();

         const userCountryCode = await getUserCountry();

         let phoneNumber;
         if (userCountryCode === 'US') {
             phoneNumber = 'tel:(862)201-3375';
         } else if (['KE', 'TZ', 'UG', 'RW', 'BI', 'SS', 'ET', 'SO', 'DJ', 'ER', 'KM', 'MU', 'MG', 'SC',
                 'MZ', 'ZM', 'ZW', 'MW', 'LS', 'NA', 'BW', 'SZ', 'ZA', 'AO', 'CF', 'TD', 'CM', 'CG', 'GQ',
                 'GA', 'GW', 'GN', 'SL', 'LR', 'CI', 'BF', 'GH', 'TG', 'BJ', 'NE', 'NG', 'ML', 'SN', 'GM',
                 'CV', 'ST', 'MR', 'EH', 'DZ', 'TN', 'LY', 'EG', 'SD'
             ].includes(userCountryCode)) {
             phoneNumber = 'tel:+254706378245';
         } else {
             phoneNumber = 'tel:(862)201-3375';
         }

         window.location.href = phoneNumber;
     });
 </script>
