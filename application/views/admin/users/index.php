<?php
$this->load->view('admin/layout/header');
?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Data User</h4>
                <p class="text-muted mb-0">
                    Selamat datang di halaman data user. Di sini Anda dapat mengelola informasi pengguna dengan mudah. Lihat, tambah, edit, atau hapus data pengguna sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data pengguna dengan hati-hati.
                </p>
            </div>
            <div class="card-body">
                <table id="userTable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        foreach ($users as $data) :
                        ?>
                            <tr>
                                <td><?= $data['nama_user'] ?></td>
                                <td><?= $data['nama_role'] ?></td>
                                <td><?= $data['username'] ?></td>
                                <td>
                                    <img src="<?= base_url('/public/assets/img/user/' . $data['foto_user']) ?>" class="img-fluid" style="border-radius: 50%; object-fit: cover; width: 30px; height: 30px;">
                                </td>
                                <td><?php if ($data['status'] == 'login') {
                                        echo '<span class="text-primary">Online</span>';
                                    } else {
                                        echo '<span class="text-danger">' . ucwords($data['status']) . '</span>';
                                    } ?></td>
                                <td>
                                    <a href="<?= site_url('admin/users/edit/' . $data['id_user']) ?>" type="button" class="btn btn-primary mx-1"><i class="mdi mdi-account-edit"></i>Edit</a>
                                    <a href="#fill-danger-modal_<?= $data['id_user'] ?>" type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#fill-danger-modal_<?= $data['id_user'] ?>"><i class="mdi mdi-trash-can-outline"></i>Hapus</a>
                                </td>
                                <div id="fill-danger-modal_<?= $data['id_user'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-danger-modalLabel">Hapus User</h4>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus data user dengan data</p>
                                                <p>User ini mempunyai data Nama User "<?= $data['nama_user'] ?>", username "<?= $data['username'] ?>" dan role "<?= $data['nama_role'] ?>"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <a href="<?= site_url('admin/users/del_user/' . $data['id_user']) ?>" type="button" class="btn btn-outline-light">Save changes</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            </tr>

                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> <!-- end row-->




<?php
$this->load->view('admin/layout/footer');
?>