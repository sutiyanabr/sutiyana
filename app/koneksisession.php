<?php
session_start();
$user = $_SESSION['user'];
// echo $user;
if ($user == "") {
?>
  <script>
    document.location = '../index.php';
  </script>
<?php
} else {
 include "boot.php";
?>


<?php
}