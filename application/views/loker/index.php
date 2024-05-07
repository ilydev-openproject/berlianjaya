<?php
$this->load->view('layout/header');
?>

<main>
    <div class="hero-loker">
        <div class="container">
            <div class="header">
                <h1>temukan pekerjaan yang <br> cocok denganmu disini</h1>
            </div>
        </div>
    </div>
    <div class="loker-body">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-start">
                            <div class="row">
                                <div class="col-5">
                                    <div class="images">
                                        <img src="<?= base_url('/public/assets/img/loker/loker1.png') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="nama_loker">
                                        <span>Bergabung dengan Tim Agen Berlian Jaya: Kesempatan Karir Menarik Menanti!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btnlamar">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Lamar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-start">
                            <div class="row">
                                <div class="col-5">
                                    <div class="images">
                                        <img src="<?= base_url('/public/assets/img/loker/loker2.png') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="nama_loker">
                                        <span>Lowongan Pekerjaan Admin Berlian Jaya: Bergabunglah dengan Tim Kami!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btnlamar">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Lamar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-start">
                            <div class="row">
                                <div class="col-5">
                                    <div class="images">
                                        <img src="<?= base_url('/public/assets/img/loker/loker3.png') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="nama_loker">
                                        <span>Lowongan Driver Profesional: Jadilah Bagian dari Keluarga Berlian Jaya.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btnlamar">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Lamar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">isi data berikut</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="posisi" placeholder="Nama Lengkap">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-chevron-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" onclick="fAgen()" href="#">Agen</a></li>
                                        <li><a class="dropdown-item" onclick="fDriver()" href="#">Driver</a></li>
                                        <li><a class="dropdown-item" onclick="fKondektur()" href="#">Kondektur</a></li>
                                        <li><a class="dropdown-item" onclick="fAdmin()" href="#">Admin</a></li>
                                    </ul>
                                    <script>
                                        function fAgen() {
                                            document.getElementById("posisi").value = "Agen";
                                        }

                                        function fDriver() {
                                            document.getElementById("posisi").value = "Driver";
                                        }

                                        function fKondektur() {
                                            document.getElementById("posisi").value = "Kondektur";
                                        }

                                        function fAdmin() {
                                            document.getElementById("posisi").value = "Admin";
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="file" id="cv" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btl" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" id="kirim" class="btn btn-primary">Kirim Lamaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
$this->load->view('layout/footer');
?>