<?php
include "koneksi.php";

$no_surat = $_POST['no_surat'];
$tujuan_surat = $_POST['tujuan_surat'];
$tanggal_surat = $_POST['tanggal_surat'];
$perihal = $_POST['perihal'];
$file_surat = $_POST['file_surat'];
if ($no_surat==""){
  echo "maaf no_surat wajib di isi";
} else {
  
}
$simpan = $konek->query("INSERT INTO surat_keluar (no_surat, tujuan_surat, tanggal_surat, perihal, file_surat) VALUES ('$no_surat', '$tujuan_surat', '$tanggal_surat', '$perihal', '$file_surat')");

?>
<script>
    document.location.href='suratkeluar.php';
</script>