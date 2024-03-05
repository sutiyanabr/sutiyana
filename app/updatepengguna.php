<?php
include"koneksi.php";
include"boot.php";

$id = $_GET['id'];
$panggil=$konek->query("select * from login where no='$id'");
$a=$panggil->fetch_array();
?>

<div class="container col-8 mt-2">
    <div class="card mt-3">
        <div class="card-header">
            Pengguna
        </div>
        <div class="card-body">
            <form class="form-control mt-3" action="prosesinputpengguna.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user" value="<?= $a['user']?>" required>

                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama']?>" required>

                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $a['email']?>" required>

                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pass" value="<?= $a['pass']?>" required> 
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="<?= $a['level']?>" value="admin">
                        <label class="form-check-label" for="inlineRadio1">Admin</label>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="<?= $a['level']?>" value="user">
                        <label class="form-check-label" for="inlineRadio2">User</label>
                    </div> -->

                </div>
                <div class="row">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
if (isset($_POST['edit'])) {
    $user = $_POST['user'];

    $ubah = $konek->query("UPDATE login SET user='$user', nama='$_POST[nama]',email='$_POST[email]', pass='$_POST[pass]', level='$_POST[level]' where no='$id'");
    if($ubah){
        echo "<script>alert('berhasil')</script>";
        ?>
        <script>
    document.location.href='pengguna.php';
</script>
        <?php
    }

}
  

?>

