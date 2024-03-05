<?php

include "koneksi.php";

$id = $_GET['id'];
$hapus = $konek->query("delete from surat_masuk WHERE no ='$id'");
?>

<script>
    document.location.href = 'suratmasuk.php';
</script>