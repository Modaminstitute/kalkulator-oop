<?php
require_once 'kalkulator.php';

$result = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $bilangana = $_POST['bilangana'] ?? null;
    $bilanganb = $_POST['bilanganb'] ?? null;
    $operator = $_POST['operator'] ?? null;

    if ($bilangana !== null && $bilanganb !== null && $operator !== null) {
        $calculator = new Calculator();

        try {
            switch ($operator) {
                case 'add':
                    $result = $calculator->add($bilangana, $bilanganb);
                    break;
                case 'minus':
                    $result = $calculator->minus($bilangana, $bilanganb);
                    break;
                case 'multiply':
                    $result = $calculator->multiply($bilangana, $bilanganb);
                    break;
                case 'divide':
                    $result = $calculator->divide($bilangana, $bilanganb);
                    break;
                default:
                    $error = "Invalid operation selected.";
                    break;
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    } else {
        $error = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link rel="stylesheet" href="proses.css">
</head>

<body>
    <div class="result-container">
        <h1>Calculation Result</h1>

        <div class="result-row">
            <?php if ($result !== ''): ?>
            <h2>Result:</h2>
            <p><?= htmlspecialchars($result) ?></p>
            <?php elseif ($error !== ''): ?>
            <h2 class="error">Error:</h2>
            <p><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
        </div>

        <a href="indexKalkulator.php">Back to Calculator</a>
    </div>
</body>

</html>