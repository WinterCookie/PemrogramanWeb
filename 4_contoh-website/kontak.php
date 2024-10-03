<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Halaman Kontak</title>

    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
  </head>
  <body>
    <header class="navbar navbar-dark bg-dark header__container-detil">
      <nav>
        <ul class="nav__container">
          <li><a class="nav__text" href="dashboard.php">Home</a></li>
          <li><a class="nav__text" href="about.php">About</a></li>
          <li><a class="nav__text" href="#">Kontak</a></li>
        </ul>
      </nav>
      <hr class="hr" />
    </header>
    <main>
      <form method="POST" action="konfirmasiKontak.php">
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
          <p>Formulir Kontak: </p>
          <label for="nama">Nama: </label>
          <!-- Tambahkan name untuk input -->
          <input id="nama" type="text" name="nama" />
        </div>
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
          <p>Kewarganegaraan:</p>
          <input id="radio11" type="radio" name="jdel" value="WNI"/>
          <label for="radio11">WNI</label>
          <input id="radio22" type="radio" name="jdel" value="Asing"/>
          <label for="radio22">Asing</label>
        </div>
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
          <p>Layanan:</p>
          <!-- Tambahkan value untuk checkbox -->
          <input id="radio1" type="checkbox" name="layanan[]" value="Layanan WNI"/>
          <label for="radio1">WNI</label>
          <input id="radio2" type="checkbox" name="layanan[]" value="Layanan Asing"/>
          <label for="radio2">Asing</label>
        </div>
        <div class="container">
          <button type="submit" id="tombolSubmit">Kirim</button>
          <button type="reset" id="tombolHapus">Hapus</button> <!-- Ganti dari insert ke reset -->
        </div>
      </form>
    </main>
  </body>
</html>