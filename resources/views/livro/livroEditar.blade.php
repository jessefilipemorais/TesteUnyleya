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

        <h2 align = 'center'>Editar Livro</h2>
        <br>      
        <form class="container" method="post" action ="/livroSalvarEdicao" target = "_self">
            @csrf
            <div>
                <label for="idlivro">ID:</label>
                <input type="text" class="form-control" id="idlivro" name="idlivro" readonly="true" value='{{ $livro->idlivro }}'>
            </div>
            <br>
            <div>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required="true" value='{{ $livro->titulo }}'>
            </div>
            <br>
            <div>
                <label for="anolancamento">Ano de lançamento:</label>
                <input type="text" class="form-control" id="anolancamento" name="anolancamento" required="true" value='{{ $livro->anolancamento }}'>
            </div>
            <br>
            <div>
                <label for="idautor">Autor:</label>
                <select class="custom-select form-control" id="idautor" name="idautor" required="true" >
                    @foreach($autors as $autor)
                    @if ($livro->idautor == $autor->idautor)
                    <option selected value="{{ $autor->idautor }}">{{ $autor->nome }}</option>
                    @else
                    <option value="{{ $autor->idautor }}">{{ $autor->nome }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <label for="idgeneroliterario">Gênero Literário:</label>
                <select class="custom-select form-control" id="idgeneroliterario" name="idgeneroliterario" required="true" >
                    @foreach($generoliterarios as $generoliterario)
                    @if ($livro->idgeneroliterario == $generoliterario->idgeneroliterario)
                    <option selected value="{{ $generoliterario->idgeneroliterario }}">{{ $generoliterario->nome }}</option>
                    @else
                    <option value="{{ $generoliterario->idgeneroliterario }}">{{ $generoliterario->nome }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <label for="ideditora">Editora:</label>
                <select class="custom-select form-control" id="ideditora" name="ideditora" required="true" >
                    @foreach($editoras as $editora)
                    @if ($livro->ideditora == $editora->ideditora)
                    <option selected value="{{ $editora->ideditora }}">{{ $editora->nome }}</option>
                    @else
                    <option value="{{ $editora->ideditora }}">{{ $editora->nome }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group" align="center">
                <a class="btn btn-danger" style="width: 20%" href="/livroHome">Voltar</a>
                <button class="btn btn-success" style="width: 20%" type="submit" id="botaoCad" >Salvar</button>
            </div>
        </form>
    </body>
</html>
