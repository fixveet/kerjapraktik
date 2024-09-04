<?php
include 'header.php';
?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kecamatan</h1>
    <a href="db_tambah.php" class="btn btn-primary m-1">Tambah Data</a>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="font-weight: bold;">No</th>
        <th style="font-weight: bold;">Kecamatan</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $kecamatan = $conn->query("SELECT * FROM kecamatan");
      while ($data = $kecamatan->fetch_assoc()) {
      ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $data['nama_kecamatan'] ?></td>
          <td>
            <a href="db_edit.php?id=<?= $data['id'] ?>" class="btn btn-warning m-1"><i class="fa fa-edit"></i></a>
            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger m-1" href="db_hapus.php?id=<?= $data['id'] ?>"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      <?php
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>
<?php
include 'footer.php';
?>