<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer" style="font-size: 14px !important;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Situs Website
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Name Website</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= site_url('plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= site_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= site_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= site_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script src="<?= site_url('plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= site_url('plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= site_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<!-- Select2 -->
<script src="<?= site_url('plugins/plugins/select2/js/select2.full.min.js'); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= site_url('plugins/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?= site_url('plugins/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= site_url('plugins/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<!-- date-range-picker -->
<script src="<?= site_url('plugins/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?= site_url('plugins/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= site_url('plugins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= site_url('plugins/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script>
<!-- BS-Stepper -->
<script src="<?= site_url('plugins/plugins/bs-stepper/js/bs-stepper.min.js'); ?>"></script>
<!-- dropzonejs -->
<script src="<?= site_url('plugins/dropzone/min/dropzone.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= site_url('assets/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= site_url('assets/js/demo.js'); ?>"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        // $("#example1").DataTable({
        //     "responsive": true, "lengthChange": false, "autoWidth": false,
        //     "buttons": ["csv", "excel", "pdf", "print"]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false;

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        });

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file);
            };
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0";
        });

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        };
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true);
        };
        // DropzoneJS Demo Code End
    });
</script>
</body>

</html>