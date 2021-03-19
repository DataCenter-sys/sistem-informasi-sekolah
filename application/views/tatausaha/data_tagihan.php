<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="mt-1 mb-1">
                    <?= $this->session->flashdata('massage'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <button class="btn btn-outline-primary btn-sm mb-2" data-toggle="modal" data-target="#inputTagihan">
                Buat Tagihan Baru
            </button>
            <!-- <button class="btn btn-outline-success btn-sm mb-2" data-toggle="modal" data-target="#masukanTagihan">
                Masukan Tagihan
            </button> -->

            <!-- Content -->
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="m-0">Data Tagihan</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>No Tagihan</th>
                                                <th>Jenis Tagihan</th>
                                                <th>Jumlah</th>
                                                <th>Kategori Tagihan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($get_data as $gd) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $gd['no_tagihan'] ?></td>
                                                    <td><?= $gd['jenis_tagihan'] ?></td>
                                                    <td><?= $gd['jumlah_tagihan'] ?></td>
                                                    <td><?= $gd['kategori_tagihan'] ?></td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-outline-primary btn-xs" data-toggle="modal" data-target="#viewModal<?= $gd['no_tagihan']; ?>">Lihat</i></a>
                                                        <a href="#" class="btn btn-outline-success btn-xs" data-toggle="modal" data-target="#editModal<?= $gd['no_tagihan']; ?>">Edit</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="inputTagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title" id="registrasiModalLabel">Buat Tagihan Baru</h5>
                            <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('tatausaha/input_tagihan_smk') ?>" method="POST">
                                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                    Buatlah tagihan dengan benar
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">No Tagihan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_tagihan" value="<?= $no_acak ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Jenis Tagihan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="jenis_tagihan" id="">
                                            <option value="Daftar Ulang">Daftar Ulang</option>
                                            <option value="SPP">SPP</option>
                                            <option value="PTS">PTS</option>
                                            <option value="PAS">PAS</option>
                                            <option value="Buku">Buku</option>
                                            <option value="Kegiatan">Kegiatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Jumlah</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Kategori Tagihan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="kategori" id="">
                                            <option>Pilih kategori</option>
                                            <option value="X">Kelas 10</option>
                                            <option value="XI">Kelas 11</option>
                                            <option value="XII">Kelas 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-outline-primary btn-block">Buat Tagihan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="masukanTagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title" id="registrasiModalLabel">Buat Tagihan Baru</h5>
                            <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('tatausaha/input_tagihan_smk') ?>" method="POST">
                                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                    Buatlah tagihan dengan benar
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Nama Siswa</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_tagihan" value="<?= $no_acak ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Jenis Tagihan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="jenis_tagihan" id="">
                                            <option value="Daftar Ulang">Daftar Ulang</option>
                                            <option value="SPP">SPP</option>
                                            <option value="PTS">PTS</option>
                                            <option value="PAS">PAS</option>
                                            <option value="Buku">Buku</option>
                                            <option value="Kegiatan">Kegiatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Jumlah</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Kategori Tagihan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="kategori" id="">
                                            <option>Pilih kategori</option>
                                            <option value="X">Kelas 10</option>
                                            <option value="XI">Kelas 11</option>
                                            <option value="XII">Kelas 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-outline-primary btn-block">Buat Tagihan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>