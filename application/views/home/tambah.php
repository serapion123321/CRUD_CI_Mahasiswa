<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH MAHASISWA</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>asset/css/business-frontpage.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Silahkan Masukkan Data Mahasiswa !
                        <div class="card-body">
                            <div class="text-danger">
                            <?=validation_errors();?>
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                <label for="nama"> NAMA MAHASISWA </label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama">
                                <label for="jurusan"> JURUSAN MAHASISWA </label>
                                <input type="text" class="form-control" id="jurusan" placeholder="Jurusan Mahasiswa" name="jurusan">
                                </div>
                               <button class="btn-primary" type="submit" name="tambah data"> TAMBAH DATA </button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <script src="<?= base_url();?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>