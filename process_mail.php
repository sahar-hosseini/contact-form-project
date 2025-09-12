<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "your_email@example.com"; // ایمیل واقعی خودت
    $subject = "پیام جدید از $name";
    $body    = "نام: $name\nایمیل: $email\n\nپیام:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "پیام با موفقیت ارسال شد ✅";
    } else {
        echo "خطا در ارسال ایمیل ❌";
    }
}
?>
