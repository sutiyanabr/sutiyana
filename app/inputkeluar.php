<?php
include"boot.php"
?>

<div class="container col-8 mt-2">
<div class="card mt-3">
    <div class="card-header">
        surat masuk
    </div>
    <div class="card-body">
        <form class="form-control mt-3" action="prosesinputkeluar.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">no surat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_surat" required>

                <label for="exampleInputEmail1" class="form-label">tujuan surat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tujuan_surat" required>

                <label for="exampleInputEmail1" class="form-label">tanggal surat</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_surat"required>

                <label for="exampleInputEmail1" class="form-label">perihal</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="perihal"required>

                <label for="formFileLg" class="form-label">file surat</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file_surat" required>

            </div>
            <div class="text-end">
            <button type="submit" class="btn btn-primary mt-2 mb-2S">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>