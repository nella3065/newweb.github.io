<?php
$conn = new mysqli("localhost", "root", "", "pesanan");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM pesanan_yunella");
?>

<!DOCTYPE html>
<html>
<head><title>Data Pesanan</title></head>
<body>
<h2>Daftar Pesanan</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Telepon</th>
        <th>Keterangan</th>
    </tr>
    <?php
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['produk']}</td>
                <td>{$row['jumlah']}</td>
                <td>{$row['telepon']}</td>
                <td>{$row['keterangan']}</td>
              </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
