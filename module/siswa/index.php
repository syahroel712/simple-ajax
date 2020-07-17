<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-12">
            <div class="card shadow mb-12">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <button type="button" onclick="tampil()" class="btn btn-sm btn-primary mb-4"> <i class="fas fa-plus"> Tambah Data</i> </button>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="isi"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal" id="dataSiswa">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Data Siswa</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row" style="font-size:12px">
                        <div class="col-md-12">
                            <form action="" method="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="siswa_nama" id="siswa_nama" required placeholder="Nama Siswa" class="form-control">
                                    <input type="hidden" id="siswa_id">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="siswa_tgl" id="siswa_tgl" required placeholder="Tanggal Lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="siswa_alamat" style="height:118px" id="siswa_alamat" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <!-- <img name="foto" id="foto"> -->
                                    <input type="file" name="siswa_foto" id="siswa_foto" required placeholder="Nama Kategori" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" onclick="simpan()" class="btn btn-primary btn-sm">Simpan</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    function tampil() {
        $('#dataSiswa').modal();
        // reset()
    }

    function simpan() {
        var siswa_foto = $('#siswa_foto').prop('files')[0];
        var siswa_nama = $('#siswa_nama').val();
        var siswa_tgl = document.getElementById('siswa_tgl').value;
        var siswa_alamat = $('#siswa_alamat').val();
        var siswa_id = $('#siswa_id').val();

        let form_data = new FormData();
        form_data.append('siswa_nama', siswa_nama);
        form_data.append('siswa_tgl', siswa_tgl);
        form_data.append('siswa_alamat', siswa_alamat);
        form_data.append('siswa_foto', siswa_foto);
        form_data.append('siswa_id', siswa_id);

        $.ajax({
            type: "POST",
            url: "module/siswa/simpan.php",
            contentType: 'multipart/form-data',
            data: form_data,
            processData: false,
            contentType: false,
            // dataType: "dataType",
            success: function() {
                swal.fire(
                    "Berhasil!!",
                    "Data Berhasil Disimpan",
                    "success"
                );
                $('#dataSiswa').modal('hide');
                autoload();
                reset();
                // e.preventDefault();
            },
            error: function() {
                swal.fire(
                    "Ops..",
                    "Data Tidak Tersimpan",
                    "error"
                );
                $('$dataSiswa').modal('hide');
                autoload();
                reset();
            }
        });
    }

    function edit(siswa_id) {
        $.ajax({
            url: "module/siswa/edit.php",
            type: 'GET',
            data: {
                "siswa_id": siswa_id
            },
            dataType: 'JSON',
            success: function(data) {
                $('#siswa_id').val(data.siswa_id);
                $('#siswa_nama').val(data.siswa_nama);
                $('#siswa_tgl').val(data.siswa_tgl);
                $('#siswa_alamat').val(data.siswa_alamat);
                // $('#foto').attr("src", "data.siswa_foto");
                $('#dataSiswa').modal();
            }
        })
    }

    function hapus(siswa_id) {
        swal.fire({
            title: "Yakin Hapus ?",
            text: "Data akan hilang!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
        }).then((result) => {
            $.ajax({
                url: "module/siswa/hapus.php",
                type: "POST",
                data: {
                    'siswa_id': siswa_id,
                },
                success: function(data) {
                    swal.fire(
                        'Berhasil',
                        'Data Berhasil Dihapus',
                        'success'
                    );
                    autoload();
                }
            });

        })
    }

    function reset() {
        $('#siswa_nama').val('');
        $('#siswa_tgl').val('');
        $('#siswa_alamat').val('');
        $('#siswa_foto').val('');
    }

    function autoload() {
        $('#isi').load('module/siswa/tampil.php');
    }

    $(document).ready(function() {
        autoload()
    });
</script>