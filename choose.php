<!DOCTYPE html>
<html>
<head>
    <title>Role Page</title>
    <style>
        @font-face {
            font-family: 'YourCustomFont';
            src: url('font/Poppins/Poppins-Bold.ttf') format('truetype');
            font-weight: normal;
            font-size: 80%;
            font-style: normal;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('images/bg.png'); /* Replace 'bg.jpg' with the path to your background image */
            background-repeat: no-repeat;
            background-size: 50% ;
            background-position: center center;
            background-attachment: fixed;
        }

        .container {
            text-align: center;
            border-radius: 10px;
        }

        h1 {
            font-family: 'YourCustomFont', 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 48px;
            color: #0CB6B4;
        }

        .button-container {
            display: flex;
            flex-direction: column; /* Make buttons stacked vertically */
            align-items: center; /* Center buttons vertically */
        }

        .button {
            background-color: #0CB6B4; /* Change the button color to #0CB6B4 */
            color: white;
            border: none; /* Remove button stroke */
            padding: 15px 50px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'YourCustomFont';
            font-size: 38px;
            margin: 20px; /* Adjust margin between buttons */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login as:</h1>
        
        <div class="button-container">
            <button class="button" type="button" onclick="goToPage('mhwlogin.php')">Municipal Health Worker</button>
            <button class="button" type="button" onclick="goToPage('bhwlogin.php')">Barangay Health Worker</button>
        </div>
    </div>
</body>
<script>
    function goToPage(page) {
        window.location.href = page;
    }
</script>
</html>
