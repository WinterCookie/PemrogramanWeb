<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="konfirmasi.php">
        <h1>Hobby:</h1>
        <input type="checkbox" name="hobby[]" id="hobby_lari" value="lari">
        <label for="hobby_lari">Lari</label>
        <br>
        <input type="checkbox" name="hobby[]" id="hobby_loncat" value="loncat">
        <label for="hobby_loncat">Loncat</label>
        <br>
        <input type="checkbox" name="hobby[]" id="hobby_renang" value="renang">
        <label for="hobby_renang">Renang</label>
        <br>
        <br>
        <label for="tanggal">Tanggal Lahir:</label>
        <br>
        <input type="date" id="tanggal" name="dateForm" value="<?php echo date('Y-m-d'); ?>">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
