<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <!-- Bootstrap core CSS -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/business-frontpage.css" rel="stylesheet">

</head>
<body>
    <h1> Selamat Datang di Home Admin Mahasiswa</h1><br><br>
    <div class="row">
        <div class="col-md-6">
           <a href="<?= base_url()?>Home/tambah" class="btn btn-primary"> TAMBAH MAHASISWA </a>
        </div>
    </div>
   
    <div class="card mb-3 mt-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Mahasiswa</div>

              <?php if($this->session->flashdata('flash')) : // INI ADALAH FLASH TAMBAH DATA?>
              <div class="text-success"> Data Mahasiswa <b><u> Berhasil </b></u> <?php echo $this->session->flashdata('flash'); ?></div>
              <?php endif ?>

              <?php if($this->session->flashdata('flashHapus')) : // INI ADALAH FLASH HAPUS DATA?>
              <div class="text-success"> Data Mahasiswa <b><u> Berhasil </b></u> <?php echo $this->session->flashdata('flashHapus'); ?></div>
              <?php endif ?>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>JURUSAN MAHASISWA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) :?>
                    <tr>
                        <td> <?= $mhs['NIM'] ?> </td>
                        <td> <?= $mhs['Nama'] ?> </td>
                        <td> <?= $mhs['Jurusan'] ?> </td>
                        <td> <a href="<?= base_url()?>Home/hapus/<?= $mhs['NIM'] ?>" class="badge badge-danger" 
                        onclick="return confirm('yakin ?')"> HAPUS </a> </td>
                        <td> <a href="<?= base_url()?>Home/update/<?= $mhs['NIM'] ?>" class="badge badge-warning" 
                        > UPDATE </a> </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    <!-- Bootstrap core JavaScript -->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>