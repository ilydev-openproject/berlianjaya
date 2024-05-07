<?php
$this->load->view('admin/layout/header');
?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Data Kota</h4>
                <p class="text-muted mb-0">
                    Selamat datang di halaman data kota. Di sini Anda dapat mengelola informasi pengguna dengan mudah. Lihat, tambah, edit, atau hapus data pengguna sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data pengguna dengan hati-hati.
                </p>
            </div>
            <div class="card-body">

                <table id="testiTable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama Customer</th>
                            <th width="30%">Deskripsi</th>
                            <th>Rating</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($testi as $data) :
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><img src="<?= site_url('public/assets/img/testi/' . $data['foto_testi']) ?>" alt="" style="width: 80px;"></td>
                                <td><?= $data['nama_testi'] ?></td>
                                <td><?= $data['desc_testi'] ?></td>
                                <td><?= $data['rating'] ?></td>
                                <td>
                                    <a href="<?= site_url('admin/testimoni/edit_testi/' . $data['id_testimoni']) ?>" type="button" class="btn btn-primary mx-1"><i class="mdi mdi-account-edit"></i>Edit</a>
                                    <a href="#fill-danger-modal_<?= $data['id_testimoni'] ?>" type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#fill-danger-modal_<?= $data['id_testimoni'] ?>"><i class="mdi mdi-trash-can-outline"></i>Hapus</a>
                                </td>
                                <div id="fill-danger-modal_<?= $data['id_testimoni'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-danger-modalLabel">Hapus Kota</h4>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus data testi dengan data</p>
                                                <p>Data ini mempunyai data Nama testi "<?= $data['nama_testi'] ?>"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <a href="<?= site_url('admin/testimoni/del_testi/' . $data['id_testimoni']) ?>" type="button" class="btn btn-outline-light">Hapus Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
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