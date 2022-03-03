<?php
// ambil data dari register.php
$nik = $_POST["nik"];
$nama_lengkap = $_POST["nama_lengkap"];

$cek = false;
$datas = file('config.txt', FILE_IGNORE_NEW_LINES);

// Pecah data pada file config.txt
foreach ($datas as $data) {
    $pecah = explode('|', $data);
    if ($nik == $pecah['0']) {
        $cek = true;
    }
}

if ($cek) { ?>
    <script type="text/javascript">
        alert("Gagal Membuat Akun, Akun sudah terdaftar")
        window.location.assign('register.php')
    </script> <?php
            } else {
                $format = "\n$nik|$nama_lengkap";
                $file = fopen('config.txt', 'a');

                // cek panjang nik
                if (strlen($nik) == 16) {
                    fwrite($file, $format);
                    fclose($file); ?>
        <script type="text/javascript">
            alert("Pendaftaran berhasil dilakukan")
            window.location.assign('index.php')
        </script> <?php
                } else {
                    ?>
        <script type="text/javascript">
            alert("Gagal Membuat Akun, Masukkan NIK dengan format yang benar")
            window.location.assign('register.php')
        </script>
    <?php
                }
    ?>
<?php
            } ?>