<?php
include('templates/header.php');
?>

<main>
  <?php
  include "koneksi_db.php";

  $id = $_GET['id'];

  $query = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $query->bindParam(':id', $id);
  $query->execute();
  $data = $query->fetch();

  ?>
  <div class="container mt-5 py-5">
    <a href="index.php" class="btn btn-secondary mb-3">
      <i class="fas fa-arrow-left me-2"></i>Back
    </a>
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h5 class="card-title">Edit Student's Data Form: <?php echo $data['nama']; ?></h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form method="post" action="ubah_proses.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nis" class="form-label">NRP</label>
                <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $data['nis']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Gender</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                  <option value="">Choose</option>
                  <option value="Male" <?php if ($data['jenis_kelamin'] == 'Laki-laki') {
                                            echo 'selected';
                                          } ?>>Male</option>
                  <option value="Female" <?php if ($data['jenis_kelamin'] == 'Perempuan') {
                                              echo 'selected';
                                            } ?>>Female</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="no_telp" class="form-label">Telephone Number</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $data['no_telp']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $data['alamat']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Photo</label>
                <div class="row">
                  <div class="col">
                    <img src="uploads/<?php echo $data['foto']; ?>" width="100%" class="img-fluid rounded">
                  </div>
                  <div class="col">
                    <input type="file" class="form-control" id="foto" name="foto">
                  </div>
                </div>
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
