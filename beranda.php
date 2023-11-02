  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header.php"; ?>

  <!-- Hero Section Start -->
  <section class="hero" id="hero">
    <div class="content">
      <!-- Logo website laundry -->
      <img src="img/logo-laundrypro.png" alt="Logo Laundry" width="500px">
      <!-- Deskripsi -->
      <p class="mb-4 fw-medium text-secondary">Anda sibuk? Cucian numpuk! Percayakan kepada kami, cucian anda pasti bersih, rapih dan nyaman saat beraktifitas.</p>
      <!-- Tombol Pesan -->
      <a href="pemesanan.php" class="btn btn-lg btn-primary">Pesan Sekarang</a>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Service Section Start -->
  <section id="service" class="py-5" style="margin-bottom: 220px;">
    <div class="container">
      <h1 class="fs-1 fw-bold text-center" style="margin-bottom: 80px;">Layanan Kami</h1>
      <div class="d-flex justify-content-between">
        <h2 class="fs-2 p-4 bg-primary rounded-4 text-white">Antar - Jemput</h2>
        <h2 class="fs-2 p-4 bg-primary rounded-4 text-white">Laundry Kiloan</h2>
        <h2 class="fs-2 p-4 bg-primary rounded-4 text-white">Laundry Satuan</h2>
      </div>
    </div>
  </section>
  <!-- Service Section End -->

  <!-- Price Section Start -->
  <section id="price" class="py-5 mb-5">
    <div class="container">
      <h1 class="fs-1 fw-bold text-center mb-5">Daftar Harga</h1>
      <center><img src="img/daftar-harga.jpg" alt="" width="500px"></center>
    </div>
  </section>
  <!-- Price Section End -->

  <!-- Footer Start -->
  <footer class="bg-primary p-3">
    <h1 class="text-center fs-6 text-white">© 2023 Raihan Ramadhan. All rights reserved.</h1>
  </footer>
  <!-- Footer End -->
  
  <!-- JS Bootsrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
    const dropdownMenu = document.querySelector('.dropdown-menu-item');
    const dropdownItem = document.querySelector('.dropdown-nav-menu');

    dropdownMenu.addEventListener('click', function () {
        dropdownItem.classList.toggle('hidden-nav');
    });
  </script>
</body>
</html>