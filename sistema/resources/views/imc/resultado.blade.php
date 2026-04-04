<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado IMC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand"> Sistema de Saúde</span>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow p-4 text-center">

        <h2 class="mb-3">Resultado do IMC</h2>

        <h4>{{ $nome }} </h4>

        <p><strong>Idade:</strong> {{ $idade }} anos</p>
        <p><strong>Peso:</strong> {{ $peso }} kg</p>
        <p><strong>Altura:</strong> {{ $altura }} m</p>

        <hr>

        <h3>IMC: {{ number_format($imc, 2) }}</h3>

        @php
            $cor = 'secondary';

            if ($classificacao == "Peso normal") $cor = 'success';
            elseif ($classificacao == "Sobrepeso") $cor = 'warning';
            elseif ($classificacao == "Abaixo do peso") $cor = 'info';
            else $cor = 'danger';
        @endphp

        <div class="alert alert-{{ $cor }} mt-3">
            <h4>{{ $classificacao }}</h4>
        </div>

        <a href="/" class="btn btn-outline-primary mt-3">
             Voltar
        </a>

    </div>

</div>

</body>
</html>