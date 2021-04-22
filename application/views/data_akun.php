<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Input Data</h1>
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
                            <table id="example1" class="table table-bordered table-striped table-responsive-lg">
                                <thead lass="bg-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Date created</th>
                                        <th>Unit</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($get_data_all as $gta) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $gta['name']; ?></td>
                                            <td><?= $gta['username']; ?></td>
                                            <td><?= date('d F Y', $gta['date_created']); ?></td>
                                            <?php
                                            if ($gta['role_id'] == 1) { ?>
                                                <td>SMP</td>
                                            <?php } elseif ($gta['role_id'] == 2) { ?>
                                                <td>SMA</td>
                                            <?php } elseif ($gta['role_id'] == 3) { ?>
                                                <td>SMK</td>
                                            <?php } elseif ($gta['role_id'] == 9) { ?>
                                                <td>DATA CENTER</td>
                                            <?php } ?>
                                            <?php
                                            if ($gta['active'] == 1) { ?>
                                                <td class="text-success">Active</td>
                                            <?php } elseif ($gta['active'] == 0) { ?>
                                                <td class="text-danger">Not Active</td>
                                            <?php } ?>
                                            <td>
                                                <a class="badge badge-primary" href="#" data-toggle="modal" data-target="#viewModal<?= $gta['id_user']; ?>"><i class="fas fa-eye"></i></a>
                                                <a class="badge badge-success" href="#" data-toggle="modal" data-target="#editModal<?= $gta['id_user']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="badge badge-danger" href="<?= base_url('datacenter/delete/' . $gta['id_user']) ?>"><i class="fas fa-trash-alt"></i></a>
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
            <?php
            foreach ($get_data_all as $gda) :
                $gda['id_user'];
            ?>
                <!-- modal View -->
                <div class="modal fade" id="viewModal<?= $gda['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $gda['name'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" name="username" value="<?= $gda['username'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $gda['email'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Unit" name="unit" value="<?php if ($gda['role_id'] == 1) {
                                                                                                                    echo "SMP";
                                                                                                                } elseif ($gda['role_id'] == 2) {
                                                                                                                    echo "SMA";
                                                                                                                } elseif ($gda['role_id'] == 3) {
                                                                                                                    echo "SMK";
                                                                                                                } elseif ($gda['role_id'] == 9) {
                                                                                                                    echo "Data Center";
                                                                                                                } ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Active</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="password" value="<?php if ($gda['active'] == 1) {
                                                                                                                            echo "Active";
                                                                                                                        } else {
                                                                                                                            echo "Not Active";
                                                                                                                        } ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal Edit -->
                <div class="modal fade" id="editModal<?= $gda['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-md modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Set active for account <span style="text-transform:uppercase; color:black;"><?= $gda['username']; ?></span></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('datacenter/update/' . $gda['id_user']); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-col-label">Set Active</label>
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                <i class="fas fa-exclamation text-muted"></i>
                                            </span>
                                        </div>
                                        <select class="form-control border-left-0 border-md" name="active" id="active" aria-placeholder="Set Active">
                                            <option value="">...</option>
                                            <option value="0">Not Active</option>
                                            <option value="1">Active</option>
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
            <?php endforeach; ?>
        </div>
    </div>
</div>