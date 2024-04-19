<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Kelas</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah kelas. Di sini Anda dapat mengelola informasi kelas bus dengan mudah. Lihat, tambah, edit, atau hapus data bus sesuai kebutuhan Anda. Pastikan data yang di masukkan sesuai dengan database.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/kelas/edit_process') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas'] ?>">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>" required placeholder="Masukkan Nama Kelas">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="jumlah_seat" value="<?= $kelas['jumlah_seat'] ?>" required placeholder="Masukkan Jumlah Seat">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="fasilitas" class="summernote" id="summernote" cols="30" rows="30"><?= $kelas['fasilitas'] ?></textarea>
                    </div>
                    <!-- <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" class="dropify" data-height="100" />
                    </div> -->
                    <button type="submit" class="btn btn-info"><i class="mdi mdi-account-multiple-plus me-2"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('admin/layout/footer');
?>