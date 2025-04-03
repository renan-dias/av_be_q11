<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETRAN Varginha - Aplicar Multa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="particles-js"></div>

<div class="main-container container">
    <div> <div class="form-card">
            <h1 class="text-center mb-4 text-danger">⚠️Aplicar Multa de Trânsito</h1>
            <p class="text-center text-muted mb-4">Sistema de Registro de Infrações - DETRAN</p>

            <form action="processar.php" method="post">
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa do Veículo*</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="AAA-0000 ou AAA0A00" required>
                </div>
                <div class="mb-3">
                    <label for="infracao" class="form-label">Código da Infração*</label>
                    <input type="text" class="form-control" id="infracao" name="infracao" placeholder="Ex: 55412 (Art. 181, XVII)" required>
                </div>
                <div class="mb-3">
                    <label for="local" class="form-label">Local da Infração*</label>
                    <input type="text" class="form-control" id="local" name="local" placeholder="Av. Exemplo, 123 - Bairro" required>
                </div>

                <div class="mb-3">
                    <label for="email_agente" class="form-label">Email do Agente*</label>
                    <input type="email" class="form-control" id="email_agente" name="email_agente" placeholder="agente@detran.varginha.gov" required>
                </div>

                <div class="d-grid gap-2">
                     <button type="submit" class="btn btn-danger btn-lg">Registrar Multa</button>
                </div>
                <p class="mt-3 text-muted text-center"><small>* Campos obrigatórios</small></p>
            </form>
        </div>
    </div> <footer>
        © <?php echo date('Y'); ?> Prefeitura Municipal de Varginha - Todos os direitos reservados.
    </footer>
<!--     CHAMADA DAS DEPENDÊNCIAS DO PARTICLES.JS E BOOTSTRAP       -->
</div><script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>