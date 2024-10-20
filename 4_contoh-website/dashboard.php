<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="navbar navbar-dark bg-dark header">
      <nav>
        <ul class="nav__container">
          <li><a class="nav__text" href="#">Home</a></li>
          <li><a class="nav__text" href="About.html">About</a></li>
          <li><a class="nav__text" href="kontak.php">Kontak</a></li>
        </ul>
      </nav>
      <img src="https://placehold.co/1900x200" alt="Banner" />
    </header>
    <!-- Header end -->
    <!-- Hero start -->
    <main>
      <h1 class="main__title container">Berita Terkini</h1>
      <div
        class="main__container container shadow p-3 mb-5 bg-body-tertiary rounded"
      >
        <div class="main__subcontainer">
          <img
            class="main__img"
            src="https://placehold.co/200"
            alt="Berita pertama"
          />
        </div>
        <div>
          <h2 class="main__title">Judul 1</h2>
          <p class="main__description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus
            dolor iure labore error ad corrupti nemo eaque quisquam saepe,
            reiciendis excepturi voluptatum deleniti tempora eligendi facilis
            expedita consequuntur doloremque repellat?Lorem ipsum dolor sit,
            amet consectetur adipisicing elit. Amet vero non impedit culpa,
            fugiat id odit rem possimus ipsum eveniet? Fugit voluptates quis
            sint iusto, magnam eum quam! Laudantium, unde.Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Quod, ratione. Velit, aspernatur
            voluptatibus? Iusto vitae corporis modi laboriosam a, rerum deleniti
            beatae enim distinctio id corrupti, sed doloremque minima ullam.
          </p>
          <a
            class="main__link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
            href="beritadetil1.php"
            >Selengkapnya</a
          >
        </div>
      </div>
      <div
        class="main__container container shadow p-3 mb-5 bg-body-tertiary rounded"
      >
        <div class="main__subcontainer">
          <img
            class="main__img"
            src="https://placehold.co/200"
            alt="Berita kedua"
          />
        </div>
        <div>
          <h2 class="main__title">Judul 2</h2>
          <p class="main__description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum,
            quidem suscipit est vero explicabo culpa, ducimus consectetur
            dignissimos officiis nihil earum quisquam eaque voluptas. Dolore,
            perspiciatis! Nemo architecto autem et!Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Possimus commodi blanditiis suscipit
            quos necessitatibus nisi nesciunt veritatis repellendus atque libero
            voluptatibus voluptas eligendi dolor, exercitationem inventore
            voluptatum, id corporis odio.Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ea incidunt commodi nostrum, provident aperiam,
            ullam molestiae iste nisi doloribus quisquam ducimus voluptas iusto
            reprehenderit mollitia exercitationem? Tenetur iure suscipit
            laborum.
          </p>
          <a
            class="main__link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
            href="beritadetil2.php"
            >Selengkapnya</a
          >
        </div>
      </div>
    </main>
    <!-- Hero end -->
    <!-- Footer start -->
    <footer class="container">
      <hr />
      <h2>Link Rekomendasi</h2>
      <ul>
        <li>
          <a
            class="link-dark link-offset-2 link-underline-opacity-100 link-underline-opacity-100-hover"
            href="https://www.google.com"
            >Google</a
          >
        </li>
        <li>
          <a
            class="link-dark link-offset-2 link-underline-opacity-100 link-underline-opacity-100-hover"
            href="https://upj.ac.id/"
            >UPJ</a
          >
        </li>
      </ul>
    </footer>
  </body>
</html>
