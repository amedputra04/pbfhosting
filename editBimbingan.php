<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0"><strong>Edit Data bimbingan</strong></h5>
            </div>
            <div class="card-body">
              <form method="post" action="">
                <div class="form-group">
                <label for="kd_bimbingan">kd_bimbingan</label>
                <input type="text" class="form-control" kd="kd_bimbingan" name="kd_bimbingan" placeholder=" Masukkan Nama Bimbingan" value="<?= $edit['kd_bimbingan']?>" readonly>
            </div>

            <div class="form-group">
              <label for="nm_bimbingan">Isi bimbingan</label>
              <input type="text" class="form-control" kd="isi_bimbingan" name="isi_bimbingan" placeholder=" Masukkan Nama bimbingan" value="<?= $edit['isi_bimbingan']?>">
         </div>
         <div class="form-group">
              <label for="nm_bimbingan">Keterangan</label>
              <input type="text" class="form-control" kd="keterangan" name="keterangan" placeholder=" Masukkan Keterangan" value="<?= $edit['keterangan']?>">
         </div>
        <button type="submit" name="submit" kd="submit" class="btn btn-primary">Ubah Data</button>
        <a href="<?= base_url('bimbingan');?>"><button type="button" class="btn btn-danger">Batal</button></a>
          </form>
        </div>
        </div>
       </div>
      </div>
    </div><!-- /.container-fluid -->