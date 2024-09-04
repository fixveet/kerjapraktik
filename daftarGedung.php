<?php
include 'header.php';
?>
<div class="container">
  <div class="brand">
    <h1 class="mt-3 mb-3">
      Daftar Kecamatan
    </h1>
  </div>
  <div class="bg">
    <div class="tb">
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
                <a href="detailGedung.php?id=<?= $data['id'] ?>"><i class="fa fa-eye" style="font-size: 26px; color: white"></i></a>
              </td>
            </tr>
          <?php
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>