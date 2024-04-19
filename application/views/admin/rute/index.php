<?php
$this->load->view('admin/layout/header');
?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Data Rute</h4>
                <p class="text-muted mb-0">
                    Selamat datang di halaman data rute. Di sini Anda dapat mengelola informasi pengguna dengan mudah. Lihat, tambah, edit, atau hapus data pengguna sesuai kebutuhan Anda. Mari menjaga keamanan dan integritas data pengguna dengan hati-hati.
                </p>
            </div>
            <div class="card-body">
                <table id="userTable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Rute</th>
                            <th>Jadwal</th>
                            <th>Crew</th>
                            <th>Sopir 1</th>
                            <th>Sopir 2</th>
                            <th>Nopol</th>
                            <th>Pos</th>
                            <th>Kelas</th>
                            <th>Harga</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($rute as $data) :
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['kode_rute'] ?></td>
                                <td><?= $data['jadwal'] ?></td>
                                <td><?= $data['crew'] ?></td>
                                <td><?= $data['sopir1'] ?></td>
                                <td><?= $data['sopir2'] ?></td>
                                <td><?= $data['nopol'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-light" data-bs-toggle="popover" data-bs-placement="right" data-bs-html="true" data-bs-content="<?php
                                                                                                                                                                        $this->db->select('package_rute.*, pos.*');
                                                                                                                                                                        $this->db->from('package_rute');
                                                                                                                                                                        $this->db->where('package_rute.id_rute', $data['id_rute']);
                                                                                                                                                                        $this->db->join('pos', 'package_rute.id_pos = pos.id_pos', 'left');
                                                                                                                                                                        $this->db->order_by('id_package', 'desc');
                                                                                                                                                                        $query = $this->db->get();
                                                                                                                                                                        $pos = $query->result_array();

                                                                                                                                                                        $pos_content = '';
                                                                                                                                                                        foreach ($pos as $pos_item) {
                                                                                                                                                                            $pos_content .= htmlspecialchars($pos_item['nama_pos']) . "<br>";
                                                                                                                                                                        }

                                                                                                                                                                        echo rtrim($pos_content, "<br>"); // Menghapus <br> di akhir string
                                                                                                                                                                        ?>">
                                        <?php
                                        $id = $data['id_rute'];
                                        $this->db->where('id_rute', $id);
                                        $total_pos = $this->db->count_all_results('package_rute');
                                        echo $total_pos . ' Pos';
                                        ?>
                                    </button>
                                </td>
                                <td><?= $data['nama_kelas'] ?></td>
                                <td><?= $data['harga'] ?></td>
                                <td>
                                    <a href="<?= site_url('admin/rute/edit/' . $data['id_rute']) ?>" type="button" class="btn btn-primary mx-1"><i class="mdi mdi-account-edit"></i>Edit</a>
                                    <a href="#fill-danger-modal_<?= $data['id_rute'] ?>" type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#fill-danger-modal_<?= $data['id_rute'] ?>"><i class="mdi mdi-trash-can-outline"></i>Hapus</a>
                                </td>
                                <div id="fill-danger-modal_<?= $data['id_rute'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-danger-modalLabel">Hapus Rute</h4>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus data rute dengan data</p>
                                                <p>Data ini mempunyai data Nama rute "<?= $data['nama_rute'] ?>", di "<?= $data['kota'] ?>" seat dengan titik jemput "<?= $data['titik'] ?>"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <a href="<?= site_url('admin/rute/del/' . $data['id_rute']) ?>" type="button" class="btn btn-outline-light">Hapus Sekarang</a>
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