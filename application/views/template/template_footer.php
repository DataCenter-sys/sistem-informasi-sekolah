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
            "lengthMenu": [5, 10, 25, 50],
            "language": {
                "loadingRecords": "Mohon Tunggu...",
                "emptyTable": "Belum ada data yang tersimpan",
                "paginate": {
                    "previous": '‹',
                    "next": '›'
                },
                " aria": {
                    "paginate": {
                        "sortAscending": " - click/return to sort ascending",
                        "previous": 'Previous',
                        "next": 'Next'
                    }
                }
            }
        });

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "lengthMenu": [5],
            "language": {
                "loadingRecords": "Mohon Tunggu...",
                "emptyTable": "Belum ada data yang tersimpan",
                "paginate": {
                    "previous": '‹',
                    "next": '›'
                },
                " aria": {
                    "paginate": {
                        "sortAscending": " - click/return to sort ascending",
                        "previous": 'Previous',
                        "next": 'Next'
                    }
                }
            }
        });

        $('#example3').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "lengthMenu": [5, 10, 25, 50],
            "language": {
                "loadingRecords": "Mohon Tunggu...",
                "emptyTable": "Belum ada data yang tersimpan",
                "paginate": {
                    "previous": '‹',
                    "next": '›'
                },
                " aria": {
                    "paginate": {
                        "sortAscending": " - click/return to sort ascending",
                        "previous": 'Previous',
                        "next": 'Next'
                    }
                }
            }
        });

        $('#checked_1').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form1').each(function() {
                $(this).prop('disabled', !checked);
            });
        });

        $('#checked_2').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form2').each(function() {
                $(this).prop('disabled', !checked);
            });

        });

        $('#checked_3').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form3').each(function() {
                $(this).prop('disabled', !checked);
            });
        });

        $('#checked_4').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form4').each(function() {
                $(this).prop('disabled', !checked);
            });

        });

        $('#checked_5').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form5').each(function() {
                $(this).prop('disabled', !checked);
            });

        });

        $('#checked_6').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form6').each(function() {
                $(this).prop('disabled', !checked);
            });

        });

        $('#checked_7').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form7').each(function() {
                $(this).prop('disabled', !checked);
            });

        });

        $('#checked_8').click(function() {
            let checked = this.checked;
            console.log(checked);
            $('#form8').each(function() {
                $(this).prop('disabled', !checked);
            });

        });
    });

    // Get data import data tb data siswa ke tb siswa
    $(document).ready(function() {
        $('#nama').change(function() {
            let nama = $(this).val();
            $.ajax({
                url: "<?php echo site_url('tatausaha/getData'); ?>",
                method: "POST",
                data: {
                    nama: nama
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    let html1 = '',
                        html2 = '',
                        html3 = '',
                        html4 = '';

                    let i, j, k, l;

                    for (j = 0; j < data.length; j++) {
                        html2 += '<option value=' + data[j].nik_siswa + '>' + data[j].nik_siswa + '</option>';
                    }
                    $('#nik').html(html2);

                    for (i = 0; i < data.length; i++) {
                        html1 += '<option value=' + data[i].nisn + '>' + data[i].nisn + '</option>';
                    }
                    $('#nisn').html(html1);

                    for (k = 0; k < data.length; k++) {
                        html3 += '<option value=' + data[k].tempat_lahir + '>' + data[k].tempat_lahir + '</option>';
                    }
                    $('#tempat_lahir').html(html3);

                    for (l = 0; l < data.length; l++) {
                        html4 += '<option value=' + data[l].tanggal_lahir + '>' + data[l].tanggal_lahir + '</option>';
                    }
                    $('#tanggal_lahir').html(html4);
                }
            })
            return false;
        })
    })

    // Get data import data tb data siswa ke tb siswa
    $(document).ready(function() {
        $('#jenis_tagihan').change(function() {
            let jenis_tagihan = $('#jenis_tagihan').val();
            $.ajax({
                url: "<?php echo site_url('tatausaha/getDataTagihan'); ?>",
                method: "POST",
                data: {
                    jenis_tagihan: jenis_tagihan
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    let html = '';
                    let i;

                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].no_tagihan + '>' + data[i].no_tagihan + '</option>';
                    }
                    $('#nomor_tagihan').html(html);
                }
            })
            return false;
        })
    })
</script>
</body>

</html>