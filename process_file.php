<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $file = "messages.txt";
    $data = "نام: $name\nایمیل: $email\nپیام:\n$message\n------------------\n";

    if(file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "پیام شما با موفقیت ذخیره شد ✅";
    } else {
        echo "خطایی در ذخیره پیام رخ داد ❌";
    }
}
?>
