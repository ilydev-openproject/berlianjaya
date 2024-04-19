<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Rute</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah rute. Di sini Anda dapat mengelola informasi rute bus dengan mudah. Lihat, tambah, tambah, atau hapus data bus sesuai kebutuhan Anda. Pastikan data yang di masukkan sesuai dengan database.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/rute/add_process') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="kode_rute" class="form-control" placeholder="Masukkan Kode rute, contoh: BJ01" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="crew" class="form-control" placeholder="Masukkan nama crew" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="sopir1" class="form-control" placeholder="Masukkan nama Sopir 1" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="sopir2" class="form-control" placeholder="Masukkan nama Sopir 2" required>
                            </div>
                            <div class="form-group mb-3">
                                <select class="form-control select2-multiple" name="id_pos[]" data-toggle="select2" multiple="multiple" data-placeholder="Pilih pos yang di lewati rute" required>
                                    <?php
                                    foreach ($pos as $pos) :
                                    ?>
                                        <option value="<?= $pos['id_pos'] ?>"><?= ucwords($pos['nama_pos']) ?></option>
                                    <?php
                                    endforeach
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="nopol" class="form-control" placeholder="Masukkan nopol bus" required>
                            </div>
                            <div class="form-group mb-3 position-relative" id="datepicker4">
                                <input type="text" name="jadwal" class="form-control" placeholder="Masukkan Tanggal" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-container="#datepicker4" autocomplete="false" required>
                            </div>
                            <div class="form-group mb-3">
                                <select class="form-control select2" name="id_kelas" data-toggle="select2" required>
                                    <option value="">Pilih Kelas Bus</option>
                                    <?php
                                    foreach ($kelas as $kelas) :
                                    ?>
                                        <option value="<?= $kelas['id_kelas'] ?>"><?= ucwords($kelas['nama_kelas']) ?></option>
                                    <?php
                                    endforeach
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" name="harga" class="form-control" placeholder="Masukkan harga" required>
                            </div>
                            <button type="submit" class="btn btn-info"><i class="mdi mdi-account-multiple-plus me-2"></i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('admin/layout/footer');
?>