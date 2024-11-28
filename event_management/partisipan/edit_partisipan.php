<?php
// Termasuk file konfigurasi
include("../koneksi.php");

// mengambil ID siswa dari parameter URL
$id = $_GET['id'];

// mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM partisipan WHERE partisipan_id = '$id'");
$partisi = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data partisipan</title>
</head>
<body>
    <h3>Edit Data partisipan</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="partisipan_id" value="<?php echo $partisi['partisipan_id']; ?>">
         <table border="0">
            <tr>
                <td>Nama_partisipan</td>
                <td>
                    <input type="text" name="nama"
                    value="<?php echo $partisi['nama']; ?>" required>
                </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email"
                        value="<?php echo $partisi['email']; ?>" required>
                    </td>
                    </tr>
         </table>
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>