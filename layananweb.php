<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>

    <?php
    // Fungsi untuk menentukan status beasiswa berdasarkan IPK
    function cekBeasiswa($ipk)
    {
        if ($ipk > 75) {
            return "Ya";
        } else {
            return "Tidak";
        }
    }

    // Data mahasiswa dalam bentuk array
    $data_mahasiswa = array(
        array("Nama Mahasiswa" => "Kadani", "NIM" => "211111110", "Nilai IPK" => array(80, 85, 90)),
        array("Nama Mahasiswa" => "Budi", "NIM" => "211111111", "Nilai IPK" => array(70, 75, 80)),
        array("Nama Mahasiswa" => "Citra", "NIM" => "211111112", "Nilai IPK" => array(50, 50, 88))
    );

    // Menampilkan tabel
    echo "<h2>Tabel Mahasiswa</h2>";
    echo "<table>";
    echo "<tr><th>Nama Mahasiswa</th><th>NIM</th><th>IPK Rata-Rata</th><th>Menerima Beasiswa</th></tr>";
    foreach ($data_mahasiswa as $mahasiswa) {
        $nama_mahasiswa = $mahasiswa["Nama Mahasiswa"];
        $nim = $mahasiswa["NIM"];
        $nilai_ipk = $mahasiswa["Nilai IPK"];
        $ipk_rata_rata = array_sum($nilai_ipk) / count($nilai_ipk);
        echo "<tr><td>$nama_mahasiswa</td><td>$nim</td><td>$ipk_rata_rata</td><td>" . cekBeasiswa($ipk_rata_rata) . "</td></tr>";
    }
    echo "</table>";
    ?>

    <?php
    $nama = "Kaidani";
    $nim = "211111110";
    $nilai1 = 89;
    $nilai2 = 90;
    $nilai3 = 85;
    $ipk = ($nilai1 + $nilai2 + $nilai3) / 3;

    if ($ipk > 75) {
        echo "Nama $nama, dengan NIM $nim mendapat beasiswa";
    } else {
        echo "Nama $nama, dengan NIM $nim tidak mendapat beasiswa";
    }
    ?>

</body>

</html>