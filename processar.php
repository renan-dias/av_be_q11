<?php
header('Content-Type: text/html; charset=utf-8'); // Garante a codificação correta
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Multa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body { padding: 30px; background-color: #f8f9fa; }
        .card { max-width: 600px; margin: 20px auto; }
    </style>
</head>
<body>
<div class="card">
    <div class="card-body">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dados (limpa e protege contra XSS simples)
    $placa        = htmlspecialchars(trim($_POST['placa'] ?? 'N/A'));
    $infracao     = htmlspecialchars(trim($_POST['infracao'] ?? 'N/A'));
    $local        = htmlspecialchars(trim($_POST['local'] ?? 'N/A'));
    $email_agente = htmlspecialchars(trim($_POST['email_agente'] ?? 'N/A'));

    // !!! Olá futuro dev, deixei pronto aqui um esquema para adicionar novos dados ao formulário. !!!
    // Exemplo: $novo_campo = htmlspecialchars(trim($_POST['novo_campo'] ?? 'N/A'));

    if (!empty(trim($_POST['placa'])) && !empty(trim($_POST['infracao'])) && !empty(trim($_POST['local'])) && !empty(trim($_POST['email_agente']))) {
        echo "<h1 class='card-title text-success'>Multa Registrada com Sucesso!</h1>";
        echo "<p><strong>Placa do Veículo:</strong> $placa</p>";
        echo "<p><strong>Código da Infração:</strong> $infracao</p>";
        echo "<p><strong>Local:</strong> $local</p>";
        echo "<p><strong>Data:</strong> $data</p>";

        // !!! PONTO DE MODIFICAÇÃO PARA OS ALUNOS: Exibir o valor do novo campo AQUI !!!
        // Exemplo: echo "<p><strong>Novo Campo:</strong> $novo_campo</p>";

        echo "<p class='mt-3 text-muted'><small>Registrado pelo agente: $email_agente</small></p>";
        echo "<hr>";
        echo "<p class='text-info'>Este é um comprovante simulado do sistema DETRAN.</p>";

    } else {
        echo "<h1 class='card-title text-danger'>Erro no Registro!</h1>";
        echo "<p class='text-danger'><strong>Falha:</strong> Um ou mais campos obrigatórios não foram preenchidos corretamente.</p>";
    }
} else {
    echo "<h1 class='card-title text-warning'>Acesso Inválido!</h1>";
    echo "<p>Esta página só pode ser acessada através do formulário de registro.</p>";
}

?>
        <a href="index.php" class="btn btn-secondary mt-3">Voltar ao Formulário</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>