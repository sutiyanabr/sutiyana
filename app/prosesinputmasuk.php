<?php
include "koneksi.php";

$no_surat = $_POST['no_surat'];
$asal_surat = $_POST['asal_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$tanggal_terima = $_POST['tanggal_terima'];
$perihal = $_POST['perihal'];
$file_surat = $_POST['file_surat'];
$penerima = $_POST['penerima'];
if ($no_surat==""){
  echo "maaf no_surat wajib di isi";
} else {
  
}
$simpan = $konek->query("insert into surat_masuk(no_surat,asal_surat,tanggal_surat,tanggal_terima,perihal,file_surat,penerima) values ('$no_surat','$asal_surat','$tanggal_surat','$tanggal_terima','$perihal','$file_surat','$penerima')");
?>
<script>
    document.location.href='suratmasuk.php';
</script>