<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <title>Kontak</title>
    </head>
    <body class="m-0 p-0">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white fs-4" aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="kontak.php">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="w-100 d-flex justify-content-center">
            <div class="d-flex flex-column gap-3 pt-5">
                <h1 class="fs-1">Informasi kontak:</h1>
                <form action="konfirmasi-kontak.php" method="POST">
                    <label for="nama" class="fs-3">Nama: </label>
                    <input type="text" name="nama" id="nama" />
                    <br />
                    <br />
                    <p class="fs-3">Kewarganegaraan:</p>
                    <input type="radio" id="wni" name="kewarganegaraan" value="WNI" />
                    <label for="wni">WNI</label>
                    <br />
                    <input type="radio" id="asing" name="kewarganegaraan" value="Asing" />
                    <label for="asing">Asing</label>
                    <br />
                    <br />
                    <p class="fs-3">Layanan:</p>
                    <input type="checkbox" name="layanan[]" value="Website" id="website" />
                    <label for="website">Website</label>
                    <br />
                    <input type="checkbox" name="layanan[]" value="Email" id="email" />
                    <label for="email">Email</label>
                    <br />
                    <br />
                    <input type="submit" value="Kirim" class="btn btn-primary" />
                    <input type="reset" value="Hapus" class="btn btn-danger" />
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>