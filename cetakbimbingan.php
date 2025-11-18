<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?= base_url("assets/") ?>plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url("assets/") ?>dist/css/adminlte.min.css">

<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body p-4">
                        <center>
                            <table width="100%">
                                <tr>
                                    <td><img src="<?= base_url('assets/dist/img/avatar.png') ?>" alt="" width="100" height="100"></td>
                                    <td align="center">
                                        <strong>
                                            PEMERINTAH KOTA PANGKALPINANG<br>
                                            DINAS PENDIDIKAN KEPEMUDAAN DAN OLAHRAGA<br>
                                            ISB ATMA LUHUR
                                        </strong><br>
                                        <small>Alamat: Jl. Raya Selindung Gabek</small>
                                    </td>
                                    <td><img src="<?= base_url('assets/dist/img/avatar.png') ?>" alt="" width="100" height="100"></td>
                                </tr>
                            </table>
                        </center>
                        <hr color="black">
                        <center><strong><u>CETAK JADWAL BIMBINGAN</u></strong></center>
                        <br>

                        <table class="table table-bordered">
                            <tr>
                                <td width="200">Kode Jadwal Bimbingan</td>
                               <td>: <?= $jadwal_bimbingan['kdjadwal'] ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Akademik</td>
                                 <td>: <?= $jadwal_bimbingan['tahun_akademik'] ?></td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td>: <?= $jadwal_bimbingan['semester'] ?></td>
                            </tr>
                            <tr>
                                <td>Kode Peserta</td>
                                <td>: <?= $jadwal_bimbingan['kd_peserta'] ?></td>
                            </tr>
                        </table>

                        <br>
                        <div class="bg-primary text-white p-2 rounded">
                            <b>DETAIL JADWAL BIMBINGAN</b>
                        </div>
                        <br>

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Bimbingan</th>
                                    <th>Nama Bimbingan</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($get_isi2 as $isi2) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $isi2['kd_bimbingan'] ?></td>
                                        <td><?= ucwords($isi2['isi_bimbingan']) ?></td>
                                        <td><?= $isi2['hari_bimbingan'] ?></td>
                                        <td><?= $isi2['waktu_bimbingan'] ?></td>
                                        <td><?= $isi2['ruang_bimbingan'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    window.print();
</script>
