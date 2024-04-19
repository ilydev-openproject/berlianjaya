<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Data User</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman edit profil user. Di sini Anda dapat mengelola informasi akun anda dengan mudah. Lihat, tambah keterangan, edit, atau hapus data sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data pengguna dengan hati-hati.
                </span>
            </div>
            <div class="card-body pt-1 pb-5">
                <div class="avatar-lg mx-auto my-4">
                    <img src="<?= base_url('/public/assets/img/user/' . $user['foto_user']) ?>" class="img-fluid rounded-circle" style="object-fit: cover; height: 100%;" alt="avatar">
                </div>
                <form action="<?= site_url('admin/users/edit_p_process/' . user_login()->id_user) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="<?= $user['nama_user'] ?>" name="nama_user" required placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="<?= $user['username'] ?>" name="username" required placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" value="<?= $user['password'] ?>" name="password" required placeholder="Masukkan Password">
                    </div>
                    <select class="form-control select2" name="id_role" data-toggle="select2" required>
                        <option value="">Pilih Role</option>
                        <?php
                        foreach ($role as $role) :
                        ?>
                            <option <?php
                                    if ($role['id_role'] == '1' && $user['id_role'] != '1') {
                                        echo 'disabled';
                                    } elseif ($role['id_role'] == $user['id_role']) {
                                        echo 'selected';
                                    }
                                    ?> value="<?= $role['id_role'] ?>"><?= ucwords($role['nama_role']) ?></option>
                        <?php
                        endforeach
                        ?>
                    </select>
                    <div class="form-group mb-3">
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto_user" class="dropify" data-height="100" data-default-file="<?= site_url('/public/assets/img/user/' . $user['foto_user']) ?>" />
                        <input type="hidden" name="oldfoto" value="<?= user_login()->foto_user ?>">
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