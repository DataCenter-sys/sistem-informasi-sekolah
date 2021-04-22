<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <marquee>
                    <p class="text-danger" style="font-size: 14px"><strong>INFORMASI</strong> untuk staff yang baru mendaftar di harapkan untuk mengaktifkan akunnya di <strong>DATA CENTER</strong>, terima kasih !</p>
                </marquee>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="jumbotron bg-gradient-blue">
                <h1>You are login for <?= $username ?></h1>
                <h4>Welcome To Application System Information School</h4>
            </div>
            <!-- Data -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah siswa sesuai jurusan</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChartSiswa" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah siswa sesuai jurusan</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChartGuru" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>

    </div>
</div>