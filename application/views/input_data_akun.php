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
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Input New Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?= base_url('datacenter/input'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-2 col-form-label">Repeat Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role_id" id="Role">
                                    <option value="">Pilih Unit</option>
                                    <option value="9">Data Center</option>
                                    <option value="1">Tata Usaha SMP</option>
                                    <option value="2">Tata Usaha SMA</option>
                                    <option value="3">Tata Usaha SMK</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>