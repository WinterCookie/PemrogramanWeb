<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

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
  <body class="bg-slate-950 text-rose-700 font-poppins">
    <!-- Header -->
    <header class="flex justify-center items-center pt-8 pb-8">
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
              href="education.php"
              >Education</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <!-- End of Header -->
    <!-- Main -->
    <main>
      <!-- Hero Section -->
      <section class="flex flex-col justify-center items-center my-16">
        <div class="mb-16">
          <h1 class="text-purple-700 font-bold text-3xl">Sure! I'd be happy to collaborate. What do you have in mind?</h1>
        </div>
        <form class="border-2 border-purple-700 py-16 px-32 flex flex-col justify-center items-center" action="contact.php" method="POST" onsubmit="return validateForm()">
          <label class="text-lg font-semibold" for="name">Full Name</label>
          <input class="w-96 bg-slate-950 border-b-2 border-rose-700 p-2 focus:outline-none" type="text" id="name" name="name" required>
          <div class="m-4" id="error_name"></div>

          <label class="mt-8 text-lg font-semibold" for="email">Email</label>
          <input class="w-96 bg-slate-950 border-b-2 border-rose-700 p-2 focus:outline-none" type="email" id="email" name="email" required><br><br>
          <div class="m-4" id="error_email"></div>
  
          <label class="text-lg font-semibold" for="message">Message</label>
          <textarea class="mt-4 resize-none bg-slate-950 border-2 border-rose-700 focus:outline-none p-2 w-96 h-40" id="message" name="message" required></textarea><br><br>
          <div class="m-4" id="error_message"></div>
  
          <button class="btn" type="submit">Contact Me</button>

          <?php
          include 'koneksi.php';

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = $conn->real_escape_string($_POST['name']);
              $email = $conn->real_escape_string($_POST['email']);
              $message = $conn->real_escape_string($_POST['message']);

              $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

              if ($conn->query($sql) === TRUE) {
                  echo "<p class='mt-4'>Form has been submitted!</p>";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();
          }
          ?>
        </form>
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
    <!-- Javascript modules -->
    <script src="src/components/validate-form.js"></script>
  </body>
</html>
