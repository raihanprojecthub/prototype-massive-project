  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header.php"; ?>

  <!-- Tambah Section Start -->
  <section id="tambah" class="d-flex justify-content-center align-items-center">
    <div class="border shadow p-5 bg-body-tertiary rounded">
      <!-- Header Halaman -->
      <div class="text-center mb-5">
        <h1 class="fs-2">Daftar Paket Tersedia</h1>
      </div>
      <div class="d-flex gap-5">
        <a href="cuci-kiloan.php" class="border shadow p-3 bg-body-tertiary rounded text-decoration-none">
          <img src="img/cuci_komplit.png" alt="" width="300px">
          <span class="d-block text-center fs-4 fw-bold text-black">Cuci Kiloan</span>
        </a>
        <a href="cuci-satuan.php" class="border shadow p-3 bg-body-tertiary rounded text-decoration-none">
          <img src="img/kemeja.png" alt="" width="300px">
          <span class="d-block text-center fs-4 fw-bold text-black">Cuci Satuan</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Tambah Section End -->

  <!-- Footer Start -->
  <footer class="bg-primary p-3 fixed-bottom">
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