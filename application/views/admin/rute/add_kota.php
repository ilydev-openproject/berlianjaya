<?php
$this->load->view('admin/layout/header');
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tambah Kota</h4>
                <span class="text-muted mb-0">
                    Selamat datang di halaman tambah kota. Di sini Anda dapat mengelola informasi kota bus dengan mudah. Lihat, tambah, tambah, atau hapus data bus sesuai kebutuhan Anda. Pastikan data yang di masukkan sesuai dengan database.
                </span>
            </div>
            <div class="card-body py-5">
                <form id="addKotaForm" action="<?= site_url('admin/rute/add_kota_process') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" name="nama_kota" id="nama_kota" class="form-control" placeholder="Masukkan nama kota" required>
                        <span id="nama_kota_error" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control select2" name="id_daerah" data-toggle="select2" data-placeholder="Pilih daerah" required>
                            <option value="">Pilih Daerah</option>
                            <?php foreach ($daerah as $daerah) : ?>
                                <option value="<?= $daerah['id_daerah'] ?>"><?= ucwords($daerah['nama_daerah']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <button type="button" class="btn btn-info" onclick="validateForm()"><i class="mdi mdi-account-multiple-plus me-2"></i>Simpan</button>
                </form>

                <script>
                    function validateForm() {
                        var nama_kota = document.getElementById('nama_kota').value;
                        $.ajax({
                            url: '<?= site_url('admin/rute/check_nama_kota') ?>',
                            type: 'POST',
                            data: {
                                nama_kota: nama_kota
                            },
                            success: function(response) {
                                if (response === 'exists') {
                                    document.getElementById('nama_kota_error').innerHTML = 'Nama kota sudah ada';
                                } else {
                                    document.getElementById('nama_kota_error').innerHTML = '';
                                    // Jika valid, submit form
                                    document.getElementById('addKotaForm').submit();
                                }
                            }
                        });
                    }
                </script>

            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('admin/layout/footer');
?>