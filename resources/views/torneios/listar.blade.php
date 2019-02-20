<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jogador/estilo1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Novo jogador</title>
</head>
<body>
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista Libros</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('torneio.create') }}" class="btn btn-info" >Adicionar Torneio</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Data</th>
                                    <th>Tipo</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </thead>
                                <tbody>
                                @if($torneios->count())
                                    @foreach($torneios as $torneio)
                                        <tr>
                                            <td>{{$torneio->id}}</td>
                                            <td>{{$torneio->nome}}</td>
                                            <td>{{$torneio->data}}</td>
                                            <td>{{$torneio->tipo}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('TorneioController@edit', $torneio->id)}}" >Editar</a></td>
                                            <td>
                                                <form action="{{action('TorneioController@destroy', $torneio->id)}}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger btn-xs" type="submit">Excluir</button>
                                                </form>
                                            </td>
                                            <td><a class="btn btn-primary btn-xs" href="#" >Equipes</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">Não existem torneios cadastrados!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</body>