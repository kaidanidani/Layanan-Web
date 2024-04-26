<?php
// Menerima data dari formulir login
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Proses autentikasi atau validasi data login
if ($username === 'user' && $password === 'password') {
    $response = 'TRUE';
} else {
    $response = 'FALSE';
}

// Membuat respons XML
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<data>';
echo '<response>' . $response . '</response>';
echo '</data>';
