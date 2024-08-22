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
    .item{
        margin: 5px;
        padding: 0 10px;
        background:tomato;
        text-align: center;
        font-size: 1.5em;
    }
</style>

<div class="container center "> 

    <div class="item">
        <img src="{{$url}}">
        <p>{{$nome}}</p>
        <p>{{$idade}}</p>
    </div>  

    <div class="item">
        <img src="{{$url}}">
        <p>{{$nome}}</p>
        <p>{{$idade}}</p>
    </div>  

    <div class="item">
        <img src="{{$url}}">
        <p>{{$nome}}</p>
        <p>{{$idade}}</p>
    </div>  

</div>