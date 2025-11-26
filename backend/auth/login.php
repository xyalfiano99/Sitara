<?php
session_start();
require '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    if (password_verify($password, $data['password'])) {
        // Simpan session
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        // Arahkan berdasar role
        if ($data['role'] == 'admin') {
            header("Location: ../../pages/dashboard-admin.php");
        } else {
            header("Location: ../../pages/dashboard-user.php");
        }
        exit;
    }
}

// Jika gagal
header("Location: ../../pages/login.php?error=1");
exit;
?>