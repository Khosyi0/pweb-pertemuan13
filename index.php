<?php
include('templates/header.php');
?>

<main>
  <div class="container mt-5 py-5">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-4">Student Data</h2>
      </div>
      <div class="col-md-6 text-end">
        <a href="tambah.php" class="btn btn-primary">
          <i class="fas fa-plus me-2"></i>Add Student
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="bg-primary text-white">
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Telephone Number</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('koneksi_db.php');
              $query = $pdo->prepare("SELECT * FROM siswa");
              $query->execute();
              $no = 1;
              while ($row = $query->fetch()) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td class="text-center">
                    <img src="uploads/<?php echo $row['foto']; ?>" width="80" class="rounded-circle">
                  </td>
                  <td><?php echo $row['nis']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><?php echo $row['no_telp']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td class="text-center">
                    <a href="ubah.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                      <i class="fas fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>
              <?php
              }
              if ($query->rowCount() == 0) {
              ?>
                <tr>
                  <td colspan="8" class="text-center">Tidak ada data</td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include('templates/footer.php');
?>
