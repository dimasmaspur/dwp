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
.file-upload {
  display: inline-flex;
  align-items: center;
  font-size: 15px;
}

.file-upload__input {
  display: none;
}

.file-upload__button {
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #C0C0C0;
  border-radius: 8px;
  outline: none;
  padding: 0.5em 0.8em;
  margin-right: 15px;
  color: #0F56B3;
  font-size: 1em;
  font-weight: bold;
  cursor: pointer;
}

.file-upload__button:active {
  background: #C0C0C0;
}

.file-upload__label {
  max-width: 250px;
  font-size: 0.95em;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}

.labelnya{
    width: 400px;
    padding-top: 7px;
    padding-left: 7px;
    padding-bottom: 7px;
  background: #EFEFEF;
  border-radius: 5px;
}
</style>
</head>
<body>
    <div class="header3">
        <a href="<?= base_url('dashboard') ?>"><img src="<?= base_url('assets/img/Dharma_wanita.png') ?>" alt="logo" class="lg1"></a>
        <img src="<?= base_url('assets/img/header.png') ?>" alt="logo" class="lg2">
        <img src="<?= base_url('assets/img/headline.png') ?>" alt="logo" class="lg3">
        <img src="<?= base_url('assets/img/banten.png') ?>" alt="logo" class="lg4">
</div>
 
    <div class="detail2">
        <div class="edit2">
            <img src="<?= base_url('assets/img/file-document.png') ?>" alt=""> Edit Data Anggota
        </div>
       
    </div>
    
    <?php foreach($data as $d => $isi){
        ?>
    <form action="<?= base_url('dashboard/prosesedit/'.$isi->id) ?>" method="POST" enctype="multipart/form-data">

    <div class="bio2">
            <div class="foto2">
                <p style="font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/aa.png') ?>" alt=""> &nbsp;Data Personal</p>

               
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Nama Depan" name="namadpn" required value="<?= set_value('namadpn',$isi->namadepan) ?>" >     &nbsp;&nbsp;
                        <input type="text" class="form-control" placeholder="Nama Belakang" name="namablkg" value="<?= set_value('namablkg',$isi->namabelakang) ?>" required>    
                    </div>
                    <p class="mt-2"><i>Isilah dengan nama yang sesuai dengan KTP</i></p>
                    <hr style="border: 1px solid black;">
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir" value="<?= set_value('tempatlahir',$isi->tempatlahir) ?>" required>     &nbsp;&nbsp;
                        <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" value="<?= set_value('tanggal',$isi->tanggal) ?>"  required>    &nbsp;-&nbsp;
                        <input type="text" class="form-control" placeholder="Bulan" name="bulan" value="<?= set_value('bulan',$isi->bulan) ?>" required>   &nbsp;-&nbsp;
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" value="<?= set_value('tahun',$isi->tahun) ?>" required>    
                    </div>
                    <hr style="border: 1px solid black;">
                    <input type="text" class="form-control" placeholder="Alamat Tempat Tinggal" name="alamat" value="<?= set_value('alamat',$isi->alamat) ?>" required>     &nbsp;&nbsp;
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="RT" name="rt" value="<?= set_value('rt',$isi->rt) ?>" required>  &nbsp;/&nbsp;  
                        <input type="text" class="form-control input-sm" placeholder="RW" name="rw" value="<?= set_value('rw',$isi->rw) ?>" required>   &nbsp;&nbsp;  
                        <input type="text" class="form-control" placeholder="No Telp" name="notelp" value="<?= set_value('notelp',$isi->notelp) ?>" required>
                    </div>
                    <br>
                    <div class="nama">
                        <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" value="<?= set_value('kelurahan',$isi->kelurahan) ?>" required>  &nbsp;&nbsp;  
                        <input type="text" class="form-control input-sm" placeholder="Kecamatan" name="kecamatan" value="<?= set_value('kecamatan',$isi->kecamatan) ?>" required>   &nbsp;&nbsp;  
                        <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten" value="<?= set_value('kabupaten',$isi->kabupaten) ?>" required>
                    </div>
                    <div class="nama mt-4">
                        <img src="<?= base_url('uploads/'.$isi->image) ?>" alt="" width="150">
                        <div class="file-upload" style="margin-left: 10px;">
                        <input class="file-upload__input" type="file" name="image" id="myFile">
                        <button class="file-upload__button" type="button">+ &nbsp; Unggah foto</button>
                        <div class="labelnya"><span class="file-upload__label"></span></div>
                    </div>
                    </div>
            </div>

            <div class="datadiri2">
                <div class="suami">
                <p style="padding-left:10px;padding-top:10px;font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #FFFFFF;"><img src="<?= base_url('assets/img/suami3.png') ?>" alt=""><img src="<?= base_url('assets/img/user.png') ?>" alt=""> &nbsp;Data Suami</p>
                <div class="suaminya py-2 px-2">
                    <input type="text" class="form-control my-2" placeholder="Nama Depan Suami" name="namadepansuami" value="<?= set_value('namadepansuami',$isi->namadepansuami) ?>" required>  
                    <input type="text" class="form-control my-2" placeholder="Nama Belakang Suami" name="namabelakangsuami" value="<?= set_value('namabelakangsuami',$isi->namabelakangsuami) ?>" required>  
                    <select class="custom-select" name="kedinasan" required>
                      <option value="<?= set_value('kedinasan',$isi->kedinasan) ?>"><?= set_value('kedinasan',$isi->kedinasan) ?></option>
                      <option value="Biro Administrasi Rumah Tangga Pimpinan">Biro Administrasi Rumah Tangga Pimpinan</option>
                      <option value="Biro Infrastruktur dan Sumber Daya Alam">Biro Infrastruktur dan Sumber Daya Alam</option>
                      <option value="Biro Administrasi Pembangunan Daerah">Biro Administrasi Pembangunan Daerah</option>
                      <option value="Biro Perekonomian">Biro Perekonomian</option>
                      <option value="Biro Pemerintahan">Biro Pemerintahan</option>
                      <option value="Biro Hukum">Biro Hukum</option>
                      <option value="Biro Organisasi">Biro Organisasi</option>
                      <option value="Biro Kesejahteraan Rakyat">Biro Kesejahteraan Rakyat</option>
                      <option value="Biro Umum">Biro Umum</option>
                      <option value="DPRD PROVINSI BANTEN">DPRD PROVINSI BANTEN</option>
                      <option value="Dinas Perpustakaan dan Kearsipan">Dinas Perpustakaan dan Kearsipan</option>
                      <option value="Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan Keluarga Berencana">Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan Keluarga Berencana</option>
                      <option value="Dinas Lingkungan Hidup dan Kehutanan">Dinas Lingkungan Hidup dan Kehutanan</option>
                      <option value="Dinas Ketahanan Pangan">Dinas Ketahanan Pangan</option>
                      <option value="Dinas Perumahan Rakyat dan Kawasan Permukiman">Dinas Perumahan Rakyat dan Kawasan Permukiman</option>
                      <option value="Dinas Pekerjaan Umum dan Penataan Ruang">Dinas Pekerjaan Umum dan Penataan Ruang</option>
                      <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                      <option value="Dinas Pendidikan dan Kebudayaan">Dinas Pendidikan dan Kebudayaan</option>
                      <option value="Dinas Kepemudaan dan Olah Raga">Dinas Kepemudaan dan Olah Raga</option>
                      <option value="Dinas Pertanian">Dinas Pertanian</option>
                      <option value="Dinas Kelautan dan Perikanan">Dinas Kelautan dan Perikanan</option>
                      <option value="Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                      <option value="Dinas Pemberdayaan Masyarakat dan Desa">Dinas Pemberdayaan Masyarakat dan Desa</option>
                      <option value="Dinas Komunikasi, Informatika, Statistik dan Persandian">Dinas Komunikasi, Informatika, Statistik dan Persandian</option>
                      <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                      <option value="Dinas Energi dan Sumberdaya Mineral">Dinas Energi dan Sumberdaya Mineral</option>
                      <option value="Dinas Perindustrian dan Perdagangan">Dinas Perindustrian dan Perdagangan</option>
                      <option value="Dinas Pariwisata">Dinas Pariwisata</option>
                      <option value="Dinas Sosial">Dinas Sosial</option>
                      <option value="Dinas Tenaga Kerja dan Transmigrasi">Dinas Tenaga Kerja dan Transmigrasi</option>
                      <option value="Dinas Koperasi, Usaha Kecil dan Menengah">Dinas Koperasi, Usaha Kecil dan Menengah</option>
                      <option value="Inspektorat">Inspektorat</option>
                      <option value="Badan Pengelolaan Keuangan dan Aset Daerah">Badan Pengelolaan Keuangan dan Aset Daerah</option>
                      <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                      <option value="Badan Pengembangan Sumber Daya Manusia">Badan Pengembangan Sumber Daya Manusia</option>
                      <option value="Badan Kesatuan Bangsa dan Politik">Badan Kesatuan Bangsa dan Politik</option>
                      <option value="Badan Pendapatan Daerah">Badan Pendapatan Daerah</option>
                      <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                      <option value="Badan Penanggulangan Bencana Daerah">Badan Penanggulangan Bencana Daerah</option>
                      <option value="Badan Penghubung">Badan Penghubung</option>
                      <option value="Satuan Polisi Pamong Praja (SATPOLPP) Provinsi Banten">Satuan Polisi Pamong Praja (SATPOLPP) Provinsi Banten</option>
                      <option value="Rumah Sakit Umum Daerah">Rumah Sakit Umum Daerah</option>
                      <option value="Rumah Sakit Umum Malimping">Rumah Sakit Umum Malimping</option>
                    </select>
                    <select class="custom-select mt-2" name="tingkat" required>
                      <option value="<?= set_value('kedinasan',$isi->tingkat) ?>"><?= set_value('kedinasan',$isi->tingkat) ?></option>
                      <option value="Provinsi">Provinsi</option>
                      <option value="Kabupaten Kota">Kabupaten Kota</option>
                      <option value="Kecamatan">Kecamatan</option>
                    </select>
                </div>
                </div>
                <div class="akun">
                <p style="padding-left:10px;padding-top:10px;font-family: IBM Plex Sans;font-style: normal;font-weight: 600;font-size: 20px;color: #000000;"><img src="<?= base_url('assets/img/girl.png') ?>" alt=""> &nbsp;Informasi Akun</p>
                <div class="suaminya py-2 px-2">
                    <input type="text" class="form-control my-2" placeholder="Username" name="username" value="<?= set_value('username',$isi->username) ?>" required>  
                    <input type="password" class="form-control my-2" placeholder="Password" name="password" value="<?= set_value('password',$isi->password) ?>" required>  
                </div>
                </div>
                <div class="isian">
                Seluruh data yang tertera pada formulir ini adalah benar dan sesuai dengan Kartu Tanda Penduduk resmi negara Republik Indonesia.
                </div>
                    <button class="btn btn-secondary" type="submit" style="width: 304px; margin-bottom:100px">
                        Edit
                    </button>
            </div>
        </div>

        <?php 
    }
        ?>
</form>
    
<script>
    Array.prototype.forEach.call(
  document.querySelectorAll(".file-upload__button"),
  function(button) {
    const hiddenInput = button.parentElement.querySelector(
      ".file-upload__input"
    );
    const label = button.parentElement.querySelector(".file-upload__label");
    const defaultLabelText = "Silahkan ganti foto";

    // Set default text for label
    label.textContent = defaultLabelText;
    label.title = defaultLabelText;

    button.addEventListener("click", function() {
      hiddenInput.click();
    });

    hiddenInput.addEventListener("change", function() {
      const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        file
      ) {
        return file.name;
      });

      label.textContent = filenameList.join(", ") || defaultLabelText;
      label.title = label.textContent;
    });
  }
);

</script>
</body>
</html>