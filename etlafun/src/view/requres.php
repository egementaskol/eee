<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alma
    $kullaniciAdi = $_POST["keposta"];
    $eposta = $_POST["kad"];
    $firmaIsmi = $_POST["kfirma"];
    $kullaniciSifre = $_POST["ksifre"];

    // Doğrulama işlemi
    if (isset($kullaniciAdi) && isset($eposta) && isset($firmaIsmi) && isset($kullaniciSifre)) {
        if (filter_var($eposta, FILTER_VALIDATE_EMAIL)) {

$esor="SELECT * FROM `kulanıcı` WHERE eposta = :eposta " ;
$ss= $pdo->prepare($esor);

$ss->bindParam(':eposta',$eposta);
$ss->execute();
            
            
    if ($ss->rowCount() = 0) {
        $row = $ss->fetch(PDO::FETCH_ASSOC);
        $degisken = "Merhaba123!";

        if (preg_match('/[A-Za-z0-9\W]/', $degisken)) {


            $n = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            $m = htmlentities($n, ENT_QUOTES, 'UTF-8');
            $s = addslashes($m);
            $y = strip_tags($s);
            
        
        }
        

        
        } else {
            echo 'E-posta geçersiz!';
        }

        // İstenilen işlemleri gerçekleştirin

        // İşlemler tamamlandıktan sonra başka bir sayfaya yönlendirme yapabilirsiniz
        header("Location: success.php");
        exit;
    } else {
        // Hatalı form verileri, hata mesajı gösterilebilir veya yeniden formu gösterebilirsiniz
        echo "Hatalı form verileri. Lütfen tekrar deneyin.";
    }
}

function isFormValid() {
    // Form verilerinin doğrulamasını yapın
    // Örneğin, gereken alanların doldurulduğunu veya geçerli bir e-posta adresi girildiğini kontrol edebilirsiniz

    // Doğrulama işlemine göre true veya false dönün
    return true;
}
}
?>
