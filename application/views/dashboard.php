<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dharma Wanita Persatuan</title>
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>
<body>
    <header>
        <img src="<?= base_url('assets/img/Dharma_wanita.png') ?>" alt="logo" class="logo1">
        <img src="<?= base_url('assets/img/header.png') ?>" alt="logo" class="logo2">
        <img src="<?= base_url('assets/img/headline.png') ?>" alt="logo" class="logo3">
    </header>
    <div class="count">
        <h3><?= $count; ?></h3>
        <h4>Anggota Aktif <br><span class="terdaftar">(Terdaftar)</span>  </h4>        
    </div>
    <div class="add mt-2 ml-4">
       <a href="<?= base_url('dashboard/form') ?>" class="btn btn-primary">Tambah Data Anggota</a>    
       <a href="<?= base_url('dashboard/logout') ?>" class="btn btn-danger">Logout</a>    
    </div>

    <div class="tabelnya">
        <table class="table">
            <thead>
                <tr>
                    <th class="kiri">No</th>
                    <th>Nama Anggota</th>
                    <th>Kedinasan / OPD</th>
                    <th class="kanan">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php  

                $no = 1;
                foreach($data as $datanya => $isi) {

                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $isi->namadepan ." ". $isi->namabelakang;?></td>
                    <td><?= $isi->kedinasan;?></td>
                    <td>
                        <a href="<?= base_url('dashboard/detail/'.$isi->id) ?>"><img src="<?= base_url('assets/img/eye.png') ?>" alt=""></a>
                        <a href="<?= base_url('dashboard/edit/'.$isi->id) ?>"><img src="<?= base_url('assets/img/pen.png') ?>" alt=""></a>
                        <a href="<?= base_url('dashboard/delete/'.$isi->id) ?>"><img src="<?= base_url('assets/img/trash.png') ?>" alt=""></a>
                    </td>
                </tr>
               <?php  
               $no++;
                }
               ?>
            </tbody>
        </table>
    </div>
</body>
</html>