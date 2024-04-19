<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Agen</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah agen. Di sini Anda dapat mengelola informasi agen dengan mudah. Lihat, tambah, edit, atau hapus data agen sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data agen dengan hati-hati.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/agen/edit_process/' . $agen['id_agen']) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="<?= $agen['nama_agen'] ?>" name="nama_agen" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control select2" name="id_kota" data-toggle="select2" data-placeholder="Pilih Kota" required>
                            <option value="">Pilih Kota</option>
                            <?php foreach ($kota as $kota) : ?>
                                <option <?php if ($kota['id_kota'] == $agen['id_kota']) {
                                            echo 'selected';
                                        } ?> value="<?= $kota['id_kota'] ?>"><?= ucwords($kota['nama_kota']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="<?= $agen['titik'] ?>" name="titik" required placeholder="Masukkan detail lokasi">
                    </div>
                    <div class="form-group mb-3">
                        <input type="wa" class="form-control" value="<?= $agen['wa'] ?>" name="wa" required placeholder="Masukkan nomor whatsapp +62">
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto_user" id="dropify1" class="dropify" data-height="100" data-default-file="<?= site_url('/public/assets/img/agen/foto-agen/default.png') ?>" />
                        <input type="hidden" name="oldfoto" value="<?= $agen['foto_agen'] ?>">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="mdi mdi-account-multiple-plus me-2"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('admin/layout/footer');
?>