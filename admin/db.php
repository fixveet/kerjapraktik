<?php
include 'header.php';
?>
<?php
$kecamatan = $conn->query("SELECT * FROM kecamatan");
$jumlahkec = $kecamatan->num_rows;
?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Kecamatan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahkec ?></div>
            </div>
            <div class="col-auto">
              <i class="fa fa-road fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Gedung</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahkec ?></div>
            </div>
            <div class="col-auto">
              <i class="fa fa-warehouse fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>