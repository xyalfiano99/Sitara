<?php
// dashboard-admin.php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../pages/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Sitaranet</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-gray-900 text-white min-h-screen p-6 shadow-lg">
    <h2 class="text-2xl font-bold italic mb-6">Sitara<span class="text-blue-500">net</span></h2>

    <ul class="space-y-4">
      <li><a href="#" class="block hover:text-blue-400">Dashboard</a></li>
      <li><a href="#" class="block hover:text-blue-400">Kelola User</a></li>
      <li><a href="#" class="block hover:text-blue-400">Kelola Paket</a></li>
      <li><a href="#" class="block hover:text-blue-400">Laporan</a></li>
      <li><a href="../backend/auth/logout.php" class="block hover:text-red-400 mt-6">Logout</a></li>
    </ul>
  </aside>

  <!-- CONTENT -->
  <main class="flex-1 p-8">
    <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="p-6 bg-white rounded-xl shadow-md">
        <h2 class="text-xl font-semibold">Total User</h2>
        <p class="text-3xl font-bold text-blue-600 mt-2">0</p>
      </div>

      <div class="p-6 bg-white rounded-xl shadow-md">
        <h2 class="text-xl font-semibold">Total Paket</h2>
        <p class="text-3xl font-bold text-blue-600 mt-2">0</p>
      </div>

      <div class="p-6 bg-white rounded-xl shadow-md">
        <h2 class="text-xl font-semibold">Transaksi</h2>
        <p class="text-3xl font-bold text-blue-600 mt-2">0</p>
      </div>
    </div>
  </main>

</body>
</html>