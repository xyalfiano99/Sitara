<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: ../../../pages/login.php");
    exit();
}

require '../../config/db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM paket WHERE id=$id");

header("Location: index.php");
exit();
?>
