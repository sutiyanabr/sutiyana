<div class=" container mt-1">

    <form class="d-flex form mb-3" method="GET" action="">

        <div class="me-2">
            <input type="date" class="form-control rounded-0" name="start_date">
        </div>

        <div class="ms-2">
            <input type="date" class="form-control rounded-0" name="end_date">
        </div>

        <div class="ms-3">
            <button type="submit" class="btn btn-primary rounded-0">Search</button>
        </div>

        <div class="ms-auto">
            <button class="btn fs-1" onclick="printDiv('div1')"><i class="bi bi-printer-fill"></i></button>
        </div>

    </form>
</div>

<div id="div1">
    <!-- tampil  -->
    <?php
        include "boot.php";
        include "koneksi.php";

        $searchTerm = isset($_GET['q']) ? $_GET['q'] : '';
        $startDate = isset($_GET['start_date']) ? $_GET['start_date'] : '';
        $endDate = isset($_GET['end_date']) ? $_GET['end_date'] : '';

        $query = "SELECT * FROM surat_masuk WHERE
                (no_surat LIKE '%$searchTerm%' OR
                asal_surat LIKE '%$searchTerm%' OR
                tanggal_surat LIKE '%$searchTerm%' OR
                tanggal_terima LIKE '%$searchTerm%' OR
                perihal LIKE '%$searchTerm%' OR
                file_surat LIKE '%$searchTerm%' OR
                penerima LIKE '%$searchTerm%' OR
                waktu LIKE '%$searchTerm%')";

        if (!empty($startDate) && !empty($endDate)) {
            $query .= " AND tanggal_surat BETWEEN '$startDate' AND '$endDate'";
        }

        $result = $konek->query($query);
        ?>

<div class="text-center">
    <h1><b><i>Surat Masuk</i></b></h1>
</div>

    <table class="table  mt-1">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Surat</th>
                <th scope="col">Asal Surat</th>
                <th scope="col">Tanggal Surat</th>
                <th scope="col">Tanggal Terima</th>
                <th scope="col">Perihal</th>
                <th scope="col">File Surat</th>
                <th scope="col">Penerima</th>
                <th scope="col">waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0;
                while ($s = $result->fetch_assoc()) {
                    $no++;
                ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $s['no_surat'] ?></td>
                <td><?php echo $s['asal_surat'] ?></td>
                <td><?php echo $s['tanggal_surat'] ?></td>
                <td><?php echo $s['tanggal_terima'] ?></td>
                <td><?php echo $s['perihal'] ?></td>
                <td><?php echo $s['file_surat'] ?></td>
                <td><?php echo $s['penerima'] ?></td>
                <td><?php echo $s['waktu'] ?></td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
</div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function printDiv(el) {
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    document.body.innerHTML = b;
    window.print();
    document.body.innerHTML = a;
}
</script>