<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events_Management</title>
</head>
<body>
    <h3>Tambah Data Event</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Event</td>
                <td><input type="text" name="nama_event" required></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" required></td>
            </tr>
            <tr>
            <td>Tanggal</td>
                <td><input type="date" name="tanggal"
              style="widht: 100%"></td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>                       
</body>
</html>