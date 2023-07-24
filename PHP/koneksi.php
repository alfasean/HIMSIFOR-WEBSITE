<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
  if (!isset($_POST['checkbox'])) {
    echo "<script>alert('Centang kotak untuk melanjutkan!');</script>";
  } else {
    $nama = $_POST["nama"];
    $tmp_lhr = $_POST["tmp_lhr"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $agama = $_POST["agama"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $pendidikan = $_POST["asalsklh"];
    $hobi = $_POST["hobi"];
    
    $sql = "INSERT INTO mahasiswa_si23 (Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Jenis_Kelamin, Alamat, Agama, Asal_Sekolah, No_WA, Hobi)
    VALUES ('$nama', '$tmp_lhr', '$tgl_lahir', '$gender', '$alamat', '$agama', '$pendidikan', '$no_hp', '$hobi')";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Data Kamu Sudah Direkam!');</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();
?>


</body>
</html>

