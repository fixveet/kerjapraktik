<?php
include 'header.php';
$id = $conn->query("SELECT * FROM kecamatan WHERE id = '$_GET[id]'");
$detail = $id->fetch_assoc();
?>
<div class="container">
  <div class="brand">
    <h1 class="mt-3 mb-3">
      <?= $detail['nama_gedung'] ?>
    </h1>
  </div>
  <section id="informasi">
    <div id="loc">
      <div id="map"></div>
    </div>
    <div class="brand">
      <h1 class="mt-3 mb-3">
        Informasi
      </h1>
    </div>
    <br>
    <div class="table-responsive">
      <table class="table table-bordered bg-white">
        <thead class="bg-dark text-white">
          <tr>
            <th style="width: 40%;">Informasi Gedung</th>
            <th style="width: 60%;">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nama Gedung</td>
            <td><?= $detail['nama_gedung'] ?></td>
          </tr>
          <tr>
            <td>Foto Pemimpin Instansi</td>
            <td><img width="150px" src="uploads/<?= $detail['foto_pemimpin'] ?>" alt=""></td>
          </tr>
          <tr>
            <td>Nama Pemimpin Instansi</td>
            <td><?= $detail['nama_pemimpin'] ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><?= $detail['alamat'] ?></td>
          </tr>
          <tr>
            <td>Layanan</td>
            <td><?= $detail['layanan'] ?></td>
          </tr>
          <tr>
            <td>Jam Operasional</td>
            <td><?= $detail['jam_operasional'] ?></td>
          </tr>
          <tr>
            <td>Luas Area (Km2)</td>
            <td><?= $detail['luas_area'] ?></td>
          </tr>
          <tr>
            <td>Jumlah Desa</td>
            <td><?= $detail['jumlah_desa'] ?></td>
          </tr>
          <tr>
            <td>Jumlah Penduduk</td>
            <td>Laki-laki : <?= number_format($detail['penduduk_laki']) ?> <br> Perempuan : <?= number_format($detail['penduduk_pr']) ?> <br>Total : <?= number_format($detail['penduduk_laki'] + $detail['penduduk_pr']) ?></td>
          </tr>
          <tr>
            <td>Batas Administrasi</td>
            <td>Utara : <?= $detail['utara'] ?> <br>Selatan : <?= $detail['selatan'] ?> <br> Barat : <?= $detail['barat'] ?> <br>Timur : <?= $detail['timur'] ?> <br></td>
          </tr>
          <tr>
            <td>Jumlah Sekolah</td>
            <td>PAUD : <?= $detail['PAUD'] ?> <br> TK : <?= $detail['TK'] ?> <br> SD : <?= $detail['SD'] ?><br> SMP : <?= $detail['SMP'] ?><br> SMA : <?= $detail['SMA'] ?><br> SMK : <?= $detail['SMK'] ?></td>
          </tr>
          <tr>
            <td>Jumlah Rumah Sakit</td>
            <td><?= $detail['jumlah_rumah_sakit'] ?></td>
          </tr>
          <tr>
            <td>Jumlah Puskesmas</td>
            <td>
              <ul>
                <?php
                // Pecah string layanan menjadi array
                $puskes_array = explode(',', $detail['jumlah_puskesmas']);
                // Loop melalui setiap layanan dan tampilkan dalam list
                foreach ($puskes_array as $puskes_operasional) {
                  echo "<li>- " . trim($puskes_operasional) . "</li>";
                }
                ?>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Jumlah Pasar</td>
            <td>Pasar Tradisional : <?= $detail['pasar_tradisional'] ?> <br>Pasar Modern : <?= $detail['pasar_modern'] ?></td>
          </tr>
          <tr>
            <td>Longtitude</td>
            <td><?= $detail['longitude'] ?></td>
          </tr>
          <tr>
            <td>Latitude</td>
            <td><?= $detail['latitude'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>
<!-- prettier-ignore -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<!-- <script type="module" src="./js/detailGedung.js"></script> -->
<script>
  let map;
  let latLng1;
  let latLng2 = L.latLng(<?= $detail['longitude'] ?>, <?= $detail['latitude'] ?>);

  // Initialize the map
  function initializeMap(lat, lng) {
    latLng1 = L.latLng(lat, lng);
    map = L.map("map").setView(latLng1, 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.Routing.control({
      waypoints: [latLng1, latLng2],
    }).addTo(map);

    calculateRoute(latLng1, latLng2);
  }

  // Calculate and display the route
  function calculateRoute(latLng1, latLng2) {
    let wp1 = new L.Routing.Waypoint(latLng1);
    let wp2 = new L.Routing.Waypoint(latLng2);

    let routeUs = L.Routing.osrmv1();
    routeUs.route([wp1, wp2], (err, routes) => {
      if (!err) {
        let best = 100000000000000;
        let bestRoute = 0;
        for (let i in routes) {
          if (routes[i].summary.totalDistance < best) {
            bestRoute = i;
            best = routes[i].summary.totalDistance;
          }
        }
        console.log("best route", routes[bestRoute]);
        L.Routing.line(routes[bestRoute], {
          styles: [{
            color: "green",
            weight: "8",
          }],
        }).addTo(map);
        let marker = L.marker(latLng1).addTo(map);
        marker.bindPopup("You are here!").openPopup();
      }
    });
  }

  // Function to handle successful retrieval of position
  function success(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    initializeMap(latitude, longitude);
  }

  // Function to handle errors in retrieval of position
  function error() {
    console.log("Unable to retrieve your location");
  }

  // Check if Geolocation is supported
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success, error);
  } else {
    console.log("Geolocation is not supported by your browser");
  }

  const properties = [{
    gedung: "Kantor Camat Sungai Raya",
    namaPimpinan: "Drs. M. Ikhsan Sukendra, M.Si",
    periode: "Drs. M. Ikhsan Sukendra, M.Si",
    alamat: "Jl. Adi Sucipto No.Km.12, RW.7, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat.",
    layanan: "",
    jam: "",
    luas: "1.124",
    desa: "22",
    pdk_LK: "122.262",
    pdk_PR: "117.804",
    pdk_Total: "240.066",
    batasUtara: "Kota Pontianak dan Kec. Sungai Ambawang",
    batasSelatan: ": Kec. Kubu dan Kec. Terentang",
    batasBarat: "Kec. Sungai Kakap",
    batasTimur: "Kab Sanggau",
    sekolah: "",
    rumahSakit: "",
    puskesmas: "",
    pasar: "",
    latitude: "",
    longtitude: ""
  }];
</script>
<?php
include 'footer.php';
?>