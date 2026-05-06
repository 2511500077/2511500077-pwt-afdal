<?php
require_once "config/koneksi.php";

/** @var mysqli $koneksi */
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Ekstrakurikuler</h1>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_GET['action'])) {
  if($_GET['action'] == "hapus") {
    $kd = $_GET['kd'];
    $query = mysqli_query($koneksi, "DELETE FROM skripsi_2511500077 where Id_skripsi077 = '$kd' ");
    if ($query){
      echo '
      <div class="alert alert-warning alert-dismissible">
      Berhasil Di Hapus</div>';
      echo '<meta http-equiv="refresh" content="1;url=index.php?page=skripsi2511500077">';
    }
  }
}
?>

<div class="content">
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="index.php?page=tambah_skripsi2511500077" class="btn btn-primary btn-sm">
            Tambah ekstrakurikuler</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Id Skripsi</th>
                        <th>Judul Skripsi</th>
                        <th>Topik</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                    </tr>
                </thead>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM skripsi_2511500077");
                while ($result = mysqli_fetch_array($query)) {
                    $no++
                ?>
                <tbody>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $result['Id_skripsi077']; ?></td>
                        <td><?= $result['Judul_skripsi077']; ?></td>
                        <td><?= $result['Topik077']; ?></td>
                        <td><?= $result['Semester077']; ?></td>
                        <td><?= $result['Thn_ajaran077']; ?></td>
                        <td>
                            <a href="index.php?page=skripsi2511500077&action=hapus&kd=<?= $result['Id_skripsi077'] ?>" title="">
                                <span class="badge badge-danger">Hapus</span></a>
                            <a href="index.php?page=edit_Skripsi2511500077&kd=<?= $result['Id_skripsi077'] ?>" title="">
                                <span class="badge badge-warning">Edit</span></a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>