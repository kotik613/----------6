<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $data = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nPassword: $password\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    $firstName = "";
    $lastName = "";
    $email = "";
    $password = "";
}
?>
