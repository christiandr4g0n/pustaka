<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<h3><center>Laporan Data Buku Perpustakaan Online</center></h3>
<br>
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Aktif</th>
            <th>Member Sejak</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach($buku as $b) {
        ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $b['nama']; ?></td>
            <td><?= $b['email']; ?></td>
            <td><?= $b['role_id']; ?></td>
            <td><?= $b['is_active']; ?></td>
            <td><?= $b['tanggal_input']; ?></td>
        </tr>
            <?php } ?>
    </tbody>
</table>