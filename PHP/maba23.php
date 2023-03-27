<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="styleform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- <img src="/Assets/himsifor horizontal.png" alt="logo"> -->
        <h1>HIMSIFOR</h1>
        <h2>Formulir Pendataan Mahasiswa</h2>
        <h3>Sistem Informasi FMIPA UNSRAT 2023</h3>
    </div>
    <form action="koneksi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="tmp_lhr">Tempat Lahir:</label>
        <input type="text" id="tmp_lhr" name="tmp_lhr" required>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir"><br>
        <label for="gender" type="gender">Jenis Kelamin:</label>
        <select id="jk" name="gender">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat">
        <label for="agama">Agama:</label>
        <select id="agama" name="agama">
            <option value="">Pilih Agama</option>
            <option value="Hindu">Hindu</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Islam">Islam</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        <label for="nma_pt">Asal Sekolah:</label>
        <input type="text" name="asalsklh" id="nma_pt">
        <label for="no_hp">No WhatsApp:</label>
        <input type="text" name="no_hp" id="no_hp">
        <label for="gol">Golongan Darah:</label>
        <select id="gol" name="gol">
            <option value="">Pilih Golongan Darah</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <label for="hobi">Hobi:</label>
        <input type="text" name="hobi" id="hobi">    
        <button type="submit">Daftar</button>
    </form>
    <footer>

    </footer>
</body>

</html>
</label>