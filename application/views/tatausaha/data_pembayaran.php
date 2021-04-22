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
                                    <table id="example3" class="table table-bordered table-striped table-hover">
                                        <thead class="bg-dark" style="font-size: 14px">
                                            <tr>
                                                <th>No</th>
                                                <th>NISN</th>
                                                <th>Nama Siswa</th>
                                                <th>kelas</th>
                                                <th>Jurusan</th>
                                                <th>Aksi</th>
                                                <th>Cetak</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 14px">
                                            <?php
                                            $no = 1;
                                            foreach ($get_data_siswa as $gds) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $gds['nisn'] ?></td>
                                                    <td><?= $gds['nama'] ?></td>
                                                    <td><?= $gds['kelas'] ?></td>
                                                    <td><?= $gds['jurusan'] ?></td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-outline-primary btn-sm" id="kategori" data-toggle="modal" data-target="#bayarTagihan<?= $gds['kelas']; ?>">Bayar</i></a>
                                                        <a href="<?= site_url('tatausaha/history/' . $gds['nisn']) ?>" class="btn btn-outline-success btn-sm">Lihat</i></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?= site_url('tatausaha/print_history_pembayaran_pdf/' . $gds['nisn']) ?>" class="btn btn-outline-danger btn-sm" target="blank">PDF</a>
                                                        <a href="#" class="btn btn-outline-success btn-sm" target="blank">Excel</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach ($get_data_siswa as $gd) :
                $gd['kelas'];
            ?>
                <!-- Modal -->
                <div class="modal fade" id="bayarTagihan<?= $gd['kelas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title" id="registrasiModalLabel">Input Pembayaran</h5>
                                <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= site_url('tatausaha/insert_payment') ?>" method="post">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">NISN</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nisn" id="" value="<?= $gd['nisn']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Nama</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nama" id="" value="<?= $gd['nama']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Kelas</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="kelas" id="" value="<?= $gd['kelas']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Nomor Pembayaran</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="no_pembayaran" id="" value="<?= $random; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php if ($gd['kelas']) {
                                        $select = $this->db->get_where('tb_tagihan', ['kategori_tagihan' => $gd['kelas']])->result_array(); ?>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="col-form-label">Jenis Pembayaran</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="jenis_pembayaran" id="jenis_pembayaran" class="custom-select" required>
                                                    <option>Pilih Jenis Pembayaran</option>
                                                    <?php foreach ($select as $jd) { ?>
                                                        <option value="<?= $jd['jenis_tagihan'] ?>"><?= $jd['jenis_tagihan'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="col-form-label">Jumlah</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="nominal_pembayaran" id="" placeholder="Masukan Nominal Pembayaran" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-block">Bayar</button>
                                </form>
                                <hr>
                                <h3>Rincian</h3>
                                <table class="table hover table-striped table-borderless">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th>No Tagihan</th>
                                            <th>Jenis Tagihan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($gd['kelas']) {
                                            $select = $this->db->get_where('tb_tagihan', ['kategori_tagihan' => $gd['kelas']])->result_array();
                                            foreach ($select as $jd) { ?>
                                                <tr>
                                                    <td><?= $jd['no_tagihan']; ?></td>
                                                    <td><?= $jd['jenis_tagihan']; ?></td>
                                                    <td><?= $jd['jumlah_tagihan']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>