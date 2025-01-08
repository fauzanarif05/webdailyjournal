<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

if (isset($_SESSION['username'])) {
    header("location:admin.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
    $password = md5($_POST['password']);

    //prepared statement
    $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

    //parameter binding 
    $stmt->bind_param("ss", $username, $password); //username string dan password string

    //database executes the statement
    $stmt->execute();

    //menampung hasil eksekusi
    $hasil = $stmt->get_result();

    //mengambil baris dari hasil sebagai array asosiatif
    $row = $hasil->fetch_array(MYSQLI_ASSOC);

    //check apakah ada baris hasil data user yang cocok
    if (!empty($row)) {
        //jika ada, simpan variable username pada session
        $_SESSION['username'] = $row['username'];

        //mengalihkan ke halaman admin
        header("location:admin.php");
    } else {
        //jika tidak ada (gagal), alihkan kembali ke halaman login
        $_SESSION['error_msg'] = "Incorrect Password!";
        header("location:login.php");
    }

    //menutup koneksi database
    $stmt->close();
    $conn->close();
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #1d2733;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .login-container {
                background-color: #2b3a4a;
                padding: 30px 50px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
                width: 350px;
            }

            .login-form {
                text-align: center;
            }

            .login-form h2 {
                color: #ffffff;
                margin-bottom: 20px;
            }

            .input-group {
                margin-bottom: 15px;
                text-align: left;
            }

            .input-group label {
                display: block;
                color: #ffffff;
                margin-bottom: 5px;
            }

            .input-group input {
                width: 100%;
                padding: 12px;
                border-radius: 5px;
                border: none;
                outline: none;
                background-color: #3a4a5b;
                color: #ffffff;
            }

            .toggle-password {
                position: absolute;
                top: 65%;
                right: 10px;
                transform: translateY(-50%);
                cursor: pointer;
            }

            .submit-btn {
                width: 100%;
                padding: 12px;
                background-color: #21d4fd;
                color: #ffffff;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0 0 10px rgba(33, 212, 253, 0.6);
                transition: all 0.3s ease-in-out;
            }

            .submit-btn:hover {
                background-color: #1bbddc;
                box-shadow: 0 0 15px rgba(27, 189, 220, 0.8);
            }
        </style>
    </head>

    <body>
        <div class="login-container">
            <form class="login-form" action="" method="POST">
                <h2>Login</h2>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <img id="togglePassword" class="toggle-password" src="assets/view.png" alt="Toggle Password" width="20">
                </div>
                <?php
                if (isset($_SESSION['error_msg'])) {
                    echo '<div class="alert alert-danger">' . $_SESSION['error_msg'] . '</div>';
                    unset($_SESSION['error_msg']);
                }
                ?>
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>

        <script>
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');

            togglePassword.addEventListener('click', () => {
                // Toggle the type attribute
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);

                // Toggle the icon
                const icon = type === 'password' ? 'assets/view.png' : 'assets/close-eye.png';
                togglePassword.setAttribute('src', icon);
            });
        </script>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

    </html>

<?php
}
?>