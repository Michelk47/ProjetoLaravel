<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>
    <h1>Bem vindo!</h1>
 
    {{-- estrutura de repetição laravel --}}
    {{-- @for($i=1; $i <= 10; $i++)
        <p>A valor de I é: {{$i}}</p>
    @endfor --}}

    @foreach ($ingredientes as $receitas)
        <p>
            {{$receitas}} 
            @component('components.botao')
                @slot('cor')
                blue
                @endslot

                Editar
                
            @endcomponent

            @component('components.botao')
            @slot('cor')
                red
            @endslot
            Deletar
                
            @endcomponent
        </p>
    @endforeach


    {{-- <h2>{{$apelido_nome == 'Michel'? 'Sim': 'Não'}}</h2> --}}
    {{-- <h2>{{$apelido_nome}}</h2> --}}

    {{-- como usar o If no laravel --}}
    {{-- @if($apelido_nome == 'Michel3')
        <h1>Som este e o {{$apelido_nome}} </h1>
    @elseif($apelido_nome == 'Beatriz')
        <h1>Olá {{$apelido_nome}} que bom que senhora voltou!</h1>
    @else
        <h1>Não é ninguem!</h1>
    @endif --}}
    {{-- ele ta intrepertando um html passo pelo o SiteController --}}
    {{-- <p>{!! $html!!}</p> --}}
    
</body>
</html>