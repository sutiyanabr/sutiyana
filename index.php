<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form action="" method="post">
        <div class="login">
            <h2> LOGIN </h2>
            <?php
            if (isset($_POST['login'])) {

                include "app/koneksi.php";

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cari = $konek->query("select * from login where user='$user' and pass='$pass'");
                $cek = $cari->num_rows;
                $tampil = $konek->query("select * from login where user='$user'");
                $level = $tampil->fetch_array();

                if ($cek > 0) {
                    if ($level['level'] == 'admin') {
                        $_SESSION['user'] = $user;
                        header('Location: app/index.php');
                        exit();
                    } elseif ($level['level'] == 'user') {
                        $_SESSION['user'] = $user;
                        header('Location: user/index.php');
                        exit();
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">maaf username atau password anda salah  .Silahkan coba lagi</div>';
                }
            }
            ?>
            <div class="input-group">
                <input type="text" name="user" required="">
                <span>username</span>
            </div>
            <div class="input-group">
                <input type="password" name="pass" required="">
                <span>password</span>
            </div>
            <div class="input-group">
                <input type="submit" name="login" value="login">
            </div>
            <!-- <div class="text-center p-t-115">
                <span class="txt1">Akun baru?</span>
                <a class="txt2" href="">Daftar</a>
            </div> -->
        </div>
    </form>
</body>
</html>
