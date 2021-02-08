<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Siswa Kelas XII</h1>
                <!-- <marquee>
                    <p class="text-danger" style="font-size: 12px"><strong>INFORMASI</strong> untuk staff yang baru mendaftar di harapkan untuk mengaktifkan akunnya di <strong>DATA CENTER</strong>, terima kasih !</p>
                </marquee> -->
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
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIS</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Wali Murid</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>xxxxxxxxxxxxxxxxx</td>
                                        <td>xxxxxxxxxxxxxxxxx</td>
                                        <td>xxxxxxxxxxxxxxxxx</td>
                                        <td>xxxxxxxxxxxxxxxxx</td>
                                        <td>
                                            <a class="badge badge-primary" href="#" data-toggle="modal" data-target="#viewModal"><i class="fas fa-eye"></i></a>
                                            <a class="badge badge-success" href="#" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="badge badge-danger" href="#"><i class="fas fa-trash-alt"></i></a>
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

            <!-- modal View -->
            <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">View Akun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="..." disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" name="username" value="..." disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" value="..." disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password" value="..." disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Unit</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="password" name="password" value="..." disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Active</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="password" name="password" value="..." disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="registrasiModalLabel">Edit Akun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/register/save" method="post">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Full Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="..." disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" name="username" value="..." disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="..." disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password" value="..." disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="..." disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Active</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="..." disabled>
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
        </div>
    </div>
</div>