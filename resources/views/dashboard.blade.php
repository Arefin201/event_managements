<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Admin Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <!-- Wrapper -->
  <div class="min-h-screen flex">

    <!-- Sidebar -->
    <div id="sidebar"
      class="bg-blue-800 text-white w-64 p-4 space-y-6 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-300 ease-in-out z-50">
      <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <button id="close-sidebar" class="md:hidden text-white text-2xl font-bold">
          &times;
        </button>
      </div>
      <nav class="space-y-2">
        <a href="#" class="block py-3 px-6 hover:bg-blue-700"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
        <a href="#" class="block py-3 px-6 hover:bg-blue-700"><i class="fas fa-users mr-2"></i> Users</a>
        <a href="#" class="block py-3 px-6 hover:bg-blue-700"><i class="fas fa-box mr-2"></i> Products</a>
        <a href="#" class="block py-3 px-6 hover:bg-blue-700"><i class="fas fa-chart-bar mr-2"></i> Reports</a>
        <a href="#" class="block py-3 px-6 hover:bg-blue-700"><i class="fas fa-cog mr-2"></i> Settings</a>

        <a href="#" class="block py-2 px-6 hover:bg-blue-700"><i class="fas fa-home mr-2"></i>Home</a>
        <a href="#" class="block py-2 px-6 hover:bg-blue-700"><i class="fas fa-users mr-2"></i>Users</a>
        <a href="#" class="block py-2 px-6 hover:bg-blue-700"><i class="fas fa-cog mr-2"></i>Settings</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

      <!-- Top Navbar -->
      <header class="bg-white shadow p-4 flex items-center justify-between">
        <!-- Sidebar toggle -->
        <button id="open-sidebar" class="md:hidden text-blue-800 text-2xl">
          &#9776;
        </button>
        <!-- Login/Logout -->
        <div class="flex items-center gap-4 ml-auto">
          <a href="login.html" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600 transition">Login</a>
          <a class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 transition">Logout</a>
          <span class="hidden md:inline text-gray-700 font-semibold">Admin</span>
          <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full border-2 border-blue-500" alt="User" />
        </div>
      </header>

      <!-- Page Content -->
      <main class="p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-6">Dashboard Overview</h1>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <div class="flex items-center justify-between">
              <div>
                <h2 class="text-sm text-gray-500">Users</h2>
                <p class="text-xl font-bold text-gray-700">1,024</p>
              </div>
              <i class="fas fa-users text-blue-600 text-2xl"></i>
            </div>
          </div>

          <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <div class="flex items-center justify-between">
              <div>
                <h2 class="text-sm text-gray-500">Orders</h2>
                <p class="text-xl font-bold text-gray-700">872</p>
              </div>
              <i class="fas fa-shopping-cart text-green-600 text-2xl"></i>
            </div>
          </div>

          <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <div class="flex items-center justify-between">
              <div>
                <h2 class="text-sm text-gray-500">Revenue</h2>
                <p class="text-xl font-bold text-gray-700">$12,340</p>
              </div>
              <i class="fas fa-dollar-sign text-yellow-600 text-2xl"></i>
            </div>
          </div>

          <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <div class="flex items-center justify-between">
              <div>
                <h2 class="text-sm text-gray-500">Reports</h2>
                <p class="text-xl font-bold text-gray-700">128</p>
              </div>
              <i class="fas fa-file-alt text-red-600 text-2xl"></i>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Sidebar Toggle Script -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('open-sidebar');
    const closeBtn = document.getElementById('close-sidebar');

    if (openBtn && closeBtn && sidebar) {
      openBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
      });

      closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
      });
    }
  </script>
</body>

</html>