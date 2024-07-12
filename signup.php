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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        header {
            margin-bottom: 20px;
        }

        h3 {
            font-size: 24px;
            color: #333;
        }

        form {
            text-align: left;
        }

        p {
            margin: 10px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 3px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h3>Sign Up</h3>
        </header>

        <form action="signup.php" method="POST">
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
        </form>
    </div>
</body>

</html> 
