<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 class="m-0">Data Guru SMK</h1>
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
            <button class="btn btn-outline-primary btn-sm mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Upload File Excel
            </button>
            <a class="btn btn-outline-danger btn-sm mb-2" href="<?= base_url('tatausaha/delete_all'); ?>">Delete All</a>
            <!-- <button class="btn btn-danger btn-sm mb-2" type="button" data-toggle="modal" data-target="#deleteModal" aria-expanded="false" aria-controls="collapseExample">
                Delete All
            </button> -->
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="<?= base_url('tatausaha/upload') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class=" form-group">
                            <label for="exampleInputEmail1" class="form-col-label">File</label>
                        </div>
                        <div class="form-group mb-2">
                            <input class="mb-1" type="file" name="fileURL">
                            <button type="submit" class="btn btn-outline-success" name="import">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

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
                                        <th>NUPTK</th>
                                        <th>Status Pegawai</th>
                                        <th>Jenis PTK</th>
                                        <th>SK CPNS</th>
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
                                            <td><?= $gda['nuptk']; ?></td>
                                            <td><?= $gda['status_kepegawaian']; ?></td>
                                            <td><?= $gda['jenis_ptk']; ?></td>
                                            <td><?= $gda['sk_cpns']; ?></td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm btn-block" href="#" data-toggle="modal" data-target="#viewModal<?= $gda['id']; ?>">View</a>
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
            foreach ($get_data as $gd) :
                $gd['id'];
            ?>
                <!-- modal View -->
                <div class="modal fade" id="viewModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content ">
                            <div class="modal-body">
                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Pribadi</h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $gd['nama']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NIK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $gd['nik']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NO KK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="noKk" name="no_kk" value="<?= $gd['no_kk']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenisKelamin" name="jenis_kelamin" value="<?= $gd['jenis_kelamin']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tempatLahir" name="tempat_lahir" value="<?= $gd['tempat_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tanggalLahir" name="tanggal_lahir" value="<?= $gd['tanggal_lahir']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="agama" name="agama" value="<?= $gd['agama']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $gd['alamat']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">RT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rt" name="rt" value="<?= $gd['rt']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">RW</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rw" name="rw" value="<?= $gd['rw']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">nama_dusun</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="namaDusun" name="nama_dusun" value="<?= $gd['nama_dusun']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $gd['kelurahan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $gd['kecamatan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">kode_pos</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $gd['kode_pos']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Kwarganegaraan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kwarganegaraan" name="kwarganegaraan" value="<?= $gd['kwarganegaraan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $gd['email']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">telepon</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $gd['telepon']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">HP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="hp" name="hp" value="<?= $gd['hp']; ?>" disabled>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Pekerjaan dan CPNS</h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NUPTK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nuptk" name="nuptk" value="<?= $gd['nuptk']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NIP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="NIP" name="nip" value="<?= $gd['nip']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="statusKepegawaian" name="status_kepegawaian" value="<?= $gd['status_kepegawaian']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Jenis PTK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="jenisPtk" name="jenis_ptk" value="<?= $gd['jenis_ptk']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Tugas Tambahan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tugasTambahan" name="tugas_tambahan" value="<?= $gd['tugas_tambahan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">SK CPNS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="skCpns" name="sk_cpns" value="<?= $gd['sk_cpns']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Tanggal CPNS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tanggalCpns" name="tanggal_cpns" value="<?= $gd['tanggal_cpns']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">SK Pengangkatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="skPengangkatan" name="sk_pengangkatan" value="<?= $gd['sk_pengangkatan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">TMT Pengangkatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tmtPengangkatan" name="tmt_pengangkatan" value="<?= $gd['tmt_pengangkatan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Lembaga Pengangkatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lembagaPengangkatan" name="lembaga_pengangkatan" value="<?= $gd['lembaga_pengangkatan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Pangkat Golongan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pangkatGolongan" name="pangkat_golongan" value="<?= $gd['pangkat_golongan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Sumber Gaji</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="sumberGaji" name="sumber_gaji" value="<?= $gd['sumber_gaji']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">TMT PNS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tmtPns" name="tmtPns" value="<?= $gd['tmt_pns']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Lisensi Kepsek</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lisensiKepsek" name="lisensi_kepsek" value="<?= $gd['lisensi_kepsek']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Diklat Kepengawasan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="diklatKepengawasan" name="diklat_kepengawasan" value="<?= $gd['diklat_kepengawasan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Keahlian Braille</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="keahlianBraille" name="keahlian_braille" value="<?= $gd['keahlian_braille']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Bahasa Isyarat</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bahasaIsyarat" name="bahasa_isyarat" value="<?= $gd['bahasa_isyarat']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Karpeg</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="karpeg" name="karpeg" value="<?= $gd['karpeg']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NUKS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nuks" name="nuks" value="<?= $gd['nuks']; ?>" disabled>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Keluarga</h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nama Ibu Kandung</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="namaIbuKandung" name="nama_ibu_kandung" value="<?= $gd['nama_ibu_kandung']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="statusPerkawinan" name="status_perkawinan" value="<?= $gd['status_perkawinan']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nama Suami Istri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="namaSuamiIstri" name="nama_suami_istri" value="<?= $gd['nama_suami_istri']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NIP Suami Istri</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nipSuamiIstri" name="nip_suami_istri" value="<?= $gd['nip_suami_istri']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Pekerjaan Suami</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pekerjaanSuami" name="pekerjaan_suami" value="<?= $gd['pekerjaan_suami']; ?>" disabled>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Keuangan</h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">NPWP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $gd['npwp']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nama NPWP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="namaNPWP" name="nama_npwp" value="<?= $gd['nama_npwp']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Bank</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bank" name="bank" value="" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nomor Rekening</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nomorRekening" name="nomor_rekening" value="<?= $gd['nomor_rekening']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Nama Rekening</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rekAtasNama" name="rek_atas_nama" value="<?= $gd['rek_atas_nama']; ?>" disabled>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Lokasi</h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Karis Karsu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="karisKarsu" name="karis_karsu" value="<?= $gd['karis_karsu']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Lintang</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $gd['lintang']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Bujur</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $gd['bujur']; ?>" disabled>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-md btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal Edit -->
                <div class="modal fade" id="editModal<?= $gd['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('tatausaha/update/' . $gd['id']); ?>" method="post">
                                <div class="modal-body">
                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Pribadi</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $gd['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $gd['nik']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NO KK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="noKk" name="no_kk" value="<?= $gd['no_kk']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jenisKelamin" name="jenis_kelamin" value="<?= $gd['jenis_kelamin']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tempatLahir" name="tempat_lahir" value="<?= $gd['tempat_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tanggalLahir" name="tanggal_lahir" value="<?= $gd['tanggal_lahir']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Agama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="agama" name="agama" value="<?= $gd['agama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $gd['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">RT</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $gd['rt']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">RW</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $gd['rw']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">nama_dusun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaDusun" name="nama_dusun" value="<?= $gd['nama_dusun']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Kelurahan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $gd['kelurahan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $gd['kecamatan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">kode_pos</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= $gd['kode_pos']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Kwarganegaraan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kwarganegaraan" name="kwarganegaraan" value="<?= $gd['kwarganegaraan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $gd['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">telepon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $gd['telepon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">HP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="hp" name="hp" value="<?= $gd['hp']; ?>">
                                        </div>
                                    </div>
                                    <hr>

                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Pekerjaan dan CPNS</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NUPTK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nuptk" name="nuptk" value="<?= $gd['nuptk']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="NIP" name="nip" value="<?= $gd['nip']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Status Kepegawaian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="statusKepegawaian" name="status_kepegawaian" value="<?= $gd['status_kepegawaian']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Jenis PTK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jenisPtk" name="jenis_ptk" value="<?= $gd['jenis_ptk']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Tugas Tambahan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tugasTambahan" name="tugas_tambahan" value="<?= $gd['tugas_tambahan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">SK CPNS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="skCpns" name="sk_cpns" value="<?= $gd['sk_cpns']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Tanggal CPNS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tanggalCpns" name="tanggal_cpns" value="<?= $gd['tanggal_cpns']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">SK Pengangkatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="skPengangkatan" name="sk_pengangkatan" value="<?= $gd['sk_pengangkatan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">TMT Pengangkatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tmtPengangkatan" name="tmt_pengangkatan" value="<?= $gd['tmt_pengangkatan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Lembaga Pengangkatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lembagaPengangkatan" name="lembaga_pengangkatan" value="<?= $gd['lembaga_pengangkatan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Pangkat Golongan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pangkatGolongan" name="pangkat_golongan" value="<?= $gd['pangkat_golongan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Sumber Gaji</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="sumberGaji" name="sumber_gaji" value="<?= $gd['sumber_gaji']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">TMT PNS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tmtPns" name="tmtPns" value="<?= $gd['tmt_pns']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Lisensi Kepsek</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lisensiKepsek" name="lisensi_kepsek" value="<?= $gd['lisensi_kepsek']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Diklat Kepengawasan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="diklatKepengawasan" name="diklat_kepengawasan" value="<?= $gd['diklat_kepengawasan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Keahlian Braille</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="keahlianBraille" name="keahlian_braille" value="<?= $gd['keahlian_braille']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Bahasa Isyarat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bahasaIsyarat" name="bahasa_isyarat" value="<?= $gd['bahasa_isyarat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Karpeg</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="karpeg" name="karpeg" value="<?= $gd['karpeg']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NUKS</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nuks" name="nuks" value="<?= $gd['nuks']; ?>">
                                        </div>
                                    </div>
                                    <hr>

                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Keluarga</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Ibu Kandung</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaIbuKandung" name="nama_ibu_kandung" value="<?= $gd['nama_ibu_kandung']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="statusPerkawinan" name="status_perkawinan" value="<?= $gd['status_perkawinan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Suami Istri</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaSuamiIstri" name="nama_suami_istri" value="<?= $gd['nama_suami_istri']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NIP Suami Istri</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nipSuamiIstri" name="nip_suami_istri" value="<?= $gd['nip_suami_istri']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Pekerjaan Suami</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pekerjaanSuami" name="pekerjaan_suami" value="<?= $gd['pekerjaan_suami']; ?>">
                                        </div>
                                    </div>
                                    <hr>

                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Keuangan</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">NPWP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $gd['npwp']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama NPWP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaNPWP" name="nama_npwp" value="<?= $gd['nama_npwp']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Bank</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bank" name="bank" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nomor Rekening</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nomorRekening" name="nomor_rekening" value="<?= $gd['nomor_rekening']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Rekening</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="rekAtasNama" name="rek_atas_nama" value="<?= $gd['rek_atas_nama']; ?>">
                                        </div>
                                    </div>
                                    <hr>

                                    <h5 class="modal-title text-primary" id="registrasiModalLabel">Data Lokasi</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Karis Karsu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="karisKarsu" name="karis_karsu" value="<?= $gd['karis_karsu']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Lintang</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $gd['lintang']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Bujur</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $gd['bujur']; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php endforeach; ?>
            <!-- modal View -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content ">
                        <form action="<?= base_url('tatausaha/delete_all') ?>" method="post">
                            <div class="modal-body">
                                <div class="text-center">
                                    <h2>Yakin Ingin Menghapus ?</h2>
                                </div>
                                <!-- <div class="text-center">
                                    <button type="submit" class="btn btn-outline-success">Yes</button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">No</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>