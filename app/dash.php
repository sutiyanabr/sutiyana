<?php
include "boot.php";
$date = date('Y-m-d');

?>

<div class="">
    <h2><b>Dashboard</b></h2>
</div>

<div class="container mt-5">
    <div class="row ">
        <div class="col-3">
            <div class="card" style="width: 10rem;">
            <a href="suratmasuk.php">
            <img src="img/Sistem-masuk-dan-keluar-buku-agenda.jpg" class="card-img-top" alt="" width="200">
            <div class="card-body">
            </a>
                <p class="card-text "><b>Surat Masuk :</b>
                
                    <?php
                    include "koneksi.php";

                    // Menggunakan query untuk mengambil jumlah surat masuk
                    $query = "SELECT COUNT(*) AS jumlah_surat_masuk FROM surat_masuk";
                    $result = $konek->query($query);

                    // Memeriksa apakah query berhasil dieksekusi
                    if ($result) {
                        // Mengambil hasil query
                        $row = $result->fetch_assoc();
                        // Mengambil nilai jumlah surat masuk
                        $jumlah = $row['jumlah_surat_masuk'];
                        // Menampilkan jumlah surat masuk
                        echo $jumlah;
                    } else {
                        // Menampilkan pesan kesalahan jika query gagal dieksekusi
                        echo "Error: " . $konek->error;
                    }

                    // Menutup koneksi database
                    $konek->close();
                    ?>
                </p>
            </div>
            </div>
        </div>

        <!-- surat masuk -->
        
        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>HARI INI : </b>
                    <?php
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_masuk WHERE waktu LIKE '%$date%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>BULAN INI: </b>
                    <?php
                    $date1 = date('Y-m');
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_masuk WHERE waktu LIKE '%$date1%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>TAHUN INI : </b>
                    <?php
                    $date2 = date('Y');
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_masuk WHERE waktu LIKE '%$date2%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
       </div>
    </div>
</div>
<!-- surat masuk end -->

<div class="container">
    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="width: 10rem;">
            <a href="suratkeluar.php">
            <img src="img/Sistem-masuk-dan-keluar-buku-agenda.jpg" class="card-img-top" alt="" width="200">
            <div class="card-body">
            </a>
                <p class="card-text"><b>Surat Keluar :</b>
                    <?php
                    include "koneksi.php";

                    // Menggunakan query untuk mengambil jumlah surat masuk
                    $query = "SELECT COUNT(*) AS jumlah_surat_masuk FROM surat_keluar";
                    $result = $konek->query($query);

                    // Memeriksa apakah query berhasil dieksekusi
                    if ($result) {
                        // Mengambil hasil query
                        $row = $result->fetch_assoc();
                        // Mengambil nilai jumlah surat masuk
                        $jumlah = $row['jumlah_surat_masuk'];
                        // Menampilkan jumlah surat masuk
                        echo $jumlah;
                    } else {
                        // Menampilkan pesan kesalahan jika query gagal dieksekusi
                         echo "Error: " . $konek->error;
                    }

                    // Menutup koneksi database
                    $konek->close();
                     ?>
                </p>
            </div>
            </div>
        </div>

    <!-- surat keluar -->

        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>HARI INI : </b>
                    <?php
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_keluar WHERE waktu LIKE '%$date%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>BULAN INI: </b>
                    <?php
                    $date1 = date('Y-m');
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_keluar WHERE waktu LIKE '%$date1%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 10rem;">
                <div class="card-body">
                    <p class="card-text"><b>TAHUN INI : </b>
                    <?php
                    $date2 = date('Y');
                    include "koneksi.php";
                    $lihat = $konek->query("SELECT waktu FROM surat_keluar WHERE waktu LIKE '%$date2%'");
                    $jumlah = $lihat->num_rows;
                    echo "<strong>$jumlah</strong>";
                    ?>
                    </p>
                </div>
            </div>
       </div>
    </div>
</div>
<!-- surat keluar end -->