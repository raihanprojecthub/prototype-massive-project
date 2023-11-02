  <?php 
    // Periksa apakah ada data yang dikirim melalui method POST
    if(isset($_POST['simpan'])){
      // Baca data dari inputan form
      $nama = $_POST['nama'];
      $no_telepon = $_POST['no_telepon'];
      $paket = $_POST['paket'];
      $per_pcs = $_POST['per_pcs'];
      $status_pesanan= $_POST['status_pesanan'];
      $status_pembayaran= $_POST['status_pembayaran'];
      $harga_paket = $_POST['harga_paket'];
      $harga_ongkir = $_POST['harga_ongkir'];
      $total_harga = $_POST['total_harga'];
      $alamat = $_POST['alamat'];

      // Harga Paket Cuci dalam bentuk array
      $harga_paket_cuci = array(
        "Jaket Kulit" => 20000,
        "Boneka" => 25000,
        "Karpet" => 40000,
        "Sejadah" => 15000,
        "Selimut" => 20000,
      );

      // Perhitungan Harga Paket
      $harga_paket = $harga_paket_cuci[$paket] * $per_pcs;

      // Perhitungan Total Harga
      $total_harga = 0;
    
      // Membuat array data Laundry
      $dataLaundry = [
        'nama' => $nama,
        'no_telepon' => $no_telepon,
        'paket' => $paket,
        'per_pcs' => $per_pcs,
        'status_pesanan' => $status_pesanan,
        'status_pembayaran' => $status_pembayaran,
        'harga_paket' => $harga_paket,
        'harga_ongkir' => $harga_ongkir,
        'total_harga' => $total_harga,
        'alamat' => $alamat,
      ];

      // Membaca data JSON yang sudah ada
      $jsonData = file_get_contents('data/satuan.json');
      $dataJson = json_decode($jsonData, true);

      // Menambahkan data baru ke array data JSON
      $dataJson[] = $dataLaundry;

      // Mengubah data menjadi format JSON
      $newJsonData = json_encode($dataJson, JSON_PRETTY_PRINT);

      // Menyimpan data ke file JSON
      file_put_contents('data/satuan.json', $newJsonData);

      // Mengarahkan pengguna kembali ke halaman utama
      header('location: riwayat.php');
    }
  ?>

  <!-- Mengambil file header.php menggunakan php include -->
  <?php include"header.php"; ?>

  <!-- Tambah Section Start -->
  <section id="tambah" class="d-flex justify-content-center align-items-center">
    <div class="container border shadow p-5 bg-body-tertiary rounded">
      <!-- Header Halaman -->
      <div class="text-center mb-5">
        <h1 class="fs-2">Cuci Satuan</h1>
      </div>
      <!-- Form pemesanan laundry dengan method post -->
      <form method="post">
        <div class="d-flex gap-3">
          <div class="w-100">
            <div class="mb-3">
              <!-- Input type text memasukan nama -->
              <label for="nama" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Pelanggan" required>
            </div>
            <div class="mb-3">
              <!-- Input type text memasukan nomor telepon -->
              <label for="no_telepon" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukan Nomor Telepon" required>
            </div>
          </div>
          <div class="w-100">
            <div class="mb-3">
              <!-- Select daftar paket cuci -->
              <label for="paket" class="form-label">Pilih Paket</label>
              <select class="form-select" name="paket" id="paket" required>
                <option value="-">-- Pilih Jenis Paket --</option>
                <option value="Jaket Kulit">Jaket Kulit</option>
                <option value="Boneka">Boneka</option>
                <option value="Karpet">Karpet</option>
                <option value="Sejadah">Sejadah</option>
                <option value="Selimut">Selimut</option>
              </select>
            </div>
            <div class="mb-3">
              <!-- Input type text memasukan nomor telepon -->
              <label for="per_pcs" class="form-label">Jumlah Per/Pcs</label>
              <input type="number" class="form-control" name="per_pcs" id="per_pcs" placeholder="Masukan Jumlah Per/Pcs" required>
            </div>
            <!-- Type Hidden Start -->
            <div class="mb-3">
              <input type="hidden" class="form-control" name="status_pesanan" id="status_pesanan" value="Sedang diproses" required>
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" name="status_pembayaran" id="status_pembayaran" value="Belum dibayar" required>
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" name="harga_ongkir" id="harga_ongkir" value="0" required>
            </div>
            <!-- Type Hidden Start -->
            <!-- Textarea alamat pelanggan -->
            <div class="mb-4">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Pelanggan" id="alamat" style="height: 100px"></textarea>
            </div>
          </div>
        </div>
        <!-- Button type submit untuk mengirim data -->
        <div class="d-flex gap-1">
          <a href="paket.php" class="btn btn-danger w-100">Kembali</a>
          <button type="submit" name="simpan" class="btn btn-primary w-100">Pesan</button>
        </div>
      </form>
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