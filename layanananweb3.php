<?php
$koneksib = mysqli_connect("localhost", "root", "", "dbs2"); //cek koneksi ke DB
$user = $_GET['username'];
$pass = $_GET['password']; // Ganti $user menjadi $pass

$cekUser = "SELECT * FROM pengguna WHERE username = '$user'"; //cek login user
$hasil = mysqli_query($koneksib, $cekUser); // Ganti $koneksi menjadi $koneksib

if (mysqli_num_rows($hasil) == 0) {
    $response = "False";
} else {
    $data = mysqli_fetch_array($hasil);
    $passwordSementara = $data['password']; // Ganti $pass menjadi $passwordSementara

    if ($pass == $passwordSementara) {
        $response = "TRUE";
    } else {
        $response = "FALSE";
    }
}

// membuat header XML
header('content-Type: text/xml');
echo "<?xml version='1.0'?>";

// membuat tag data respon pada dokumen xml
echo "<data>";
echo "<response>" . $response . "</response>"; // Tambahkan tanda kutip ganda yang hilang
echo "</data>";

mysqli_close($koneksib);
