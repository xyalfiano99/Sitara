<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-blue-600 text-white p-4 shadow">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold">Dashboard User</h1>
      <button class="bg-red-500 px-4 py-1 rounded">Logout</button>
    </div>
  </nav>

  <div class="container mx-auto mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- STATUS LANGGANAN -->
    <div class="bg-white p-5 rounded-xl shadow">
      <h2 class="text-lg font-semibold mb-3">Status Langganan</h2>
      <p class="text-gray-700">Paket Aktif: <span class="font-bold text-blue-600">Fiber 50 Mbps</span></p>
      <p class="text-gray-700 mt-2">Masa Berlaku: <span class="font-semibold">12 Jan 2026</span></p>
      <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Perpanjang Paket</button>
    </div>

    <!-- TAGIHAN -->
    <div class="bg-white p-5 rounded-xl shadow">
      <h2 class="text-lg font-semibold mb-3">Tagihan Bulanan</h2>
      <p class="text-gray-700">Jumlah Tagihan: <span class="font-bold">Rp 250.000</span></p>
      <p class="text-gray-700">Jatuh Tempo: <span class="font-semibold">05 Februari 2026</span></p>
      <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded">Bayar Sekarang</button>
    </div>

    <!-- HISTORI PEMBAYARAN -->
    <div class="bg-white p-5 rounded-xl shadow">
      <h2 class="text-lg font-semibold mb-3">Histori Pembayaran</h2>
      <ul class="text-gray-700 space-y-2">
        <li class="flex justify-between border-b pb-1">
          <span>Pembayaran Januari</span>
          <span class="font-semibold text-green-600">Berhasil</span>
        </li>
        <li class="flex justify-between border-b pb-1">
          <span>Pembayaran Desember</span>
          <span class="font-semibold text-green-600">Berhasil</span>
        </li>
        <li class="flex justify-between border-b pb-1">
          <span>Pembayaran November</span>
          <span class="font-semibold text-green-600">Berhasil</span>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>