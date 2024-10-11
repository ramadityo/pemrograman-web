<?php 
$judul = "Simpan data karyawan"

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $judul ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <?php
    $nama_depan = $nama_belakang = "";
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])) {
        include "koneksi.php";

        if(isset($_POST["namadepan"])) {
            $nama_depan = $_POST["namadepan"];
        }

        if(isset($_POST["namabelakang"])) {
            $nama_belakang = $_POST["namabelakang"];
        }

        $sql = "INSERT INTO biodata (namadepan, namabelakang)
        VALUES ('$nama_depan', '$nama_belakang')";

        if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);


    } else {
        $nama_depan = "";
        $nama_belakang = "";

        $pesan = "Akses ilegal!";
    }
    ?>
    <body>
        <div class="container mt-3">
            <h2><?php echo $judul ?></h2>
                <div class="mb-3 mt-3">
                    <label for="namadepan">Nama Depan: <?php echo $nama_depan ?></label>
                </div>
                <div class="mb-3 mt-3">
                    <label for="namabelakang">Nama Belakang: <?php echo $nama_belakang ?></label>
                </div>
                <button type="submit" class="btn btn-primary" nama="tombol">Submit</button>
        </div>
    </body>
</html>