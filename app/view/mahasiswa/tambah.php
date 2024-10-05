<form action="<?php echo BASEURL;?>/mahasiswa/tambahAksi" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" class="form-control" id="prodi" name="prodi">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>