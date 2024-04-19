<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Pos</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah pos. Di sini Anda dapat mengelola informasi pos bus dengan mudah. Lihat, tambah, tambah, atau hapus data bus sesuai kebutuhan Anda. Pastikan data yang di masukkan sesuai dengan database.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/pos/add_process') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama_pos" required placeholder="Masukkan Nama Pos">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="kota" required placeholder="Masukkan Kota">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="titik" required placeholder="Masukkan Titik">
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control select2" name="id_daerah" data-toggle="select2" required>
                            <option value="">Pilih Daerah</option>
                            <?php
                            foreach ($daerah as $daerah) :
                            ?>
                                <option value="<?= $daerah['id_daerah'] ?>"><?= ucwords($daerah['nama_daerah']) ?></option>
                            <?php
                            endforeach
                            ?>
                        </select>
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