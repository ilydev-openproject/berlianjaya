</div>
</div>
<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Velonic - Theme by <b>Techzaa</b>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
        <h5 class="text-white m-0">Theme Settings</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-3">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                            <label class="form-check-label" for="layout-color-light">
                                <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                            <label class="form-check-label" for="layout-color-dark">
                                <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div id="layout-width">
                    <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label" for="layout-mode-fluid">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div id="layout-boxed">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label" for="layout-mode-boxed">
                                        <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/boxed.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="form-check-label" for="topbar-color-light">
                                <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="form-check-label" for="topbar-color-dark">
                                <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/topbar-dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div>
                    <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/sidebar-light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                <label class="form-check-label" for="leftbar-size-compact">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/compact.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/sm.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                        </div>


                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                <label class="form-check-label" for="leftbar-size-full">
                                    <img src="<?= base_url('/public/Admin/dist/') ?>assets/images/layouts/full.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                    <div class="btn-group checkbox" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="https://1.envato.market/velonic" target="_blank" role="button" class="btn btn-primary w-100">Buy Now</a>
            </div>
        </div>
    </div>
</div>
<!-- file preview template -->
<div class="d-none" id="uploadFotoUser">
    <div class="card mt-1 mb-0 shadow-none border">
        <div class="p-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="" />
                </div>
                <div class="col ps-0">
                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                    <p class="mb-0" data-dz-size></p>
                </div>
                <div class="col-auto">
                    <!-- Button -->
                    <a href="" class="btn btn-link btn-lg text-danger" data-dz-remove>
                        <i class="ri-close-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Sumber daya JavaScript Summernote -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Vendor js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/vendor.min.js"></script>

<!--  Select2 Plugin Js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/select2/js/select2.min.js"></script>

<!-- Daterangepicker js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/daterangepicker/moment.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap Datepicker Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap Timepicker Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<!-- Input Mask Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

<!-- Bootstrap Touchspin Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

<!-- Bootstrap Maxlength Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<!-- Typehead Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/handlebars/handlebars.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- Typehead Demo js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/pages/typehead.init.js"></script>

<!-- Timepicker Demo js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/pages/timepicker.init.js"></script>

<!-- App js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/app.min.js"></script>

<!-- Apex Charts js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard App js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/pages/dashboard.js"></script>

<!-- dropify -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/jquery-toast-plugin/jquery.toast.min.js"></script>

<!-- Toastr Demo js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/js/pages/toastr.init.js"></script>

<!-- sweat alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- Datatables js -->
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('/public/Admin/dist/') ?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>





<script>
    $(document).ready(function() {
        $('.dropify').dropify({
            messages: {
                'default': 'Upload Foto',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    });
    $('#userTable').dataTable({
        paging: true,
        searching: true
    });
    // summernote 
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    // alert
    $(document).ready(function() {
        var success = "<?php echo $this->session->flashdata('success') ?>";
        var s_success = "<?php echo $this->session->flashdata('s_success') ?>";
        var error = "<?php echo $this->session->flashdata('error') ?>";
        console.log(success);
        console.log(s_success);
        if (success) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: success,
            })
        } else if (s_success) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "<?php echo $this->session->flashdata('s_success'); ?>",
                showConfirmButton: false,
                timer: 1500
            });
        } else if (error) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: error,
            })
        }
    });


    // modal
    const exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        const modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = `New message to ${recipient}`
        modalBodyInput.value = recipient
    })


    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'sales',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        xaxis: {
            categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();


    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

</html>