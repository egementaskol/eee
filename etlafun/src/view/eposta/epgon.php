<?php 

$to = "alici@example.com";
$subject = "Konu";
$message = "Merhaba, bu bir test e-postasıdır.";
$url=
$headers =$_ENV["main_post"];
// E-postayı gönderme işlemi
if (mail($to, $subject, $message, $headers)) {
    echo "E-posta gönderildi.";
} else {
    echo "E-posta gönderilemedi.";
}




?>