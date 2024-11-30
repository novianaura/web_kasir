<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Daftar Pelanggan</h1>
    <div class="d-flex justify-content-end mb-3">
      <button id="btn-tambah-data" class="btn btn-success">
        <i class="fa fa-cart-plus"></i> Tambah Data
      </button>
    </div>
    <table class="table table-bordered text-center" id="table-pelanggan">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telepon</th>
          <th>Actions</th>
        </tr>
      <tbody>
        <tr id="no-data">
          <td colspan="5">Tidak ada data pelanggan</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  $(document).ready(function() {
    // Tambahkan data pelanggan
    $('#btn-tambah-data').click(function() {
      Swal.fire({
        html: `
          <h5> Tambah Data</h5>
    <div class="mb-3">
    <label for="input-nama" class="form-label text-left">Nama</label>
    <input id="input-nama" class="form-control" type="text">
    </div>
    <div class="mb-3">
    <label for="input-alamat" class="form-label">Alamat</label>
    <input id="input-alamat" class="form-control" type="text">
    </div>
    <div class="mb-3">
    <label for="input-telepon" class="form-label">No Telepon</label>
    <input id="input-telepon" class="form-control" type="text">
    </div>        
    `,
        showCancelButton: true,
        cancelButtonText: 'Tutup',
        confirmButtonText: 'Simpan',
        allowOutsideClick: false, // Mencegah alert tertutup ketika mengklik luar
      });
    });
  });
</script>
</body>
</html>
