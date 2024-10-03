<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';

    $kewarganegaraan = isset($_POST['jdel']) ? $_POST['jdel'] : '';

    $layanan = isset($_POST['layanan']) ? $_POST['layanan'] : [];

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Kewarganegaraan: " . htmlspecialchars($kewarganegaraan) . "<br>";
    echo "Layanan: ";
    if (!empty($layanan)) {
        foreach ($layanan as $lay) {
            echo htmlspecialchars($lay) . " ";
        }
    } else {
        echo "Tidak ada layanan yang dipilih";
    }
}
?>
