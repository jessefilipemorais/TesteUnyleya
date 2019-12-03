<!doctype html>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Teste Unyleya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!--Bibliotecas para máscaras -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <script type="text/javascript" src="{{ URL::asset('js/generoliterario/generoliterarioFuncoes.js') }}"></script>
    </head>
    <body>
        @include('menu')

        <h2 align = 'center'>Editar Gênero Literário</h2>
        <br>      
        <form class="container" method="post" action ="/generoliterarioSalvarEdicao" target = "_self">
            @csrf
            <div>
                <label for="idgeneroliterario">ID:</label>
                <input type="text" class="form-control" id="idgeneroliterario" name="idgeneroliterario" readonly="true" value='{{ $generoliterario->idgeneroliterario }}'>
            </div>
            <br>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required="true" value='{{ $generoliterario->nome }}'>
            </div>
            <br>
            <div class="form-group" align="center">
                <a class="btn btn-danger" style="width: 20%" href="/generoliterarioHome">Voltar</a>
                <button class="btn btn-success" style="width: 20%" type="submit" id="botaoCad" >Salvar</button>
            </div>
        </form>
    </body>
</html>
