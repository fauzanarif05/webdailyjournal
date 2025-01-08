<?php
session_start();

include "koneksi.php";

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal | Admin</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="img/logo.png" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#"><span class="fs-2" style="font-family: Courgette">Fauzan's Diary</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=users">Users</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="col-md-3 mb-3 text-center">
                                <?php
                                // Pastikan koneksi ke database sudah terhubung dan sesi telah dimulai
                                $username = $_SESSION['username']; // Mengambil username dari session
                                $query = "SELECT foto FROM user WHERE username = ?";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param("s", $username); // Mengikat parameter username
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $row = $result->fetch_assoc();

                                // Cek apakah ada foto yang disimpan
                                if (!empty($row["foto"])) {
                                    $fotoPath = 'assets/' . $row["foto"];
                                    if (file_exists($fotoPath)) {
                                        // Tampilkan gambar jika file ditemukan
                                        echo '<img src="' . $fotoPath . '" alt="Profile" class="profile-image-top rounded-circle shadow">';
                                    } else {
                                        // Tampilkan default image jika file tidak ditemukan
                                        echo '<img src="assets/pp.png" alt="Default Profile" class="profile-image-top rounded-circle shadow">';
                                    }
                                } else {
                                    // Tampilkan default image jika kolom foto kosong
                                    echo '<img src="assets/pp.png" alt="Default Profile" class="profile-image-top rounded-circle shadow">';
                                }
                                ?>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item alert alert-danger" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
    <section id="content" class="p-5 m-5">
        <div class="container">
            <?php
            if (isset($_GET['page'])) {
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page']) ?></h4>
            <?php
                include($_GET['page'] . ".php");
            } else {
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
            <?php
                include("dashboard.php");
            }
            ?>
        </div>
    </section>
    <!-- content end -->
    <!-- footer begin -->
    <footer class="p-4 text-center footer fixed-bottom bg-white">
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
    <!-- footer end -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>