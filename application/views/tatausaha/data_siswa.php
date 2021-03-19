<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Siswa</h1>
                <div class="mt-1 mb-2">
                    <?= $this->session->flashdata('massage'); ?>
                </div>
                <button class="dropdown btn btn-outline-secondary dropdown-toggle btn-sm mb-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unduh Data
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-danger" href="<?= site_url('tatausaha/print_data_siswa_pdf') ?>" target="blank">PDF</a>
                    <a class="dropdown-item text-success" href="#">EXCEL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Data -->
            <div class="row">
                <div class="col-12 m-2">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Import data</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('tatausaha/save_data') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Nama Siswa</label>
                                            <select name="nama" id="nama" class="custom-select" required>
                                                <option value="">Pilih Siswa</option>
                                                <?php foreach ($get_data as $gd) : ?>
                                                    <option value="<?= $gd['nama'] ?>"><?= $gd['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Kelas</label>
                                            <select name="kelas" id="kelas" class="custom-select" required>
                                                <option value="">Pilih Kelas</option>
                                                <option value="X">X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Jurusan</label>
                                            <select name="jurusan" id="jurusan" class="custom-select" required>
                                                <option value="">Pilih Jurusan</option>
                                                <optgroup label="Administrasi">
                                                    <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                    <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
                                                </optgroup>
                                                <optgroup label="Administrasi">
                                                    <option value="MM">Multimedia</option>
                                                    <option value="DKV">Desain Komunikasi Visual</option>
                                                    <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                                    <option value="PSPT">Produksi Siaran dan Program Televisi</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row form-group">
                                            <label for="" class="col-form-label">Status</label>
                                            <select name="status" id="" class="custom-select" required>
                                                <option value="">Pilih Status</option>
                                                <option value="Siswa Aktif">Siswa Aktif</option>
                                                <option value="Siswa Pindah">Siswa Pindah</option>
                                                <option value="Alumni">Alumni</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" hidden>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">NISN</label>
                                            <select name="nisn" id="nisn" class="custom-select">
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">NIK</label>
                                            <select name="nik" id="nik" class="custom-select">
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row form-group">
                                            <label for="" class="col-form-label">Tempat Lahir</label>
                                            <select name="tempat_lahir" id="tempat_lahir" class="custom-select">
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Tanggal Lahir</label>
                                            <select name="tanggal_lahir" id="tanggal_lahir" class="custom-select">
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 m-2">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Import data</h5>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-responsive-lg table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($get_data_siswa as $gds) { ?>
                                        <tr>
                                            <td><?= $gds['nisn'] ?></td>
                                            <td><?= $gds['nama'] ?></td>
                                            <td><?= $gds['kelas'] ?></td>
                                            <td><?= $gds['jurusan'] ?></td>
                                            <td><?= $gds['status'] ?></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#viewModal<?= $gds['id']; ?>">Lihat</a>
                                                <a href="#" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editModal<?= $gds['id']; ?>">Edit</i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            foreach ($get_data_siswa as $gd) :
                $gd['id'];
            ?>

                <!-- modal View -->
                <div class="modal fade" id="viewModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title" id="registrasiModalLabel">Detail Data</h5>
                                <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">NISN</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="<?= $gd['nisn']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">NIK</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" name="username" value="<?= $gd['nik']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $gd['nama']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Tempat Lahir</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password" value="<?= $gd['tempat_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="<?= $gd['tanggal_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Kelas</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="<?= $gd['kelas']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Jurusan</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="<?= $gd['jurusan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="" class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="<?= $gd['status']; ?>" disabled>
                                    </div>
                                </div>
                                <p class="alert alert-danger">Data ini di ambil berdasarkan data yang sudah di masukan ke dalam sistem dapodik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal Edit -->
                <div class="modal fade" id="editModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title" id="registrasiModalLabel">Detail Data</h5>
                                <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= site_url('tatausaha/update_data/' . $gd['nisn']) ?>" method="POST">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">NISN</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="form1" name="nisn" value="<?= $gd['nisn']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_1"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">NIK</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="form2" name="nik" value="<?= $gd['nik']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_2"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Nama</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="form3" name="nama" value="<?= $gd['nama']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_3"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Tempat Lahir</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="form4" name="tempat_lahir" value="<?= $gd['tempat_lahir']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_4"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Tanggal Lahir</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="form5" name="tanggal_lahir" value="<?= $gd['tanggal_lahir']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_5"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Kelas</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="form6" name="kelas" value="<?= $gd['kelas']; ?>" disabled="disabled">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_6"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Jurusan</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="jurusan" id="form7" class="custom-select" disabled="disabled">
                                                <option><?= $gd['jurusan']; ?></option>
                                                <optgroup label="Administrasi">
                                                    <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                    <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
                                                </optgroup>
                                                <optgroup label="Administrasi">
                                                    <option value="MM">Multimedia</option>
                                                    <option value="DKV">Desain Komunikasi Visual</option>
                                                    <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                                    <option value="PSPT">Produksi Siaran dan Program Televisi</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_7"> Edit
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Status</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="status" id="form8" class="custom-select" disabled="disabled">
                                                <option><?= $gd['status']; ?></option>
                                                <option value="Siswa Aktif">Siswa Aktif</option>
                                                <option value="Siswa Pindah">Siswa Pindah</option>
                                                <option value="Alumni">Alumni</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="checkbox" id="checked_8"> Edit
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>