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

        <script type="text/javascript" src="{{ URL::asset('js/livro/livroFuncoes.js') }}"></script>
    </head>
    <body>
        @include('menu')
        <h2 align = 'center'>Criar Novo Livro</h2>
        <br>      
        <form class="container" method="post" action ="/livroSalvarNovo" target = "_self">
            @csrf
            <div>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required="true">
            </div>
            <br>
            <div>
                <label for="anolancamento">Ano de lançamento:</label>
                <input type="text" class="form-control" id="anolancamento" name="anolancamento" required="true">
            </div>
            <br>
            <div>
                <label for="idautor">Autor:</label>
                <select class="custom-select form-control" id="idautor" name="idautor" required="true" >
                    <option selected></option>
                    @foreach($autors as $autor)
                    <option value="{{ $autor->idautor }}">{{ $autor->nome }}</option>
                    @endforeach
                </select>            
            </div>
            <br>
            <div>
                <label for="idgeneroliterario">Gênero Literário:</label>
                <select class="custom-select form-control" id="idgeneroliterario" name="idgeneroliterario" required="true" >
                    <option selected></option>
                    @foreach($generoliterarios as $generoliterario)
                    <option value="{{ $generoliterario->idgeneroliterario }}">{{ $generoliterario->nome }}</option>
                    @endforeach
                </select>             
            </div>
            <br>
            <div>
                <label for="ideditora">Editora:</label>
                <select class="custom-select form-control" id="ideditora" name="ideditora" required="true" >
                    <option selected></option>
                    @foreach($editoras as $editora)
                    <option value="{{ $editora->ideditora }}">{{ $editora->nome }}</option>
                    @endforeach
                </select>             
            </div>
            <br>
            <div align="center">
                <a class="btn btn-danger" style="width: 20%" href="/livroHome">Voltar</a>
                <button class="btn btn-success" style="width: 20%" type="submit" id="botaoCad" >Salvar</button>
            </div>
        </form>
    </body>
</html>
