<?php
if (isset($_GET['nama'])) {
    echo 'Ini halaman profil ' . htmlspecialchars($_GET['nama']);
} else {
    echo 'Nama pengguna tidak ditemukan';
}
?>
