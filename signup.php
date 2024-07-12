<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unggulan App - Sign Up</title>
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #e0f7ef;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      text-align: center;
      border: none;
      animation: fadeIn 1s ease-out;
    }

    header {
      margin-bottom: 20px;
    }

    h1 {
      font-size: 36px;
      color: #2e8b57;
      font-family: 'Montserrat, sans-serif;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1.5s ease-out;
    }

    h3 {
      font-size: 24px;
      color: #2e8b57;
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
    input[type="email"],
    input[type="date"] {
      width: calc(100% - 22px);
      padding: 10px;
      margin-top: 3px;
      border: 1px solid #2e8b57;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 16px;
      color: #333;
    }

    input[type="submit"] {
      background-color: #2e8b57;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s, transform 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #1e6a45;
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <h1>Unggulan App</h1>
      <h3>Sign Up</h3>
    </header>

    <form action="signup.php" method="POST" id="signupForm">
      <p>
        <label for="nama_lengkap">Nama Lengkap: </label>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required />
      </p>
      <p>
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" required />
      </p>
      <p>
        <label for="email">E-Mail: </label>
        <input type="email" name="email" placeholder="email" required />
      </p>
      <p>
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password" required />
      </p>
      <p>
        <label for="confirm_password">Konfirmasi Password: </label>
        <input type="password" name="confirm_password" placeholder="Konfirmasi password" required />
      </p>
      <p>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" placeholder="YYYY-MM-DD" required />
      </p>
      <p>
        <input type="submit" value="Sign Up" />
      </p>
    </form>
  </div>
</body>

</html>
