<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="indexKalkukator.css">
</head>

<body>
    <div class="form-container">
        <h1>Simple Calculator</h1>
        <form method="post" action="proses.php">
            <div class="input-group">
                <label for="bilangana">Bilangan 1:</label>
                <input type="number" name="bilangana" id="bilangana" required>
            </div>

            <div class="input-group">
                <label for="bilanganb">Bilangan 2:</label>
                <input type="number" name="bilanganb" id="bilanganb" required>
            </div>

            <div class="input-group">
                <label for="operator">Operation:</label>
                <select name="operator" id="operator" required>
                    <option value="add">Tambah (+)</option>
                    <option value="minus">Kurang (-)</option>
                    <option value="multiply">Kali (*)</option>
                    <option value="divide">Bagi (/)</option>
                </select>
            </div>

            <button type="submit">Kalkulasikan!</button>
        </form>
    </div>
</body>

</html>