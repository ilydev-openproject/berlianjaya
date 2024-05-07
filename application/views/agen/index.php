<?php
$this->load->view('layout/header');
?>

<main>
    <div class="agen-hero">
        <div class="container">
            <div class="header">
                <h1>pesan tiket bus <br> dari mana saja,<br> kapan saja</h1>
            </div>
        </div>
    </div>
    <div class="agen_group">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 p-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="header">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6 col-lg-8 d-flex justify-content-start align-items-center">
                                        <span class="material-symbols-outlined">
                                            instant_mix
                                        </span>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span id="selectedItemText">Semua</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <?php foreach ($kota as $kota) : ?>
                                                    <button class="dropdown-item" href="#" onclick="selectItem('<?= $kota['nama_kota'] ?>')"><?= $kota['nama_kota'] ?></button>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                        <script>
                                            function selectItem(itemText) {
                                                // Perbarui teks tombol dropdown dengan teks item yang dipilih
                                                document.getElementById('selectedItemText').textContent = itemText;
                                            }
                                        </script>
                                    </div>
                                    <div class="col-6 col-lg-4 d-flex justify-content-start align-items-center ">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari Agen" aria-label="Dollar amount (with dot and two decimal places)">
                                            <a href="#" class="btn input-group-text"><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="count_agen">
                                        <?php foreach ($perkota as $data) : ?>
                                            <div class="peragen">
                                                <div class="header">
                                                    <h4><?= $data['nama_kota'] ?></h4>
                                                </div>
                                                <div class="body">
                                                    <div class="row g-3 h-100" style="overflow: hidden;">
                                                        <?php
                                                        $agenkota = $this->db->where('id_kota', $data['id_kota'])->get('agen')->result_array();
                                                        if (empty($agenkota)) {
                                                            echo '<h6 class="text-secondary h-100" style="height: 100%;">Agen Belum Tersedia</h6>';
                                                        } else {
                                                            foreach ($agenkota as $agen) :
                                                        ?>
                                                                <div class="col-lg-4 col-12">
                                                                    <div class="col-body d-flex justify-content-between align-items-center">
                                                                        <div class="me-auto d-flex align-items-center">
                                                                            <div class="images">
                                                                                <img src="<?= base_url('/public/assets/img/agen/foto-agen/' . $agen['foto_agen']) ?>" class="img-fluid" alt="">
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="nama">
                                                                                    <span><?= $agen['nama_agen'] ?></span>
                                                                                </div>
                                                                                <div class="pos">
                                                                                    <span><?= $agen['titik'] ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wabutton ms-auto">
                                                                            <a href="https://wa.me/<?php if ($agen['wa'] == "" || $agen['wa'] == '-') {
                                                                                                        echo '+6281226969379';
                                                                                                    } else {
                                                                                                        echo $agen['wa'];
                                                                                                    } ?>/?text=Halo <?php if ($agen['wa'] == "" || $agen['wa'] == '-') {
                                                                                                                        echo 'Kantor PO. Berlian Jaya';
                                                                                                                    } else {
                                                                                                                        echo $agen['nama_agen'];
                                                                                                                    } ?>, saya ingin pesan tiket berlian jaya" target="_blank" class="btn">
                                                                                <i class="fab fa-whatsapp"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            endforeach;
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
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