<?php
include"boot.php";
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
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user" required>

                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>

                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>

                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pass" required> 
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="admin">
                        <label class="form-check-label" for="inlineRadio1">Admin</label>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="user">
                        <label class="form-check-label" for="inlineRadio2">User</label>
                    </div> -->
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-2 mb-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
