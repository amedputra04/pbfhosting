<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-flukd">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Edit Data Peserta</strong></h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="kd_peserta">Kode Peserta</label>
                            <input type="text" class="form-control" kd="kd_peserta" name="kd_peserta" placeholder=" Masukkan kode peserta " value="<?= $edit['kd_peserta']?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nmpeserta">Nama Peserta</label>
                            <input type="text" class="form-control" kd="nmpeserta" name="nmpeserta" placeholder=" Masukkan Nama peserta" value="<?= $edit['nmpeserta']?>">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <input type="text" class="form-control" kd="jenis_kelamin" name="jenis_kelamin" placeholder=" Masukkan Jenis kelamin" value="<?= $edit['jenis_kelamin']?>">
                        </div>

                        <div class="form-group">
                            <label for="telpon">Telpon</label>
                            <input type="text" class="form-control" kd="telpon" name="telpon" placeholder=" Masukkan Telpon" value="<?= $edit['telpon']?>">
                        </div>

                        <div class="form-group">
                            <label for="telpon">Alamat</label>
                            <input type="text" class="form-control" kd="alamat" name="alamat" placeholder=" Masukkan Telpon" value="<?= $edit['alamat']?>">
                        </div>

                        <button type="submit" name="submit" kd="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="<?= base_url('peserta'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>