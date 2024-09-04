<?php
// Inisialisasi session
session_start();
include "koneksi.php";

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan kredensial dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kredensial di database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Memeriksa apakah hasil query menghasilkan baris data
    if ($result->num_rows == 1) {
        // Jika cocok, set session dan redirect ke halaman dashboard atau halaman yang diinginkan
        $_SESSION['username'] = $username;
        header("Location: admin/db.php");
        exit;
    } else {
        // Jika kredensial tidak cocok, tampilkan pesan error
        $error = "Username atau password salah";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/style4.css">
</head>

<body>
    <div class="login-container" style="margin:25px">
        <img src="https://cdn.icon-icons.com/icons2/2644/PNG/512/person_fill_icon_159457.png" alt="Login Admin">
        <p class="login-text">Login Admin</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-container">
                <input type="text" name="username" placeholder="Username" required>
                <img class="icon" src="https://cdn.icon-icons.com/icons2/2644/PNG/512/person_fill_icon_159457.png" alt="Username">
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Password" required>
                <img class="icon" src="./assets/hide.png" alt="Pass Ikon">
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>

        <div class="footer-text">
            <center>
                <a href="index.php">Landing Page</a>
            </center>
        </div>

        <?php
        // Tampilkan pesan error jika ada
        if (isset($error)) {
            echo '<div class="error">' . $error . '</div>';
        }
        ?>
    </div>
</body>

</html>