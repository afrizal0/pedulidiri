<?php
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu_tubuh = $_POST['suhu_tubuh'];
$id_catatan = rand(0, 100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu_tubuh &#8451;";

$file = fopen("catatan.txt", 'a');
fwrite($file, $format);

fclose($file);
?>

<script type="text/javascript">
    alert('Data catatan perjalanan berhasil ditambahkan')
    window.location.assign('user.php?url=catatan_perjalanan');
</script>