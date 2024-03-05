<?php
include "koneksi.php"; // Menghubungkan ke file koneksi database
include "boot.php"; // File bootstrap

?>
<?php
// Mendapatkan nilai pencarian dari URL
$searchTerm = isset($_GET['q']) ? $_GET['q'] : '';

// Membuat pernyataan SQL yang aman dengan menggunakan prepared statement untuk menghindari SQL Injection
$stmt = $konek->prepare("SELECT * FROM surat_masuk WHERE no_surat LIKE ? ORDER BY waktu DESC");
$stmt->bind_param("s", $search);
$search = "%$searchTerm%";
$stmt->execute();
$result = $stmt->get_result();

// Mengecek apakah query berhasil
if ($result) {
    ?>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><b><i>Surat Masuk</i></b></a>

            <div class="text-center">
                <a href="inputmasuk.php">
                    <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-file-earmark-plus"></i> <b><i>tambah data</i></b></button>
                </a>
            </div>

            <form class="d-flex" role="search" method="GET" action="">
                <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <table class="table shadow table-card mt-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">no surat</th>
                    <th scope="col">asal surat</th>
                    <th scope="col">tanggal surat</th>
                    <th scope="col">tanggal terima</th>
                    <th scope="col">perihal</th>
                    <th scope="col">file surat</th>
                    <th scope="col">penerima</th>
                    <th scope="col">waktu</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($s = $result->fetch_assoc()) {
                    $no++
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $s['no_surat'] ?></td>
                        <td><?= $s['asal_surat'] ?></td>
                        <td><?= $s['tanggal_surat'] ?></td>
                        <td><?= $s['tanggal_terima'] ?></td>
                        <td><?= $s['perihal'] ?></td>
                        <td><?= $s['file_surat'] ?></td>
                        <td><?= $s['penerima'] ?></td>
                        <td><?= $s['waktu'] ?></td>
                        <td>
                            <a class="btn btn-danger btn btn-sm btn-xs" href="hapusmasuk.php?id=<?php echo $s['no']; ?>" onclick="javascript:return confirm('Apakah anda yakin ingin menghapus data tersebut ???')"><i class="bi bi-trash"></i></a>

                            <button class="btn btn-primary btn btn-sm btn-xs" onclick="document.location.href='updatemasuk.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
} else {
    echo "Error: " . $konek->error; // Jika query tidak berhasil
}

// Tutup statement dan koneksi
$stmt->close();
$konek->close();
?>

