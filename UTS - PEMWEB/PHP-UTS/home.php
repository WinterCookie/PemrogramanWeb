<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>

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
  <body class="bg-slate-950 text-slate-50 font-poppins">
    <!-- Header -->
    <header class="flex justify-center items-center pt-8 pb-8">
      <nav>
        <ul class="flex gap-28 justify-end font-semibold text-purple-700">
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
              href="education.php"
              >Education</a
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
      <div class="background__img"></div>
      <!-- Hero Section -->
      <section
        class="w-full mt-16 mr-auto ml-auto pr-2 pl-2 text-center items-center justify-center flex flex-col gap-4 cursor-default"
      >
        <h2
          class="text-transition text-4xl font-bold leading-4 shadow-2xl"
        >
          Hi I'm Daarel🙌
        </h2>
        <h1
          class="text-8xl font-bold tracking-tighter uppercase text-purple-700"
        >
          FRONT-END <br />
          WEB DEVELOPER
        </h1>
        <p class="text-base font-medium">
          <span class="typing">
            A passionate <strong>Frontend Developer</strong> web developer and
            <strong>UI / UX Enthusiast</strong> that creating visually appealing
            web.</span
          >
        </p>
        <div
          class="mt-2 bg-zinc-950 w-12 h-12 rounded-full divide-solid p-3 animate-bounce -mb-5 shadow-xl"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-6 text-purple-700"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"
            />
          </svg>
        </div>
        <a class="btn mt-6" href="contact.php">Reach out</a>
      </section>
      <!-- End of Hero -->
    </main>
    <!-- End of Main -->
    <!-- footer -->
    <footer class="w-auto flex flex-col justify-center items-center bg-zinc-950 p-5 mt-16 shadow-2xl">
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
