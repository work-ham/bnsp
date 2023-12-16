<?php
function validasiBerkas($berkas, $dirTarget) {
    $unggahOk = 1;
    $fileTarget = $dirTarget . basename($berkas["name"]);
    $jenisFile = strtolower(pathinfo($fileTarget, PATHINFO_EXTENSION));

    if ($berkas["size"] > 5000000) {
        echo "Maaf, ukuran berkas terlalu besar.";
        $unggahOk = 0;
    }

    $formatDiperbolehkan = ["pdf", "jpg", "zip"];
    if (!in_array($jenisFile, $formatDiperbolehkan)) {
        echo "Maaf, hanya file PDF, JPG, dan zip yang diperbolehkan.";
        $unggahOk = 0;
    }

    return [
        'ok' => $unggahOk,
        'berkas' => $fileTarget
    ];
}

function unggahBerkas($berkas, $fileTarget) {
    if (move_uploaded_file($berkas["tmp_name"], $fileTarget)) {
        echo "Berkas " . basename($berkas["name"]) . " telah terunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah berkas.";
    }
}

function simpanDataJson($data, $lokasiFile) {
    $dataAda = [];

    if (file_exists($lokasiFile)) {
        $dataAda = json_decode(file_get_contents($lokasiFile), true);
    }

    $dataAda[] = $data;

    file_put_contents($lokasiFile, json_encode($dataAda));
}

// Mendapatkan data dari formulir
$nama = $_POST["nama"];
$email = $_POST["email"];
$nomorHp = $_POST["nomor_hp"];
$semester = $_POST["semester"];
$pilihanBeasiswa = $_POST["pilihan_beasiswa"];
$ipk = $_POST["ipk"];
$jenisKelamin = $_POST["jenis_kelamin"];

// Direktori untuk menyimpan berkas
$dirTarget = "berkas_pemohon/";

// Validasi berkas
$hasilValidasiBerkas = validasiBerkas($_FILES["berkas"], $dirTarget);
$unggahOk = $hasilValidasiBerkas['ok'];
$fileTarget = $hasilValidasiBerkas['berkas'];

if ($unggahOk == 1) {
    unggahBerkas($_FILES["berkas"], $fileTarget);
}

// Validasi IPK
if ($ipk >= 3.0 && $unggahOk == 1) {
    // IPK memenuhi syarat, simpan data ke file JSON
    $data = [
        'nama' => $nama,
        'email' => $email,
        'nomor_hp' => $nomorHp,
        'semester' => $semester,
        'pilihan_beasiswa' => $pilihanBeasiswa,
        'ipk' => $ipk,
        'status_ajuan' => 'belum di verifikasi',
        'berkas' => $fileTarget,
        'jenis_kelamin' => $jenisKelamin
    ];

    $lokasiFile = 'data_pendaftaran.json';
    simpanDataJson($data, $lokasiFile);

    // Redirect ke halaman view_hasil.php
    header("Location: hasil.php");
    exit();
} else {
    // IPK tidak memenuhi syarat atau terjadi kesalahan pada unggah berkas, lakukan penanganan sesuai kebutuhan
    echo "Maaf, IPK Anda tidak memenuhi syarat untuk mendaftar beasiswa.";
}
?>
