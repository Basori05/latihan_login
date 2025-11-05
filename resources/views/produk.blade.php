<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk Drone | Sistem Penjualan Drone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #e0f7fa, #ffffff);
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    footer {
      background-color: #7d3b3bff;
      color: #48949eff;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Sistem Penjualan Drone</a>
    <div class="d-flex">
      <a href="#" class="btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Daftar Drone Terbaik Kami</h2>
  <p class="text-center text-muted mb-5">Pilih drone dengan performa tinggi dan fitur canggih sesuai kebutuhanmu.</p>

  <div class="row justify-content-center">
    @php
      $produk = [
        ['id' => 1, 'nama' => 'DJI Mavic 3', 'harga' => 'Rp 24.000.000', 'foto' => 'drone 1.jpg', 'deskripsi' => 'Drone profesional dengan kamera Hasselblad 20MP dan waktu terbang 46 menit.'],
        ['id' => 2, 'nama' => 'DJI Mini 3 Pro', 'harga' => 'Rp 12.000.000', 'foto' => 'drone 2.jpg', 'deskripsi' => 'Kamera 4K HDR, ringan, ideal untuk travel dan aerial footage.'],
        ['id' => 3, 'nama' => 'Autel Evo Nano+', 'harga' => 'Rp 10.000.000', 'foto' => 'drone 3.jpg', 'deskripsi' => 'Mini drone dengan sensor RYYB untuk hasil foto tajam.'],
        ['id' => 4, 'nama' => 'DJI Air 2S', 'harga' => 'Rp 15.500.000', 'foto' => 'drone 4.jpg', 'deskripsi' => 'Kamera 1 inci, mampu merekam hingga 5.4K, dengan fitur obstacle sensing.'],
        ['id' => 5, 'nama' => 'Potensic Dreamer Pro', 'harga' => 'Rp 8.000.000', 'foto' => 'drone5.jpg', 'deskripsi' => 'Drone GPS dengan kamera 4K UHD dan stabilisasi 3-axis.'],
        ['id' => 6, 'nama' => 'FIMI X8 SE 2022', 'harga' => 'Rp 9.500.000', 'foto' => 'drone 7.jpg', 'deskripsi' => 'Drone lipat dari Xiaomi dengan fitur canggih dan jarak 8 km.'],
        ['id' => 7, 'nama' => 'Holy Stone HS720E', 'harga' => 'Rp 7.800.000', 'foto' => 'drone 8.jpg', 'deskripsi' => 'Drone GPS dengan kamera 4K EIS dan waktu terbang 46 menit.'],
        ['id' => 8, 'nama' => 'Ryze Tello', 'harga' => 'Rp 2.000.000', 'foto' => 'drone 9.jpg', 'deskripsi' => 'Drone mini edukatif, dikontrol lewat smartphone, cocok untuk pemula.'],
        ['id' => 9, 'nama' => 'DJI Avata', 'harga' => 'Rp 18.000.000', 'foto' => 'dr0ne 10.jpg', 'deskripsi' => 'FPV drone dengan kontrol presisi dan sensasi terbang imersif.'],
      ];
    @endphp

    @foreach($produk as $item)
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm border-0">
          <img src="{{ asset('image/' . $item['foto']) }}" 
               class="card-img-top" 
               alt="{{ $item['nama'] }}" 
               style="height:200px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $item['nama'] }}</h5>
            <p class="card-text text-success fw-bold">{{ $item['harga'] }}</p>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#detailModal{{ $item['id'] }}">
              Lihat Detail
            </button>
          </div>
        </div>
      </div>

      <!-- Modal Detail -->
      <div class="modal fade" id="detailModal{{ $item['id'] }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h5 class="modal-title">{{ $item['nama'] }}</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
              <img src="{{ asset('image/' . $item['foto']) }}" alt="{{ $item['nama'] }}" class="img-fluid mb-3 rounded">
              <p class="text-muted">{{ $item['deskripsi'] }}</p>
              <p class="fw-bold text-success">{{ $item['harga'] }}</p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <!-- Tombol Beli Sekarang -->
              <a href="https://wa.me/6281234567890?text=Halo%20admin,%20saya%20ingin%20beli%20{{ urlencode($item['nama']) }}%20seharga%20{{ urlencode($item['harga']) }}" 
                 target="_blank" 
                 class="btn btn-dark">
                Beli Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<footer class="text-center">
  <small>&copy; {{ date('Y') }} Sistem Penjualan Drone | Powered by Laravel</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
