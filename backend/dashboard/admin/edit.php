<?php
require '../../config/db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM paket WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Paket</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">

  <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Paket</h1>

    <form method="POST" action="process-edit.php">

      <input type="hidden" name="id" value="<?= $data['id'] ?>">

      <label class="block font-semibold mb-1">Nama Paket</label>
      <input type="text" name="nama" required
        value="<?= $data['nama'] ?>"
        class="w-full border p-2 rounded mb-4"/>

      <label class="block font-semibold mb-1">Harga</label>
      <input type="number" name="harga" required
        value="<?= $data['harga'] ?>"
        class="w-full border p-2 rounded mb-4"/>

      <label class="block font-semibold mb-1">Deskripsi</label>
      <textarea name="deskripsi" rows="4"
        class="w-full border p-2 rounded mb-4"><?= $data['deskripsi'] ?></textarea>

      <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
        Update
      </button>
    </form>

    <a href="index.php" class="block mt-4 text-gray-600 hover:underline">← Kembali</a>
  </div>

</body>
</html>
