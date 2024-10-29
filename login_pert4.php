<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="SimpleClass_pertemuan4.php">
            <div class="input-group">
                <input type="email" name="email" placeholder="Alamat Email" required />
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="input-group">
                <input type="submit" value="Masuk" />
            </div>
            <p class="registrasi-text">Belum punya akun? <a href="registrasi.php">Daftar disini</a></p>
        </form>
    </div>

    <footer>
        <p class="credit">© 2024 by Nickel M and Nicholas ST</p>
    </footer>
</body>

</html>