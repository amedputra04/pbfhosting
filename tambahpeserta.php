<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0"><strong>Tambah Data Peserta</strong></h5>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('pesan');?>
              <form method="post" action="">
                        <div class="form-group">
                            <label for="kd_peserta">Kode konsumen</label>
                            <input type="text" class="form-control" kd="kd_peserta" name="kd_peserta" placeholder=" Masukkan kode peserta">
                        </div>
                        <div class="form-group">
                            <label for="nmpeserta">Nama peserta</label>
                            <input type="text" class="form-control" kd="nmpeserta" name="nmpeserta" placeholder=" Masukkan Nama Peserta">
                        </div>
                        <form method="post" action="">
                        <div class="form-group">
                            <label for="nm_peserta">Jenis Kelamin</label>
                            <input type="text" class="form-control" kd="jenis_kelamin" name="jenis_kelamin" placeholder=" Masukkan jenis kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nm_peserta">Telpon</label>
                            <input type="text" class="form-control" kd="telpon" name="telpon" placeholder=" Masukkan telpon ">
                        </div>
                        <div class="form-group">
                            <label for="nm_konsumen">Alamat</label>
                            <input type="text" class="form-control" kd="alamat" name="alamat" placeholder=" Masukkan Alamat ">
                        </div>

        <button type="submit" name="submit" kd="submit" class="btn btn-primary">SIMPAN</button>
        <a href="<?= base_url('peserta' );?>"><button type="button" class="btn btn-danger">Batal</button></a>
     </form>
    </div>
    </div>
</div>
</div>
</div> <!-- /.container-fluid -->

