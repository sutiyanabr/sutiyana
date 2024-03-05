<?php
include "koneksi.php";

$user = $_POST['user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
// Enkripsi password menggunakan SHA1
$pass = ($_POST['pass']);
$level = $_POST['level'];

if ($user==""){
  echo "Maaf no_surat wajib di isi";
} else {
  // Lakukan penyimpanan ke database
  $simpan = $konek->query("INSERT INTO login(user, nama, email, pass, level) VALUES ('$user', '$nama', '$email', '$pass', '$level')");
}
?>
<script>
    // Redirect setelah proses penyimpanan selesai
    document.location.href='inputpengguna.php';
</script>
