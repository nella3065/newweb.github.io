<!DOCTYPE html>
<html>
<head><title>Form Pemesanan</title></head>  
<body>  
<h2>Form Pemesanan</h2>
<form method="POST" action="proses.php"> 
    Nama: <input type="text" name="nama" required><br><br> 
    Produk:
    <select name="produk" required>
        <option value="Laptop">Laptop</option>
        <option value="Mouse">Mouse</option> 
        <option value="Keyboard">Keyboard</option>   
    </select><br><br>
    Jumlah: <input type="number" name="jumlah" required><br><br>
    Telepon: <input type="text" name="telepon" required><br><br>
    <input type="submit" value="Kirim">
</form>
</body>
</html>
    