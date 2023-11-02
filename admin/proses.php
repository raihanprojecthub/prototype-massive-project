<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Data Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <?php
      // Mengambil id nomor dari file index.php
      $id = $_GET['nomor'];

      // Mengambil dari data JSON
      $dataLaundry = file_get_contents('../data/data.json');
      $dataJson = json_decode($dataLaundry);

      // Mengubah id data JSON menjadi row
      $row = $dataJson[$id];

      // Periksa apakah ada data yang diubah melalui method POST
      if(isset($_POST['simpan'])){
        // Baca data dari inputan form
        $nama = $_POST['nama'];
        $no_telepon = $_POST['no_telepon'];
        $paket = $_POST['paket'];
        $berat= $_POST['berat'];
        $status_pesanan= $_POST['status_pesanan'];
        $status_pembayaran= $_POST['status_pembayaran'];
        $harga_paket = $_POST['harga_paket'];
        $harga_ongkir = $_POST['harga_ongkir'];
        $total_harga = $_POST['total_harga'];
        $alamat = $_POST['alamat'];

      // Harga Paket Cuci dalam bentuk array
      $harga_paket_cuci = array(
        "Cuci Reguler" => 1000,
        "Cuci Kilat" => 2000,
        "Cuci Express" => 4000,
      );

      // Perhitungan Harga Laundry
      $harga_laundry = 8000 * $berat;

      // Perhitungan Harga Paket
      $harga_paket = $harga_paket_cuci[$paket] * $berat;

      // Perhitungan Total Harga
      $total_harga= $harga_laundry + $harga_paket + $harga_ongkir;
    
      // Membuat array data Laundry
      $dataLaundry = [
        'nama' => $nama,
        'no_telepon' => $no_telepon,
        'paket' => $paket,
        'berat' => $berat,
        'status_pesanan' => $status_pesanan,
        'status_pembayaran' => $status_pembayaran,
        'harga_paket' => $harga_paket,
        'harga_ongkir' => $harga_ongkir,
        'total_harga' => $total_harga,
        'alamat' => $alamat,
      ];
      
      // Membaca data JSON yang sudah ada
      $jsonData = file_get_contents('../data/data.json');
      $dataJson = json_decode($jsonData, true);

      // Menambahkan data baru ke array data JSON
      $dataJson[$id] = $dataLaundry;

      // Mengubah data menjadi format JSON
      $newJsonData = json_encode($dataJson, JSON_PRETTY_PRINT);

      // Menyimpan data ke file JSON
      file_put_contents('../data/data.json', $newJsonData);

      // Mengarahkan pengguna kembali ke halaman utama
      header('location: data-pesanan.php');
      }

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
            <li><a class="dropdown-item" href="../index.html">Logout</a></li>
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
                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Data Karyawan
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Proses Cuci Kiloan</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">Pesanan</li>
              <li class="breadcrumb-item active">Proses Cuci Kiloan</li>
            </ol>
            <div class="card mb-4">
              <div class="card-body">
                <form method="post">
                  <div class="d-flex gap-3">
                    <div class="w-100">
                      <div class="mb-3">
                        <!-- Input type text memasukan nama pelanggan -->
                        <label for="nama" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Pelanggan" value="<?php echo $row->nama; ?>" required>
                      </div>
                      <div class="mb-3">
                        <!-- Input type text memasukan nomor telepon -->
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukan Nomor Telepon" value="<?php echo $row->no_telepon; ?>" required>
                      </div>
                      <div class="mb-3">
                        <!-- Select daftar paket cuci -->
                        <label for="paket" class="form-label">Pilih Paket</label>
                        <select class="form-select" name="paket" id="paket" required>
                          <option value="<?php echo $row->paket; ?>"><?php echo $row->paket; ?></option>
                          <option value="Cuci Reguler">Cuci Reguler</option>
                          <option value="Cuci Kilat">Cuci Kilat</option>
                          <option value="Cuci Express">Cuci Express</option>
                        </select>
                      </div>
                    </div>
                    <div class="w-100">
                      <div class="mb-3">
                        <label for="status_pesanan" class="form-label">Status Pesanan</label>
                        <select class="form-select" name="status_pesanan" id="status_pesanan" required>
                          <option value="<?php echo $row->status_pesanan; ?>"><?php echo $row->status_pesanan; ?></option>
                          <option value="Sedang diproses">Sedang diproses</option>
                          <option value="Proses Selesai">Proses Selesai</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                        <input type="text" class="form-control" name="status_pembayaran" id="status_pembayaran" value="<?php echo $row->status_pembayaran; ?>">
                      </div>
                      <div class="mb-3">
                        <!-- Input type number memasukan berat cucian -->
                        <label for="berat" class="form-label">Berat (Kg)</label>
                        <input type="number" class="form-control" name="berat" id="berat" placeholder="Masukan Berat (Kg)" value="<?php echo $row->berat; ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="harga_ongkir" class="form-label">Harga Ongkir</label>
                        <input type="number" class="form-control" name="harga_ongkir" id="harga_ongkir" placeholder="Masukan Harga Ongkir" value="<?php echo $row->harga_ongkir; ?>" required>
                      </div>
                      <!-- Textarea alamat pelanggan -->
                      <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Pelanggan" id="alamat" style="height: 100px" required><?php echo $row->alamat; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex gap-1">
                    <!-- Tombol kembali ke index.php dan button simpan -->
                    <a href="data-pesanan.php" class="btn btn-danger w-100">Kembali</a>
                    <button type="submit" name="simpan" class="btn btn-primary w-100">Simpan</button>
                  </div>
                </form>
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