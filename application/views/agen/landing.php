<?php
$this->load->view('layout/header');
?>

<main>
    <div class="landing">
        <div class="container">
            <div class="header">
                <h1>pesan tiket bus <br> dari mana saja,<br> kapan saja</h1>
            </div>
        </div>
    </div>
    <div class="tiket">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="header">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-2 g-4 col-12">
                                        <a href="javascript:void(0)" onclick="history.back()" class="btn"><i class="fal fa-arrow-left"></i></a>
                                    </div>
                                    <div class="col-lg-8 g-4 col-12">
                                        <div class="rute ">
                                            <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col-4 text-end">
                                                    <div class="berangkat">
                                                        <span><?= $asal['nama_kota'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="rute-anim text-center">
                                                        <div class="bis">
                                                            <img src="<?= base_url('/public/assets/img/icon/Shuttle bus.png') ?>" alt="">
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="219" height="12" viewBox="0 0 219 12" fill="none">
                                                            <path d="M0.666667 6C0.666667 8.94552 3.05448 11.3333 6 11.3333C8.94552 11.3333 11.3333 8.94552 11.3333 6C11.3333 3.05448 8.94552 0.666667 6 0.666667C3.05448 0.666667 0.666667 3.05448 0.666667 6ZM207.667 6C207.667 8.94552 210.054 11.3333 213 11.3333C215.946 11.3333 218.333 8.94552 218.333 6C218.333 3.05448 215.946 0.666667 213 0.666667C210.054 0.666667 207.667 3.05448 207.667 6ZM11.175 7C11.7273 7 12.175 6.55228 12.175 6C12.175 5.44772 11.7273 5 11.175 5V7ZM21.525 5C20.9727 5 20.525 5.44772 20.525 6C20.525 6.55228 20.9727 7 21.525 7V5ZM31.875 7C32.4273 7 32.875 6.55228 32.875 6C32.875 5.44772 32.4273 5 31.875 5V7ZM42.225 5C41.6727 5 41.225 5.44772 41.225 6C41.225 6.55228 41.6727 7 42.225 7V5ZM52.575 7C53.1273 7 53.575 6.55228 53.575 6C53.575 5.44772 53.1273 5 52.575 5V7ZM62.925 5C62.3727 5 61.925 5.44772 61.925 6C61.925 6.55228 62.3727 7 62.925 7V5ZM73.275 7C73.8273 7 74.275 6.55228 74.275 6C74.275 5.44772 73.8273 5 73.275 5V7ZM83.625 5C83.0727 5 82.625 5.44772 82.625 6C82.625 6.55228 83.0727 7 83.625 7V5ZM93.975 7C94.5273 7 94.975 6.55228 94.975 6C94.975 5.44772 94.5273 5 93.975 5V7ZM104.325 5C103.773 5 103.325 5.44772 103.325 6C103.325 6.55228 103.773 7 104.325 7V5ZM114.675 7C115.227 7 115.675 6.55228 115.675 6C115.675 5.44772 115.227 5 114.675 5V7ZM125.025 5C124.473 5 124.025 5.44772 124.025 6C124.025 6.55228 124.473 7 125.025 7V5ZM135.375 7C135.927 7 136.375 6.55228 136.375 6C136.375 5.44772 135.927 5 135.375 5V7ZM145.725 5C145.173 5 144.725 5.44772 144.725 6C144.725 6.55228 145.173 7 145.725 7V5ZM156.075 7C156.627 7 157.075 6.55228 157.075 6C157.075 5.44772 156.627 5 156.075 5V7ZM166.425 5C165.873 5 165.425 5.44772 165.425 6C165.425 6.55228 165.873 7 166.425 7V5ZM176.775 7C177.327 7 177.775 6.55228 177.775 6C177.775 5.44772 177.327 5 176.775 5V7ZM187.125 5C186.573 5 186.125 5.44772 186.125 6C186.125 6.55228 186.573 7 187.125 7V5ZM197.475 7C198.027 7 198.475 6.55228 198.475 6C198.475 5.44772 198.027 5 197.475 5V7ZM207.825 5C207.273 5 206.825 5.44772 206.825 6C206.825 6.55228 207.273 7 207.825 7V5ZM6 7H11.175V5H6V7ZM21.525 7H31.875V5H21.525V7ZM42.225 7H52.575V5H42.225V7ZM62.925 7H73.275V5H62.925V7ZM83.625 7H93.975V5H83.625V7ZM104.325 7H114.675V5H104.325V7ZM125.025 7H135.375V5H125.025V7ZM145.725 7H156.075V5H145.725V7ZM166.425 7H176.775V5H166.425V7ZM187.125 7H197.475V5H187.125V7ZM207.825 7H213V5H207.825V7Z" fill="#FE0000" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tujuan">
                                                        <span><?= $tujuan['nama_kota'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-12 g-4 text-lg-end">
                                        <a class="btn ubah" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ubah Pencarian</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            setlocale(LC_TIME, 'id_ID.UTF-8');
                            $tgl = tgl_id($tanggal)
                            ?>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="tanggal">
                                        <span><?= strftime('%e %B %Y', strtotime($tgl)) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card_t">
                                    <div class="card-body">
                                        <form action="<?= site_url('home/landing') ?>" method="GET" onsubmit="return validateForm()">
                                            <div class="form">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-lg-3 col-md-6" id="asal">
                                                        <div class="form-group">
                                                            <label class="ms-2" for="asal">Kota Asal</label>
                                                            <div class="button-group d-flex">
                                                                <span class="input-group-text material-symbols-outlined" id="basic-addon1">
                                                                    directions_bus
                                                                </span>
                                                                <select class="my-select" style="overflow: visible !important;" data-live-search="true" id="selectAsal" name="asal" required>
                                                                    <option value="">Asal</option>
                                                                    <?php foreach ($kota as $k) : ?>
                                                                        <option <?php
                                                                                if ($k['id_kota'] == $asal['id_kota']) {
                                                                                    echo " selected";
                                                                                }
                                                                                ?> value="<?= $k['id_kota'] ?>" data-daerah="<?= $k['id_daerah'] ?>"><?= $k['nama_kota'] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input hidden type="text" name="daerah_asal" id="daerah_asal" readonly>
                                                    <script>
                                                        document.getElementById('selectAsal').addEventListener('change', function() {
                                                            var selectedOption = this.options[this.selectedIndex];
                                                            var daerahAsalInput = document.getElementById('daerah_asal');
                                                            daerahAsalInput.value = selectedOption.getAttribute('data-daerah');
                                                        });
                                                    </script>
                                                    <div class="col-lg-3 col-md-6" id="tujuan">
                                                        <div class="form-group">
                                                            <label class="ms-2" for="tujuan">Kota Tujuan</label>
                                                            <div class="button-group d-flex">
                                                                <span class="input-group-text material-symbols-outlined" id="basic-addon1">
                                                                    pin_drop
                                                                </span>
                                                                <select class="my-select" name="tujuan" style="overflow: visible !important;" data-live-search="true" id="selectTujuan" required>
                                                                    <option value="">Tujuan</option>
                                                                    <?php foreach ($kota as $k) : ?>
                                                                        <option <?php
                                                                                if ($k['id_kota'] == $tujuan['id_kota']) {
                                                                                    echo " selected";
                                                                                }
                                                                                ?> value="<?= $k['id_kota'] ?>" data-daerah="<?= $k['id_daerah'] ?>"><?= $k['nama_kota'] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input hidden type="text" name="daerah_tujuan" id="daerah_tujuan" readonly>
                                                    <script>
                                                        document.getElementById('selectTujuan').addEventListener('change', function() {
                                                            var selectedOption = this.options[this.selectedIndex];
                                                            var daerahTujuanInput = document.getElementById('daerah_tujuan'); // Perbaikan di sini
                                                            daerahTujuanInput.value = selectedOption.getAttribute('data-daerah');
                                                        });
                                                    </script>

                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="form-group">
                                                            <label class="ms-2" for="asal">Tanggal</label>
                                                            <div class="button-group d-flex justify-content-start align-items-center">
                                                                <span class="input-group-text material-symbols-outlined" id="basic-addon1">
                                                                    calendar_month
                                                                </span>
                                                                <input type="text" class="my-select datepicker" placeholder="Tanggal" name="tanggal" data-date-format="yyyy-mm-dd" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="btncari">
                                                            <label for=""></label>
                                                            <button href="javascript:void(0)" type="submit" class="btn d-flex justify-content-center align-items-center" name="submit" onclick="this.closest('form').submit()">
                                                                <span class="material-symbols-outlined">search</span>
                                                                <h6>cari Agen</h6>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($daerah_asal == $daerah_tujuan) {
                                echo '<div class="alert alert-danger mt-5" role="alert">Maaf daerah yang anda pilih tidak boleh sama, silahkan ubah pencarian!</div>';
                            }
                            ?>
                            <div class="daftar_agen <?php if ($daerah_asal == $daerah_tujuan) {
                                                        echo 'd-none';
                                                    } else {
                                                        echo "d-block";
                                                    } ?>">
                                <div class="row">
                                    <div class="col-2 col-lg-1 text-center">

                                    </div>
                                    <div class="col-3 col-lg-3 text-center">
                                        <span class="title">Agen</span>
                                    </div>
                                    <div class="col-4 col-lg-2 text-center">
                                        <span class="title">Alamat</span>
                                    </div>
                                    <div class="col-0 col-lg-2  text-center" id="kelas">
                                        <span class="title">Kelas</span>
                                    </div>
                                    <div class="col-0 col-lg-2 text-center" id="whatsapp">
                                        <span class="title">Whatsapp</span>
                                    </div>
                                    <div class="col-1 col-lg-2 text-center">

                                    </div>
                                </div>


                                <?php
                                $this->load->view('layout/modal_kursi');
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>


<?php
$this->load->view('layout/footer');
?>