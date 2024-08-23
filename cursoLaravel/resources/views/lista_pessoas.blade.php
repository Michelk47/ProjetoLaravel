<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pessoas</title>
</head>

<style>
    .container{
        max-width: 100%;
        margin:0;
        display: flex;
        border: 1px solid #ccc;

    }
    .center{
        justify-content: center
    }
</style>
<body>
    <div class="container center "> 
        @foreach ($listaPessoas as $item)
            @component('components.box')
                    @slot('url') {{$item['image']}} @endslot
                    @slot('nome') {{$item['nome']}} @endslot
                    @slot('idade') {{$item['idade']}}@endslot       
            @endcomponent
        @endforeach
    </div>
</body>
</html>