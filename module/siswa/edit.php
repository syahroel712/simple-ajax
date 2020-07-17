<?php

include "../../components/koneksi.php";

$data = $con->get("tb_siswa", "*", array("siswa_id" => $_GET['siswa_id']));

echo json_encode($data);
