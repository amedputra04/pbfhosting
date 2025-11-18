<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0"><strong>Tambah Data bimbingan</strong></h5>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('pesan');?>
              <form method="post" action="">
                <div class="form-group">
                  <label for="kd_bimbingan">Kode Bimbingan</label>
                  <input type="text" class="form-control" id="kd_bimbingan" name="kd_bimbingan" placeholder=" Masukkan Kode bimbingan">
                </div>
                <div class="form-group">
                  <label for="isi_bimbingan">Nama bimbingan</label>
                  <input type="text" class="form-control" id="isi_bimbingan" name="isi_bimbingan" placeholder=" Masukkan Isi bimbingan">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" kd="keterangan" name="keterangan" placeholder=" Masukkan Keterangan">
                </div>

        <button type="submit" name="submit" kd="submit" class="btn btn-primary">SIMPAN</button>
        <a href="<?= base_url('bimbingan' );?>"><button type="button" class="btn btn-danger">Batal</button></a>
     </form>
    </div>
    </div>
</div>
</div>
</div> <!-- /.container-fluid -->

