<?php
include "../../components/koneksi.php";
include "../../components/MY_url_helper.php";

if (empty($_POST['siswa_id'])) {
    $data['siswa_foto'] = fileUpload($_FILES['siswa_foto'], "../../img/siswa/");
    $simpan = $con->insert(
        "tb_siswa",
        array(
            "siswa_nama" => $_POST["siswa_nama"],
            "siswa_tgl" => $_POST["siswa_tgl"],
            "siswa_alamat" => $_POST["siswa_alamat"],
            "siswa_foto" => $data["siswa_foto"],
        )
    );
} else if ($_POST['siswa_id'] != NULL && $_FILES['siswa_foto']['size'] != 0) {

    $data =  $con->get("tb_siswa", "*", array("siswa_id" => $_POST["siswa_id"]));
    if ($data['siswa_foto'] != 0) {
        unlink("../../img/siswa/" . $data['siswa_foto']);
    }
    $data['siswa_foto'] = fileUpload($_FILES['siswa_foto'], "../../img/siswa/");
    $simpan = $con->update(
        "tb_siswa",
        array(
            "siswa_nama" => $_POST["siswa_nama"],
            "siswa_tgl" => $_POST["siswa_tgl"],
            "siswa_alamat" => $_POST["siswa_alamat"],
            "siswa_foto" => $data["siswa_foto"]
        ),
        array(
            "siswa_id" => $_POST["siswa_id"]
        )
    );
} else {
    $simpan = $con->update(
        "tb_siswa",
        array(
            "siswa_nama" => $_POST["siswa_nama"],
            "siswa_tgl" => $_POST["siswa_tgl"],
            "siswa_alamat" => $_POST["siswa_alamat"],
        ),
        array(
            "siswa_id" => $_POST["siswa_id"]
        )
    );
}

if ($simpan == TRUE) {
    echo json_encode('SUCCESS');
} else {
    echo json_encode('ERROR');
}
