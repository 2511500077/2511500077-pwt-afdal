<?php
require_once "config/koneksi.php";

/** @var mysqli $koneksi */
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Skripsi</h1>
            </div>
        </div>
    </div>
</div>

<?php
$kd = $_GET['kd'];
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM skripsi_2511500077 WHERE Id_skripsi077='$kd' "));

if(isset($_POST['tambah'])){
    $Id_skripsi077 = $_POST['Id_skripsi077'];
    $Judul_skripsi077 = $_POST['Judul_skripsi077'];
    $Topik077 = $_POST['Topik077'];
    $Semester077 = $_POST['Semester077'];
    $Thn_ajaran077 = $_POST['Thn_ajaran077'];

    $insert = mysqli_query($koneksi, "UPDATE skripsi_2511500077 SET 
    Id_skripsi077='$Id_skripsi077',
    Judul_skripsi077='$Judul_skripsi077',
    Topik077='$Topik077',
    Semester077='$Semester077',
    Thn_ajaran077='$Thn_ajaran077'
    WHERE Id_skripsi077='$Id_skripsi077'");
    if ($insert) {
        echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=skripsi2511500077">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Disimpan</h4></div>';
    }
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="Id_skripsi077">Id Skripsi</label>
                            <input type="text" name="Id_skripsi077" id="Id_skripsi077" value="<?= $edit['Id_skripsi077']; ?>"
                                placeholder="Id Skripsi" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Judul_skripsi077">Judul Skripsi</label>
                            <input type="text" name="Judul_skripsi077" id="Judul_skripsi077" value="<?= $edit['Judul_skripsi077']; ?>"
                                placeholder="Judul Skripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Topik077">Topik</label>
                            <input type="text" name="Topik077" id="Topik077" value="<?= $edit['Topik077']; ?>"
                                placeholder="Keterangan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Semester077">Semester</label>
                            <input type="text" name="Semester077" id="Semester077" value="<?= $edit['Semester077']; ?>"
                                placeholder="Semester" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Thn_ajaran077">Tahun Ajaran</label>
                            <input type="text" name="Thn_ajaran077" id="Thn_ajaran077" value="<?= $edit['Thn_ajaran077']; ?>"
                                placeholder="Thn ajaran" class="form-control">
                        </div>
                        
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>