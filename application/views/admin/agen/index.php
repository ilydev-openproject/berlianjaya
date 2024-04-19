<?php
$this->load->view('admin/layout/header');
?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Data Agen</h4>
                <p class="text-muted mb-0">
                    Selamat datang di halaman data agen. Di sini Anda dapat mengelola informasi agen dengan mudah. Lihat, tambah, edit, atau hapus data agen sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data agen dengan hati-hati.
                </p>
            </div>
            <div class="card-body">
                <table id="userTable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Agen</th>
                            <th>Kota</th>
                            <th>Detail Lokasi</th>
                            <th>Whatsapp</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($agen as $data) :
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['nama_agen'] ?></td>
                                <td><?= $data['nama_kota'] ?></td>
                                <td><?= $data['titik'] ?></td>
                                <td><?= $data['wa'] ?></td>
                                <td>
                                    <a href="<?= site_url('admin/agen/edit_agen/' . $data['id_agen']) ?>" type="button" class="btn btn-primary mx-1"><i class="mdi mdi-account-edit"></i>Edit</a>
                                    <a href="#fill-danger-modal_<?= $data['id_agen'] ?>" type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#fill-danger-modal_<?= $data['id_agen'] ?>"><i class="mdi mdi-trash-can-outline"></i>Hapus</a>
                                </td>
                                <div id="fill-danger-modal_<?= $data['id_agen'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-danger-modalLabel">Hapus Agen</h4>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus data agen dengan data</p>
                                                <p>Data ini mempunyai data Nama agen "<?= $data['nama_kelas'] ?>", dengan "<?= $data['jumlah_seat'] ?>" seat dan fasilitas "<?= $data['fasilitas'] ?>"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <a href="<?= site_url('admin/agen/del/' . $data['id_agen']) ?>" type="button" class="btn btn-outline-light">Hapus Sekarang</a>
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