<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE MAHASISWA</title>
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
                            <form action="<?= base_url(); ?>Home/prosesUpdate" method="post">
                                <?php foreach ($mahasiswa as $mhs) : ?>
                                <div class="form-group">
                                <label for="nama"> NIM MAHASISWA </label>
                                <input type="text" class="form-control" id="nama" name="nim" readonly value="<?= $mhs['NIM']; ?>">
                                <label for="nama"> NAMA MAHASISWA </label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['Nama']; ?>">
                                <label for="jurusan"> </label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['Jurusan']; ?>">
                                </div>
                                <?php endforeach ?>
                               <button class="btn-primary" type="submit" name="updateData"> UPDATE DATA </button>
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