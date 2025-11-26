<?php
require '../config/db.php';

// Ambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi sederhana
if (empty($username) || empty($email) || empty($password)) {
    header("Location: ../../pages/register.php?error=empty");
    exit();
}

// Cek apakah username sudah ada
$check = $conn->query("SELECT * FROM users WHERE username='$username' LIMIT 1");

if ($check->num_rows > 0) {
    header("Location: ../../pages/register.php?error=userexists");
    exit();
}

// Hash password
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Default role = user
$role = "user";

// Insert ke database
$sql = "INSERT INTO users (username, email, password, role)
        VALUES ('$username', '$email', '$hashed', '$role')";

if ($conn->query($sql) === TRUE) {
    
    // Tidak auto login → cukup redirect ke login
    header("Location: ../../pages/login.php?success=registered");
    exit();

} else {
    header("Location: ../../pages/register.php?error=failed");
    exit();
}
?>
