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
        <p style="text-align: center;">DATA PEMBAYARAN</p>
        <?php foreach ($view as $vw) : ?>
            <p style="text-align: center;"><?= $vw['nama']; ?> </p>
        <?php endforeach; ?>
        <p style="text-align: center;">SMK NUSANTARA 1 TANGERANG</p>
    </div>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>No Pembayaran</th>
            <th>Jumlah</th>
            <th>Jenis Pembayaran</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($view as $v) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $v['nisn'] ?></td>
                <td><?= $v['nama'] ?></td>
                <td><?= $v['kelas'] ?></td>
                <td><?= $v['no_pembayaran'] ?></td>
                <td><?= $v['jumlah_pembayaran'] ?></td>
                <td><?= $v['jenis_pembayaran'] ?></td>
                <td><?= $v['tanggal_pembayaran'] ?></td>
                <td><?= $v['status_pembayaran'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>