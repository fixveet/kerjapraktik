<?php
include 'header.php';
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kecamatan</h1>
    </div>
    <div id="table-container" style="margin: 20px;">
        <form method="post" enctype="multipart/form-data">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 40%;">Informasi Gedung</th>
                        <th style="width: 60%;">Detail</th>
                    </tr>
                    <tr>
                        <td>Nama Kecamatan</td>
                        <td><input class="form-control" type="text" name="nama_kecamatan"></td>
                    </tr>
                    <tr>
                        <td>Nama Gedung</td>
                        <td><input class="form-control" type="text" name="nama_gedung"></td>
                    </tr>
                    <tr>
                        <td>Foto Pemimpin Instansi</td>
                        <td><input type="file" name="foto"></td>
                    </tr>
                    <tr>
                        <td>Nama Pemimpin Instansi</td>
                        <td><input class="form-control" type="text" name="nama_pemimpin"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input class="form-control" type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Layanan</td>
                        <td>
                            <textarea class="form-control ckeditor" name="layanan"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Jam Operasional</td>
                        <td>
                            <textarea class="form-control ckeditor" name="jam_operasional"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Luas Area</td>
                        <td><input class="form-control" type="text" name="luas_area"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Desa</td>
                        <td><input class="form-control" type="number" name="jumlah_desa"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Penduduk (Jika nilai ribuan tidak perlu pakai titik/koma)</td>
                        <td>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border: none; width: 20%">Laki-laki</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="penduduk_laki"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Perempuan</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="penduduk_pr"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>Batas Administrasi</td>
                        <td>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border: none; width: 20%">Utara</td>
                                    <td style="border: none;"><input class="form-control" type="text" name="utara"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Selatan</td>
                                    <td style="border: none;"><input class="form-control" type="text" name="selatan"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Barat</td>
                                    <td style="border: none;"><input class="form-control" type="text" name="barat"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Timur</td>
                                    <td style="border: none;"><input class="form-control" type="text" name="timur"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Sekolah</td>
                        <td>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border: none; width: 20%">PAUD</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="PAUD"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">TK</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="TK"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">SD</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="SD"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">SMP</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="SMP"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">SMA</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="SMA"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">SMK</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="SMK"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Rumah Sakit</td>
                        <td><input class="form-control" type="number" name="jumlah_rumah_sakit"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Puskesmas</td>
                        <td><input class="form-control" type="text" name="jumlah_puskesmas"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pasar</td>
                        <td>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border: none; width: 20%">Tradisional</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="pasar_tradisional"></td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Modern</td>
                                    <td style="border: none;"><input class="form-control" type="number" name="pasar_modern"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td><input class="form-control" type="text" name="longitude"></td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td><input class="form-control" type="text" name="latitude"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: none;">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>
<?php
// Pastikan method yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $nama_gedung = $_POST['nama_gedung'];
    $nama_pemimpin = $_POST['nama_pemimpin'];
    $alamat = $_POST['alamat'];
    $layanan = $_POST['layanan'];
    $jam_operasional = $_POST['jam_operasional'];
    $luas_area = $_POST['luas_area'];
    $jumlah_desa = $_POST['jumlah_desa'];
    $penduduk_laki = $_POST['penduduk_laki'];
    $penduduk_pr = $_POST['penduduk_pr'];
    $utara = $_POST['utara'];
    $selatan = $_POST['selatan'];
    $barat = $_POST['barat'];
    $timur = $_POST['timur'];
    $PAUD = $_POST['PAUD'];
    $TK = $_POST['TK'];
    $SD = $_POST['SD'];
    $SMP = $_POST['SMP'];
    $SMA = $_POST['SMA'];
    $SMK = $_POST['SMK'];
    $jumlah_rumah_sakit = $_POST['jumlah_rumah_sakit'];
    $jumlah_puskesmas = $_POST['jumlah_puskesmas'];
    $pasar_tradisional = $_POST['pasar_tradisional'];
    $pasar_modern = $_POST['pasar_modern'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    // Upload foto
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../uploads/" . $namafoto);

    // Query SQL untuk melakukan insert data kecamatan
    $insert_query = "INSERT INTO kecamatan (nama_kecamatan, nama_gedung, foto_pemimpin, nama_pemimpin, alamat, layanan, jam_operasional, luas_area, jumlah_desa, penduduk_laki, penduduk_pr, utara, selatan, barat, timur, PAUD, TK, SD, SMP, SMA, SMK, jumlah_rumah_sakit, jumlah_puskesmas, pasar_tradisional, pasar_modern, longitude, latitude) 
                    VALUES ('$nama_kecamatan', '$nama_gedung', '$namafoto', '$nama_pemimpin', '$alamat', '$layanan', '$jam_operasional', '$luas_area', '$jumlah_desa', '$penduduk_laki', '$penduduk_pr', '$utara', '$selatan', '$barat', '$timur', '$PAUD', '$TK', '$SD', '$SMP', '$SMA', '$SMK', '$jumlah_rumah_sakit', '$jumlah_puskesmas', '$pasar_tradisional', '$pasar_modern', '$longitude', '$latitude')";

    // Eksekusi query
    if ($conn->query($insert_query) === TRUE) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script> location ='db-kec.php';</script>";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>