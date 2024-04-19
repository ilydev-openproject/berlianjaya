<?php
$this->load->view('layout/header');
?>

<main>
    <div class="hero">
        <div class="overlay"></div>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="<?= base_url('/public/assets/img/hero/hero.png') ?>" class=" d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('/public/assets/img/hero/hero2.webp') ?>" class=" d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('/public/assets/img/hero/hero3.webp') ?>" class=" d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-10 col-md-10 col-lg-10">
                        <h1>
                            <?php
                            $this->load->view('hero/hero');
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-10 col-lg-10 set_tiket">
                    <div class="card">
                        <div class="card-header">
                            <h5>pesan tiket perjalanan</h5>
                            <span class="material-symbols-outlined">
                                confirmation_number
                            </span>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('home/landing') ?>" method="GET" onsubmit="return validateForm()">
                                <div class="form">
                                    <div class="row d-flex justify-content-between align-items-center">
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
                                                            <option value="<?= $k['id_kota'] ?>" data-daerah="<?= $k['id_daerah'] ?>"><?= $k['nama_kota'] ?></option>
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
                                                            <option value="<?= $k['id_kota'] ?>" data-daerah="<?= $k['id_daerah'] ?>"><?= $k['nama_kota'] ?></option>
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
            </div>
        </div>
    </div>
    <section>
        <div class="sec2">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-10 col-md-10 col-lg-10">
                        <div class="brand-group">
                            <img src="<?= base_url('/public/assets/img/brands/mercy.png') ?>" alt="">
                            <img src="<?= base_url('/public/assets/img/brands/acania.png') ?>" alt="">
                            <img src="<?= base_url('/public/assets/img/brands/hino.png') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-10 col-md-10 col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3 w-100 d-flex justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-group">
                                                    <div class="icon">
                                                        <span class="material-symbols-outlined">
                                                            mop
                                                        </span>
                                                    </div>
                                                    <div class="icon-t">
                                                        <p>bersih</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-group">
                                                    <div class="icon">
                                                        <span class="material-symbols-outlined">
                                                            airline_seat_recline_extra
                                                        </span>
                                                    </div>
                                                    <div class="icon-t">
                                                        <p>nyaman</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-group">
                                                    <div class="icon">
                                                        <span class="material-symbols-outlined">
                                                            handshake
                                                        </span>
                                                    </div>
                                                    <div class="icon-t">
                                                        <p>ramah</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-group">
                                                    <div class="icon d-flex justify-content-center">
                                                        <span class="material-symbols-outlined">
                                                            order_approve
                                                        </span>
                                                    </div>
                                                    <div class="icon-t">
                                                        <p>tersertifikasi</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="icon-group">
                                                    <div class="icon">
                                                        <span class="material-symbols-outlined">
                                                            rewarded_ads
                                                        </span>
                                                    </div>
                                                    <div class="icon-t">
                                                        <p>pengemudi berpengalaman</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section fitur -->
    <section>
        <div class="agen">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-10 col-md-10 col-lg-10">
                        <div class="header">
                            <h3><span class="agen">Agen</span> <span class="kami">Kami</span></h3>
                        </div>
                        <div class="btngroup">
                            <button class="btn" onclick="geserCard('kiri')"><i class="far fa-arrow-left"></i></button>
                            <button class="btn" onclick="geserCard('kanan')"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="scroll-content">
                            <div class="agengroup" id="agenGroup">
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/jepara.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Jepara</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/kudus.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Kudus</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/pati.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Pati</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/purwodadi.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Purwodadi</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/jepara.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Jepara</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/bojonegoro.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Bojonegoro</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_a">
                                    <div class="card-body">
                                        <div class="images">
                                            <img src="<?= base_url('/public/assets/img/agen/jepara.png') ?>" alt="">
                                        </div>
                                        <div class="card-text">
                                            <div class="info">
                                                <div class="kota">
                                                    <span>Jepara</span>
                                                </div>
                                                <div class="total">
                                                    <span>20 Agen</span>
                                                </div>
                                            </div>
                                            <button class="btn"><i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var agenGroup = document.getElementById('agenGroup');
                                var agencardWidth = 290; // Lebar satu card
                                var agenvisibleCards = 1; // Jumlah card yang terlihat sekaligus
                                var agentotalCards = document.querySelectorAll('.card_a').length;
                                var agencurrentPosition = 0; // Posisi awal

                                function geserCard(arah) {
                                    var move = agencardWidth;

                                    if (arah === 'kanan') {
                                        move = -agencardWidth;
                                    }

                                    agencurrentPosition += move;

                                    if (agencurrentPosition > 0) {
                                        agencurrentPosition = 0;
                                    } else if (agencurrentPosition < -(agentotalCards - agenvisibleCards) * agencardWidth) {
                                        agencurrentPosition = -(agentotalCards - agenvisibleCards) * agencardWidth;
                                    }

                                    agenGroup.style.transform = 'translateX(' + agencurrentPosition + 'px)';
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end agen -->
    <section>
        <div class="tentang">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-4 col-12 gy-4">
                        <div class="header">
                            <h3>Tentang Kami</h3>
                        </div>
                        <div class="sometext">
                            <p>Dengan puluhan tahun pengalaman dalam industri transportasi, Berlian Jaya adalah pilihan utama ribuan pelanggan yang mencari perjalanan nyaman dan aman. Dengan armada modern yang terawat baik dan tim pengemudi berpengalaman, kami menghadirkan pengalaman perjalanan yang tak terlupakan.</p>
                        </div>
                        <div class="archievement">
                            <div class="arcgroup">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="arc1">
                                            <span>2000+</span>
                                            <div class="desc">
                                                <span>pelanggan</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="arc2">
                                            <span>100+</span>
                                            <div class="desc">
                                                <span>Armada</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="arcgroup2">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="arc3">
                                            <span>25+</span>
                                            <div class="desc">
                                                <span>Rute</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="arc4">
                                            <span>500+</span>
                                            <div class="desc">
                                                <span>Agen</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Fungsi untuk memulai animasi
                                function startCounting(target, endValue) {
                                    let current = 0;
                                    const duration = 2000; // Durasi animasi dalam milidetik
                                    const interval = 10; // Interval waktu untuk setiap langkah animasi
                                    const steps = duration / interval;

                                    const stepValue = endValue / steps;

                                    const updateCounter = setInterval(function() {
                                        current += stepValue;
                                        target.innerHTML = `${Math.round(current)}+`;

                                        if (current >= endValue) {
                                            clearInterval(updateCounter);
                                            target.innerHTML = `${endValue}+`;
                                        }
                                    }, interval);
                                }

                                // Fungsi untuk memulai animasi ketika elemen muncul
                                function animateOnScroll(element, endValue) {
                                    new Waypoint({
                                        element: element,
                                        handler: function() {
                                            startCounting(element.querySelector(' span'), endValue);
                                            this.destroy(); // Hapus waypoint setelah selesai
                                        },
                                        offset: '80%', // Ubah sesuai kebutuhan Anda
                                    });
                                }

                                // Mulai animasi untuk setiap elemen
                                animateOnScroll(document.querySelector('.arc1'), 2000);
                                animateOnScroll(document.querySelector('.arc2'), 100);
                                animateOnScroll(document.querySelector('.arc3'), 25);
                                animateOnScroll(document.querySelector('.arc4'), 500);
                            });
                        </script>

                    </div>
                    <div class="col-lg-8 col-12 gy-4">
                        <div class="images">
                            <video width="100%" height="100%" id="myVideo" controls>
                                <source src="<?= base_url('/public/assets/img/video/copy_6D986A37-113D-4368-81E2-EA54FE8995F6.mov') ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <script>
                                // Fungsi untuk memeriksa apakah elemen terlihat di dalam viewport
                                function isElementInViewport(el) {
                                    var rect = el.getBoundingClientRect();
                                    return (
                                        rect.top >= 0 &&
                                        rect.left >= 0 &&
                                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                    );
                                }

                                // Fungsi untuk menetapkan autoplay ketika elemen video terlihat
                                function handleAutoplay() {
                                    var myVideo = document.getElementById("myVideo");
                                    if (isElementInViewport(myVideo)) {
                                        myVideo.autoplay = true;
                                        myVideo.load();
                                        // Hapus listener agar fungsi tidak dipanggil lagi setelah autoplay diaktifkan
                                        window.removeEventListener("scroll", handleAutoplay);
                                    }
                                }

                                // Tambahkan listener untuk memanggil handleAutoplay saat melakukan scroll
                                window.addEventListener("scroll", handleAutoplay);

                                // Panggil handleAutoplay untuk memeriksa status autoplay saat halaman dimuat
                                handleAutoplay();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end tentang -->
    <section>
        <div class="artikel">
            <div class="container">
                <div class="header">
                    <h3>berita & artikel <span class="terkini">terkini</span></h3>
                </div>
                <div class="btngroup">
                    <button class="btn" onclick="geserBlog('prev')"><i class="far fa-arrow-left"></i></button>
                    <button class="btn" onclick="geserBlog('next')"><i class="far fa-arrow-right"></i></button>
                </div>
                <div class="scroll-content">
                    <div class="bloggroup" id="blogGroup">
                        <div class="card_b active" data-index="0">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/assets/img/blog/blog1.png') ?>" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="info">
                                        <div class="penulis">
                                            <span>Paimin Super Bis |</span>
                                            <span class="tanggal">25 oktober 2023 <i class="fad fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="judul">
                                            <span>Mengintip Kebersihan dan Keamanan Bus Berlian Jaya</span>
                                        </div>
                                        <div class="sometext">
                                            <p>menjelaskan kepada pelanggan bagaimana "Berlian Jaya" menjaga kebersihan dan keamanan bus untuk melindungi penumpang.</p>
                                        </div>
                                    </div>
                                    <button class="btn">selengkapnya <i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card_b" data-index="1">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/assets/img/blog/blog2.png') ?>" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="info">
                                        <div class="penulis">
                                            <span>Paimin Super Bis |</span>
                                            <span class="tanggal">25 oktober 2023 <i class="fad fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="judul">
                                            <span>Mengintip Kebersihan dan Keamanan Bus Berlian Jaya</span>
                                        </div>
                                        <div class="sometext">
                                            <p>menjelaskan kepada pelanggan bagaimana "Berlian Jaya" menjaga kebersihan dan keamanan bus untuk melindungi penumpang.</p>
                                        </div>
                                    </div>
                                    <button class="btn">selengkapnya <i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card_b" data-index="2">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/assets/img/blog/blog3.png') ?>" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="info">
                                        <div class="penulis">
                                            <span>Paimin Super Bis |</span>
                                            <span class="tanggal">25 oktober 2023 <i class="fad fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="judul">
                                            <span>Mengintip Kebersihan dan Keamanan Bus Berlian Jaya</span>
                                        </div>
                                        <div class="sometext">
                                            <p>menjelaskan kepada pelanggan bagaimana "Berlian Jaya" menjaga kebersihan dan keamanan bus untuk melindungi penumpang.</p>
                                        </div>
                                    </div>
                                    <button class="btn">selengkapnya <i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card_b" data-index="3">
                            <div class="card-body">
                                <div class="images">
                                    <img src="<?= base_url('/public/assets/img/blog/blog1.png') ?>" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="info">
                                        <div class="penulis">
                                            <span>Paimin Super Bis |</span>
                                            <span class="tanggal">25 oktober 2023 <i class="fad fa-calendar-alt"></i></span>
                                        </div>
                                        <div class="judul">
                                            <span>Mengintip Kebersihan dan Keamanan Bus Berlian Jaya</span>
                                        </div>
                                        <div class="sometext">
                                            <p>menjelaskan kepada pelanggan bagaimana "Berlian Jaya" menjaga kebersihan dan keamanan bus untuk melindungi penumpang.</p>
                                        </div>
                                    </div>
                                    <button class="btn">selengkapnya <i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        var blogGroup = document.getElementById('blogGroup');
                        var blogcardWidth = 578; // Lebar satu card
                        var blogvisibleCards = 1; // Jumlah card yang terlihat sekaligus
                        var blogtotalCards = document.querySelectorAll('.card_b').length;
                        var blogcurrentPosition = 0; // Posisi awal
                        function geserBlog(tujuan) {
                            var move = blogcardWidth;

                            if (tujuan === 'next') {
                                move = -blogcardWidth;
                            }
                            blogcurrentPosition += move;

                            if (blogcurrentPosition > 0) {
                                blogcurrentPosition = 0;
                            } else if (blogcurrentPosition < -(blogtotalCards - blogvisibleCards) * blogcardWidth) {
                                blogcurrentPosition = -(blogtotalCards - blogvisibleCards) * blogcardWidth;
                            }

                            blogGroup.style.transform = 'translateX(' + blogcurrentPosition + 'px)';
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->
    <section>
        <div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testibody">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-10 col-md-10 col-lg-10">
                                    <div class="header">
                                        <h3>kata <span class="terkini">pelanggan</span> kami</h3>
                                    </div>
                                    <div class="btngroup">
                                        <button class="btn" onclick="geserTesti('slide-prev')"><i class="far fa-arrow-left"></i></button>
                                        <button class="btn" onclick="geserTesti('slide-next')"><i class="far fa-arrow-right"></i></button>
                                    </div>
                                    <div class="scroll-content">
                                        <div class="testigroup" id="testiGroup">
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card_t text-start">
                                                <?php
                                                $this->load->view('layout/star');
                                                ?>
                                                <div class="petik">"</div>
                                                <div class="card-body">
                                                    <p class="card-text">Saya telah menggunakan layanan Berlian Jaya beberapa kali dan selalu merasa puas. Busnya nyaman, stafnya ramah, dan perjalanan selalu berjalan lancar. Ini adalah pilihan utama saya untuk perjalanan antar kota.</p>
                                                    <div class="info">
                                                        <div class="images">
                                                            <img src="<?= base_url('/public/assets/img/testimoni/testi1.jpg') ?>" alt="">
                                                        </div>
                                                        <div class="customer">
                                                            <span>Sarah H.</span>
                                                            <div class="tanggal">
                                                                <span>25-10-2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            var testiGroup = document.getElementById('testiGroup');
                                            var testicardWidth = 378; // Lebar satu card
                                            var testivisibleCards = 1; // Jumlah card yang terlihat sekaligus
                                            var testitotalCards = document.querySelectorAll('.card_t').length;
                                            var testicurrentPosition = 0; // Posisi awal
                                            function geserTesti(slide) {
                                                var move = testicardWidth;

                                                if (slide === 'slide-next') {
                                                    move = -testicardWidth;
                                                }
                                                testicurrentPosition += move;

                                                if (testicurrentPosition > 0) {
                                                    testicurrentPosition = 0;
                                                } else if (testicurrentPosition < -(testitotalCards - testivisibleCards) * testicardWidth) {
                                                    testicurrentPosition = -(testitotalCards - testivisibleCards) * testicardWidth;
                                                }

                                                testiGroup.style.transform = 'translateX(' + testicurrentPosition + 'px)';
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial -->
</main>


<?php
$this->load->view('layout/footer');
?>