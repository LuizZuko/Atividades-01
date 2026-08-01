<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC</title>
</head>
<body>
    <form method="POST">
        <label>Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required><br><br>
        
        <label>Altura (m):</label>
        <input type="number" step="0.01" name="altura" required><br><br>
        
        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "  ";
        }
    }
    ?>
</body>
</html>