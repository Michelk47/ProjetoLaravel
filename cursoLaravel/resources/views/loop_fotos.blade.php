<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop de fotos</title>
</head>

<style>

 .container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
 }

 .loop{
    width: 150px;
    height: 150px;
 }

        
</style>
<body>
<div class="container"> 
@for ($i = 0; $i < 50; $i++)
    <div class ="loop"> 
        <img src="{{ $url }}{{ $i }}">
    </div>
@endfor
</div>




    
</body>
</html>