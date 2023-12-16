<?php
// Membaca data dari file JSON
$file_path = 'data_pendaftaran.json';
$data_pendaftaran = [];

if (file_exists($file_path)) {
    $data_pendaftaran = json_decode(file_get_contents($file_path), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftar_beasiswa.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="hasil.php">Hasil</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4 shadow p-4 rounded">
    <h2>Hasil Pendaftaran Beasiswa</h2>
    <main>
    <?php if (!empty($data_pendaftaran)) : ?>
        <table class="table">
        <?php
            // Hanya tampilkan satu pendaftar terbaru
            $latest_pendaftaran = end($data_pendaftaran);
        ?>
                <tr>
                    <th>Nama</th>
                    <td><?= $latest_pendaftaran['nama']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $latest_pendaftaran['email']; ?></td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td><?= $latest_pendaftaran['nomor_hp']; ?></td>
                </tr>
                <tr>
                    <th>Semester Saat Ini</th>
                    <td><?= $latest_pendaftaran['semester']; ?></td>
                </tr>
                <tr>
                    <th>Pilihan Beasiswa</th>
                    <td><?= $latest_pendaftaran['pilihan_beasiswa']; ?></td>
                </tr>
                <tr>
                    <th>IPK Terakhir</th>
                    <td><?= $latest_pendaftaran['ipk']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $latest_pendaftaran['jenis_kelamin']?></td>
                </tr>
                <tr>
                    <th>Status Ajuan</th>
                    <td style="color: <?= ($latest_pendaftaran['status_ajuan'] == 'belum di verifikasi') ? 'red' : 'green'; ?>">
                        <?= $latest_pendaftaran['status_ajuan']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Berkas</th>
                    <td>
                        <?php if (!empty($latest_pendaftaran['berkas'])) : ?>
                            <a href="<?= $latest_pendaftaran['berkas']; ?>" target="_blank">Unduh Berkas</a>
                        <?php else : ?>
                            Tidak Ada Berkas
                        <?php endif; ?>
                    </td>
                </tr>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    <?php else : ?>
        <p>Belum ada data pendaftaran beasiswa.</p>
    <?php endif; ?>
    </main>
</div>



<footer class="mt-5 bg-info text-center py-3">
        <p class="text-white">© Ahmad Ilham Kushartanto, 2023 Sistem Pendaftaran Beasiswa</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
