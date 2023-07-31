<?php
 class mailv_post
{
   fuction sql(){
// PDO bağlantısı oluşturun (veritabanı bilgilerinizi buraya ekleyin)
fuction sql (){$sql = "SELECT * FROM maildorulama WHERE durum = 0";
$stmt = $pdo->prepare($sql);

// Sorguyu gerçekleştirin
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
}
// Sorgu



$logalhost_url = "http://example.com"; // Örnek URL, gerçek bir projede değiştirilmelidir

foreach ($results as $row) {
    // Alıcı 
    $to = $row['eposta'];

    // "to" değişkenini md5 ile şifreleyelim
    $to_md5 = md5($to);
    
    // GET parametrelerini http_build_query ile oluştur
    $query_params = http_build_query(['to' => $to_md5]);

    // Mesaj oluşturma
    $subject = "Konu"; // Konuyu burada belirtiyoruz
    $message = "Merhaba, {$to}! Bu bir test e-postasıdır. Daha fazla bilgi için şu linke tıklayabilirsiniz: {$logalhost_url}?{$query_params}";

    // Gönderen
    $headers = "From: info@example.com\r\n" .
               "Reply-To: info@example.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // E-posta gönderme işlemi
    if (mail($to, $subject, $message, $headers)) {
        // E-posta başarıyla gönderildiyse, durumu güncelleyin
        // Örnek olarak burada durumu 1 yapabiliriz
        // ÖNEMLİ: Bu durumu güncelleme adımını gereksinimlerinize göre düzenleyin
        $updateSql = "UPDATE maildorulama SET durum = 1 WHERE id = :id";
        $updateStmt = $pdo->prepare($updateSql);
        $updateStmt->execute(array(':id' => $row['id']));

        // Alıcı e-posta adresini URL'ye ekleyerek gösterelim
        echo "E-posta gönderildi. E-posta adresi: " . $to . "<br>";
        echo "Logalhost URL: " . $logalhost_url . "?" . $query_params . "<br>";
    } else {
        echo "E-posta gönderilemedi. E-posta adresi: " . $to . "<br>";
    }
}
 
}
