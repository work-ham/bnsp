<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<script>
    // Berfungsi untuk mengatur IPK secara otomatis dan menonaktifkan elemen form berdasarkan nilainya
    function IPK() {
    var inputIPK = document.getElementById("ipk");
    const nilaiIPK = 2.9; 
    inputIPK.value = nilaiIPK;

    // Nonaktifkan elemen formulir berdasarkan IPK
    var pilihanBeasiswa = document.getElementById("pilihan_beasiswa");
    var unggahBerkas = document.getElementById("berkas");
    var tombolDaftar = document.getElementById("daftar_button");

    if (nilaiIPK < 3) {
        pilihanBeasiswa.disabled = true;
        unggahBerkas.disabled = true;
        tombolDaftar.disabled = true;

    } else {
        // Aktifkan elemen formulir
        pilihanBeasiswa.disabled = false;
        unggahBerkas.disabled = false;
        tombolDaftar.disabled = false;
        pilihanBeasiswa.focus();
    }
}

</script>
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
                <a class="nav-link active" href="daftar_beasiswa.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="hasil.php">Hasil</a>
            </li>
        </ul>
    </div>
</nav>



<div class="container mt-4 ">
    <h2 style="text-align: center;">DAFTAR BEASISWA</h2>
    <table width="1200" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <td>
            <table width="1200" border="1" cellpadding="2" cellspacing="0" align="center">
            <tr>
    <td colspan="2">
        <a href="javascript:void(0);" onclick="IPK()" style="color: inherit; text-decoration: none;">
            <b>Registrasi Beasiswa</b>
        </a>
    </td>
</tr>

    </table>
    <table width="1200" border="0" cellpadding="20" cellspacing="16" align="center">
    <form action="proses_daftar.php" method="post" enctype="multipart/form-data">
        <tr>
        <div class="form-group">
            <td><label for="nama">Masukkan Nama</label></td>
            <td><input type="text" class="form-control" id="nama" name="nama" required></td>

        </div>
        </tr>
        <tr>
        <div class="form-group">
            <td><label for="email">Masukkan Email</label></td>
            <td><input type="email" class="form-control" id="email" name="email" required></td>
        </div>
        </tr>
<tr>
<div class="form-group">
            <td><label for="nomor_hp">Nomor HP</label></td>
            <td><input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" pattern="[0-9]{10,14}" required></td>
        </div>
</tr>

        <tr><div class="form-group">
            <td><label for="semester">Semester Saat Ini</label></td>
            <td><select class="form-control" id="semester" name="semester" required>
                <?php for ($i = 1; $i <= 8; $i++) : ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
            </select></td>
        </div>
    </tr>
    <tr>
    <div class="form-group">
            <td><label for="ipk" class="d-block">IPK Terakhir</label></td>
            <td><input type="text" class="form-control" id="ipk" name="ipk" value="" readonly></td>
        </div>
    </tr>
<tr>
<div class="form-group">
            <td><label for="pilihan_beasiswa">Pilihan Beasiswa</label></td>
            <td>            <select class="form-control" id="pilihan_beasiswa" name="pilihan_beasiswa" required>
                <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
            </select></td>
        </div>
</tr>
<tr>
    <tr>
    <div class="form-group">
        <td>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <td>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </td>
        </td>

    </div>
    </tr>
<div class="form-group">
            <td><label for="berkas">Upload Berkas Syarat (PDF/JPG/ZIP)</label></td>
            <td><input type="file" class="form-control-file" id="berkas" name="berkas" accept=".pdf, .jpg, .zip" required>
        </div></td>
</tr>
<tr>
<td><button type="submit" class="btn btn-primary">Daftar</button></td>
<td> <a href="index.php" class="btn btn-secondary">Batal</a></td>
</tr>

    </form>
    </table>
            <table width="1200" border="1" cellpadding="2" cellspacing="0" align="center">
        <tr>
            <td style="height: 30px;"></td>
        </tr>
    </table>
    </td>
        </tr>
        </table>
</div>

<footer class="mt-5 mb-0 bg-info text-center py-3">
        <p class="text-white">© Ahmad Ilham Kushartanto, 2023 Sistem Pendaftaran Beasiswa</p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
