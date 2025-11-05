<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | Sistem Penjualan Drone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('beranda') }}">Penjualan Drone</a>
    <div class="d-flex">
      <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
    </div>
  </div>
</nav>

<div class="container text-center mt-5">
    <h1>Selamat Datang di Sistem Penjualan Drone Online</h1>
    <p class="lead">Temukan berbagai jenis drone terbaik dengan harga kompetitif dan fitur canggih.</p>
    <img src="https://cdn-icons-png.flaticon.com/512/3145/3145757.png" 
    width="220" alt="Drone Icon" class="mt-4">
</div>

<footer class="text-center text-muted mt-5 mb-3">
    <small>&copy; {{ date('Y') }} Sistem Penjualan Drone | Semua Hak Dilindungi</small>
</footer>

</body>
</html>