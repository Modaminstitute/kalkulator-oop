<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="registrasi.css">
</head>

<body>
    <button class="back-btn" onclick="window.location.href='login_pert4.php';">Back to login</button>

    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="POST" action="regisclass.php">
            <div class="input-group">
                <input type="text" name="fname" placeholder="First Name"
                    onkeydown="return /^[a-zA-Z]$/.test(event.key) || event.key === 'Backspace'" required />
            </div>
            <div class="input-group">
                <input type="text" name="lname" placeholder="Last Name"
                    onkeydown="return /^[a-zA-Z]$/.test(event.key) || event.key === 'Backspace'" required />
            </div>
            <div class="input-group">
                <input type="text" name="nim" placeholder="Student ID"
                    onkeydown="return /^[0-9]$/.test(event.key) || event.key === 'Backspace'" required />
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="New Password" required />
            </div>
            <div class="input-group">
                <input type="submit" value="Register" />
            </div>
        </form>
    </div>

    <footer>
        <p class="credit">© 2024 by Nickel M and Nicholas ST</p>
    </footer>
</body>

</html>