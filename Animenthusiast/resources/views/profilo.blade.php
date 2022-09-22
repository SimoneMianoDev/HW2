<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/profilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/navig.css')}}">
    <script src="{{asset('js/navig.js')}}" defer="true"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/icon_img.png">
    <title>Animenthusiast - Profilo</title>
</head>

<nav id="nav_style">
        <div id='menu'>
            <img src='./images/welcome_letter.png' id='logo'>
            <div id='sezioni'>
            <a href="{{url('home')}}"><div class="sezione" id="corrente">HOME</div></a>
            <a href="{{url('logout')}}"><div class="sezione">LOGOUT</div></a>

            <img src="./images/menu-close.png" id='iconmenu' onclick="MenuMobile()">
            </div>
        </div>    

        <div id='mobile_menu'>
            <div id='sezioni_mobile'>
            <a href="{{url('home')}}"><div class="sezione_mobile" id="corrente_mobile">HOME</div></a>
            <a href="{{url('logout')}}"><div class="sezione_mobile">LOGOUT</div></a>
            </div>
        </div>
    </nav>

<body>
    <main>
        <section id='profilo'>
            <div class="propic">
            </div>

            <div class='user'>{{$nome}} {{$cognome}}</div>
            <div class='username'>@ {{$username}}</div>
            <div class='post_piaciuti'>
                Elementi piaciuti: {{$numero}}
            </div>
        </section>
        <div class='liked_tit'>
            <h1>ANIME PREFERITI:</h1>
            <p>
            @foreach ($titolo as $tit)
                {{$tit->titolo}}
            @endforeach
            </p>
        </div>
    </main>
</body>

</html>