<?php
// Termasuk file konfigurasi
include("../koneksi.php");

// mengambil ID siswa dari parameter URL
$id = $_GET['id'];

// mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM tb_events WHERE event_id = '$id'");
$evnt = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Events</title>
</head>
<body>
    <h3>Edit Data Events</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="event_id" value="<?php echo $evnt['event_id']; ?>">
         <table border="0">
            <tr>
                <td>Nama_event</td>
                <td>
                    <input type="text" name="nama_event"
                    value="<?php echo $evnt['nama_event']; ?>" required>
                </td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>
                        <input type="text" name="lokasi"
                        value="<?php echo $evnt['lokasi']; ?>" required>
                    </td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>
                            <input type="date" name="tanggal"
                            value="<?php echo $evnt['tanggal']; ?>" style="width: 100%">
                        </td>
                    </tr>
         </table>
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>