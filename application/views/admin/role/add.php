<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah User</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah user. Di sini Anda dapat mengelola informasi pengguna dengan mudah. Lihat, tambah, edit, atau hapus data pengguna sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data pengguna dengan hati-hati.
                </span>
            </div>
            <div class="card-body py-5">
                <form action="<?= site_url('admin/users/add_process') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama_user" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="username" required placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" required placeholder="Masukkan Password">
                    </div>
                    <select class="form-control select2" name="id_role" data-toggle="select2" required>
                        <option value="">Pilih Role</option>
                        <?php
                        foreach ($role as $role) :
                        ?>
                            <option <?php
                                    if ($role['id_role'] == '1' && user_login()->id_role != '1') {
                                        echo 'disabled';
                                    }
                                    ?> value="<?= $role['id_role'] ?>"><?= ucwords($role['nama_role']) ?></option>
                        <?php
                        endforeach
                        ?>
                    </select>
                    <div class="form-group mb-3">
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