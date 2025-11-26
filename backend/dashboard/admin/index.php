<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: ../../../pages/login.php");
    exit();
}

require '../../config/db.php';
$result = $conn->query("SELECT * FROM paket ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Kelola Paket</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

  <div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-gray-700 mb-6">Kelola Paket Internet</h1>

    <a 
      href="create.php" 
      class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
    >
      + Tambah Paket
    </a>

    <div class="overflow-x-auto mt-6">
      <table class="w-full bg-white border border-gray-300 rounded-lg shadow">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Nama Paket</th>
            <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = $result->fetch_assoc()) : ?>
          <tr class="border-b hover:bg-gray-100">
            <td class="p-3"><?= $row['id'] ?></td>
            <td class="p-3 font-semibold"><?= $row['nama'] ?></td>
            <td class="p-3">Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
            <td class="p-3 flex gap-3">
              <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
              <a 
                href="delete.php?id=<?= $row['id'] ?>"
                onclick="return confirm('Hapus paket ini?')"
                class="text-red-600 hover:underline"
              >
                Hapus
              </a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
