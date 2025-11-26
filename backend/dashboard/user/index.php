<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../../pages/login.php");
    exit();
}

if ($_SESSION['role'] !== "user") {
    echo "Akses ditolak! Halaman ini hanya untuk USER.";
    exit();
}

require '../../config/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?></h1>

    <p>Ini adalah halaman dashboard untuk USER.</p>

    <a href="../../../backend/auth/logout.php">Logout</a>
</body>
</html>
