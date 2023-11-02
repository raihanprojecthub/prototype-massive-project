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
    .menu-container {
      display: flex;
      list-style: none;
    }

    .menu-item {
      margin: 12px 0px 0px 32px;
      font-size: 18px;
    }

    .dropdown-nav-menu {
      width: 150px;
      position: absolute;
      top: 40px;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #ffffff;
      font-size: 16px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
    }

    .dropdown-nav-item {
      display: block;
      text-decoration: none;
      color: #000000;
      margin-bottom: 5px;
    }

    .hidden-nav {
      display: none;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-card {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .login-card img {
      max-width: 50%;
      height: auto;
    }

    .login-form {
      flex: 1;
      padding: 20px;
      text-align: center;
    }

    h2 {
      margin-top: 0;
    }

    form {
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .button1 {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    p {
      margin-top: 10px;
    }
  </style>
</head>
<body>

<!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top py-3">
    <div class="container">
      <!-- Logo dan judul halaman -->
      <a class="navbar-brand fs-4 fw-bold fst-italic text-white" href="#"><i class="fa-solid fa-bolt me-1"></i>LaundryPro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-2">
          <!-- Navigasi Home -->
          <li class="nav-item">
            <a class="nav-link fs-5 text-white" href="beranda.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-white" href="tentang-kami.php">Tentang</a>
          </li>
          <!-- Navigasi Pemesanan -->
          <li class="nav-item">
            <a class="nav-link fs-5 text-white" href="paket.php">Pemesanan</a>
          </li>
          <!-- Navigasi Riwayat -->
          <li class="nav-item">
            <a class="nav-link fs-5 text-white" href="riwayat.php">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 text-white" href="kontak.php">Kontak</a>
          </li>
          <!-- Navigasi Login -->
          <li class="nav-item" style="position: relative;">
            <a class="nav-link fs-5 text-white dropdown-menu-item" href="#">Profile <i class="fa-solid fa-caret-down"></i></a>
            <div class="dropdown-nav-menu hidden-nav">
              <a class="dropdown-nav-item" href=""><i class="fa fa-gear"></i> Pengaturan</a>
              <a class="dropdown-nav-item" href="index.php"><i class="fa fa-sign-out"></i> Keluar</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->