<?php
    $user = 'hilemn';
    $password = 123;

    if (isset($_POST['submit'])){
        if($_POST['nama'] == $user && $_POST['password'] == $password){
            header('Location: profile.php?nama='. urlencode($user));
            exit();
        } else {
            echo 'Login gagal!';
        }
    }
?>

<!-- Form login -->
<form action="login.php" method="POST">
    <input type="text" name="nama" placeholder="Nama pengguna">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>
