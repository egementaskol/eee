<?php

session_set_cookie_params(
    $lifetime,
    $path = '',
    $domain = '',
    $secure = false,
    $httponly = true
);
session_start();
session_regenerate_id(
    true
);
$sid = session_id();
$id = $_SESSION["id"];
$rt = $_SESSION["rt"];
