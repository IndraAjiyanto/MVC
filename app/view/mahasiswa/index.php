<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
                <?php foreach($data['mhs'] as $mhs){?>
                    <ul>
                        <li><?php echo $mhs['nama']?></li>
                        <li><?php echo $mhs['prodi']?></li>
                        <li><?php echo $mhs['nim']?></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</div>