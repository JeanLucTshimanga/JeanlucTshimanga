<?php
function compute(float $num1, float $num2, string $operation): float {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                throw new Exception("Division par zéro non permise.");
            }
            return $num1 / $num2;
        default:
            throw new Exception("Opération non valide.");
    }
}

$error = null;
$num1 = isset($_GET['num1']) ? (float) $_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? (float) $_GET['num2'] : 0;
$operation = $_GET['operation'] ?? '+';
$result = null;

try {
    if (!in_array($operation, ['+', '-', '*', '/'])) {
        $error = "Opération non valide.";
    } else {
        $result = compute($num1, $num2, $operation);
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
   />
   <title>Calculatrice</title>
</head>
<body>
   <h1>Calculatrice</h1>
   <form action="" method="get">
       <label for="num1">Nombre 1:</label>
       <input type="number" step="any" name="num1" id="num1" required value="<?= htmlspecialchars($num1) ?>">
       
       <label for="num2">Nombre 2:</label>
       <input type="number" step="any" name="num2" id="num2" required value="<?= htmlspecialchars($num2) ?>">
       
       <label for="operation">Opération:</label>
       <select name="operation" id="operation">
           <option value="+" <?= $operation == '+' ? 'selected' : '' ?>>+</option>
           <option value="-" <?= $operation == '-' ? 'selected' : '' ?>>-</option>
           <option value="*" <?= $operation == '*' ? 'selected' : '' ?>>×</option>
           <option value="/" <?= $operation == '/' ? 'selected' : '' ?>>÷</option>
       </select>
       
       <button type="submit">Calculer</button>
   </form>
   <hr>
   <?php if ($error): ?>
       <p style="color: red;"><?= htmlspecialchars($error) ?></p>
   <?php elseif (isset($result)): ?>
       <p>Résultat : <?= $result ?></p>
   <?php endif; ?>
</body>
</html>