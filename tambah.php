<?php
include('templates/header.php');
?>

<main>
  <div class="container mt-5 py-5">
    <a href="index.php" class="btn btn-secondary mb-3">
      <i class="fas fa-arrow-left me-2"></i>Back
    </a>
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h5 class="card-title">Add Student Form</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form method="post" action="tambah_proses.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nis" class="form-label">NRP</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Gender</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="">Choose</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="no_telp" class="form-label">Telephone Number</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Photo</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include('templates/footer.php');
?>
