<?php

include "../../components/koneksi.php";

$gambar = $con->get("tb_siswa", "*", array("siswa_id" => $_POST['siswa_id']));

if ($gambar['siswa_foto'] != 0) {
    unlink("../../img/siswa/" . $gambar['siswa_foto']);
}


$data = $con->delete("tb_siswa", array("siswa_id" => $_POST['siswa_id']));

echo json_encode($data);
