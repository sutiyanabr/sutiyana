<?php
include"koneksi.php";
include"boot.php";

$id = $_GET['id'];
$panggil=$konek->query("select * from surat_keluar where no='$id'");
$a=$panggil->fetch_array();
?>

<div class="container col-7 mt-2">
<div class="card mt-3">
    <div class="card-header">
        surat masuk
    </div>
    <div class="card-body">
        <form class="form-control mt-3" action="prosesinputkeluar.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">no surat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_surat" value="<?= $a['no_surat']?>" required>

                <label for="exampleInputEmail1" class="form-label">tujuan_surat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan_surat" value="<?= $a['tujuan_surat']?>" required>

                <label for="exampleInputEmail1" class="form-label">tanggal surat</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_surat" value="<?= $a['tanggal_surat']?>" required>               

                <label for="exampleInputEmail1" class="form-label">perihal</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="perihal" value="<?= $a['perihal']?>" required>

                <label for="formFileLg" class="form-label">file surat</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file_surat" value="<?= $a['file_surat']?>" required>

            <div class="text-end">
            <button type="submit" class="btn btn-primary mt-2 mb-2S" onclick="alert('berhasil')">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>


<?php
if (isset($_POST['edit'])) {
    $no_surat = $_POST['no_surat'];

    $ubah = $konek->query("UPDATE surat_keluar SET no_surat='$no_surat', tujuan_surat='$_POST[tujuan_surat]',tanggal_surat='$_POST[tanggal_surat]', perihal='$_POST[perihal]',file_surat='$_POST[file_surat]' where no='$id'");
    if($ubah){
        echo "<script>alert('berhasil')</script>";
    }

}
  

?>
