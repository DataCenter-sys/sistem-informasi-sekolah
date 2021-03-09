<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Dapodik</h1>
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
            <button class="btn btn-outline-primary btn-sm mb-2" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Upload File Excel
            </button>

            <a class="btn btn-outline-danger btn-sm mb-2" href="<?= base_url('tatausaha/delete_data_siswa'); ?>">Delete All</a>

            <button class="dropdown btn btn-outline-secondary dropdown-toggle btn-sm mb-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Unduh Data
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Kelas X</a>
                <a class="dropdown-item" href="#">Kelas XI</a>
                <a class="dropdown-item" href="#">Kelas XII</a>
                <a class="dropdown-item" href="#">ALL DATA</a>
            </div>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="<?= base_url('tatausaha/upload_data_siswa'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="form-col-label" for="File">File</label>
                        </div>
                        <div class="form-group mb-2">
                            <input class="mb-1" type="file" name="fileURL">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

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
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($get_data as $gda) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $gda['nama']; ?></td>
                                            <td><?= $gda['nisn']; ?></td>
                                            <td><?= $gda['rombel']; ?></td>
                                            <td>
                                                <a class="badge badge-primary" href="#" data-toggle="modal" data-target="#viewModal<?= $gda['id']; ?>"><i class="fas fa-eye"></i></a>
                                                <a class="badge badge-success" href="#" data-toggle="modal" data-target="#editModal<?= $gda['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
            foreach ($get_data as $gd) :
                $gd['id'];
            ?>
                <!-- modal View -->
                <div class="modal fade" id="viewModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="nama" value="<?= $gd['nama']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nipd" class="col-sm-4 col-form-label">NIPD</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nipd" name="nipd" value="<?= $gd['nipd']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $gd['jenis_kelamin']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $gd['nisn']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $gd['tempat_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $gd['tanggal_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik_siswa" class="col-sm-4 col-form-label">Nik Siswa</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik_siswa" name="nik_siswa" value="<?= $gd['nik_siswa']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Agama" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="Agama" name="Agama" value="<?= $gd['agama']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10" disabled><?= $gd['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rt" class="col-sm-4 col-form-label">RT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rt" name="rt" value="<?= $gd['rt']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rw" class="col-sm-4 col-form-label">RW</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rw" name="rw" value="<?= $gd['rw']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $gd['dusun']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelurahan" class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $gd['kelurahan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $gd['kecamatan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_Pos" class="col-sm-4 col-form-label">Kode Pos</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kode_Pos" name="kode_Pos" value="<?= $gd['kode_pos']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_tinggal" class="col-sm-4 col-form-label">Jenis Tinggal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenis_tinggal" name="jenis_tinggal" value="<?= $gd['jenis_tinggal']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="transportasi" class="col-sm-4 col-form-label">Transportasi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="transportasi" name="transportasi" value="<?= $gd['transportasi']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $gd['telepon']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hp" class="col-sm-4 col-form-label">HP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="password" name="hp" value="<?= $gd['hp']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $gd['email']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="skhun" class="col-sm-4 col-form-label">SKHUN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="skhun" name="skhun" value="<?= $gd['skhun']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="penerima_kps" class="col-sm-4 col-form-label">Penerima KPS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="penerima_kps" name="penerima_kps" value="<?= $gd['penerima_kps']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_kps" class="col-sm-4 col-form-label">Nomor KPS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nomor_kps" name="nomor_kps" value="<?= $gd['no_kps']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $gd['nama_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun_lahir_ayah" class="col-sm-4 col-form-label">Tahun Lahir Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="<?= $gd['tahun_lahir_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= $gd['pendidikan_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= $gd['pekerjaan_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Penghasilan Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" value="<?= $gd['penghasilan_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik_ayah" class="col-sm-4 col-form-label">Nik Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" value="<?= $gd['nik_ayah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $gd['nama_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun_lahir_ibu" class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="<?= $gd['tahun_lahir_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= $gd['pendidikan_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= $gd['pekerjaan_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="penghasilan_ibu" class="col-sm-4 col-form-label">Penghasilan Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ayah" value="<?= $gd['penghasilan_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik_ibu" class="col-sm-4 col-form-label">Nik Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="<?= $gd['nik_ibu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_wali" class="col-sm-4 col-form-label">Nama Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $gd['nama_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pendidikan_wali" class="col-sm-4 col-form-label">Tahun Lahir Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tahun_lahir_wali" name="tahun_lahir_wali" value="<?= $gd['tahun_lahir_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Pendidikan Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" value="<?= $gd['pendidikan_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_wali" class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="<?= $gd['pekerjaan_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="penghasila_wali" class="col-sm-4 col-form-label">Penghasilan Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_awali" value="<?= $gd['penghasilan_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik_wali" class="col-sm-4 col-form-label">Nik Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik_wali" name="nik_wali" value="<?= $gd['nik_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik_wali" class="col-sm-4 col-form-label">Nik Wali</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik_wali" name="nik_wali" value="<?= $gd['nik_wali']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rombel" class="col-sm-4 col-form-label">Rombel</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rombel" name="rombel" value="<?= $gd['rombel']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rombel" class="col-sm-4 col-form-label">No Peserta UN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_peserta_un" name="no_peserta_un" value="<?= $gd['no_peserta_un']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rombel" class="col-sm-4 col-form-label">No Ijazah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" value="<?= $gd['no_ijazah']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="penerima_kip" class="col-sm-4 col-form-label">Penerima KIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="penerima_kip" name="penerima_kip" value="<?= $gd['penerima_kip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_kip" class="col-sm-4 col-form-label">Nomor KIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_kip" name="no_kip" value="<?= $gd['no_kip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_kip" class="col-sm-4 col-form-label">Nama KIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_kip" name="nama_kip" value="<?= $gd['nama_kip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_kks" class="col-sm-4 col-form-label">Nomor KKP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nomor_kks" name="nomor_kks" value="<?= $gd['nomor_kks']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_akta_lahir" class="col-sm-4 col-form-label">Nomor Akta Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_akta_lahir" name="no_akta_lahir" value="<?= $gd['no_akta_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label">Bank</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bank" name="bank" value="<?= $gd['bank']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_rek_bank" class="col-sm-4 col-form-label">No Rek Bank</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_rek_bank" name="no_rek_bank" value="<?= $gd['no_rek_bank']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="layak_pip" class="col-sm-4 col-form-label">Layak PIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="layak_pip" name="layak_pip" value="<?= $gd['layak_pip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alasan_layak_pip" class="col-sm-4 col-form-label">Alasan Layak PIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="alasan_layak_pip" name="alasan_layak_pip" value="<?= $gd['alasan_layak_pip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kebutuhan_khusus" class="col-sm-4 col-form-label">Kebutuhan Khusus</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" value="<?= $gd['kebutuhan_khusus']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sekolah_asal" class="col-sm-4 col-form-label">Sekolah Asal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?= $gd['sekolah_asal']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anak_ke_berapa" class="col-sm-4 col-form-label">Anak Ke</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="anak_ke_berapa" name="anak_ke_berapa" value="<?= $gd['anak_ke_berapa']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lintang" class="col-sm-4 col-form-label">Lintang</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $gd['lintang']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bujur" class="col-sm-4 col-form-label">Bujur</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $gd['bujur']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_kk" class="col-sm-4 col-form-label">No KK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bujur" name="no_kk" value="<?= $gd['no_kk']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= $gd['berat_badan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $gd['tinggi_badan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lingkar_kepala" class="col-sm-4 col-form-label">Lingkar Kepala</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lingkar_kepala" name="lingkar_kepala" value="<?= $gd['lingkar_kepala']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_saudara" class="col-sm-4 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?= $gd['jumlah_saudara']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jarak_rumah" class="col-sm-4 col-form-label">Jarak Rumah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jarak_rumah" name="jarak_rumah" value="<?= $gd['jarak_rumah']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal Edit -->
                <div class="modal fade" id="editModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="<?= site_url('tatausaha/update_data_siswa/' . $gd['nisn']); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="nama" value="<?= $gd['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nipd" class="col-sm-4 col-form-label">NIPD</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nipd" name="nipd" value="<?= $gd['nipd']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $gd['jenis_kelamin']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $gd['nisn']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $gd['tempat_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $gd['tanggal_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik_siswa" class="col-sm-4 col-form-label">Nik Siswa</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik_siswa" name="nik_siswa" value="<?= $gd['nik_siswa']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Agama" class="col-sm-4 col-form-label">Agama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="Agama" name="agama" value="<?= $gd['agama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"><?= $gd['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rt" class="col-sm-4 col-form-label">RT</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $gd['rt']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rw" class="col-sm-4 col-form-label">RW</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $gd['rw']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $gd['dusun']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kelurahan" class="col-sm-4 col-form-label">Kelurahan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $gd['kelurahan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $gd['kecamatan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kode_Pos" class="col-sm-4 col-form-label">Kode Pos</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_Pos" name="kode_Pos" value="<?= $gd['kode_pos']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_tinggal" class="col-sm-4 col-form-label">Jenis Tinggal</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jenis_tinggal" name="jenis_tinggal" value="<?= $gd['jenis_tinggal']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="transportasi" class="col-sm-4 col-form-label">Transportasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="transportasi" name="transportasi" value="<?= $gd['transportasi']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-4 col-form-label">Telepon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $gd['telepon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hp" class="col-sm-4 col-form-label">HP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="password" name="hp" value="<?= $gd['hp']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $gd['email']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="skhun" class="col-sm-4 col-form-label">SKHUN</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="skhun" name="skhun" value="<?= $gd['skhun']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penerima_kps" class="col-sm-4 col-form-label">Penerima KPS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penerima_kps" name="penerima_kps" value="<?= $gd['penerima_kps']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nomor_kps" class="col-sm-4 col-form-label">Nomor KPS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nomor_kps" name="nomor_kps" value="<?= $gd['no_kps']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $gd['nama_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_lahir_ayah" class="col-sm-4 col-form-label">Tahun Lahir Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="<?= $gd['tahun_lahir_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= $gd['pendidikan_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= $gd['pekerjaan_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Penghasilan Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" value="<?= $gd['penghasilan_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik_ayah" class="col-sm-4 col-form-label">Nik Ayah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" value="<?= $gd['nik_ayah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $gd['nama_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_lahir_ibu" class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="<?= $gd['tahun_lahir_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= $gd['pendidikan_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= $gd['pekerjaan_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penghasilan_ibu" class="col-sm-4 col-form-label">Penghasilan Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" value="<?= $gd['penghasilan_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik_ibu" class="col-sm-4 col-form-label">Nik Ibu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="<?= $gd['nik_ibu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_wali" class="col-sm-4 col-form-label">Nama Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $gd['nama_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_wali" class="col-sm-4 col-form-label">Tahun Lahir Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_lahir_wali" name="tahun_lahir_wali" value="<?= $gd['tahun_lahir_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Pendidikan Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" value="<?= $gd['pendidikan_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_wali" class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="<?= $gd['pekerjaan_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penghasila_wali" class="col-sm-4 col-form-label">Penghasilan Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_awali" value="<?= $gd['penghasilan_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik_wali" class="col-sm-4 col-form-label">Nik Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik_wali" name="nik_wali" value="<?= $gd['nik_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik_wali" class="col-sm-4 col-form-label">Nik Wali</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik_wali" name="nik_wali" value="<?= $gd['nik_wali']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombel" class="col-sm-4 col-form-label">Rombel</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rombel" name="rombel" value="<?= $gd['rombel']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombel" class="col-sm-4 col-form-label">No Peserta UN</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_peserta_un" name="no_peserta_un" value="<?= $gd['no_peserta_un']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombel" class="col-sm-4 col-form-label">No Ijazah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" value="<?= $gd['no_ijazah']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penerima_kip" class="col-sm-4 col-form-label">Penerima KIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penerima_kip" name="penerima_kip" value="<?= $gd['penerima_kip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_kip" class="col-sm-4 col-form-label">Nomor KIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_kip" name="no_kip" value="<?= $gd['no_kip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_kip" class="col-sm-4 col-form-label">Nama KIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_kip" name="nama_kip" value="<?= $gd['nama_kip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nomor_kks" class="col-sm-4 col-form-label">Nomor KKP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nomor_kks" name="nomor_kks" value="<?= $gd['nomor_kks']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_akta_lahir" class="col-sm-4 col-form-label">Nomor Akta Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_akta_lahir" name="no_akta_lahir" value="<?= $gd['no_akta_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bank" class="col-sm-4 col-form-label">Bank</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bank" name="bank" value="<?= $gd['bank']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_rek_bank" class="col-sm-4 col-form-label">No Rek Bank</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_rek_bank" name="no_rek_bank" value="<?= $gd['no_rek_bank']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rek_atas_nama" class="col-sm-4 col-form-label">Nama Rekening</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rek_atas_nama" name="rek_atas_nama" value="<?= $gd['rek_atas_nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="layak_pip" class="col-sm-4 col-form-label">Layak PIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="layak_pip" name="layak_pip" value="<?= $gd['layak_pip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alasan_layak_pip" class="col-sm-4 col-form-label">Alasan Layak PIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alasan_layak_pip" name="alasan_layak_pip" value="<?= $gd['alasan_layak_pip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kebutuhan_khusus" class="col-sm-4 col-form-label">Kebutuhan Khusus</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" value="<?= $gd['kebutuhan_khusus']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sekolah_asal" class="col-sm-4 col-form-label">Sekolah Asal</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?= $gd['sekolah_asal']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="anak_ke" class="col-sm-4 col-form-label">Anak Ke</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?= $gd['anak_ke_berapa']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lintang" class="col-sm-4 col-form-label">Lintang</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $gd['lintang']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bujur" class="col-sm-4 col-form-label">Bujur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $gd['bujur']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_kk" class="col-sm-4 col-form-label">No KK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bujur" name="no_kk" value="<?= $gd['no_kk']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= $gd['berat_badan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $gd['tinggi_badan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lingkar_kepala" class="col-sm-4 col-form-label">Lingkar Kepala</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lingkar_kepala" name="lingkar_kepala" value="<?= $gd['lingkar_kepala']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_saudara" class="col-sm-4 col-form-label">Jumlah Saudara</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="<?= $gd['jumlah_saudara']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jarak_rumah" class="col-sm-4 col-form-label">Jarak Rumah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jarak_rumah" name="jarak_rumah" value="<?= $gd['jarak_rumah']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>