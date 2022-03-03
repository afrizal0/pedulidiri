<?php
$id_catatan = $_GET['id_catatan'];

$no = 0;
$data = file('catatan.txt', FILE_IGNORE_NEW_LINES);

foreach($data as $value) {
    $no++;
    $pecah = explode("|", $value);
    if($pecah['0'] == $id_catatan) {
        $line = $no-1;
        break;
    }
}

$file = file('catatan.txt');
unset($file[$line]);
file_put_contents('catatan.txt', implode("", $file));
?>

<script type="text/javascript">
    alert('Data catatan perjalanan berhasil dihapus')
    window.location.assign('user.php?url=catatan_perjalanan');
</script>