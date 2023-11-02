  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header.php"; ?>


  <!-- Tentang Kami Section Start -->
  <section id="tentang" class="py-5 mb-5" style="margin-top: 120px;">
    <div class="container">
      <h1 class="fs-1 fw-bold text-center mb-5">Tentang Kami</h1>
      <p class="text-center mb-3 fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga labore id laboriosam in voluptatum temporibus doloribus sed placeat, eos ipsam nisi, veritatis suscipit sunt? Optio ex placeat eaque alias adipisci?</p>
      <p class="text-center mb-5 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta impedit placeat sapiente ipsam modi id, ducimus voluptatibus illo, consequuntur rerum aspernatur delectus unde numquam et! Provident quidem voluptas blanditiis eaque veritatis delectus, repellat adipisci corrupti nesciunt, suscipit hic placeat quod!</p>
      <h2 class="fs-3 fw-bold text-center mb-5 text-primary">Apa yang kami tawarkan?</h2>
      <div class="d-flex justify-content-between mb-5">
        <div class="text-center">
          <h2 class="fs-4">Bersih & Higienis</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
        <div class="text-center">
          <h2 class="fs-4">Mesin Canggih</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
        <div class="text-center">
          <h2 class="fs-4">Proses Cepat</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div class="text-center">
          <h2 class="fs-4">Aneka Macam Pakaian</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
        <div class="text-center">
          <h2 class="fs-4">Menggunakan Detergent Terbaik</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
        <div class="text-center">
          <h2 class="fs-4">Dikerjakan dengan Profesional</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, pariatur?</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang Kami Section End -->

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