<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>

    <h2>Login Form</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
        </div>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

    <?php
    // Mengecek apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengecek apakah username dan password diset
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            die("Username atau password tidak ditemukan. Mohon diisi.");
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $url = "http://localhost/layanan%20web/layananweb2.php?username=" . $username . "&password=" . $password; // Perbaiki pembentukan string URL
        $respXML = file_get_contents($url);

        if ($respXML === false) {
            die("Tidak dapat mengambil respons dari URL: " . $url);
        }

        $bacaXML = simplexml_load_string($respXML);

        foreach ($bacaXML->response as $respon) { // Ubah $repon menjadi $respon
            if ($respon == "TRUE") {
                echo "Login sukses";
            } else if ($respon == "FALSE") {
                echo "Login gagal";
            }
        }
    }
    ?>

</body>

</html>