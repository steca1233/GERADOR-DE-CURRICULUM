<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>

  
  <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Azul claro */
            color: #333; 
        }
    .navbar-brand {
        font-family: Arial Black, Arial, sans-serif;
        font-weight: bold;
        text-transform: uppercase; /* Este código se refere ao menu principal superior */
    }
    .navbar-nav .nav-item .nav-link {
        font-family: Arial Black, Arial, sans-serif;
        font-weight: bold;
        text-transform: uppercase;
    }
    .navbar-nav .nav-item .nav-link:hover {
        color: #333; /* Altere a cor conforme necessário */
    }
    .navbar-nav .nav-item.active .nav-link {
        color: #000; /* Altere a cor conforme necessário */
    }
    .navbar-nav .nav-item {
        margin: 0 10px; /* Ajuste o espaçamento conforme necessário */
    }
    .navbar-nav .nav-item .nav-link {
        border: 2px solid transparent;
        border-radius: 20px; /* Ajuste o raio conforme necessário */
        padding: 10px 20px; /* Ajuste o preenchimento conforme necessário */
        transition: all 0.3s ease;
        background-color: #2D68EB; /* Altere a cor de fundo do menu */
    }
    .navbar-nav .nav-item .nav-link:hover {
        background-color: #f0f0f0; /* Altere a cor conforme necessário */
        border-color: #333; /* Altere a cor conforme necessário */
    }
</style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Azul claro */
            color: #333; /* Cor do texto */
        }
        .container {
            background-color: #fff; /* Fundo branco */
            border-radius: 10px; /* Borda arredondada */
            padding: 20px; /* Espaçamento interno */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Sombra */
        }
        h1 {
            text-transform: uppercase;
            font-size: 2.5rem; /* Tamanho do título */
            margin-bottom: 20px; /* Espaçamento inferior */
            font-weight: bold;
            text-align: center;
        }
        label {
            text-transform: uppercase;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            text-transform: uppercase;
            font-family: Arial, sans-serif;
            border: 2px solid #ccc; /* Cor da borda */
            border-radius: 5px; /* Borda arredondada */
            padding: 8px; /* Espaçamento interno */
            margin-bottom: 10px; /* Espaçamento inferior */
            width: 100%; /* Largura total */
            box-sizing: border-box; /* Garante que o padding não afete a largura total */
        }
        input[type="file"] {
            margin-top: 5px; /* Espaçamento superior */
        }
        .form-group {
            margin-bottom: 20px; /* Espaçamento inferior */
        }
        button[type="submit"],
        button[type="button"] {
            text-transform: uppercase;
            font-family: Arial, sans-serif;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"] {
            background-color: #32cd32; /* Verde */
            color: #fff; /* Cor do texto */
        }
        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #228b22; /* Verde mais escuro */
        }
        <style>
        /* Adicionando uma classe personalizada */
        .fixed-top {
            position: fixed; /* Torna o elemento fixo */
            top: 0; /* Fixa no topo da tela */
            width: 100%; /* Largura total */
            z-index: 1000; /* Z-index para garantir que fique acima de outros elementos */
        }
    </style>
    </style>
    

</head>
<body>

    <div class="container mt-5">
        <h1>Gerador de Currículos</h1>
        <form id="curriculo-form" action="process.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" class="form-control" required>
</div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cnh">CNH:</label>
                <input type="text" id="cnh" name="cnh" class="form-control">
            </div>
            <div class="form-group">
                <label for="qualidades">Qualidades:</label>
                <textarea id="qualidades" name="qualidades" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="defeitos">Defeitos:</label>
                <textarea id="defeitos" name="defeitos" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="experiencias">Experiências Profissionais:</label>

                <div id="experiencias-container">
                    <div class="experiencia">
                        <input type="text" name="experiencia_titulo[]" placeholder="Título" class="form-control"
                            required>
                        <input type="text" name="experiencia_empresa[]" placeholder="Empresa" class="form-control"
                            required>
                        <input type="date" name="experiencia_inicio[]" placeholder="Data de Início" class="form-control"
                            required>
                        <input type="date" name="experiencia_fim[]" placeholder="Data de Fim" class="form-control">
                        <textarea name="experiencia_descricao[]" placeholder="Descrição" class="form-control"
                            required></textarea>
                    </div>
                </div>
                <button type="button" id="add-experiencia" class="btn btn-primary">Adicionar Experiências</button>
            </div>
            <div class="form-group">
                <label for="historico_escolar">Histórico Escolar:</label>
                <div id="historico_escolar">
                    <div class="historico">
                        <input type="text" name="historico_instituicao[]" placeholder="Instituição" class="form-control"
                            required>
                        <input type="text" name="historico_curso[]" placeholder="Curso" class="form-control" required>
                        <input type="date" name="historico_inicio[]" placeholder="Data de Início" class="form-control"
                            required>
                        <input type="date" name="historico_fim[]" placeholder="Data de Fim" class="form-control">
                    </div>
                </div>
                <button type="button" id="add-historico" class="btn btn-primary">Adicinar Histórico</button>
            </div>
            <button type="submit" class="btn btn-success">Gerar Currículo</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
    $(document).ready(function() {
        $('#add-experiencia').click(function() {
            $('#experiencias-container').append(`
                    <div class="experiencia">
                        <input type="text" name="experiencia_titulo[]" placeholder="Título" class="form-control" required>
                        <input type="text" name="experiencia_empresa[]" placeholder="Empresa" class="form-control" required>
                        <input type="date" name="experiencia_inicio[]" placeholder="Data de Início" class="form-control" required>
                        <input type="date" name="experiencia_fim[]" placeholder="Data de Fim" class="form-control">
                        <textarea name="experiencia_descricao[]" placeholder="Descrição" class="form-control" required></textarea>
                    </div>
                `);
        });

        $('#add-historico').click(function() {
            $('#historico_escolar').append(`
                    <div class="historico">
                        <input type="text" name="historico_instituicao[]" placeholder="Instituição" class="form-control" required>
                        <input type="text" name="historico_curso[]" placeholder="Curso" class="form-control" required>
                        <input type="date" name="historico_inicio[]" placeholder="Data de Início" class="form-control" required>
                        <input type="date" name="historico_fim[]" placeholder="Data de Fim" class="form-control">
                    </div>
                `);
        });
    });
    </script>
</body>


</html>
