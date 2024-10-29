<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suceror</title>
    <link rel="stylesheet" href="suceror.css">
</head>

<body>
    <div class="container">
        <?php
        // login system logic
        class loginSystem
        {
            function foo(): void
            {
                if (isset($this)) {
                    echo '$this is defined (' . get_class($this) . ")\n";
                } else {
                    echo "\$this is not defined.\n";
                }
            }

            function login($email, $password): bool 
            {
                // email pw static
                $static_email = 'budi@pradita.ac.id';
                $static_password = base64_encode('12345');
                $static_fname = 'Budi';
                $encrypted_password = base64_encode($password); 

                // Check email pw static
                if ($email == $static_email && $encrypted_password == $static_password) {
                    // Sukses
                    echo '<div class="success">Login berhasil, Halo ' . htmlspecialchars($static_fname) . '!</div>';
                    
                    echo '
                        <script type="text/javascript">
                            setTimeout(function() {
                                  window.location.href = "dashboard.html";";
                            }, 1000);
                        </script>
                    ';
                    return true; //return sukses
                }

                // ambil users.txt
                $file_path = 'users.txt';
                if (file_exists($file_path)) {
                    $users = file($file_path);

                    // Loop through users.txt dari mbah gpt
                    foreach ($users as $user) {
                        list($fname, $lname, $nim, $stored_email, $stored_password) = explode(",", trim($user));

                        // cek email pw dynamic
                        if ($email == $stored_email && $encrypted_password == $stored_password) {
                            // Sukses
                            echo '<div class="success">Login berhasil, Halo ' . htmlspecialchars($fname) . ' ' . htmlspecialchars($lname) . '!</div>';
                            echo '
                                <script type="text/javascript">
                                    setTimeout(function() {
                                       window.location.href = "dashboard.html";
                                    }, 1500);
                                </script>
                            ';
                            return true; // return sukses
                        }
                    }
                }

                // gagal
                echo '<div class="error">Login gagal!, Masukan email dan password yang valid</div>';
                echo '<br><form action="login_pert4.php" method="post">';
                echo '<button type="submit">Kembali ke halaman login</button>';
                echo '</form>';

                return false; // Return false login
            }
        }

        // flag login gagal
        $login_failed = false;

        // cek email pw ke post atau ga copy pa hendra
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $login = new loginSystem();
            $login_failed = !$login->login($_POST["email"], $_POST["password"]); // Set login failure flag if login fails
        }
        ?>
    </div>

    <?php
    // lupa pw login gagal
    if ($login_failed) {
        echo '<div class="lupaPW"><a href="forgotPW.php">Lupa Password?</a></div>';
    }
    ?>

</body>

</html>