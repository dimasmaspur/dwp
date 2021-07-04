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
    <div class="header3">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" class="lg1">
        <img src="<?= base_url('assets/img/header.png') ?>" alt="logo" class="lg2">
        <img src="<?= base_url('assets/img/headline.png') ?>" alt="logo" class="lg3">
        <img src="<?= base_url('assets/img/banten.png') ?>" alt="logo" class="lg4">
</div>
 
    <div class="detail2">
        <div class="edit2">
            <img src="<?= base_url('assets/img/file-document.png') ?>" alt=""> Formulir Data Anggota
        </div>
       
    </div>
    <form action="<?= base_url('dashboard/prosessubmit') ?>" method="POST">
    <div class="bio2">
            <div class="foto2">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/Ellipse.png') ?>" alt=""> &nbsp;Data Personal</p>

               
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Nama Depan" name="namadpn" required>     &nbsp;&nbsp;
                        <input type="text" class="form-control" placeholder="Nama Belakang" name="namablkg" required>    
                    </div>
                    <p class="mt-2"><i>Isilah dengan nama yang sesuai dengan KTP</i></p>
                    <hr style="border: 1px solid black;">
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir">     &nbsp;&nbsp;
                        <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" required>    &nbsp;-&nbsp;
                        <input type="text" class="form-control" placeholder="Bulan" name="bulan" required>   &nbsp;-&nbsp;
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" required>    
                    </div>
                    <hr style="border: 1px solid black;">
                    <input type="text" class="form-control" placeholder="Alamat Tempat Tinggal" name="alamat" required>     &nbsp;&nbsp;
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="RT" name="rt" required>  &nbsp;/&nbsp;  
                        <input type="text" class="form-control input-sm" placeholder="RW" name="rw" required>   &nbsp;&nbsp;  
                        <input type="text" class="form-control" placeholder="No Telp" name="notelp" required>
                    </div>
                    <br>
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" required>  &nbsp;&nbsp;  
                        <input type="text" class="form-control input-sm" placeholder="Kecamatan" name="kecamatan" required>   &nbsp;&nbsp;  
                        <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten" required>
                    </div>
            </div>

            <div class="datadiri2">
                <div class="suami">
                <p style="padding-left:10px;padding-top:10px;font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #FFFFFF;"><img src="<?= base_url('assets/img/suami3.png') ?>" alt=""><img src="<?= base_url('assets/img/user.png') ?>" alt=""> &nbsp;Data Suami</p>
                <div class="suaminya py-2 px-2">
                    <input type="text" class="form-control my-2" placeholder="Nama Depan Suami" name="namadepansuami" required>  
                    <input type="text" class="form-control my-2" placeholder="Nama Belakang Suami" name="namabelakangsuami" required>  
                    <input type="text" class="form-control my-2" placeholder="Kedinasan / OPD" name="kedinasan" required>  
                </div>
                </div>
                <div class="akun">
                <p style="padding-left:10px;padding-top:10px;font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/girl.png') ?>" alt=""> &nbsp;Informasi Akun</p>
                <div class="suaminya py-2 px-2">
                    <input type="text" class="form-control my-2" placeholder="Username" name="username" required>  
                    <input type="password" class="form-control my-2" placeholder="Password" name="password" required>  
                </div>
                </div>
                <div class="isian">
                Seluruh data yang tertera pada formulir ini adalah benar dan sesuai dengan Kartu Tanda Penduduk resmi negara Republik Indonesia.
                </div>
                    <button class="btn btn-secondary" type="submit" style="width: 304px; margin-bottom:100px">
                        Submit
                    </button>
            </div>
        </div>
</form>
    
</body>
</html>