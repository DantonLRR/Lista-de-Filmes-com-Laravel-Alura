<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>

<body>
    <h1>Séries</h1>
    <ul>
   <!-- ao mudar a extensao para .blade.php
    é possivel utilizar o php de forma mais facil dentro do html
    {{ $nome }}  → mostra o valor de uma variável
    @foreach     → faz um loop
    @if          → faz um if/else
    @include     → inclui outro pedaço de HTML
     -->
        @foreach ($series as $serie) 
        <!-- a variavel $series veio da funcao view chamada no controller, passando o valor 'series' com os dados definidos no controller
         -->
        <li>{{$serie}}</li>
        @endforeach
    </ul>

</body>

</html>