     <form method="POST" action="simpan_catatan.php" class="container-fluid" autocomplete="off">
         <div class="opacity-none font-weight-bolder mb-4">
             <h3>Tulis Catatan</h3>
         </div>

         <div class="form-group">
             <label for="tanggal" class="form-control-label">Pilih Tanggal</label>
             <input required class="form-control" type="date" id="tanggal" name="tanggal">
         </div>
         <div class="form-group">
             <label for="jam" class="form-control-label">Pilih Jam</label>
             <input required class="form-control" type="time" id="jam" name="jam" placeholder="Masukkan Jam">
         </div>
         <div class="form-group">
             <label for="lokasi" class="form-control-label">Pilih Lokasi</label>
             <input required class="form-control" type="text" id="lokasi" placeholder="Masukkan Lokasi Anda" name="lokasi">
         </div>
         <div class="form-group">
             <label for="suhu_tubuh" class="form-control-label">Suhu Tubuh</label>
             <input required class="form-control" type="text" id="suhu_tubuh" placeholder="Masukkan Suhu Tubuh Anda" name="suhu_tubuh" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
     event.charCode == 44 || event.charCode == 0 ">
         </div>
         <div class="form-group">

             <button type="submit" class="btn btn-info">Kirim</button>
             <button type="button" class="btn btn-warning">Batal</button>

         </div>
     </form>