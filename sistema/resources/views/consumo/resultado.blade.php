<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow text-center">
        <div class="card-header bg-success text-white">
            <h5>Resultado do Cálculo</h5>
        </div>

        <div class="card-body">

            <h4 class="mb-3">Valor total do gasto:</h4>

            <p class="fs-4">
                <strong>{{$combustivel}}:</strong> R$ {{$valor}}
            </p>

            <a href="{{url('/')}}" class="btn btn-secondary mt-3">
                Voltar
            </a>

        </div>
    </div>

</div>

</body>
</html>