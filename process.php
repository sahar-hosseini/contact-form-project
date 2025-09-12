<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // تابع mail() بدون SMTP در لوکال همیشه خطا می‌دهد
    if (mail($email, "Test", "Test", "From: $email")) {
        echo "پیام ارسال شد ✅";
    } else {
        echo "Warning: mail(): Failed to connect to mailserver at 'localhost' port 25, verify your 'SMTP' setting ❌";
    }
}
?>
