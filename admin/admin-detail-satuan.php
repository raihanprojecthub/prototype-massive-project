<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Tambah Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <?php
      // Mengambil id nomor dari file index.php
      $id = $_GET['nomor'];

      // Mengambil dari data JSON
      $dataLaundry = file_get_contents('../data/satuan.json');
      $dataJson = json_decode($dataLaundry);

      // Mengubah id data JSON menjadi row
      $row = $dataJson[$id];
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3 fw-bold" href="index.html">LaundryPro</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-dark" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="../index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link text-white" href="dashboard.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
              </a>
              <div class="sb-sidenav-menu-heading">Kelola Pesanan</div>
              <a class="nav-link" href="data-pesanan.php">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-id-card"></i></div>
                Data Pesanan
              </a>
              <div class="sb-sidenav-menu-heading">Kelola Akun</div>
              <a class="nav-link" href="data-pelanggan.html">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Data Pelanggan
              </a>
              <a class="nav-link" href="data-karyawan.html">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                Data Karyawan
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Pesanan</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">Kelola Pesanan</li>
              <li class="breadcrumb-item active">Tambah Pesanan</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                <table class="table table-responsive table-light table-bordered table-hover border mb-4">
                  <tr class="table-dark">
                    <td colspan="2" class="fw-bold text-white">Costumer</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Nama</td>
                    <td><?php echo $row->nama; ?></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Nomor Telepon</td>
                    <td><?php echo $row->no_telepon; ?></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Alamat</td>
                    <td><?php echo $row->alamat; ?></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Jenis Paket</td>
                    <td><?php echo $row->paket; ?></td>
                  </tr>
                </table>

                <!-- Table Order -->
                <table class="table table-responsive table-light table-bordered table-hover border mb-4">
                  <tr class="table-dark">
                    <td colspan="4" class="fw-bold text-white">Order</td>
                  </tr>
                  <!-- Mencetak order -->
                  <tr class="">
                    <td class="fw-bold">Jumlah Per/Pcs</td>
                    <td class="fw-bold">Harga Paket</td>
                    <td class="fw-bold">Harga Ongkir</td>
                    <td class="fw-bold">Total Bayar</td>
                  </tr>
                  <tr>
                    <td><?php echo $row->per_pcs; ?></td>
                    <td>Rp. <?php echo $row->harga_paket; ?></td>
                    <td>Rp. <?php echo $row->harga_ongkir; ?></td>
                    <td>Rp. <?php echo $row->total_harga; ?></td>
                  </tr>
                  <tr>
                </table>
                <div class="d-flex gap-1">
                  <!-- Tombol kembali ke index.php dan button simpan -->
                  <a href="data-pesanan.php" class="btn btn-danger w-100">Kembali</a>
                  <?php 
                    echo "
                      <a href='../cetak.php?nomor=".$id."' class='btn btn-warning w-100' target='_blank'>Cetak</a>
                    ";
                  ?>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-center small">
              <div class="text-muted">Copyright &copy; 2023 LaundryPro All rights reserved</div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
