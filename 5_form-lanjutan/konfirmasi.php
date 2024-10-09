<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil hobi dan tanggal lahir
    if (!empty($_POST['hobby'])) {
        $hobbies = $_POST['hobby'];
    } else {
        $hobbies = [];
    }

    $new_date = new DateTime($_POST['dateForm']);

    // cehckbox dan menampilkan hobi dan tanggal lahir
    if(count($hobbies) > 1) {
        $hobiTerakhir = array_pop($hobbies);
        $strHobi = implode(", ", $hobbies) . " dan {$hobiTerakhir}";
    } else {
        $strHobi = $hobbies[0];
    }
    
    echo "<p>Hobi:<p>";
    echo $strHobi;
    echo "<br><br>Tanggal lahir: " . $new_date->format('Y-m-d');

    // kalkulasi umur
    $currentDate = new DateTime();
    $age = $currentDate->diff($new_date);

    echo "<br><br>Berarti umur anda sudah " . $age-> y . " tahun";
}
?>