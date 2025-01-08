<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Journal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400&family=Caveat:wght@400;700&family=Dancing+Script:wght@400;700&family=Fira+Code:wght@300..700&family=Inter:wght@300;700&family=Merienda:wght@300..900&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Atur warna panah navigasi */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna hitam dengan transparansi */
            border-radius: 50%;
            /* Bentuk bulat */
            width: 30px;
            /* Lebar panah */
            height: 30px;
            /* Tinggi panah */
        }

        /* Atur warna indikator carousel */
        .carousel-indicators button {
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna hitam dengan transparansi */
        }

        .carousel-indicators .active {
            background-color: rgba(0, 0, 0, 0.8);
            /* Warna lebih gelap untuk indikator aktif */
        }

        /* Pastikan panah tetap terlihat meskipun background berubah */
        .carousel-control-prev,
        .carousel-control-next {
            filter: brightness(100%);
            /* Pastikan panah selalu terang */
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#"><span class="fs-2" style="font-family: Courgette">Fauzan's Diary</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 m-0 ms-lg-3" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 m-0 ms-lg-3" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 m-0 ms-lg-3" href="#jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 m-0 ms-lg-3" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 m-0 ms-lg-3" href="login.php">Login</a>
                    </li>
                </ul>
                <div class="text-center">
                    <img src="assets/moon.png" id="icon">
                </div>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container vh-100 d-flex flex-column justify-content-center">
            <div class="row gy-3">
                <div class="col-12 col-lg-6 pe-5">
                    <img src="./assets/hepiket.png" alt="" class="img-fluid" />
                </div>
                <div class="col-12 col-lg-6 d-flex ps-5 align-items-center justify-content-center mt-5">
                    <div class="gap-1">
                        <h1 class="fw-bold">FAUZAN ARIF <br />PRAYOGI</h1>
                        <h4 class="animasi fs-3 my-2">I'm a <span class="auto-type">Student</span></h4>
                        <a href="#profile" class="btn fs-5 fw-bold mt-2">
                            Profile
                        </a>
                    </div>

                    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

                    <script>
                        var typed = new Typed(".auto-type", {
                            strings: ["Student", "Cat Lover", "Spiderman"],
                            typeSpeed: 150,
                            backSpeed: 100,
                            loop: true
                        })
                    </script>
                </div>
            </div>
        </div>
    </section>

    <section id="article" class="py-5">
        <div class="container border border-2 rounded">
            <div class="m-5">
                <h3 class="text-center mb-4">Article</h3>
                <ol>
                    <li>
                        <p><b>Senin, 30 September 2024</b>
                            <br>Hari Senin dimulai dengan suasana yang cukup santai karena kuliah pertamaku, Probabilitas dan
                            Statistik, baru dimulai
                            pukul 12:30 dan berlangsung hingga 15:00 di ruang H.4.8. Meskipun hanya satu mata kuliah di hari
                            ini, materi yang
                            disampaikan cukup berat karena membutuhkan pemahaman mendalam tentang probabilitas dan penerapan
                            statistika dalam bidang
                            informatika. Setelah kuliah selesai, aku biasanya merasa lapar, dan ini adalah saat yang tepat untuk
                            mengajak
                            teman-temanku makan bersama. Biasanya, kami memilih burjo atau warung ayam kremes yang letaknya tak
                            jauh dari kampus,
                            tempat favorit untuk melepas penat sambil menikmati makanan yang enak dan murah. Setelah makan,
                            terkadang kami
                            meluangkan waktu sejenak untuk berdiskusi tentang materi kuliah atau tugas yang akan datang, sambil
                            duduk santai di area
                            kampus. Jika tidak ada pekerjaan mendesak, aku biasanya pulang sedikit lebih awal untuk bersiap
                            menghadapi hari-hari
                            selanjutnya.
                        </p>
                    </li>
                    <li>
                        <p><b>Selasa, 1 Oktober 2024</b>
                            <br>Hari Selasa selalu terasa lebih sibuk karena ada dua mata kuliah yang perlu dihadiri. Pagi
                            harinya, aku mengikuti kuliah
                            Rekayasa Perangkat Lunak yang dimulai pukul 09:30 dan berlangsung hingga 12:00 di ruang H.4.10.
                            Kuliah ini cukup
                            menantang karena banyak membahas tentang pengembangan sistem dan desain perangkat lunak yang harus
                            diselesaikan dalam
                            kelompok. Setelah kelas pagi selesai, biasanya aku dan teman-teman memutuskan untuk makan siang
                            bersama di salah satu
                            warung dekat kampus yang menjadi tempat favorit kami. Setelah makan, ada jeda waktu yang cukup
                            panjang sebelum kuliah
                            sore, sehingga aku biasanya memanfaatkannya untuk mengerjakan tugas yang tertunda, atau jika aku
                            merasa lelah, aku akan
                            istirahat di perpustakaan atau ruang baca kampus. Sorenya, aku mengikuti kuliah Penambangan Data
                            yang dimulai pukul
                            15:30 hingga 18:00 di ruang H.3.11. Kuliah ini selalu menuntut fokus penuh karena banyak pembahasan
                            tentang algoritma
                            dan analisis data, yang sering kali disertai dengan tugas-tugas praktikum yang harus diselesaikan
                            tepat waktu.
                        </p>
                    </li>
                    <li>
                        <p><b>Rabu, 2 Oktober 2024</b>
                            <br>Di hari Rabu, jadwal kuliahku lebih ringan dibandingkan hari sebelumnya karena hanya ada satu
                            mata kuliah, yaitu
                            Kriptografi, yang dimulai pukul 09:30 hingga 12:00 di ruang H.4.11. Walaupun hanya satu mata kuliah,
                            materi yang
                            diajarkan cukup kompleks karena membahas tentang teknik enkripsi dan dekripsi yang digunakan untuk
                            melindungi data.
                            Setelah kuliah selesai, biasanya aku dan teman-teman langsung bergegas mencari makan siang di kantin
                            atau warung
                            terdekat. Setelah makan, waktu luang di hari Rabu biasanya kami manfaatkan untuk mengerjakan tugas
                            kelompok atau belajar
                            bersama. Hari ini sering kali menjadi kesempatan bagi kami untuk saling membantu memahami materi
                            yang mungkin masih
                            belum jelas, terutama untuk tugas-tugas yang bersifat kolaboratif seperti proyek pemrograman.
                            Terkadang, jika waktu
                            memungkinkan, kami juga menghabiskan waktu bermain game atau bersantai di kampus sebelum pulang ke
                            rumah.
                        </p>
                    </li>
                    <li>
                        <p><b>Kamis, 3 Oktober 2024</b>
                            <br>Kamis menjadi hari yang cukup melelahkan karena ada dua mata kuliah yang jadwalnya berjauhan,
                            membuatku harus mengatur
                            waktu dengan baik. Pagi hari aku mengikuti kuliah Logika Informatika dari pukul 09:30 hingga 12:00
                            di ruang H.4.10. Mata
                            kuliah ini membutuhkan konsentrasi tinggi karena membahas dasar-dasar logika yang sangat penting
                            untuk pemrograman dan
                            algoritma. Setelah kelas pagi selesai, aku dan teman-teman biasanya mengisi waktu dengan makan siang
                            bersama sambil
                            mengobrol tentang tugas atau rencana kegiatan di kampus. Ada jeda waktu yang cukup panjang sebelum
                            mata kuliah kedua,
                            yaitu Basis Data, yang dimulai pukul 14:10 hingga 15:50 di ruang H.5.14. Selama jeda tersebut, aku
                            biasanya memanfaatkan
                            waktu untuk mengerjakan tugas atau bahkan bermain game dengan teman-teman sebagai cara untuk
                            menghilangkan rasa penat.
                            Kuliah sore ini biasanya cukup serius karena berkaitan dengan pengelolaan data yang sangat esensial
                            dalam dunia
                            informatika, sehingga aku harus benar-benar memperhatikan setiap penjelasan yang diberikan dosen.
                        </p>
                    </li>
                    <li>
                        <p><b>Jum'at, 4 Oktober 2024</b>
                            <br>Hari Jumat memiliki suasana yang sedikit berbeda dari hari-hari lainnya. Pagi hari aku mengikuti
                            kuliah Pemrograman
                            Berbasis Web dari jam 10:20 hingga 12:00 di ruang D.2.J. Kuliah ini selalu menarik karena
                            berhubungan langsung dengan
                            teknologi web yang saat ini sangat relevan di dunia kerja. Setelah kuliah selesai, aku langsung
                            menuju masjid kampus
                            bersama teman-teman untuk melaksanakan salat Jumat. Setelah salat, masjid biasanya menyediakan makan
                            siang gratis bagi
                            para mahasiswa yang ikut salat, dan kami sering memanfaatkan kesempatan ini. Makan siang di masjid
                            bersama teman-teman
                            setelah salat Jumat menjadi momen yang menyenangkan dan berbeda dari hari-hari lainnya karena
                            suasananya yang lebih
                            tenang dan kebersamaan yang terasa lebih erat. Setelah itu, kami biasanya bersantai, menikmati hari
                            tanpa beban sebelum
                            akhirnya pulang ke rumah dan bersiap menghadapi akhir pekan yang sering kali dipenuhi tugas-tugas
                            kuliah yang harus
                            diselesaikan.
                        </p>
                    </li>
                </ol>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $sql = "SELECT * FROM article ORDER BY tanggal DESC";
                $hasil = $conn->query($sql);

                while ($row = $hasil->fetch_assoc()) {
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["judul"] ?></h5>
                                <p class="card-text">
                                    <?= $row["isi"] ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">
                                    <?= $row["tanggal"] ?>
                                </small>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <div class="carousel m-5 p-5">
                <h3 class="text-center mb-4">Gallery</h3>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        include "koneksi.php";
                        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                        $result = $conn->query($sql);
                        $index = 0;
                        while ($row = $result->fetch_assoc()) {
                            echo '<button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="' . $index . '" ' . ($index === 0 ? 'class="active" aria-current="true"' : '') . ' aria-label="Slide ' . ($index + 1) . '"></button>';
                            $index++;
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $result = $conn->query($sql); // Query ulang untuk menampilkan gambar
                        $first = true;
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="carousel-item ' . ($first ? 'active' : '') . '">';
                            echo '<img src="assets/' . htmlspecialchars($row['gambar']) . '" class="img-fluid d-block w-100" alt="Gambar Gallery">';
                            echo '</div>';
                            $first = false;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section id="jadwal" class="py-5">
        <div class="container">
            <div class="card m-5 border border-0">
                <h3 class="text-center mb-4">Jadwal Kuliah & Kegiatan Mahasiswa</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-primary">Senin</div>
                            <div class="card-body">
                                <h5 class="card-title">12:30 - 15:00</h5>
                                <p class="card-text">Probabilitas dan Statistik <br>Ruang H.4.8</p>
                                <h5 class="card-title">15:30 - 18:00</h5>
                                <p class="card-text">Sistem Operasi <br>Ruang H.4.9</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-secondary">Selasa</div>
                            <div class="card-body">
                                <h5 class="card-title">09:30 - 12:00</h5>
                                <p class="card-text">Rekayasa Perangkat Lunak <br>Ruang H.4.10</p>
                                <h5 class="card-title">15:30 - 18:00</h5>
                                <p class="card-text">Penambangan Data <br>Ruang H.3.1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-success">Rabu</div>
                            <div class="card-body">
                                <h5 class="card-title">09:30 - 12:00</h5>
                                <p class="card-text">Kriptografi <br>Ruang H.4.11</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-danger">Kamis</div>
                            <div class="card-body">
                                <h5 class="card-title">09:30 - 12:00</h5>
                                <p class="card-text">Logika Informatika <br>Ruang H.4.10</p>
                                <h5 class="card-title">14:10 - 15:50</h5>
                                <p class="card-text">Basis Data (Teori) <br>Ruang H.5.2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-warning">Jumat</div>
                            <div class="card-body">
                                <h5 class="card-title">10:20 - 12:00</h5>
                                <p class="card-text">Pemrograman Berbasis Web (Praktek) <br>Ruang D.2.J</p>
                                <h5 class="card-title">14:10 - 15:50</h5>
                                <p class="card-text">Basis Data (Paktek) <br>Ruang D.3.M</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-info">Sabtu</div>
                            <div class="card-body">
                                <p class="card-text">Tidak ada jadwal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header text-white bg-black">Minggu</div>
                            <div class="card-body">
                                <p class="card-text">Tidak ada jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profile" class="py-5">
        <div class="container text-center my-5">
            <h3>Profil Mahasiswa</h3>
            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-md-3 mb-3 my-5 text-center">
                    <img src="assets/fotoku.jpg" alt="" class="profile-image rounded-circle shadow">
                </div>
                <div class="col-md-5 mx-5">
                    <div class="card profile-card shadow-md p-3">
                        <div class="card-body bg-white">
                            <h4 class="card-title bg-white">Fauzan Arif P</h4>
                            <p class="opacity-75 bg-white">Mahasiswa Teknik Informatika</p>
                            <table class="table table-borderless profile-table">
                                <tr>
                                    <td class="text-end">NIM</td>
                                    <td class="text-start">: A11.2023.15477</td>
                                </tr>
                                <tr>
                                    <td class="text-end">Program Studi</td>
                                    <td class="text-start">: Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <td class="text-end">Email</td>
                                    <td class="text-start">: 111202315477@mhs.dinus.ac.id</td>
                                </tr>
                                <tr>
                                    <td class="text-end">Telepon</td>
                                    <td class="text-start">: +62 851 5637 4245</td>
                                </tr>
                                <tr>
                                    <td class="text-end">Alamat</td>
                                    <td class="text-start">: Jl. Tandang Ijen 12, Semarang</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-4 text-center">
        <div class="container d-flex flex-column justify-content-center">
            <div class="row gy-3">
                <div class="col-12 col-lg-3">© 2024 / Fauzan Prayogi</div>
                <div class="col-lg-6"></div>
                <div class="col-12 col-lg-3">
                    <a href="https://www.instagram.com/fauzan_arif05/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://github.com/fauzanarif05" target="_blank"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/fauzan-arif-060704283/" target="_blank"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

    <script>
        var icon = document.getElementById("icon");
        icon.onclick = function() {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")) {
                icon.src = "assets/sun.png";
            } else {
                icon.src = "assets/moon.png";
            }
        }
    </script>
</body>

</html>