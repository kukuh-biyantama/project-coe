<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('assets/css/styleclusterpetani.css') !!}">

<body>


  <form id="regForm" action="/clusterpetanijson" method="POST">
    @csrf
    <h1>Form Asesmen Petani</h1>
    <!-- One "tab" for each step in the form: -->

    <!--Halaman 1-->
    <div class="tab">
      <div class="field-input">
        <label for="inputNamaPetani" class="col-form-label">Nama Petani</label>
        <p><input type="text" id="nama" placeholder="Masukkan Nama Anda" oninput="this.className = ''" name="nama"></p>
      </div>
      <div class="field-input">
        <label for="inputUsiapetani" class="col-form-label">Usia</label>
        <p><input type="number" id="usia" placeholder="Masukkan Usia Anda" oninput="this.className = ''" name="usia"></p>
      </div>
      <div class="field-input">
        <div class="input-option">
          <label class="col-form-label">Jenis Kelamin</label>
          <div class="form-dropdown">
            <select name="jenisKelamin" id="jenisKelamin" required>
              <option disabled selected>Pilih</option>
              <option value="Laki-Laki">Laki - laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field-input">
        <div class="input-option">
          <label class="col-form-label">Pendidikan</label>
          <div class="form-dropdown">
            <select name="pendidikan" id="pendidikan" required>
              <option disabled selected>Pilih</option>
              <option value="Tidak Lulus SD">Tidak lulus SD</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="DIPLOMA">DIPLOMA</option>
              <option value="SARJANA">SARJANA</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field-input">
        <div class="input-option">
          <label class="col-form-label">Pilih Kabupaten</label>
          <div class="form-dropdown">
            <select name="kabupaten" id="kabupaten" required>
              <option disabled selected>Pilih</option>
              <option value="Demak">Demak</option>
              <option value="Brebes">Brebes</option>
              <option value="Boyolali">Boyolali</option>
              <option value="Kendal">Kendal</option>
              <option value="Temanggung">Temanggung</option>
            </select>
          </div>

        </div>
      </div>
    </div>

    <!--Halaman 2-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Anggota Kelompok Tani</label>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" id="kelompok" type="radio" name="kelompok" value="ya">
            <label>Ya</label>
          </div>
          <div class="down">
            <input class="inputan" id="kelompok" type="radio" name="kelompok" value="tidak">
            <label>Tidak</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Status Kepemilikan Lahan</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" id type="checkbox" name="status_kpLahan[]" value="status lahan sendiri">
            <label>milik sendiri</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="status_kpLahan[]" value="status lahan bagi hasil">
            <label>Bagi hasil</label>
          </div>
          <div class="up">
            <input class="inputan" type="checkbox" name="status_kpLahan[]" value="status lahan sewa">
            <label>Sewa</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Sumber Modal</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrModal[]" value="Sumber Modal Sendiri">
            <label>Sendiri</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrModal[]" value="Sumber Modal Pinjam">
            <label>Pinjam</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label for="inputKalitanam" class="col-form-label">Berapa Kali Tanam Permusim</label>
        <p><input type="number" placeholder="Masukkan Angka" oninput="this.className = ''" name="tnmPermusim"></p>
      </div>
    </div>

    <!--Halaman 3-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Luas Lahan</label>
        <p><input type="number" placeholder="Luas Lahan" name="inptLuaslahan"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnluasLahan" id="luaslahan_meter" value="Meter">
            <label>Meter</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="stnluasLahan" id="luaslahan_hektar" value="Hektar">
            <label>Hektar</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Lama Menjadi Petani</label>
        <p><input type="number" placeholder="Berapa Lama Menjadi Petani" name="lmmnjdPetani"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="blnlamaBertani" id="lamaBertani_bulan" value="Bulan">
            <label>Bulan</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="blnlamaBertani" id="lamaBertani_tahun" value="Tahun">
            <label>Tahun</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Durasi Tanam</label>
        <p><input type="number" placeholder="Durasi Waktu Tanam" name="drsTanam"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="hridurasiTanam" id="durasiTanam_hari" value="Hari">
            <label>Hari</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="hridurasiTanam" id="durasiTanam_bulan" value="Bulan">
            <label>Bulan</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 4-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Bibit</label>
        <p><input type="number" placeholder="Berapa Jumlah Bibit Yang Anda Gunakan" name="jmlBibit"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnBibit" id="bibit_kilogram" value="Kilogram">
            <label>Kilogram</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="stnBibit" id="bibit_kwintal" value="Kwintal">
            <label>Kwintal</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnBibit" id="bibit_ton" value="Ton">
            <label>Ton</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Pupuk</label>
        <p><input type="number" placeholder="Berapa Jumlah Pupuk Yang Anda Gunakan" name="jmlPupuk"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnPupuk" id="pupuk_kilogram" value="Kilogram">
            <label>Kilogram</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="stnPupuk" id="pupuk_kwintal" value="Kwintal">
            <label>Kwintal</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnPupuk" id="pupuk_ton" value="Ton">
            <label>Ton</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Rata-Rata Hasil Panen</label>
        <p><input type="number" placeholder="Berapa Rata-Rata Hasil Panen Anda" name="ratarataHasilpanen"></p>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnratarataPanen" id="panen_kilogram" value="Kilogram">
            <label>Kilogram</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="down">
            <input class="inputan" type="radio" name="stnratarataPanen" id="panen_kwintal" value="Kwintal">
            <label>Kwintal</label>
          </div>
        </div>
        <div class="form-radio">
          <div class="up">
            <input class="inputan" type="radio" name="stnratarataPanen" id="panen_ton" value="Ton">
            <label>Ton</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 5-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Bulan Tanam Bawang</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Januari">
            <label>Januari</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Februari">
            <label>Februari</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Maret">
            <label>Maret</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="April">
            <label>April</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Mei">
            <label>Mei</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Juni">
            <label>Juni</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Juli">
            <label>Juli</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Agustus">
            <label>Agustus</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="September">
            <label>September</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Oktober">
            <label>Oktober</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="November">
            <label>November</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="blnTanambawang[]" value="Desember">
            <label>Desember</label>
          </div>
        </div>
      </div>
    </div>
    <!--Halaman 6-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Varietas Bawang Merah</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bima Brebes">
            <label>Bima Brebes</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bali Karet">
            <label>Bali Karet</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Batu Ijo">
            <label>Batu Ijo</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Putih">
            <label>Putih</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Garut">
            <label>Garut</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Tanjuk">
            <label>Tanjuk</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bima Jokowi">
            <label>Bima Jokowi</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bima Juna">
            <label>Bima Juna</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bima Curut">
            <label>Bima Curut</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Bima Jaya">
            <label>Bima Jaya</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Nganjuk">
            <label>Nganjuk</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="vrtsBawang[]" value="Varietas Batu Karet">
            <label>Batu Karet</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 7-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Jenis Pupuk</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPupuk[]" value="Organik">
            <label>Organik</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPupuk[]" value="Anorganik">
            <label>Anorganik</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Sumber Pupuk Organik</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Bantuan Pemerintah">
            <label>Bantuan Pemerintah</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Beli di Peternak">
            <label>Beli di Peternak</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kompos">
            <label>Kompos</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Buat Sendiri">
            <label>Buat Sendiri</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kelompok Tani">
            <label>Kelompok Tani</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Toko Pertanian">
            <label>Toko Pertanian</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kotoran Ayam">
            <label>Kotoran Ayam</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kotoran Sapi">
            <label>Kotoran Sapi</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kotoran Kambing">
            <label>Kotoran Kambing</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukorganik[]" value="Kotoran Hewan">
            <label>Kotoran Hewan</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Sumber Pupuk Anorganik</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukanorganik[]" value="Toko Pertanian">
            <label>Toko Pertanian</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPupukanorganik[]" value="Kelompok Tani">
            <label>Kelompok Tani</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPupukanorganik[]" value="Peternakan">
            <label>Peternak</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 8-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Merk Pupuk</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk bio to grow">
            <label>Bio to grow</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk DGW">
            <label>DGW</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk Mutiara">
            <label>Mutiara</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk phoska">
            <label>Phoska</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk saprodap">
            <label>Saprodap</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk HCL">
            <label>HCL</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk kamas">
            <label>Kamas</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk meroke">
            <label>Meroke</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk pak tani">
            <label>Pak tani</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk lao ying">
            <label>Lao Ying</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk MKP">
            <label>MKP</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk phonska">
            <label>Phonska</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk ZA">
            <label>ZA</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk DAP">
            <label>DAP</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk golden max">
            <label>Golden Max</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk kcl">
            <label>KCL</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk mahkota">
            <label>Mahkota</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk npk">
            <label>NPK</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk sp36">
            <label>SP36</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk subur kali">
            <label>Subur kali</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk ksn">
            <label>KSN</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk petroganik">
            <label>Petroganik</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk luar negeri">
            <label>Pupuk luar negeri</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk randex">
            <label>Randex</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk urea">
            <label>Urea</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk fosfat">
            <label>Fosfat</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="mrkPupuk[]" value="Pupuk meganic">
            <label>Meganic</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 9-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Jenis Hama</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Engkuk">
            <label>Engkuk</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Grandong">
            <label>Grandong</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Ulat">
            <label>Ulat</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Kutu">
            <label>Kutu</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Tikus">
            <label>Tikus</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Wereng">
            <label>Wereng</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Amitra Nosa">
            <label>Amitra Nosa</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Belalang">
            <label>Belalang</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Serangga">
            <label>Serangga</label>
          </div>
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsHama[]" value="Lalat">
            <label>Lalat</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 10-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Jenis Penyakit</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Trotol">
            <label>Trotol</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Akar Busuk">
            <label>Akar Busuk</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Akar Rusak">
            <label>Akar Rusak</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Daun Busuk">
            <label>Daun Busuk</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Buah Busuk">
            <label>Buah Busuk</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Daun Layu">
            <label>Daun Layu</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Busuk Batang">
            <label>Busuk Batang</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Daun Bercak">
            <label>Daun Bercak</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Daun Kemerahan">
            <label>Daun Kemerahan</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Umbi Busuk">
            <label>Umbi Busuk</label>
          </div>
        </div>
        <div class="form-check">
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Fusarium">
            <label>Fusarium</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Inul">
            <label>Inul</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Jamur">
            <label>Jamur</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Mulet">
            <label>Mulet</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Rencek">
            <label>Rencek</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Semu Kuning">
            <label>Semu Kuning</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Krapak">
            <label>Krapak</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Pohon Kering">
            <label>Pohon Kering</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="jnsPenyakit[]" value="Pucuk Menguning">
            <label>Pucuk Menguning</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 11-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Tempat Membeli Pestisida</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="tmptbeliPestisida[]" value="Toko Obat Pertanian">
            <label>Toko Obat Pertanian</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="tmptbeliPestisida[]" value="Kelompok Tani">
            <label>Kelompok Tani</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Sumber Pengairan</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPengairan[]" value="Sumur">
            <label>Sumur</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPengairan[]" value="Irigasi">
            <label>Irigasi</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPengairan[]" value="Tadah Hujan">
            <label>Tadah Hujan</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="smbrPengairan[]" value="Mata Air">
            <label>Mata Air</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="smbrPengairan[]" value="Sungai">
            <label>Sungai</label>
          </div>
        </div>
      </div>
    </div>

    <!--Halaman 12-->
    <div class="tab">
      <div class="field-input">
        <label class="col-form-label">Setelah Panen</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="stlhPanen[]" value="Disimpan Dirumah">
            <label>Disimpan Dirumah</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="stlhPanen[]" value="Dijual Langsung">
            <label>Dijual Langsung</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="stlhPanen[]" value="Tebas">
            <label>Tebas</label>
          </div>
        </div>
      </div>
      <div class="field-input">
        <label class="col-form-label">Tempat Menjual Hasil Panen</label>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="Pasar">
            <label>Pasar</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="pengepul">
            <label>Pengepul</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="UMKM">
            <label>Penggoreng/UMKM</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="Ecer">
            <label>Ecer</label>
          </div>
        </div>
        <div class="form-check">
          <div class="up">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="Pedagang">
            <label>Pedagang</label>
          </div>
          <div class="down">
            <input class="inputan" type="checkbox" name="tmptmenjualPanen[]" value="Penebas">
            <label>Penebas</label>
          </div>
        </div>
      </div>
    </div>

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
      </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>
  <script src="/assets/js/scriptclusterpetani.js"></script>
</body>

</html>