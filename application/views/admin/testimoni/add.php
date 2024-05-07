<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Testimoni</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah testimoni. Di sini Anda dapat mengelola informasi testimoni dengan mudah. Lihat, tambah, edit, atau hapus data testimoni sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data testimoni dengan hati-hati.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/testimoni/add_process') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama_testi" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="desc_testi" id="" style="width: 100%;" rows="10" placeholder="deskripsi disini" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto_testi" id="dropify1" class="dropify" data-height="100" required />
                        <input type="hidden" name="oldfoto" value="default.png">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="rating" min="1" max="5" required placeholder="Masukkan Rating 1-5" oninput="this.value = Math.min(Math.max(parseInt(this.value), 1), 5)">
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