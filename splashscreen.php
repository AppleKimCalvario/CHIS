<!DOCTYPE html>
<html>
<head>
    <title>Splash Screen</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .splash {
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .splash img {
            width: 70%; /* Adjust this value as needed */
            max-height: 70vh; /* Adjust this value as needed */
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }
        .splash .loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .splash .loader span {
            font-size: 24px;
            color: #333333;
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="splash">
        <img src="images/Logo.png" alt="Splash Image">
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "choose.php";
        }, 2000); // Redirect to login.php after 3 seconds
    </script>
</body>
</html>
