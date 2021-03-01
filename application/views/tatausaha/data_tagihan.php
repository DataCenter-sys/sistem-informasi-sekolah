<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Tagihan</h1>
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
            <button class="btn btn-outline-primary btn-sm mb-2" data-toggle="modal" data-target="#inputTagihan">
                Input Tagihan Baru
            </button>
            <!-- Data -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead lass="bg-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Tagihan</th>
                                        <th>Kelas</th>
                                        <th>DU</th>
                                        <th>SPP</th>
                                        <th>Buku</th>
                                        <th>PTS</th>
                                        <th>PAS</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($get_data as $gd) { ?>
                                        <tr>
                                            <td><?= $gd['nomor']; ?></td>
                                            <td><?= $gd['nomor_tagihan'] ?></td>
                                            <td><?= $gd['nama_kelas'] ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#duModal">
                                                    <?= $gd['daftar_ulang'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#sppModal">
                                                    <?= $gd['total_spp'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#bukuModal">
                                                    <?= $gd['buku'] ?>
                                                </a>
                                            </td>
                                            <td><a href="#" data-toggle="modal" data-target="#ptsModal">
                                                    <?= $gd['pts'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#pasModal">
                                                    <?= $gd['pas'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#kegiatanModal">
                                                    <?= $gd['kegiatan'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

            <!-- modal Edit -->
            <div class="modal fade" id="duModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Pembayaran Daftar Ulang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-col-label">Daftar Ulang</label>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fas fa-exclamation text-muted"></i>
                                        </span>
                                    </div>
                                    <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                        <option value="">...</option>
                                        <option value="99999999">Lunas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Spp Edit -->
            <div class="modal fade" id="bukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Pembayaran Buku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-col-label">Buku</label>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fas fa-exclamation text-muted"></i>
                                        </span>
                                    </div>
                                    <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                        <option value="">...</option>
                                        <option value="99999999">Lunas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Buku Edit -->
            <div class="modal fade" id="sppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Pembayaran SPP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-col-label">SPP</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas X</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="fas fa-exclamation text-muted"></i>
                                                </span>
                                            </div>
                                            <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                                <option value="">...</option>
                                                <option value="99999999">Bulan 1</option>
                                                <option value="99999999">Bulan 2</option>
                                                <option value="99999999">Bulan 3</option>
                                                <option value="99999999">Bulan 4</option>
                                                <option value="99999999">Bulan 5</option>
                                                <option value="99999999">Bulan 6</option>
                                                <option value="99999999">Bulan 7</option>
                                                <option value="99999999">Bulan 8</option>
                                                <option value="99999999">Bulan 9</option>
                                                <option value="99999999">Bulan 10</option>
                                                <option value="99999999">Bulan 11</option>
                                                <option value="99999999">Bulan 12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas XI</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="fas fa-exclamation text-muted"></i>
                                                </span>
                                            </div>
                                            <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                                <option value="">...</option>
                                                <option value="99999999">Bulan 1</option>
                                                <option value="99999999">Bulan 2</option>
                                                <option value="99999999">Bulan 3</option>
                                                <option value="99999999">Bulan 4</option>
                                                <option value="99999999">Bulan 5</option>
                                                <option value="99999999">Bulan 6</option>
                                                <option value="99999999">Bulan 7</option>
                                                <option value="99999999">Bulan 8</option>
                                                <option value="99999999">Bulan 9</option>
                                                <option value="99999999">Bulan 10</option>
                                                <option value="99999999">Bulan 11</option>
                                                <option value="99999999">Bulan 12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas XII</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="fas fa-exclamation text-muted"></i>
                                                </span>
                                            </div>
                                            <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                                <option value="">...</option>
                                                <option value="99999999">Bulan 1</option>
                                                <option value="99999999">Bulan 2</option>
                                                <option value="99999999">Bulan 3</option>
                                                <option value="99999999">Bulan 4</option>
                                                <option value="99999999">Bulan 5</option>
                                                <option value="99999999">Bulan 6</option>
                                                <option value="99999999">Bulan 7</option>
                                                <option value="99999999">Bulan 8</option>
                                                <option value="99999999">Bulan 9</option>
                                                <option value="99999999">Bulan 10</option>
                                                <option value="99999999">Bulan 11</option>
                                                <option value="99999999">Bulan 12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- PTS Edit -->
            <div class="modal fade" id="ptsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Pembayaran PTS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-col-label">PTS</label>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fas fa-exclamation text-muted"></i>
                                        </span>
                                    </div>
                                    <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                        <option value="">...</option>
                                        <option value="99999999">Semester Ganjil</option>
                                        <option value="99999999">Semester Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- PAS Edit -->
            <div class="modal fade" id="pasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-sm modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Pembayaran PAS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-col-label">PAS</label>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fas fa-exclamation text-muted"></i>
                                        </span>
                                    </div>
                                    <select class="form-control border-left-0 border-md" name="" id="" aria-placeholder="Set Active">
                                        <option value="">...</option>
                                        <option value="99999999">Semester Ganjil</option>
                                        <option value="99999999">Semester Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="inputTagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="inputModalLabel">Buat Tagihan Baru</h5>
                        </div>
                        <form action="<?= base_url('tatausaha/input_tagihan_smk') ?>" method="post">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <select class="form-control" name="kelas" id="" aria-placeholder="Set Active" required>
                                                <option value="">Pilih kelas</option>
                                                <option value="X AKL/OTKP">X AKL/OTKP</option>
                                                <option value="X MM/DKV/TKJ/RPL/PSPT">X MM/DKV/TKJ/RPL/PSPT</option>
                                                <option value="XI AKL/OTKP">XI AKL/OTKP</option>
                                                <option value="XI MM/DKV/TKJ/RPL/PSPT">XI MM/DKV/TKJ/RPL/PSPT</option>
                                                <option value="XII AKL/OTKP">XII AKL/OTKP</option>
                                                <option value="XII MM/DKV/TKJ/RPL/PSPT">XII MM/DKV/TKJ/RPL/PSPT</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Daftar Ulang</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="du" id="inputSPP" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">SPP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="spp" id="inputSPP" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">BUKU</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="buku" id="inputBUKU" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">PTS</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="pts" id="inputPTS" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">PAS</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="pas" id="inputPAS" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kegiatan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="kegiatan" id="inputKegiatan" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>

                                <p class="alert alert-danger text-center">Silahkan input data tagihan sesuai dengan kelas dan jurusan yang ada</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>