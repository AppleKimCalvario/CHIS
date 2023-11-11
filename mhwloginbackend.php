<?php
session_start();
include "dbcon.php";
// Include your database connection here
// Example: $conn = mysqli_connect("localhost", "username", "password", "database_name");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["password"];

    if (empty($username) || empty($pass)) {
        echo "<script>";
        echo "alert('Username and password are required.');";
        echo "window.location.href = '../mhwlogin.php?error=Username and password are required';";
        echo "</script>";
        exit();
    } else {
        $sql = "SELECT * FROM mh_worker WHERE mhw_username='$username' AND mhw_password='$pass'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["mhw_username"] == $username && $row["mhw_password"] == $pass) {
            $_SESSION['mhw_id'] = $row['mhw_id'];
            $_SESSION['mhw_fname'] = $row['mhw_fname'];
            $_SESSION['mhw_position'] = $row['mhw_position'];

            echo "<script>";
            echo "alert('Logged in Successfully');";
            echo "window.location.href = 'resident.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Incorrect username or password.');";
            echo "window.location.href = 'mhwlogin.php';";
            echo "</script>";
            exit();
        }
    }
}
}
?>