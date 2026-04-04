<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Sistema de Saúde</span>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow p-4">
        
        <h2 class="text-center mb-4">Calculadora de IMC</h2>

        <form method="POST" action="/imc/calcular">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Data de nascimento</label>
                <input type="date" name="data" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Peso (kg)</label>
                <input type="number" step="0.1" name="peso" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Altura (m)</label>
                <input type="number" step="0.01" name="altura" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">
                Calcular IMC
            </button>

        </form>

    </div>

</div>

</body>
</html>