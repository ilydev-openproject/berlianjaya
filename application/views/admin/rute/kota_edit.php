<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Edit Kota</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman edit kota. Di sini Anda dapat mengelola informasi kota bus dengan mudah. Lihat, edit, edit, atau hapus data bus sesuai kebutuhan Anda. Pastikan data yang di masukkan sesuai dengan database.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/rute/edit_kota_process/' . $kota['id_kota']) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" name="nama_kota" value="<?= $kota['nama_kota'] ?>" id="nama_kota" class="form-control" placeholder="Masukkan nama kota" required>
                        <span id="nama_kota_error" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control select2" name="id_daerah" data-toggle="select2" data-placeholder="Pilih daerah" required>
                            <option value="">Pilih Daerah</option>
                            <?php foreach ($daerah as $daerah) : ?>
                                <option <?php
                                        if ($daerah['id_daerah'] == $kota['id_daerah']) {
                                            echo "selected";
                                        }
                                        ?> value="<?= $daerah['id_daerah'] ?>"><?= ucwords($daerah['nama_daerah']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto_kota" id="dropify1" class="dropify" data-height="100" data-default-file="<?= site_url('/public/assets/img/kota/' . $kota['foto_kota']) ?>" required />
                        <input type="hidden" name="oldfoto" value="<?= $kota['foto_kota'] ?>">
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