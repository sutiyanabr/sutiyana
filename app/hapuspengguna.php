<?php

include "koneksi.php";

$id = $_GET['id'];
$hapus = $konek->query("DELETE FROM login WHERE no ='$id'");
?>

<script>
    document.location.href = 'pengguna.php';
</script>