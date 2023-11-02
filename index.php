<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaundryPro</title>
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="library/css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="library/css/style.css">
  <style>
    .login-dropdown {
      position: relative;
      display: inline-block;
    }

    .login-button {
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      border: solid 1px black;
    }

    .login-button:hover { 
      background-color: transparent;
      border: solid 1px white;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 160px;
      border-radius: 5px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #444;
    }

    .hidden-nav {
      display: block;
    }
  </style>
</head>
<body>
  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header-landing.php"; ?>

  <!-- Hero Section Start -->
  <section class="hero" id="hero">
    <div class="content">
      <!-- Logo website laundry -->
      <img src="img/logo-laundrypro.png" alt="Logo Laundry" width="500px">
      <!-- Deskripsi -->
      <p class="mb-4 fw-medium text-secondary">Anda sibuk? Cucian numpuk! Percayakan kepada kami, cucian anda pasti bersih, rapih dan nyaman saat beraktifitas.</p>
      <!-- Tombol Pesan -->
      <a href="login-pelanggan.html" class="btn btn-lg btn-primary">Pesan Sekarang</a>
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
  <script>
    const dropdownMenu = document.querySelector('.login-button');
    const dropdownItem = document.querySelector('.dropdown-content');

    dropdownMenu.addEventListener('click', function () {
        dropdownItem.classList.toggle('hidden-nav');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>