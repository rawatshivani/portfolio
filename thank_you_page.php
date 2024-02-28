<!-- thank_you_page.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        color: #333;
        line-height: 1.6;
        text-align: center;
        margin: 0;
        padding: 20px;
    }

    h1 {
        font-size: 36px;
        color: #007bff;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .container p {
        margin-bottom: 30px;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        font-size: 16px;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .thankyou-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url('img/bg.jpg');
        /* Replace with your own image */
        background-size: cover;
        background-position: center;
        opacity: 0.5;
    }
    </style>
</head>

<body>
    <div class="thankyou-bg"></div>
    <div class="container">
        <h1>Thank you for your submission!</h1>
        <p>We appreciate your message and will get back to you shortly.</p>
        <a href="index.php" class="btn">Go Back to Contact Form</a>
    </div>
</body>

</html>