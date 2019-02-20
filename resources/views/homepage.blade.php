<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Racha dos Amigos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/estilo1.css')}}" >
    <style>
    </style>

    <body>
        <header>
            <div id="logo">
                <h1>Racha dos Amigos</h1>
            </div>
            <nav>
                <ul>
                    <li>HOME</li>
                    <li>JOGADORES</li>
                    <li>REGULAMENTO</li>
                    <li>RESULTADOS</li>
                    <li>FINANCEIRO</li>
                    <li>CONTATO</li>
                </ul>
            </nav>
        </header>

        <section id="ultimo-jogo">
            <aside></aside>
            <div id="caixa-branca">
                <h1 class="branca-acima">ÚLTIMO RESULTADO</h1>
                <h3>25 de dezembro de 2018</h3>
                <h1 class="branca-abaixo"><a href="#" class="mais-info"> MAIS INFORMAÇÕES </a></h1>
            </div>
        </section>

        <section id="sobre-racha">
            <aside id="um">
                <h1>SOBRE O RACHA</h1>
                <p>O Racha dos Amigos foi fundado no ano de 2018 e conta com 23 participantes do tradicional racha de domingo.</p>
                <p>Desde sua fundação, o Racha dos Amigos vem proporcionando confraternização, novas amizades, companheirismo e união.</p>

            </aside>
            <aside id="dois">
                <h1>ORGANIZAÇAO 2018</h1>
                <ul>
                    <li>Joamalison</li>
                    <li>Patryk</li>
                    <li>Saulo</li>
                </ul>
            </aside>
        </section>

        <footer>
            <section id="um">
                <div id="logo-rp">
                    <h1>Racha dos Amigos</h1>
                </div>
                <p>
                    Desde sua fundação, o Racha dos Amigos vem proporcionando confraternização, novas amizades, companheirismo e união.
                </p>
            </section>
            <section id="dois">
                <p>Siga-nos nas redes sociais:</p>
                <div id="social">
                    <div id="fb"></div>
                    <div id="ig"></div>
                    <div id="tw"></div>
                    <p class="clear"></p>
                </div>
            </section>
            <h4>Todos direitos reservados © 2018 | Desenvolvido por <a href="#">IGT Sistemas</a></h4>
        </footer>
    </body>
</html>