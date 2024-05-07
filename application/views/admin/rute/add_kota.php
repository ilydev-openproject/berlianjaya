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
                        <select class="form-control select2" name="id_daerah" id="daerah" data-toggle="select2" data-placeholder="Pilih daerah" required>
                            <option value="">Pilih Daerah</option>
                            <?php foreach ($daerah as $daerah) : ?>
                                <option value="<?= $daerah['id_daerah'] ?>"><?= ucwords($daerah['nama_daerah']) ?></option>
                            <?php endforeach ?>
                        </select>
                        <span id="id_daerah_error" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto_kota" id="dropify1" class="dropify" data-height="100" required />
                        <input type="hidden" name="oldfoto" value="">
                        <span id="foto_error" class="text-danger"></span>
                    </div>
                    <button type="button" class="btn btn-info" onclick="validateForm()"><i class="mdi mdi-account-multiple-plus me-2"></i>Simpan</button>
                </form>

                <script>
                    function validateForm() {
                        var nama_kota = document.getElementById('nama_kota').value;
                        var id_daerah = document.getElementById('daerah').value;
                        var foto_user = document.getElementById('dropify1').files[0];

                        if (nama_kota.trim() === '') {
                            document.getElementById('nama_kota_error').innerHTML = 'Nama kota harus diisi';
                            return; // Hentikan validasi jika input kosong
                        }
                        if (id_daerah.trim() === '') {
                            document.getElementById('id_daerah_error').innerHTML = 'Daerah harus dipilih';
                            return; // Hentikan validasi jika input kosong
                        }
                        if (!foto_user) {
                            document.getElementById('foto_error').innerHTML = 'Foto harus diupload';
                            return; // Hentikan validasi jika input kosong
                        }

                        // Lakukan AJAX untuk memeriksa nama kota di database
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
                                    // Jika tidak ada pesan kesalahan, submit form
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