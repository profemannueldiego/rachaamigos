<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="{{asset('css/jogador/estilo1.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <title>Novo jogador</title>
    </head>
    <body>
        <form action="{{ route('jogador.store') }}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="nome" placeholder="Primeiro Nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" placeholder="Segundo Nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" name="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="form-group">
                <label for="wpp">WhatsApp:</label>
                <input type="text" name="wpp" placeholder="(00)90000-0000" class="form-control">
            </div>
            <div class="form-group">
                <label for="file">Foto:</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <input type="submit" value="Cadastrar" class="btn-cinza">
            @csrf
        </form>

    </body>
</html>