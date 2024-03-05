<?php

include "koneksi.php";

$id = $_GET['id'];
$hapus = $konek->query("delete from surat_keluar WHERE no ='$id'");
?>

<script>
    document.location.href = 'suratkeluar.php';
</script>