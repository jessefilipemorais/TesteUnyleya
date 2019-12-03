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

        <script type="text/javascript" src="{{ URL::asset('js/autor/autorFuncoes.js') }}"></script>
    </head>
    <body >

        @include('menu')
        <h2 align = 'center'>Cadastro de Autor</h2 >
        @if(session()->has('messagemAutor'))
        <div id="msg" class="alert alert-error">
            <h7> {{ session()->get('messagemAutor') }}</h7>
        </div>
        @endif
        &nbsp&nbsp<a class="btn btn-primary" style="width: 240px" href="{{ url('/autorNovo') }}">Cadastrar novo autor</a>        
        <br><br>
        @if(count($autors) > 0)
        <div id="msg" >
            <h7>&nbsp&nbsp {{ count($autors) }} autor(es) cadastrado(s).</h7>
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
                        <th>Nome</th>
                        <th>Ano de Nasc.</th>
                        <th>Sexo</th>
                        <th>Nascionalidade</th>
                        <th>Criado em</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($autors as $autor)
                    <tr>
                        <!--
                        <td>
                            <input class="chk" type="checkbox" id="formsSelec" name="formsSelec" value="{{ $autor->idautor }}" >
                        </td>
                        -->
                        <td>{{ $autor->idautor }}</td>
                        <td>{{ $autor->nome }}</td>
                        <td>{{ $autor->anonascimento }}</td>
                        <td>{{ $autor->sexo }}</td>
                        <td>{{ $autor->nascionalidade }}</td>
                        <td>{{ $autor->created_at }}</td>
                        <td><a class="btn btn-success" href="{{ url('autorEditar/'.$autor->idautor) }}" >Editar</a></td>
                        <td><a class="btn btn-danger text-white" onclick="apagarAutor( {{ $autor->idautor }} )" >Apagar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <h6>&nbsp&nbsp Não existe autores cadastrados.</h6>
        @endif    
    </body>
</html>
