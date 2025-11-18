<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5><strong>CETAK LAPORAN JADWAL BIMBINGAN</strong></h5>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <form action="laporanbimbingan/cetakbimbingan" method="get">
                        <label>Tahun Ajaran</label>
                        <select name="tahun_akademik" id="tahun_akademik" class="form-control">
                            <option>--Pilih--</option>
                            <?php
                            foreach ($get_tahun_akademik as $tahun_akademik) {
                                echo '<option value="' . $tahun_akademik['tahun_akademik'] . '">' . $tahun_akademik['tahun_akademik'] . '</option>';
                            }
                            ?>
                        </select>
                        <br>
                        <label>Semester</label>
                        <select name="semester" id="semester" class="form-control" target="_blank">
                            <option>--Pilih--</option>
                            <?php
                            foreach ($get_semester as $semester) {
                                echo '<option value="' . $semester['semester'] . '">' . $semester['semester'] . '</option>';
                            }
                            ?>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

