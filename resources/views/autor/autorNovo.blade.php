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

        <script type="text/javascript" src="{{ URL::asset('js/autor/autorFuncoes.js') }}"></script>
    </head>
    <body>
        @include('menu')
        <h2 align = 'center'>Criar Novo Autor</h2>
        <br>      
        <form class="container" method="post" action ="/autorSalvarNovo" target = "_self">
            @csrf
            <div>
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required="true">
            </div>
            <br>
            <div>
                <label for="anonascimento">Ano de Nasc.:</label>
                <input type="text" class="form-control" id="anonascimento" name="anonascimento" required="true">
            </div>
            <br>
            <div>
                <label for="sexo">Sexo:</label>
                <div class="form-check">
                    <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="sexo1" name="sexo" value="MASCULINO">Masculino
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="sexo2" name="sexo" value="FEMININO">Feminino
                    </label>
                </div>
            </div>
            <br>
            <div>
                <label for="nascionalidade">Nascionalidade:</label>
                <input type="text" class="form-control" id="nascionalidade" name="nascionalidade" required="true">
            </div>
            <br>
            <div align="center">
                <a class="btn btn-danger" style="width: 20%" href="/autorHome">Voltar</a>
                <button class="btn btn-success" style="width: 20%" type="submit" id="botaoCad" >Salvar</button>
            </div>
        </form>
    </body>
</html>
