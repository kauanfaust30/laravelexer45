<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Consumo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <!-- INSTRUÇÕES -->
    <div class="card mb-4 shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Instruções</h5>
        </div>
        <div class="card-body">
            <p>
                Esta aplicação calcula o valor gasto com combustível em uma viagem,
                com base na distância, consumo do veículo e preço do combustível.
            </p>
        </div>
    </div>

    <!-- FORMULÁRIO -->
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Cálculo do Consumo</h5>
        </div>

        <div class="card-body">
            <form action="{{url('/gasto')}}" method="get">

                <div class="mb-3">
                    <label class="form-label">Combustível</label>
                    <select name="combustivel" class="form-select">
                        <option value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Valor (R$)</label>
                    <input type="number" step="0.01" name="valorcombustivel" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Distância (km)</label>
                    <input type="number" step="0.1" name="distancia" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Consumo do veículo (km/l)</label>
                    <input type="number" step="0.01" name="autonomia" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Calcular
                </button>

            </form>
        </div>
    </div>

</div>

</body>
</html>