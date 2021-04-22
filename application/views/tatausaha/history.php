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
            <!-- Content -->
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="m-0">Data Pembayaran</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead class="bg-dark" style="font-size: 14px;">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Nomor Pembayaran</th>
                                                <th>Jumlah</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Status Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 14px;">
                                            <?php
                                            $no = 1;
                                            foreach ($view as $v) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $v['nama'] ?></td>
                                                    <td><?= $v['no_pembayaran'] ?></td>
                                                    <td><?= $v['jumlah_pembayaran'] ?></td>
                                                    <td><?= $v['jenis_pembayaran'] ?></td>
                                                    <td><?= $v['tanggal_pembayaran'] ?></td>
                                                    <td><?= $v['status_pembayaran'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= site_url('tatausaha/data_pembayaran_smk'); ?>" class="btn btn-dark btn-md float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>