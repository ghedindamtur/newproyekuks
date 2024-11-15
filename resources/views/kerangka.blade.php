<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('include.link') <!-- Link ke file CSS dan lainnya -->
  </head>
  
  <body>
    <!-- Header -->
    <header class="header">
      @include('include.navbar') <!-- Navbar -->
    </header>

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation -->
      @include('include.sidebar') <!-- Sidebar -->

      <!-- Page Content -->
      <div class="page-content">
        <!-- Konten Utama -->
        <main class="container">
          @yield('content') <!-- Bagian konten utama halaman akan dimasukkan di sini -->
        </main>

        <!-- Footer -->
        @include('include.footer') <!-- Footer -->
      </div>
    </div>

    <!-- JavaScript files -->
    @include('include.script') <!-- Script JavaScript -->
  </body>
</html>
