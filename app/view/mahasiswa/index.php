<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>
<a href="<?php echo BASEURL; ?>/mahasiswa/tambah"><button type="button" class="btn btn-primary mb-2">Tambah Mahasiswa++</button></a>
    <div class="row">
        <div class="col-lg-6">
            <h3><?php echo $data['judul']?></h3> 
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs){?>               
  <li class="list-group-item">
    <?php echo $mhs['nama'] ?>
    <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id'] ?>" class="badge text-bg-primary float-right ml-1">detail</a>
    <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id'] ?>" class="badge text-bg-danger float-right ml-1" onclick="return confirm('ingin menghapusnya?');">hapus</a>
  </li>
            <?php } ?>
            </ul>
        </div>
    </div>