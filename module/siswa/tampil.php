<?php include "../../components/koneksi.php";

$data_siswa = $con->select("tb_siswa", "*");
foreach ($data_siswa as $no => $isi) {
?>

    <tr>
        <td><?php echo $no + 1 ?></td>
        <td><?php echo $isi['siswa_nama'] ?></td>
        <td><?php echo $isi['siswa_tgl'] ?></td>
        <td><?php echo $isi['siswa_alamat'] ?></td>
        <td>
            <?php
            if ($isi['siswa_foto'] == 0) {
            ?>
                <center>
                    <img src="<?php echo $base_url ?>img/img-not-found.png" width="150px" height="150px">
                </center>
            <?php
            } else {
            ?>
                <center>
                    <img src="<?php echo $base_url ?>img/siswa/<?php echo $isi['siswa_foto'] ?>" width="150px" height="150px">
                </center>
            <?php
            }
            ?>
        </td>
        <td>
            <button class="btn btn-sm btn-success" id="edit" onclick="edit('<?= $isi['siswa_id'] ?>')"> <i class="fas fa-edit"></i> </button>
            <button class="btn btn-sm btn-danger" id="hapus" onclick="hapus('<?= $isi['siswa_id'] ?> ')"><i class="fas fa-trash"></i></button>
        </td>
    </tr>

<?php
}
?>