<div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= site_url('home') ?>">
            <img src="<?= base_url('/public/assets/img/logo/brand.png') ?>" alt="Berlian Jaya Logo">
        </a>
        <div class="telpon d-lg-none d-block">
            <a href="">
                <i class="fad fa-phone"></i>
            </a>
        </div>
        <!-- <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'home') {
                                            echo 'active';
                                        } ?>" href="<?= site_url('home') ?>" aria-current="page">Beranda <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'agen') {
                                            echo 'active';
                                        } ?>" href="<?= site_url('agen') ?>">Agen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'about') {
                                            echo 'active';
                                        } ?>" href="<?= site_url('about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'blog') {
                                            echo 'active';
                                        } ?>" href="<?= site_url('blog') ?>">Berita Terkini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'loker') {
                                            echo 'active';
                                        } ?>" href="<?= site_url('loker') ?>">Loker</a>
                </li>
            </ul>
            <a href="whatsapp://send?phone=6281226969379&text=Halo,%20saya%20tertarik%20untuk%20chat.%20" class="btn">Hubungi Kami</a>
        </div>
    </nav>
    <div class="navmob">
        <ul class="navmob-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == 'home') {
                                        echo 'active';
                                    } ?>" href="<?= site_url('home') ?>" aria-current="page">
                    <div class="menu d-flex justify-content-center align-items-center">
                        <div class="sub-menu text-center">
                            <i class="fal fa-home-lg-alt"></i>
                            <p>Beranda</p>
                        </div>
                    </div> <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == 'agen') {
                                        echo 'active';
                                    } ?>" href="<?= site_url('agen') ?>">
                    <div class="menu d-flex justify-content-center align-items-center">
                        <div class="sub-menu text-center">
                            <i class="far fa-users"></i>
                            <p>Agen</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == 'about') {
                                        echo 'active';
                                    } ?>" href="<?= site_url('about') ?>">
                    <div class="menu d-flex justify-content-center align-items-center">
                        <div class="sub-menu text-center">
                            <i class="far fa-clipboard-user"></i>
                            <p>Tentang Kami</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == 'blog') {
                                        echo 'active';
                                    } ?>" href="<?= site_url('blog') ?>">
                    <div class="menu d-flex justify-content-center align-items-center">
                        <div class="sub-menu text-center">
                            <i class="fal fa-newspaper"></i>
                            <p>Berita Terkini</p>
                        </div>
                    </div>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(1) == 'loker') {
                                        echo 'active';
                                    } ?>" href="<?= site_url('loker') ?>">
                    <div class="menu d-flex justify-content-center align-items-center">
                        <div class="sub-menu text-center">
                            <i class="far fa-user-plus"></i>
                            <p>Lowongan</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>