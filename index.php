<?php
$mensagem = "";

// Quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"] ?? "";

    file_put_contents("notas.txt", $texto);

    $mensagem = "✅ Texto salvo com sucesso!";
}

// Ler o conteúdo atual do arquivo (se existir)
$conteudo_salvo = file_exists("notas.txt") ? file_get_contents("notas.txt") : "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bloco de Notas com PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        textarea {
            width: 100%;
            height: 300px;
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 25px;
            margin-top: 10px;
            font-size: 16px;
            background-color: #2e8b57;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .mensagem {
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Bloco de Notas (PHP)</h1>
        <form method="post">
            <textarea name="texto" placeholder="Escreva aqui..."><?php echo htmlspecialchars($conteudo_salvo); ?></textarea>
            <br>
            <input type="submit" value="Salvar">
        </form>
        <?php if ($mensagem): ?>
            <div class="mensagem"><?php echo $mensagem; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
