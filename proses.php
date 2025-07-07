<?php
$conn = new mysqli("localhost", "root", "", "pesanan");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = (int)$_POST['jumlah'];
$telepon = $_POST['telepon'];

$keterangan = ($produk == "Laptop" && $jumlah >= 5) ? "Butuh konfirmasi" : "Langsung diproses";

$sql = "INSERT INTO pesanan_yunella (nama, produk, jumlah, telepon, keterangan)
        VALUES ('$nama', '$produk', $jumlah, '$telepon', '$keterangan')";

if ($conn->query($sql) === TRUE) {
    echo "<p style='color:green;'>✅ Data berhasil disimpan.</p>";
    echo "<a href='tabel.php'>Lihat Tabel</a>";
} else {
    echo "<p style='color:red;'>❌ Gagal menyimpan: " . $conn->error . "</p>";
}
$conn->close();
?>
