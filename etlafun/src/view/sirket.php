<?php
require("requires.php");
require("baglanti.php");

if (isset($_POST["gonder"]) && !empty($_POST["ked"]) && !empty($_POST["kad"]) && !empty($_POST["ks"]) && !empty($_POST["firma"]) && strlen($_POST["ks"]) >= 8 && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $_POST["ks"])) {
    $ked = $_POST["ked"];
    $kad = $_POST["kad"];
    $ks = $_POST["ks"];
    $firma = $_POST["firma"];

    $stmt = $conn->prepare("SELECT * FROM `kullanici` WHERE eposta = :eposta");
    $stmt->bindParam(':eposta', $ked);
    $stmt->execute();

    if (!$stmt->rowCount() > 0) {
        $kked = htmlspecialchars(trim($ked));
        $kkad = htmlspecialchars(trim($kad));
        $kfirma = htmlspecialchars(trim($firma));

        $sifre = password_hash($ks, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO `kullanici`(`k_id`, `ad`, `soyad`, `eposta`, `sifre`, `durum`, `r_id`, `tel`, `firmaadi`) VALUES (NULL, :kked, :kkad, :ked, :sifre, 1, NULL, NULL, :kfirma)");
        $stmt->bindParam(':kked', $kked);
        $stmt->bindParam(':kkad', $kkad);
        $stmt->bindParam(':ked', $ked);
        $stmt->bindParam(':sifre', $sifre);
        $stmt->bindParam(':kfirma', $kfirma);
        $stmt->execute();

        echo "Kayıt başarıyla tamamlandı.";
    }

    header("Location: https://www.example.com");
    exit();
}
