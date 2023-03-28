<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="css/post.css">
</head>

<body>
    <div class="kotak2">
        <h1 align="center">FORM REGIS SISWA Mts AL-HIDAYAH</h1>
    </div>
    <hr>
    <hr>
    <div class="container d-flex justify-content-center">

        <div class="kotak mtp">
            <form action="">
                <label for="namaDepan">Nama Depan</label>
                <br>
                <input type="text" name="namadepan">
                <br><br>
                <label for="namaBelakang">Nama Belakang</label>
                <br>
                <input type="text" name="namaBelakang">
                <br><br>
                <label for="TglLahir">Tanggal Lahir</label>
                <br>
                <input type="date" name="TglLahir">
                <br><br>
                <label for="Gender">GENDER</label>
                <br>
                <select name="" id="">
                    <option value="gender">-- GENDER --</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <br><br>
                <label for="kendaraan"> KENDARAAN</label>
                <br>
                <select name="" id="">
                    <option value="kendaraan">-- pilih kendaraan --</option>
                    <option value="Motor">Motor</option>
                    <option value="Mobil">Mobil</option>
                    <option value="AngkutanUmum">Angkutan Umum</option>
                    <option value="JalanKaki">Jalan kaki</option>
                </select>
                <br><br>
                <label for="foto">Foto</label>
                <br>
                <input type="file" nama="foto">
                <br><br>
                <label for="hobi">HOBI</label>
                <br>
                <input type="checkbox" class="checkbox" id="melukis" value="melukis">
                <label for="melukis">Melukis</label>
                <br><br>
                <input type="checkbox" class="checkbox" id="mainBola" value="mainBola">
                <label for="mainBola">Main Bola</label>
                <br><br>
                <input type="checkbox" class="checkbox" id="membaca" value="membaca">
                <label for="membaca">Membaca</label>
                <br><br>
                <input type="checkbox" class="checkbox" id="memancing" value="memancing">
                <label for="memancing">Memancing</label>
                <br><br>
                <label for="komentar">KOMENTAR</label>
                <br>
                <textarea class="komentar" name="komentar" id="komentar" cols="" rows=""></textarea>
                <br><br>
                <small>buat akun untuk log-in !</small><br>
                <label for="userName">User Name</label>
                <br>
                <input type="" name="userName">
                <br><br>
                <label for="password">Password</label>
                <br>
                <input type="password">
                <br><br>
                <button><a href="#">SUBMIT</a> </button>
                <input type="reset" class="reset">

            </form>
        </div>
    </div>
</body>

</html>