<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Pembelian | Sistem Penjualan Drone</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('produk') }}">Penjualan Drone</a>
    <div class="d-flex">
      <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" 
                 class="img-fluid rounded shadow">
        </div>

        <div class="col-md-7">
            <h2>{{ $detail['nama'] }}</h2>
            <h4 class="text-success">{{ $detail['harga'] }}</h4>
            <p class="mt-3">{{ $detail['deskripsi'] }}</p>

            <div class="mt-4">
                <button class="btn btn-dark me-2">Konfirmasi Pembelian Drone</button>
                <a href="{{ route('produk') }}" class="btn btn-outline-secondary">
                    Kembali ke Daftar Drone
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="text-center text-muted mt-5 mb-3">
    <small>&copy; {{ date('Y') }} Sistem Penjualan Drone | Semua Hak Dilindungi</small>
</footer>

</body>
</html>