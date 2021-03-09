<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pembayaran</h1>
                <div class="mt-1 mb-1">
                    <?= $this->session->flashdata('massage'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <button class="btn btn-outline-primary btn-sm mb-2" data-toggle="modal" data-target="#riwayat">
                Riwayat Pembayaran
            </button>
            <!-- Data -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">

                        <!-- Form 1 -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="du" class="form-col-label">Daftar Ulang</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="du" id="form1" placeholder="..." disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="check" id="checked_1"> Actived
                                </div>
                            </div>
                        </div>

                        <!-- Form 2 -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="spp" class="form-col-label">SPP</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="spp" id="form2" placeholder="..." disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="check" id="checked_2"> Actived
                                </div>
                            </div>
                        </div>

                        <!-- Form 3 -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="spp" class="form-col-label">PTS</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pts" id="form2" placeholder="..." disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="check" id="checked_2"> Actived
                                </div>
                            </div>
                        </div>

                        <!-- Form 4 -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="spp" class="form-col-label">PAS</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pas" id="form2" placeholder="..." disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="check" id="checked_2"> Actived
                                </div>
                            </div>
                        </div>

                        <!-- Form 5 -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="spp" class="form-col-label">Kegiatan</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pas" id="form2" placeholder="..." disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="checkbox" name="check" id="checked_2"> Actived
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button class="btn btn-md btn-outline-primary">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="riwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="inputModalLabel">Riwayat Pembayaran</h5>
            </div>
            <div class="modal-body">
                <a href="#" target="blank" class="btn btn-outline-danger btn-md mb-4 align-item-center">Print All Report</a>

                <table id="example1" class="table table-striped text-center table-hover table-condensed">
                    <thead lass="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Kode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>