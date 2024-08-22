<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pessoas</title>
</head>
<body>
    @component('components.box')
        @foreach ($listaPessoas as $item)
            @slot('url') {{$item['image']}} @endslot
            @slot('nome') {{$item['nome']}} @endslot
            @slot('idade') {{$item['idade']}}@endslot       
        @endforeach
        
    @endcomponent

    {{-- @foreach ($listaPessoas as $item)

        {{$item['image']}} <br>
        {{$item['nome']}}<br>
        {{$item['birth']}}<br>
        {{$item['idade']}}<br>
            <br>
    @endforeach
         --}}
</body>
</html>