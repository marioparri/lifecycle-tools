<?php
session_start();

$password = "skyscanner";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
        header("Location: secure-ui.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    header("Location: index.html");
    exit();
}
?>