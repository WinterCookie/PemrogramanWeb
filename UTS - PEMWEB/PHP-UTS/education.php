<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="utils.css" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-zinc-950 text-slate-50 font-poppins">
    <!-- Header -->
    <header class="flex justify-center items-center pt-8 pb-8 bg-slate-950 shadow-xl">
      <nav>
        <ul class="flex gap-28 justify-end font-semibold text-purple-700">
          <li>
            <a
              class="hover:text-rose-700 hover:duration-500 transition-colors duration-300"
              href="home.php"
              >Home</a
            >
          </li>
          <li>
            <a
              class="hover:text-rose-700 hover:duration-500 transition-colors duration-300"
              href="about.php"
              >About</a
            >
          </li>
          <li>
            <a
              class="hover:text-rose-700 hover:duration-500 transition-colors duration-300"
              href="projects.php"
              >Projects</a
            >
          </li>
          <li>
            <a
              class="hover:text-rose-700 hover:duration-500 transition-colors duration-300"
              href="skills.php"
              >Skills</a
            >
          </li>
          <li>
            <a
              class="hover:text-rose-700 hover:duration-500 transition-colors duration-300"
              href="contact.php"
              >Contact</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <!-- End of Header -->
    <!-- Main -->
    <main>
      <section class="flex flex-col justify-center items-center my-16 gap-8 cursor-default">
        <div class=" flex flex-row bg-slate-950 h-auto w-auto rounded-xl p-8 shadow-xl border-black border">
          <div class="mr-8">
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            $sql = 'SELECT images, title FROM education LIMIT 1 OFFSET 1';

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $images = $row['images'];
                      $title = $row['title'];

                      // tampilkan gambar
                      echo "<img class='h-36 w-36' src='$images' alt='$title'>";
                  }
              } else {
                  echo "Data tidak ditemukan";
              }

              // tutup koneksi
              mysqli_close($conn);
            ?>
          </div>
          <div>
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            $sql = 'SELECT title, description FROM education LIMIT 1 OFFSET 1';

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $title = $row['title'];
                      $description = $row['description'];

                      // tampilkan gambar
                      echo "<h1 class='font-semibold text-xl mb-4 text-rose-700'>$title</h1>";
                      echo "<p class='max-w-prose text-justify'>$description</p>";
                  }
              } else {
                  echo "Data tidak ditemukan";
              }

              // tutup koneksi
              mysqli_close($conn);
            ?>
          </div>
        </div>
        <!-- Next Box -->
        <div class=" flex flex-row bg-slate-950 h-auto w-auto rounded-xl p-8 shadow-xl border-black border">
          <div class="mr-8">
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            $sql = 'SELECT images, title FROM education LIMIT 1';

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $images = $row['images'];
                      $title = $row['title'];

                      // tampilkan gambar
                      echo "<img class='h-36 w-36' src='$images' alt='$title'>";
                  }
              } else {
                  echo "Data tidak ditemukan";
              }

              // tutup koneksi
              mysqli_close($conn);
            ?>
          </div>
          <div>
            <?php
            // include koneksi ke database
            include 'koneksi.php';

            $sql = 'SELECT title, description FROM education LIMIT 1';

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $title = $row['title'];
                      $description = $row['description'];

                      // tampilkan gambar
                      echo "<h1 class='font-semibold text-xl mb-4 text-rose-700'>$title</h1>";
                      echo "<p class='max-w-prose text-justify'>$description</p>";
                  }
              } else {
                  echo "Data tidak ditemukan";
              }

              // tutup koneksi
              mysqli_close($conn);
            ?>
          </div>
        </div>
      </section>
    </main>
    <!-- End of Main -->
    <!-- footer -->
    <footer class="w-auto flex flex-col justify-center items-center bg-slate-950 p-5 shadow-2xl">
      <div class="w-auto mb-4">
          <ul class="flex gap-8">
              <li><a href="https://www.linkedin.com/in/daarel-fatillah-224210318?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="text-purple-700 text-2xl fa-brands fa-linkedin"></i></a></li>
              <li><a href="https://github.com/WinterCookie"><i class="text-purple-700 text-2xl fa-brands fa-github"></i></a></li>
              <li><a href="https://www.instagram.com/darellsfa/profilecard/?igsh=OWd6anlsanFpYTVn"><i class="text-purple-700 text-2xl fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="text-purple-700 text-2xl fa-brands fa-twitter"></i></a></li>
          </ul>
      </div>
      <div>
          <p class="text-purple-700 text-xs cursor-default">© 2024 My Personal Website. All rights reserved.</p> <!-- Menambahkan class text-purple-700 agar sesuai dengan warna ikon -->
      </div>
    </footer>
    <!-- End of Footer -->
  </body>
</html>