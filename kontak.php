  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header.php"; ?>


  <!-- Tentang Kami Section Start -->
  <section id="tentang" class="py-5">
    <div class="container">
      <div class="login-container">
      <div class="login-card">
        <img src="img/costumer-service.jpg" alt="Gambar Login" width="1000px">
        <div class="login-form">
          <h2>Hubungi Kami</h2>
          <form>
            <label for="username">Email:</label>
            <input type="text" id="email" name="" placeholder="Masukkan email">

            <label for="username">Subject:</label>
            <input type="text" id="subject" name="" placeholder="Masukkan subject">

            <label for="pesan">Pesan:</label>
            <textarea name="" id="" cols="30" rows="4" placeholder="Masukkan pesan"></textarea>

            <a href="admin/dashboard.html" class="button1">Kirim</a>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Tentang Kami Section End -->

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