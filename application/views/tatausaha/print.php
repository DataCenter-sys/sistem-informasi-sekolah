<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <div class="header">
        <p style="text-align: center;">Data Siswa</p>
        <p style="text-align: center;">SMK NUSANTARA 1 TANGERANG</p>
        <p style="text-align: center;">Jl. Cisadane V-VIII Perumnas 1, Nusa Jaya, Karawaci, Kota Tangerang, Banten 15116</p>
    </div>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
        </tr>
        <?php
        $no = 1;
        foreach ($get_data_siswa as $gds) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $gds['nisn'] ?></td>
                <td><?= $gds['nik'] ?></td>
                <td><?= $gds['nama'] ?></td>
                <td><?= $gds['kelas'] ?></td>
                <td><?= $gds['jurusan'] ?></td>
                <td><?= $gds['tempat_lahir'] ?></td>
                <td><?= $gds['tanggal_lahir'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>