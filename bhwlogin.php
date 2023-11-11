<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add CSS styles here */
        @font-face {
            font-family: 'Poppins-Bold';
            src: url('font/Poppins/Poppins-Bold.ttf') format('truetype');
            font-weight: normal;
            font-size: 80%;
            font-style: normal;
        }
        body {
            font-family: 'Poppins-Bold', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* 100% of the viewport height */
        }

        .content {
            display: flex;
            max-width: 1200px;
            width: 100%;
            padding: 20px;
        }

        .left {
            flex: 1;
            text-align: center;
            font-size: xx-large;
            color: #0CB6B4;
            font-family: 'Poppins-Bold', Arial, sans-serif;
            margin-right: 60px;
        }

        .right {
            font-family: 'Poppins-Bold', Arial, sans-serif;
            flex: 1;
            background-color: white;
            padding: 20px;
            border: 5px solid #000000; /* Grey stroke */
            border-radius: 15px;
            width: 250px; /* Set the width of the form */
            height: 600px; /* Set the maximum height of the form */
        }

        .logo {
            max-width: 750px; /* Adjust the size as needed */
            height: auto;
            margin-bottom: -40px ;
        }

        .form {
            text-align: center;
        }

        .form h2 {
            text-align: center; /* Center the "Login" label */
            font-size: 50px;
            color: #0CB6B4;
            margin-bottom: 80px;
            margin-top: 80px;
            font-family: 'Poppins-Bold', Arial, sans-serif;
        }

        .form input[type="text"],
        .form input[type="password"] {
            font-family: 'Poppins-Bold', Arial, sans-serif;
            padding: 15px;
            width: calc(100% - 120px); /* Adjusted width with a 20px margin on each side */
            margin-bottom: 50px;
            font-size: 24px;
            font-weight: bold;
            text-align: left;
            padding-left: 20px; /* Center align the text inside the input */
            border: 2px solid #ccc; /* Grey stroke */
            outline: none; /* Remove the outline */
            border-radius: 15px;
        }

        .form input[type="text"]:hover,
        .form input[type="password"]:hover {
            border: 2px solid #0CB6B4; /* Change color on hover to #0CB6B4 */
        }

        .form button {
            background-color: #0CB6B4;
            color: #fff;
            border: none;
            padding: 20px 70px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 30px;
            font-family: 'Poppins-Bold', Arial, sans-serif;
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="left">
                <img class="logo" src="bho.png" alt="Logo">
                <p><b>Barangay Health Station <br> of San Vicente</b></p>
            </div>
            <div class="right">
                <div class="form">
                    <h2>Login</h2>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button>Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
