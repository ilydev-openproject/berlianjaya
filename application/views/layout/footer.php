<section>
    <div class="cta">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10 col-md-10 col-lg-10">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-7 col-12">
                            <div class="left">
                                <h3>mau bergabung dengan kami?</h3>
                                <p>kami membuka lowongan untuk agen dan karyawan baru untuk bergabung dengan perusahaan kami </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="right">
                                <button class="btn">daftar sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <!-- place footer here -->
    <div class="container">
        <div class="body-foot">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="brand">
                        <img src="<?= base_url('/public/assets/img/logo/brand.png') ?>" alt="">
                    </div>
                    <div class="info">
                        <div class="alamat">
                            <a style="text-decoration: none;" href="https://maps.app.goo.gl/nXKkksjxF78Hsb279"><span>Alamat Kantor : Jl. lingkar Utara, Peganjaran, Bae, Kudus (59327).</span></a>
                        </div>
                        <div class="telepon">
                            <span>Telepon : 081226969379</span>
                        </div>
                        <div class="email">
                            <span>Email : </span>
                        </div>
                        <div class="operasional">
                            <span>Operasional : Senin - Jumat, 08:00 - 17:00</span>
                        </div>
                    </div>
                    <div class="medsos">
                        <a href=""><i class="fab fa-instagram fa-2x"></i></a>
                        <a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="header">
                                    <h4>Tentang</h4>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li>Tentang Berlian Jaya</li>
                                        <li>Tim Kami</li>
                                        <li>Kebijakan Privasi</li>
                                        <li>Karir</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="header">
                                    <h4>layanan</h4>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li>Rute dan Jadwal</li>
                                        <li>Pemesanan Tiket</li>
                                        <li>Layanan Pariwisata</li>
                                        <li>Penyewaan Bus</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="header">
                                    <h4>Panduan</h4>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li>FAQ</li>
                                        <li>Kebijakan dan Syarat</li>
                                        <li>Bantuan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>© 2023 <b>Berlian Jaya</b>. Hak Cipta Dilindungi Undang-Undang.</span>
        </div>
    </div>
</footer>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<!-- waypoints -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="<?= base_url('/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Tambahkan pustaka JavaScript Bootstrap Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- <script>
    $(document).ready(function() {
        var cardGroup = $('#blogGroup');
        var cardWidth = 567;
        var visibleCards = 4;
        var totalCards = $('.card').length;
        var currentPosition = 0;
        var activeIndex = 0;

        function geserBlog(arah) {
            var move = cardWidth;

            if (arah === 'kanan') {
                activeIndex = (activeIndex + 1) % totalCards;
            } else {
                activeIndex = (activeIndex - 1 + totalCards) % totalCards;
            }

            currentPosition = -activeIndex * cardWidth;

            cardGroup.find('.card').removeClass('active');
            cardGroup.find('.card:eq(' + activeIndex + ')').addClass('active');

            cardGroup.css('transform', 'translateX(' + currentPosition + 'px)');
        }

        $('.btn').on('click', function() {
            var arah = $(this).data('arah');
            geserBlog(arah);
        });
    });
</script> -->
<script>
    $('.my-select').selectpicker();
    $('.datepicker').datepicker();
</script>
</body>

</html>