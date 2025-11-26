<?php
// login.php revised version with your design + backend integration
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sitaranet - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gray-100 text-gray-800 font-sans min-h-screen">
    <!-- NAVBAR -->
    <nav class="bg-gray-900 text-white fixed w-full top-0 left-0 shadow-md z-50">
      <div class="container mx-auto flex items-center justify-between p-4">

        <!-- LOGO -->
        <a href="../index.html" class="text-2xl font-bold italic">Sitara<span class="text-blue-500">net</span></a>

        <!-- MENU -->
        <div class="flex items-center space-x-4">

          <!-- DROPDOWN PAKET -->
          <div class="relative inline-block text-left dropdown">
            <button
              type="button"
              class="inline-flex justify-center gap-x-1.5 rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-700 hover:bg-gray-800"
            >
              Paket
              <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>

            <div class="dropdown-menu hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="py-1">
                <a href="paket/residential.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Residential</a>
                <a href="paket/apartment.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Apartemen</a>
                <a href="paket/business.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis</a>
              </div>
            </div>
          </div>

          <!-- MENU LAIN -->
          <a href="area.html" class="hover:text-blue-500">Area</a>
          <a href="contact.html" class="hover:text-blue-500">Kontak</a>
          <a href="login.php" class="hover:text-blue-500">Login</a>
          <a href="register.php" class="hover:text-blue-500">Register</a>
        </div>
      </div>
    </nav>

    <!-- CONTENT -->
    <section class="container mx-auto py-12">
      <h1 class="text-3xl font-bold mb-4 pt-10">Login</h1>

      <!-- UPDATED: action menuju backend login -->
      <!-- UPDATED: method POST -->

      <form action="../backend/auth/login.php" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        <label for="username" class="block mb-2 text-lg font-semibold">Username:</label>
        <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded-lg mb-4" required />

        <label for="password" class="block mb-2 text-lg font-semibold">Password:</label>
        <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg mb-4" required />

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</button>
      </form>
    </section>

    <script src="../js/script.js"></script>
  </body>
</html>