<?php
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=etlafun", "root", "");
    $baglanti->exec("SET NAMES utf8");
} catch (PDOException $e) {
    echo $e->getMessage();
}
