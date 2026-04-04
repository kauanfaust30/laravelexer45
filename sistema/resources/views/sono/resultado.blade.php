<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Sono</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container mt-5">

    <div class="card shadow p-4 text-center bg-secondary text-light">

        <h2 class="mb-3"> Resultado do Sono</h2>

        <p><strong>Idade:</strong> {{ $idade }} anos</p>
        <p><strong>Horas dormidas:</strong> {{ $horas }} horas</p>

        <hr>

        <h4>Faixa etária: {{ $faixa }}</h4>
        <p>Recomendado: {{ $min }} a {{ $max }} horas</p>

        @php
            $cor = 'secondary';

            if (str_contains($qualidade, 'adequado')) {
                $cor = 'success';
            } elseif (str_contains($qualidade, 'insuficiente')) {
                $cor = 'danger';
            } else {
                $cor = 'warning';
            }
        @endphp

        <div class="alert alert-{{ $cor }} mt-3">
            <h4>{{ $qualidade }}</h4>
        </div>

        <a href="/" class="btn btn-outline-light mt-3">
             Voltar
        </a>

    </div>

</div>

</body>
</html>