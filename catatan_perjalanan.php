<div class="table-responsive container-fluid mb-6">
    <div class="opacity-none font-weight-bolder mb-4">
        <h3>Daftar Catatan</h3>
    </div>
    <table id="example" class="table table-striped mb-9" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
                <th>Ubah</th>
                <th>Hapus</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            $data = file("catatan.txt", FILE_IGNORE_NEW_LINES);
            $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
            
            foreach ($data as $value) {
                $pecah = explode("|", $value);
                $key = $pecah['1'] . "|" . $pecah['2'];
                
                if ($key == $user) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pecah['3'] ?></td>
                        <td><?= $pecah['4'] ?></td>
                        <td><?= $pecah['5'] ?></td>
                        <td><?= $pecah['6'] ?></td>
                        <td><a href="?url=edit_catatan&id_catatan=<?= $pecah['0']; ?>" class="btn btn-warning btn-sm">Ubah</a></td>
                        <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus data')" href="hapus_catatan.php?id_catatan=<?= $pecah['0']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
            <?php break;}
            }
            ?>
        </tbody>
    </table>
</div>