<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?= htmlspecialchars($nome) ?></title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Cor de fundo */
            color: #333; /* Cor do texto */
            padding: 20px;
        }
        .curriculo {
            background-color: #fff; /* Fundo branco */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .foto {
            width: 3cm;
            height: 4cm;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 10px;
            border: 2px solid #ccc;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }
        .section p {
            margin-bottom: 5px;
        }
        .button-container button,
        .button-container a.btn {
            padding: 10px 20px;
            background-color: #007bff; /* Azul */
            color: #fff; /* Texto branco */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 180px; /* Defina a largura desejada */
            height: 40px; /* Defina a altura desejada */
            margin-right: 10px; /* Espaçamento entre os botões */
        }
        .button-container button:hover,
        .button-container a.btn:hover {
            background-color: #0056b3; /* Azul mais escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="curriculo">
            <div class="header">
                <?php if ($foto): ?>
                    <img src="<?= htmlspecialchars($foto) ?>" alt="Foto de <?= htmlspecialchars($nome) ?>" class="foto">
                <?php endif; ?>
                <div>
                    <h1><?= htmlspecialchars($nome) ?></h1>
                    <p>Idade: <?= htmlspecialchars($idade) ?></p>
                    <p>Telefone: <?= htmlspecialchars($telefone) ?></p>
                    <p>Email: <?= htmlspecialchars($email) ?></p>
                    <p>Endereço: <?= htmlspecialchars($endereco) ?></p>
                    <p>CNH: <?= htmlspecialchars($cnh) ?></p>
                    <p>Qualidades: <?= nl2br(htmlspecialchars($qualidades)) ?></p>
                    <p>Defeitos: <?= nl2br(htmlspecialchars($defeitos)) ?></p>
                </div>
            </div>
            <div class="section">
                <h2>Experiências Profissionais</h2>
                <?php foreach ($experiencias as $index => $titulo): ?>
                    <div class="experiencia">
                        <h3><?= htmlspecialchars($titulo) ?></h3>
                        <p><?= htmlspecialchars($_POST['experiencia_empresa'][$index]) ?></p>
                        <p><?= htmlspecialchars($_POST['experiencia_inicio'][$index]) ?> - <?= htmlspecialchars($_POST['experiencia_fim'][$index]) ?></p>
                        <p><?= nl2br(htmlspecialchars($_POST['experiencia_descricao'][$index])) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="section">
                <h2>Histórico Educacional</h2>
                <?php foreach ($historicos as $index => $instituicao): ?>
                    <div class="historico">
                        <h3><?= htmlspecialchars($instituicao) ?></h3>
                        <p><?= htmlspecialchars($_POST['historico_curso'][$index]) ?></p>
                        <p><?= htmlspecialchars($_POST['historico_inicio'][$index]) ?> - <?= htmlspecialchars($_POST['historico_fim'][$index]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="button-container">
            <button onclick="printCurriculum()">IMPRIMIR</button>
            <a href="index.php" class="btn btn-primary">Início</a> <!-- Link para a página inicial -->
        </div>
    </div>
    <script>
        function printCurriculum() {
            window.print();
        }
    </script>
</body>
</html>
