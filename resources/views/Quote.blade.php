<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Quote - JRMHD</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" type="image/png" href="img/JRMHD-TECH-LOGO-TRANSPARENT-PNG.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 30px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .services {
            margin-top: 20px;
            font-size: 18px;
        }

        .services ul {
            list-style-type: none;
            padding: 0;
        }

        .services ul li {
            margin-bottom: 10px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }

        .go-home {
            float: left;
            margin-right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .go-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <button class="go-home" onclick="window.location.href='/'">Go Home</button>
        <div class="logo">
            <img src="img/jrmhdlogoblack.png" alt="JRMHD Logo">
        </div>
        <h1>Request a Quote</h1>
        <form action="{{ route('quote.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Your Phone Number" required>
            <select name="service" required>
                <option value="">Select a Service</option>
                <option value="Web Development">Web Development</option>
                <option value="Web App Development">Web App Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="Graphic Designing">Graphic Designing</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="Custom Service">Custom Service</option>
            </select>
            <input type="text" name="custom_service" placeholder="Enter Custom Service" style="display: none;">
            <textarea name="message" placeholder="Your Message" required></textarea>
            <input type="submit" value="Submit">
            <style>
                .success-message {
                    color: green;
                }
            </style>

            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif

        </form>
        <div class="services">
            <h2 style="text-align: center;">Our Services</h2>
            <ul style="text-align: center;">
                <li>Web Development</li>
                <li>Web App Development</li>
                <li>Digital Marketing</li>
                <li>Graphic Designing</li>
                <li>UI/UX Design</li>
            </ul>
        </div>
    </div>
    <script>
        document.querySelector('select[name="service"]').addEventListener('change', function() {
            if (this.value === 'Custom Service') {
                document.querySelector('input[name="custom_service"]').style.display = 'block';
            } else {
                document.querySelector('input[name="custom_service"]').style.display = 'none';
            }
        });
    </script>
</body>

</html>
