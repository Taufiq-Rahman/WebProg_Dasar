<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
        echo "<h2>Login Berhasil!</h2>";
        echo "<h3>Selamat Datang, <span style='color: blue; font-weight: bold; font-size: 40px;'>admin</span>.</h3>";
        echo "<a href='Soal2.php' style='color: purple;'>kembali ke halaman login</a>";
        echo "<a href='index.html' style='color: purple;'>home</a>";
    } else {
        echo "<h2 style='color: red;'>Username : <span style='color: black;'>$username</span> Tidak Terdaftar!</h2>";
        echo "<a href='Soal2.php' style='color: purple;'>kembali ke halaman login</a>";
        echo "<br>";
        echo "<a href='index.html' style='color: purple;'>home</a>";
    }

?>