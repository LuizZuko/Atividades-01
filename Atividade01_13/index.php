<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <style>
        .card {
            border: 2px solid #2818bb;
            border-radius: 8px;
            padding: 20px;
            width: 350px;
            background-color: #bdd1f9;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
        .card h2 {
            margin-top: 0;
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <h2>Formulário de Cadastro</h2>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" required><br><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" required><br><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" maxlength="2" required><br><br>

        <label>Sexo:</label><br>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br><br>

        <label>Curso:</label><br>
        <input type="text" name="curso" required><br><br>

        <label>Observações:</label><br>
        <textarea name="observacoes" rows="4" cols="30"></textarea><br><br>

        <button type="submit">Enviar Cadastro</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $estado = htmlspecialchars($_POST['estado']);
        $sexo = htmlspecialchars($_POST['sexo']);
        $curso = htmlspecialchars($_POST['curso']);
        $observacoes = htmlspecialchars($_POST['observacoes']);

        $data_formatada = date("d/m/Y", strtotime($data_nascimento));

        echo "
        <div class='card'>
            <h2>Cartão de Cadastro</h2>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Nascimento:</strong> $data_formatada</p>
            <p><strong>Local:</strong> $cidade - $estado</p>
            <p><strong>Sexo:</strong> $sexo</p>
            <p><strong>Curso:</strong> $curso</p>
            <p><strong>Observações:</strong> $observacoes</p>
        </div>
        ";
    }
    ?>

</body>
</html>