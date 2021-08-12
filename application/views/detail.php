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
<style>
    @media print {
        body * {
            visibility: hidden;
        }
        .kartunya, .kartunya * {
            -webkit-print-color-adjust: exact;
            visibility: visible;

        }
        .kartunya {
            position: absolute;
            top: 0px;
            left: 0px;
        }
    }
</style>
</head>
<body>
    <div class="header2">
    <a href="<?= base_url('dashboard') ?>"><img src="<?= base_url('assets/img/Dharma_wanita.png') ?>" alt="logo" class="lg1"></a>
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

            <div class="datadiri">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/aa.png') ?>" alt=""> &nbsp;Data Personal</p>
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: bold;font-size: 21px; color: #000000;margin-top:40px"><?= $isi->namadepan ." ".$isi->namabelakang?></p>

                <div class="alamat mt-1">
                    <p ><b>Alamat:</b>  <?= $isi->alamat ?></p>
                    <p class="alamatnya"></p>
                </div>
                <div class="alamat mt-1">
                    <p ><b>RT:</b>  <?= $isi->rt ?> / <b>RW:</b>  <?= $isi->rw ?></p>
                    <p class="alamatnya"><b>Kelurahan / Desa :</b>   <?= $isi->kelurahan ?></p>
                </div>
                <div class="alamat mt-1">
                    <p ><b>Kecamatan : </b>  <?= $isi->kecamatan ?></p>
                    <p class="alamatnya"><b>Kabupaten :</b>   <?= $isi->kabupaten ?></p>
                </div>
                <div class="alamat mt-1">
                
                   <a href="tel:<?= $isi->notelp ?>" target="_blank" style="background: #54E950; color:#fff;border-radius: 5px; text-decoration:none" class="py-2 px-4"><img src="<?= base_url('assets/img/smartphone.png') ?>" alt="">&nbsp;&nbsp;&nbsp;<?= $isi->notelp ?></a>
                   <a href="https://api.whatsapp.com/send?phone=<?= $isi->notelp ?>" style="background: #78C976; color:#fff;border-radius: 5px;text-decoration:none" class="py-2 px-4 ml-4" target="_blank"><img src="<?= base_url('assets/img/logo-whatsapp-png-46041 1.png') ?>" alt="">&nbsp;&nbsp;&nbsp;<?= $isi->notelp ?></a>
                </div>
                <!-- <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/suami1.png') ?>" alt=""><img src="<?= base_url('assets/img/suami2.png') ?>" alt=""> &nbsp;Data Suami</p> -->
            </div>
            <div class="kartu">
                <p style="text-align: center;">Kartu Anggota Dharma Wanita Persatuan Provinsi Banten </p>
                <div class="kartunya">
                <img src="<?= base_url('assets/img/kartu.png') ?>" alt="">                    
                <p class="namakartu" style="font-family: IBM Plex Sans;font-style: bold;font-weight: 600;font-size: 15px;color: #ffffff !important;margin:0"><?= $isi->namadepan ." ".$isi->namabelakang?></p>
                    <p class="kedinasan" style="font-family: IBM Plex Sans;font-style: normal;font-size: 15px;color: #ffffff !important;"><?= $isi->tingkat?></p>
                    <img src="<?= base_url('uploads/'. $isi->image) ?>" alt="" width="90px" height="90px" style="border-radius:50px" class="gambarkartu">
                </div>
                <center><a href="" onclick="window.print();">Cetak Kartu</a></center>
            </div>
    </div>
    <div class="datasuami" style="margin-left: 70px;
  margin-right: 70px;">
    <p class="mt-4" style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/aa.png') ?>" alt=""> &nbsp;Data Suami</p>
    <div class="list">
        <div class="namasuaminya">
        <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 18px;color: #000000;"><?= $isi->namadepansuami ." ". $isi->namabelakangsuami ?></p>
    </div>
    <div>
    </div>
    <div class="sendiri ml-4">
    <p style="font-family: IBM Plex Sans;font-size: 17px;color: #000000; margin-top:15px">Kedinasan / OPD : <b><?= $isi->kedinasan ?> </b> </p>
    <p style="font-family: IBM Plex Sans;font-size: 17px;color: #000000;">Tingkat Wilayah :  <b><?= $isi->tingkat ?></b></p>
    
    </div>

    </div>
    </div>
    <br>
    <br>
       <?php 
    } ?>
</body>
</html>