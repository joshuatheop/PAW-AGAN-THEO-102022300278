<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

// make sure user click update button
if (isset($_POST["update"])) {
    // get unique id
    $id = $_GET['id'];

    // get all input data
    $judulBuku = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahunTerbit = $_POST["tahun_terbit"];

    // sql query
    $query = "UPDATE tb_buku SET
            judul = '$judulBuku',
            penulis='$penulis',
            tahun_terbit='$tahunTerbit'
            WHERE id=$id";


    // execute sql query
    $test = mysqli_query($conn, $query);

    // condition query is works or not
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: katalog_buku.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = katalog_buku.php;
        </script>
        ";
        exit;
    }
}
