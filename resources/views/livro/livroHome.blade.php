<!doctype html> 
<?php date_default_timezone_set('America/Sao_Paulo');?>
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
    <body >

        @include('menu')
        <h2 align = 'center'>Cadastro de Livro</h2 >
        @if(session()->has('messagemLivro'))
        <div id="msg" class="alert alert-error">
            <h7> {{ session()->get('messagemLivro') }}</h7>
        </div>
        @endif
        &nbsp&nbsp<a class="btn btn-primary" style="width: 240px" href="{{ url('/livroNovo') }}">Cadastrar novo livro</a>        
        <br><br>
        @if(count($livros) > 0)
        <div id="msg" >
            <h7>&nbsp&nbsp {{ count($livros) }} livro(s) cadastrado(s).</h7>
        </div>
        <div class="table-responsive ">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <!--
                        <th>
                            <input type="checkbox" id="marcarDesmarcarTd" name="marcarDesmarcarTd" onclick="marcarTodosForms()">Todos
                        </th>
                        -->
                        <th>ID</th>
                        <th>Título</th>
                        <th>Ano de lanç.</th>
                        <th>Autor</th>
                        <th>Gênero Literário</th>
                        <th>Editora</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livros as $livro)
                    <tr>
                        <!--
                        <td>
                            <input class="chk" type="checkbox" id="formsSelec" name="formsSelec" value="{{ $livro->idlivro }}" >
                        </td>
                        -->
                        <td>{{ $livro->idlivro }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->anolancamento }}</td>
                        <td>{{ $livro->nomeautor }}</td>
                        <td>{{ $livro->nomegeneroliterario }}</td>
                        <td>{{ $livro->nomeeditora }}</td>
                        <td><a class="btn btn-success" href="{{ url('livroEditar/'.$livro->idlivro) }}" >Editar</a></td>
                        <td><a class="btn btn-danger text-white" onclick="apagarLivro( {{ $livro->idlivro }} )" >Apagar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <h6>&nbsp&nbsp Não existe livros cadastrados.</h6>
        @endif    
    </body>
</html>
