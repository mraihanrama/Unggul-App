<?php include("config.php"); ?>

<!DOCTYPE html>
<?php

// cek apakah tombol daftar sudah diklik atau blum? 
if (isset($_POST['daftar'])) {

    // ambil data dari formulir 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $lahir = $_POST["tanggal_lahir"];

    // buat query 
    $sql = "INSERT INTO user (email, password, tanggal_lahir) 
VALUES ('$email', '$password', '$lahir')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil? 
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses 
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal 
        header('Location: index.php?status=gagal');
    }
} 

?>
<html>

<head>
    <title>Formulir Pendaftaran Pasien Baru | RS Santoso</title>
</head>

<body>
    <header>
        <h3>Sign Up</h3>
    </header>

    <form action="signup.php" method="POST">

        <fieldset>

            <p>
                <label for="email">E-Mail: </label>
                <input type="text" name="email" placeholder="email" />
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="password" name="password" placeholder="password" />
            </p>
          
            <p>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" placeholder="YYYY-MM-DD" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>