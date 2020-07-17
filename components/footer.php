<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="<?= $base_url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= $base_url ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= $base_url ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= $base_url ?>assets/vendor/chart.js/Chart.min.js"></script>

<script src="<?= $base_url ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= $base_url ?>assets/js/demo/datatables-demo.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="<?= $base_url ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= $base_url ?>assets/js/demo/chart-pie-demo.js"></script> -->
<script>
    // $(document).ready(function() {
    //     $(document).on('click', '.navbar-nav li a', function() {
    //         console.log($(this));
    //         $('.active').removeClass('active');
    //         $(this).parent().addClass('active');
    //     });
    // });
    // $(document).ready(function() {
    //     $("#accordionSidebar a").each(function(index, element) {
    //         if ($(this).attr('href') == window.location.pathname) {
    //             $(this).parent().addClass("active");
    //         }
    //     });
    // });


    // $(function() {
    //     $('ul li .nav-item').filter(function() {
    //         return this.href == location.href
    //     }).parent().addClass('active').siblings().removeClass('active');

    //     $('.nav a').click(function() {
    //         $(this).parent().addClass('active').siblings().removeClass('active')
    //     });
    // });


    // $(document).ready(function() {
    //     $('.menus').click(function(e) {
    //         // e.preventDefault()
    //         var menu = $(this).attr('id')
    //         if (menu == "home") {
    //             $('.isi').load('home.php');
    //         } else if (menu == 'admin') {
    //             $('.isi').load('pages/admin/tampil.php');
    //         } else if (menu == 'barang') {
    //             $('.isi').load('pages/barang/tampil.php');
    //         }
    //     })
    //     $('.isi').load('home.php');
    // })

    // $(document).ready(function(e) {
    //     $('ul li .nav-item').click(function() {
    //         $('li .nav-item').removeClass("active");
    //         $(this).addClass("active");

    //     });
    //     e.preventDefault();
    // });
</script>
</body>

</html>