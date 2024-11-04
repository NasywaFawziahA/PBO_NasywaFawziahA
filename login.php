<?php
session_start();
include('koneksi.php');
$db = new database();
 
// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    // Menggunakan prepared statement untuk keamanan
    $stmt = mysqli_prepare($db->koneksi, "SELECT * FROM user WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
 
    if ($row = mysqli_fetch_assoc($result)) {
        // Verifikasi password
        if ($row['password'] === $password) {  // Jika tidak menggunakan hashing
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect ke halaman daftar barang
            exit();
        } else {
            $error = "Username atau password salah.";
        }
    } else {
        $error = "Username atau password salah.";
    }
}
?>
 
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
        <input type="reset" value="Reset"> <!-- Tombol reset -->
    </form>
</body>
</html>