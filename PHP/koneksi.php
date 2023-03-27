<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendataan_si23";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nama = $_POST["nama"];
$tmp_lhr = $_POST["tmp_lhr"];
$tgl_lahir = $_POST["tgl_lahir"];
$agama = $_POST["agama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$pendidikan = $_POST["asalsklh"];
$hobi = $_POST["hobi"];
$gol = $_POST["gol"];

$sql = "INSERT INTO mahasiswa_si23 (Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Jenis_Kelamin, Alamat, Agama, Asal_Sekolah, No_WA, Hobi, Golongan_Darah)
VALUES ('$nama', '$tmp_lhr', '$tgl_lahir', '$gender', '$alamat', '$agama', '$pendidikan', '$no_hp', '$hobi', '$gol')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
