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
            <!-- Data -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead lass="bg-primary">
                                    <tr>
                                        <th>Nomor Tagihan</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Daftar Ulang</th>
                                        <th>Buku</th>
                                        <th>SPP</th>
                                        <th>PTS</th>
                                        <th>PAS</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nomor Tagihan</td>
                                        <td>Nama Siswa</td>
                                        <td>Kelas</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-primary" id="edit" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-success" id="edit" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-primary">Nama Siswa</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Daftar Ulang</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" name="du" id="" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">SPP</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" name="spp" id="" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">PTS</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" name="pts" id="" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">PAS</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" name="pas" id="" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Uang Kegiatan</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="text" class="form-control" name="kegiatan" id="" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>