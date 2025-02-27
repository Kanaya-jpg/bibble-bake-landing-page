<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);

    // Menampilkan data yang diterima
    echo "<h1>Data yang Diterima</h1>";
    echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nomor Telepon:</strong> $telepon</p>";
} else {
    echo "Tidak ada data yang diterima.";
}
?>