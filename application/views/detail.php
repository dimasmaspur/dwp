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
    <div class="header2">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" class="lg1">
        <img src="<?= base_url('assets/img/header.png') ?>" alt="logo" class="lg2">
        <img src="<?= base_url('assets/img/headline.png') ?>" alt="logo" class="lg3">
        <img src="<?= base_url('assets/img/banten.png') ?>" alt="logo" class="lg4">
</div>
<?php foreach($data as $d => $isi){
        ?>
    <div class="detail">
        <div class="edit">
            <a href="<?= base_url('dashboard/edit/'.$isi->id) ?>" style="color:#000000"><img src="<?= base_url('assets/img/pen2.png') ?>" alt="">&nbsp;&nbsp;Edit</a> &nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="<?= base_url('dashboard/logout') ?>">Logout&nbsp;&nbsp; <img src="<?= base_url('assets/img/arrow-right.png') ?>" alt=""></a>
        </div>
       
    </div>
    <div class="bio">

 
            <div class="foto">
                <img src="<?= base_url('assets/img/profile.png') ?>" alt="">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: bold;font-size: 16px; color: #000000;"><?= $isi->namadepan ." ".$isi->namabelakang?></p>
            </div>

            <div class="datadiri">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/Ellipse.png') ?>" alt=""> &nbsp;Data Personal</p>
                <div class="alamat mt-4">
                    <p ><b>Alamat:</b>  <?= $isi->alamat ?></p>
                    <p class="alamatnya"><b>No. Hp / WA:</b>   <?= $isi->notelp ?></p>
                </div>
                <div class="alamat mt-4">
                    <p ><b>RT:</b>  <?= $isi->rt ?> / <b>RW:</b>  <?= $isi->rw ?></p>
                    <p class="alamatnya"><b>Kelurahan / Desa :</b>   <?= $isi->kelurahan ?></p>
                </div>
                <div class="alamat mt-4">
                    <p ><b>Kecamatan : </b>  <?= $isi->kecamatan ?></p>
                    <p class="alamatnya"><b>Kabupaten :</b>   <?= $isi->kabupaten ?></p>
                </div>
                <hr style="border:1px solid black">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/suami1.png') ?>" alt=""><img src="<?= base_url('assets/img/suami2.png') ?>" alt=""> &nbsp;Data Suami</p>

                <p ><b>Nama Suami : </b>  <?= $isi->namadepansuami ." ". $isi->namabelakangsuami ?>h</p>
                <p ><b>Kedinasan / OPD : </b> <?= $isi->kedinasan ?></p>

            </div>
        </div>
    <br>
    <br>
       <?php 
    } ?>
</body>
</html>