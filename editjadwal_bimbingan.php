<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Edit Data Jadwal Bimbingan</strong></h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="kdjadwal">Kode jadwal bimbingan</label>
                            <input type="text" class="form-control" id="kdjadwal" name="kdjadwal" placeholder=" Masukkan Kode jadwal " value="<?= $edit['kdjadwal']?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="tahun_akademik">Tahun Akademik</label>
                            <select class="form-control" id="tahun_akademik" name="tahun_akademik">
                                <?php if($edit['tahun_akademik']=='2020/2021') : ?>
                                    <option selected value="2020/2021">2020/2021</option>
                                    <option value="2021/2022">2021/2022</option>
                                    <option value="2021/2022">2022/2023</option>
                                    <option value="2021/2022">2023/2024</option>
                                <?php else : ?>
                                    <option value="2020/2021">2020/2021</option>
                                    <option selected value="2021/2022">2021/2022</option>
                                    <option selected value="2022/2023">2022/2023</option>
                                    <option selected value="2023/2024">2023/2024</option>
                                <?php endif ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" name="semester" placeholder=" Masukkan Kode peserta" value="<?= $edit['semester']?>">
                        </div>


                        <div class="form-group">
                            <label for="kd_peserta">Kode peserta</label>
                            <input type="text" class="form-control" id="kd_peserta" name="kd_peserta" placeholder=" Masukkan Kode peserta" value="<?= $edit['kd_peserta']?>">
                        </div>

                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="<?= base_url('jadwal_bimbingan'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>