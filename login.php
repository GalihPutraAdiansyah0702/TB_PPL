<?php
$host = "localhost"; // nama host Anda
$username = "root"; //  username database Anda
$password = ""; // Password kosong atau sesuaikan dengan password Anda jika ada
$database = "testting"; //  nama database Anda

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query = "SELECT * FROM pesien WHERE email='$email' AND password='$password'";
      $result = $koneksi->query($query);

      if ($result) {
          if ($result->num_rows > 0) {
              // Proses login berhasil
              // Pengalihan ke index.html
              header("Location: index.html");
              exit(); // Pastikan untuk keluar dari skrip setelah melakukan pengalihan
          } else {
              echo "Login gagal. Email atau password salah.";
          }
      } else {
          echo "Query gagal: " . $koneksi->error;
      }
  }

  if (isset($_POST["signup"])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query = "INSERT INTO pesien (nama, email, password) VALUES ('$nama', '$email', '$password')";
      $result = $koneksi->query($query);

      if ($result) {
          // Proses registrasi berhasil
          // Redirect atau melakukan tindakan setelah registrasi
      } else {
          echo "Registrasi gagal: " . $koneksi->error;
      }
  }
}

?>
<?php
$host = "localhost"; // nama host Anda
$username = "root"; //  username database Anda
$password = ""; // Password kosong atau sesuaikan dengan password Anda jika ada
$database = "testting"; //  nama database Anda

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["login"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query = "SELECT * FROM his_userpasien WHERE email='$email' AND password='$password'";
      $result = $koneksi->query($query);

      if ($result) {
          if ($result->num_rows > 0) {
              // Proses login berhasil
              // Pengalihan ke index.html
              header("Location: index.html");
              exit(); // Pastikan untuk keluar dari skrip setelah melakukan pengalihan
          } else {
              echo "Login gagal. Email atau password salah.";
          }
      } else {
          echo "Query gagal: " . $koneksi->error;
      }
  }

  if (isset($_POST["signup"])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query = "INSERT INTO his_userpasien (nama, email, password) VALUES ('$nama', '$email', '$password')";
      $result = $koneksi->query($query);

      if ($result) {
          // Proses registrasi berhasil
          // Redirect atau melakukan tindakan setelah registrasi
      } else {
          echo "Registrasi gagal: " . $koneksi->error;
      }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style_c.css">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" class="login" method="post">
            <div class="field">
              <input type="text" name="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form action="#" class="signup" method="post">
            <div class="field">
              <input type="text" name="nama" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
             <input type="text" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Ulangi password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="signup" value="Daftar">
            </div>
    <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>

  <script  src="script.js"></script>
  <a href="Staff/index.php">Login Staff</a>
</body>
</html>
