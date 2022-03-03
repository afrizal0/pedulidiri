<?php

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

$file = file('config.txt', FILE_IGNORE_NEW_LINES);
$format = "$nik|$nama_lengkap";
if (in_array($format, $file)) {
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;

    header("Location:user.php");
} else { ?>
    <script type="text/javascript">
        alert("Akun Belum Terdaftar, Masukkan NIK yang sudah terdaftar")
        window.location.assign('register.php')
    </script><?php

            }
