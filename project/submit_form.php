<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Send the form data (you can also save it to a database)
    echo "Thank you, $name! We have received your message.";
} else {
    echo "Invalid request.";
}
?>
