<?php 

#sql den eposta durum  0 olonları  al ama döngü ile  al

$query = "INSERT INTO `maildorulama` (`ad`, `eposta`, `tar`, `durum`) VALUES (:kullaniciAdi, :eposta, NOW(), 0)";
$statement = $pdo->prepare($query);

// Değerleri bağla
$statement->bindValue(':kullaniciAdi', $kullaniciAdi);
$statement->bindValue(':eposta', $eposta);

// Sorguyu çalıştır
$result = $statement->execute();

if ($result) {
    $eklenenId = $pdo->lastInsertId(); // 'id' sütununun otomatik artan birincil anahtar olduğunu varsayıyorum
    echo "Kayıt başarıyla eklendi. Eklenen ID: " . $eklenenId;
} 



?>