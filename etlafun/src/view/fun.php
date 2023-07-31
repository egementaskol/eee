<?php 
function sanitizeInput($value) {
    $value = strip_tags($value);
    $value = htmlspecialchars($value, ENT_QUOTES | ENT_HTML5);
    $value = addslashes($value);

    return $value;
}
uniqid()
?>