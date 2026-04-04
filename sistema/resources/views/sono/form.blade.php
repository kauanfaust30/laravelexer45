<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Qualidade do Sono</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark text-light">

<div class="container mt-5">

    <div class="card shadow p-4 bg-secondary text-light">
        
        <h2 class="text-center mb-4">Qualidade do Sono</h2>

        <form method="POST" action="/sono/calcular">
            @csrf

            <div class="mb-3">
                <label class="form-label">Idade</label>
                <input type="number" step="0.1" name="idade" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Horas dormidas</label>
                <input type="number" step="0.1" name="horas" class="form-control" required>
            </div>

            <button class="btn btn-warning w-100">
                Analisar Sono</button>

        </form>

    </div>

</div>

</body>
</html>