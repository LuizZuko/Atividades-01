<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST">
        <label>Número 1:</label>
        <input type="number" step="any" name="num1" required><br><br>
        
        <label>Número 2:</label>
        <input type="number" step="any" name="num2" required><br><br>
        
        <button type="submit" name="operacao" value="Somar">Somar</button>
        <button type="submit" name="operacao" value="Subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="Multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="Dividir">Dividir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = floatval($_POST['num1']);
        $n2 = floatval($_POST['num2']);
        $op = $_POST['operacao'];
        $res = 0;

        switch ($op) {
            case "Somar":
                $res = $n1 + $n2;
                break;
            case "Subtrair":
                $res = $n1 - $n2;
                break;
            case "Multiplicar":
                $res = $n1 * $n2;
                break;
            case "Dividir":
                $res = ($n2 != 0) ? ($n1 / $n2) : "Erro: Divisão por zero";
                break;
        }

        echo "Resultado: " . $res . "  ";
    }
    ?>
</body>
</html>