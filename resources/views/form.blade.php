<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Emails</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="file"] {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success {
            color: #4caf50;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Upload Email Addresses</h1>
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('email.send') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file">Choose a TXT file with email addresses:</label><br>
            <input type="file" id="file" name="file"><br><br>
            <button type="submit">Send Emails</button>
        </form>
    </div>
</body>

</html>
