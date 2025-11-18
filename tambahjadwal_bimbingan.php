<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0"><strong>Tambah Data Jadwal Bimbingan</strong></h5>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>



                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Jadwal</label>
                                    <input type="text" name="kdjadwal" id="kdjadwal" class="form-control"
                                        value="<?= $kdjadwal; ?>" readonly>

                                </div>
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control" id="tahun_akademik" name="tahun_akademik">
                                        <option>2020/2021</option>
                                        <option>2021/2022</option>
                                        <option>2022/2023</option>
                                        <option>2023/2024</option>
                                    </select>
                                    <?php echo form_error('tahun_akademik', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Semester</label>
                                    <select class="form-control" id="semester" name="semester">
                                        <option>Ganjil</option>
                                        <option>Genap</option>
                                    </select>
                                    <?php echo form_error('semester', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Kode peserta</label>
                                    <select name="kd_peserta" class="form-control">
                                        <option>--Pilih--</option>

                                        <?php
foreach ($get_peserta as $peserta) {
    echo '<option value="' . $peserta['kd_peserta'] . '">' . $peserta['kd_peserta'] . ' - ' . $peserta['nama_peserta'] . '</option>';
}
?>


                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered dataTable" aria-describedby="editable-sabbne_info">
                                    <thead>
                                        <tr>
                                            <th style="width: 5px">No</th>
                                            <th style="width: 150px">Kode</th>
                                            <th>Bimbingan</th>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>ruang bimbingan</th>
                                            <th style="width: 150px">Action</th>
                                            <!-- ubah jadi 150px -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  id="footer_jadwal_bimbingan">
                                            <td style="text-align:right" colspan="8">
                                                <a class="btn btn-success" id="add_row_jadwal_bimbingan">Tambah</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--tutup class=row-->
                            <br><br>
                            <div>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-danger">RESET</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div> <!--/.container-fluid-->

 <script>
    var index_table = 0;
    var bimbingan_select = '';

    <?php
    $jsArray = "var namabimbingan = new Array();\n";

    foreach ($get_bimbingan as $bbn) { ?>
        bimbingan_select += '<option value="<?php echo $bbn['kd_bimbingan']; ?>"><?php echo $bbn['kd_bimbingan']; ?></option>';
        <?php
        $jsArray .= "namabimbingan['" . $bbn['kd_bimbingan'] . "'] = {isibimbingan:'" . addslashes($bbn['isi_bimbingan']) . "'};\n"
        ?>
    <?php
    }
    ?>


    var no = 1;
    $("#add_row_jadwal_bimbingan").click(function() {
        index_table++;
        $("#footer_jadwal_bimbingan").before('<tr class="data_jadwal_bimbingan" id="row_jadwal_bimbingan' + index_table + '" class="small_data">\n\
        <td style="text-align:center">\
             ' + no + '\n\
        </td>\n\
        <td>\n\
              <select style="max-width:300px" name="kd_bimbingan[' + index_table + ']" onclick="changeValue(this.value)" id="bimbingan' + index_table + '" class="form-control small_data">' + bimbingan_select + '\n\
              </select>\n\
        </td>\n\
        <td>\n\
            <input style="max-width:300px" name="isi_bimbingan['+index_table+']" type="text" \n\ class="bigdrop form-control small_data" id="isi_bimbingan'+index_table+'" readonly="readonly">\n\
        </td>\n\
        </td>\n\
        <td>\n\
            <select style="max-width:200px" name="hari_bimbingan[' + index_table + ']" type="text" \n\ class="bigdrop form-control small_data" id="hari_bimbingan' + index_table + '" >\n\
            <option value="Senin">Senin</option>\n\
            <option value="Selasa">Selasa</option>\n\
            <option value="Rabu">Rabu</option>\n\
            <option value="Kamis">Kamis</option>\n\
            <option value="Jumat">Jumat</option>\n\
            <option value="Sabtu">Sabtu</option>\n\
            </select>\n\
        </td>\n\
        </td>\n\
        <td>\n\
            <select style="max-width:200px" name="waktu_bimbingan[' + index_table + ']" type="text" \n\
            class="bigdrop form-control small_data" id="waktu_bimbingan[' + index_table + ']">\n\
            <option value="12.00">12.00</option>\n\
            <option value="13.00">13.00</option>\n\
            <option value="14.00">14.00</option>\n\
            <option value="15.00">15.00</option>\n\
            </select>\n\
            </td>\n\
            <td>\n\
            <input style="max-width:200px" name="ruang_bimbingan[' + index_table + ']" type="text" \n\
            class="bigdrop form-control small_data" id="ruang_bimbingan[' + index_table + ']">\n\
            </td>\n\
            <td>\n\
                   <a onclick="remove_div_id(\'row_jadwal_bimbingan' + index_table + '\',1);" class="btn btn-danger">\n\
                   <i class="fa fa-minus"></i></a>\n\
                </td></tr>');
        no++;

    });

    function remove_div_id(id) {
        $('#' + id).remove();
    }

    <?php echo $jsArray; ?>

    function changeValue(kd_bimbingan) {
        
        document.getElementById('isi_bimbingan' + index_table).value = namabimbingan[kd_bimbingan].isibimbingan;
        

    };
</script>