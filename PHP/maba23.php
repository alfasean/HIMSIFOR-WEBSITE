<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himsifor | Form Registrasi</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="styleform.css?v=2">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./../CSS/style.css?v=2">
    <link rel="icon" sizes="200x200" href="./../Assets/himsifor.png" />
    <script src="https://kit.fontawesome.com/9403f07adf.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "769da543-dc22-408e-8538-413285a27b3a";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    echo "<script>swal('Sepertinya ada masalah', 'Kamu harus mencentang bagian chekbox!', 'error')</script>";
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
      echo "<script>swal('Yeaaaayyy!', 'Data Kamu Sudah Direkam!', 'success')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();
?>

    <nav class='navbar navbar-expand-lg fixed-top mb-5' id="nvb" style="background-color: #fff;">
        <div class='container'>
            <a class="navbar-brand d-flex" href="index.html">
                <img src=".././Assets/himsifor horizontal.png" alt="Logo"
                    class="d-inline-block align-text-top hima-logo" style="width: 200px; height: 50px;">
                <img src=".././Assets/dark.png" alt="Logo" class="d-inline-block align-text-top hima-logo-dark"
                    style="width: 200px; height: 50px;">
            </a>
            <button class='btn navbar-toggler border-3 px-2' type='button' data-bs-toggle='offcanvas'
                data-bs-target='#offcanvasExample' aria-controls='offcanvasExample'>
                <img style='width: 30px' src='.././Assets/text-center.svg' alt='menu icon' id="menu_icon">
            </button>
            <div class='offcanvas offcanvas-start-lg' tabindex='-1' id='offcanvasExample'
                aria-labelledby='offcanvasExampleLabel'>
                <div class='offcanvas-header d-flex d-lg-none'>
                    <img src=".././Assets/himsifor horizontal.png" alt="Logo" class="d-inline-block align-text-top hima-logo"
                        style="width: 200px; height: 50px;">
                    <img src="Assets/dark.png" alt="Logo" class="d-inline-block align-text-top hima-logo-dark"
                        style="width: 200px; height: 50px;">
                    <a href='javascript:void(0) ' class='text-reset p-0' data-bs-dismiss='offcanvas' aria-label='close'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#000'
                            class='bi bi-x-circle svg' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z' />
                            <path
                                d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z' />
                        </svg>
                    </a>
                </div>
                <div class='offcanvas-body p-lg-0'>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href=".././index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".././HTML/tentang.html">Profil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Departement
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href=".././HTML/non-departement.html">Non Departement</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=".././HTML/departement-pengkaderan.html">Pengkaderan</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=".././HTML/departement-hubungan-masyarakat.html">Hubungan
                                        Masyarakat</a></li>
                                <li><a class="dropdown-item" href=".././HTML/departement-kerohanian.html">Rohani &
                                        Jasmani</a></li>
                                <li><a class="dropdown-item"
                                        href=".././HTML/departement-kesektariatan.html">Kesektariatan</a></li>
                                <li><a class="dropdown-item"
                                        href=".././HTML/departement-kesejahteraan-mahasiswa.html">Kesejahteraan
                                        Mahasiswa</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=".././HTML/departement-kewirausahaan-dan-sponsorhip.html">Kewirausahaan &
                                        Sponsorship</a></li>
                                <li><a class="dropdown-item" href=".././HTML/departement-minat-dan-bakat.html">Minat &
                                        Bakat</a></li>
                                <li><a class="dropdown-item" href=".././HTML/departement-multimedia.html">Multimedia &
                                        Jurnalistik</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="maba23.php">Fomulir Pendataan Mahasiswa Baru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tanya SI
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" target="_blank"
                                    href='https://form.jotform.com/230854705051451'>
                                    SICurhat
                                </a>

                                <a class="dropdown-item" target="_blank"
                                    href="https://form.jotform.com/230855079355463">
                                    AspiraSI
                                </a>
                            </ul>
                        </li>
                    </ul>
                    <label class="switch">
                        <span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="#ffd43b">
                                    <circle r="5" cy="12" cx="12"></circle>
                                    <path
                                        d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z">
                                    </path>
                                </g>
                            </svg></span>
                        <span class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <g fill="#ffd43b">
                                    <path
                                        d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                                    </path>
                                </g>
                            </svg></span>
                        <input type="checkbox" class="input" id="darkmode">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex row ">
        <div class="col-12 col-md-6">
            <div class="d-flex justify-content-center align-items-center" id="image" style="background-color: #032156;
            mix-blend-mode: normal;
            /* opacity: 0.5; */
            border-radius: 0px 50px 50px 0px; width: 100%; height: 100%;">
                <!-- <div class="d-flex justify-content-center align-items-center"> -->
                <img src="./../Assets/himsifor.png" alt="" style="position: absolute; width: 312px; height: 312px;">
                <!-- </div> -->
                <img src="./../Assets/img_mb.png" alt=".." style="width: 100%; height: 100%;">

            </div>
        </div>
        <div class="col-12 col-md-6 wrapper">
            <form action="" method="post">
                <h1 class="title">FORMULIR PENDATAAN MAHASISWA BARU SISTEM INFORMASI ANGKATAN 2023</h1>
                <img class="shape end-0 " src="./../Assets/Rectangle 88.png" alt="..">
                <div class="field">
                    <input type="text" name="nama" required>
                    <label>Nama Lengkap</label>
                </div>
                <div class="field">
                    <input type="text" name="tmp_lhr" required>
                    <label>Tempa Lahir</label>
                </div>
                <div class="field">
                    <input type="date" name="tgl_lahir" required>
                    <label>Tanggal Lahir</label>
                </div>
                <div class="field">
                    <!-- <input type="text" name="jenis_kelamin" required> -->
                    <!-- <label>Jenis Kelamin</label> -->
                    <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected value="">Jenis Kelamin</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="field">
                    <input type="text" name="alamat" required>
                    <label>Alamat Lengkap</label>
                </div>
                <div class="field">
                    <select name="agama" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="" selected>Agama</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="field">
                    <input type="text" name="asalsklh" required>
                    <label>Asal Sekolah</label>
                </div>
                <div class="field">
                    <input type="text" name="no_hp" required>
                    <label>No Whatsapp</label>
                </div>
                <div class="field">
                    <input type="text" name="hobi" required>
                    <label>Hobi</label>
                </div>
                <div class="d-flex">
                <input class="mt-3 checkbox" type="checkbox" name="checkbox"> 
                <p class="checkbox">Saya bertanggung jawab atas data yang telah saya
                berikan.</p> 
                </div>

                <button type="submit" class="btn button_submit mt-3" name="submit">Submit</button>

                <h2 class="text-center mt-4 follow">Follow Us:</h2>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="sosmed d-flex">
                        <div class="bulat modedark d-flex justify-content-center align-items-center me-3">
                            <a href="www.instagram.com" target="_blank"><i
                                    class="fa-brands fa-tiktok text-white"></i></a>
                        </div>
                        <div class="bulat modedark d-flex justify-content-center align-items-center me-3">
                            <a href="www.instagram.com" target=" _blank"><i
                                    class="fa-brands fa-instagram text-white"></i></a>
                        </div>
                        <div class="bulat modedark d-flex justify-content-center align-items-center">
                            <a href="www.instagram.com" target=" _blank"><i
                                    class="fa-brands fa-youtube text-white"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer" style="margin-top:100px;">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5267647828314!2d124.82771664964885!3d1.4579053616212907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328774ed79fb50c5%3A0xfa8c06ff4708968c!2sProdi%20Sistem%20Informasi%20FMIPA%20UNSRAT!5e0!3m2!1sid!2sid!4v1679900086941!5m2!1sid!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col temukann">
                        <ul id="temukan">
                            <h4 class="title-temukan">Dimana kamu menemukan kami</h4>
                            <li>
                                <i class="fas fa-location-dot"></i>
                                <p style="color: #fff">FR5H+5X3, Kleak, Kec. Malalayang, Kota Manado, Sulawesi Utara</p>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <p style="color: #fff;">si.unsrat@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col temukann mdsos d-flex justify-content-center align-items-center flex-wrap"
                        style="padding-bottom:35px;">
                        <div class="medsos">
                            <h4>Follow us:</h4>
                            <div class="">
                                <a href="https://www.tiktok.com/@himsifor_unsrat" target="_blank"><i
                                        class="fa-brands fa-tiktok"></i></a>
                                <a href="https://www.instagram.com/himsifor_unsrat/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@himsifor_unsrat1566" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                            <p style="color: #5189C6">Thank You For Visiting Our Website</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fixed-footer">
                <div class="text-center">
                    <div class="footer-content">
                        <div class="copyright">
                            &copy; 2023-2024 Himpunan Mahasiswa Sistem Informasi Unsrat
                        </div>
                        <p>Dibuat Oleh Tim Website</p>
                    </div>
                </div>
            </div>
        </footer>

    <div class="back-to-top">
        <a style="color: white;"> <i class="fa fa-angle-double-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src=".././JS/aos.js"></script>
    <script src=".././JS/script.js"></script>
</body>

</html>
</label>