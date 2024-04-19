<div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= site_url('home') ?>">
            <img src="<?= base_url('/public/assets/img/logo/brand.png') ?>" alt="Berlian Jaya Logo">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                    <a class="nav-link <?php if ($this->uri->segment(1) == 'tentang') {
                                            echo 'active';
                                        } ?>" href="#">Tentang Kami</a>
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
</div>