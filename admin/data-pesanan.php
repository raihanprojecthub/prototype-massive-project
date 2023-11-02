<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Data Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
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
            <h1 class="mt-4">Cuci Kiloan</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">Pesanan</li>
              <li class="breadcrumb-item active">Cuci Kiloan</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                <table id="datatablesSimple">
                  <a href="admin-tambah.php" class="btn btn-primary mb-3"><i class="fa-solid fa-user-plus pe-1"></i>Tambah Pesanan</a>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Paket</th>
                      <th>Status Pesanan</th>
                      <th>Status Pembayaran</th>
                      <th>Berat (Kg)</th>
                      <th>Harga Ongkir</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Paket</th>
                      <th>Status Pesanan</th>
                      <th>Status Pembayaran</th>
                      <th>Berat (Kg)</th>
                      <th>Harga Ongkir</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $file = "../data/data.json";
                      // Mengambil data dari data.json
                      $dataJSON = file_get_contents($file);
                      // Decode data json kedalam data array php
                      $dataLaundry = json_decode($dataJSON, true);

                      // Varibel id dimulai dari angka 0
                      $id = 0;
                      // Varibel nomor dimulai dari angka 1
                      $nomor = 1;
                      // Mencetak data Laundry dengan menggunakan foreach
                      foreach($dataLaundry as $hasil){
                        echo "
                          <tr>
                            <td>".$nomor++."</td>
                            <td>".$hasil['nama']."</td>
                            <td>".$hasil['paket']."</td>
                            <td>".$hasil['status_pesanan']."</td>
                            <td>".$hasil['status_pembayaran']."</td>
                            <td>".$hasil['berat']."</td>
                            <td>".$hasil['harga_ongkir']."</td>
                            <td>".$hasil['total_harga']."</td>
                            <td>
                              <a href='proses.php?nomor=".$id."' class='btn btn-success btn-sm'>Proses</a>
                              <a href='admin-detail.php?nomor=".$id."' class='btn btn-warning btn-sm'>Detail</a>
                              <a onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")' 
                              href='hapus.php?index=".$id."' class='btn btn-danger btn-sm'>Hapus</a>
                            </td>
                          </tr>
                        ";
                        // Variabel id bertambah 1 setiap data yang masuk
                        $id++;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Cuci Satuan</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">Petugas</li>
              <li class="breadcrumb-item active">Cuci Satuan</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                <table id="datatablesSimpel" id="example">
                  <a href="admin-tambah-satuan.php" class="btn btn-primary mb-3"><i class="fa-solid fa-user-plus pe-1"></i>Tambah Pesanan</a>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Paket</th>
                      <th>Status Pesanan</th>
                      <th>Status Pembayaran</th>
                      <th>Jumlah Per/Pcs</th>
                      <th>Harga Ongkir</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Paket</th>
                      <th>Status Pesanan</th>
                      <th>Status Pembayaran</th>
                      <th>Jumlah Per/Pcs</th>
                      <th>Harga Ongkir</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $file = "../data/satuan.json";
                      // Mengambil data dari data.json
                      $dataJSON = file_get_contents($file);
                      // Decode data json kedalam data array php
                      $dataLaundry = json_decode($dataJSON, true);

                      // Varibel id dimulai dari angka 0
                      $id = 0;
                      // Varibel nomor dimulai dari angka 1
                      $nomor = 1;
                      // Mencetak data Laundry dengan menggunakan foreach
                      foreach($dataLaundry as $hasil){
                        echo "
                          <tr>
                            <td>".$nomor++."</td>
                            <td>".$hasil['nama']."</td>
                            <td>".$hasil['paket']."</td>
                            <td>".$hasil['status_pesanan']."</td>
                            <td>".$hasil['status_pembayaran']."</td>
                            <td>".$hasil['per_pcs']."</td>
                            <td>".$hasil['harga_ongkir']."</td>
                            <td>".$hasil['total_harga']."</td>
                            <td>
                              <a href='proses-satuan.php?nomor=".$id."' class='btn btn-success btn-sm'>Proses</a>
                              <a href='admin-detail-satuan.php?nomor=".$id."' class='btn btn-warning btn-sm'>Detail</a>
                              <a onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")' 
                              href='hapus-satuan.php?index=".$id."' class='btn btn-danger btn-sm'>Hapus</a>
                            </td>
                          </tr>
                        ";
                        // Variabel id bertambah 1 setiap data yang masuk
                        $id++;
                      }
                    ?>
                  </tbody>
                </table>
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
    <script>
      window.addEventListener('DOMContentLoaded', event => {
          // Simple-DataTables
          // https://github.com/fiduswriter/Simple-DataTables/wiki

          const datatablesSimpel = document.getElementById('datatablesSimpel');
          if (datatablesSimpel) {
            new simpleDatatables.DataTable(datatablesSimpel);
          }
        });
    </script>
  </body>
</html>