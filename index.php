<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Pilihan Beasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftar_beasiswa.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="hasil.php">Hasil</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container mt-4 shadow p-4 rounded">
    <!-- Banner -->
    <div class="banner">
        <img src="assets/banner.jpg" alt="Banner Image" style="width: 100%; max-width: 100%;">
    </div>

    <!-- Jumbotron, Requirements, and Video using Flexbox -->
    <div class="d-flex flex-wrap">
        <!-- Jumbotron -->
        <div class="jumbotron flex-grow-1">
            <h1 class="display-4">Selamat datang di Pendaftaran Beasiswa</h1>
            <p class="lead">Kami menyediakan pilihan beasiswa akademik dan non-akademik untuk membantu anda dalam mengejar pendidikan lebih lanjut.</p>
            <hr class="my-4">
            <p>Jangan ragu untuk mendaftar dan mengambil langkah pertama menuju masa depan yang lebih cerah!</p>
            <a class="btn btn-primary btn-lg" href="daftar_beasiswa.php" role="button">Daftar Beasiswa</a>
        </div>

        <!-- Requirements -->
        <div class="requirements mt-4 me-4">
            <div>
                <h2>Beasiswa Akademik:</h2>
                <p>Beasiswa ini diberikan kepada siswa yang memiliki prestasi akademik yang tinggi. Persyaratan:</p>
                <ul>
                    <li>IPK minimal 3,0</li>
                    <li>Surat rekomendasi dari dosen pembimbing</li>
                    <li>Prestasi akademik lainnya</li>
                </ul>
            </div>
            <div>
                <h2>Beasiswa Non-Akademik:</h2>
                <p>Beasiswa ini diberikan kepada siswa yang memiliki prestasi di luar akademik. Persyaratan:</p>
                <ul>
                    <li>Prestasi non-akademik yang signifikan (misalnya, olahraga, seni, atau kegiatan sosial)</li>
                    <li>Surat rekomendasi dari pihak terkait</li>
                    <li>Partisipasi aktif dalam kegiatan ekstrakurikuler</li>
                </ul>
            </div>
        </div>

        <!-- Video -->
        <div class="video-container mt-4 ms-auto">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RQE5NDXy7fc" frameborder="info" allowfullscreen></iframe>
        </div>
    </div>
</div>

<footer class="mt-5 bg-info text-center py-3">
        <p class="text-white">© Ahmad Ilham Kushartanto, 2023 Sistem Pendaftaran Beasiswa</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
