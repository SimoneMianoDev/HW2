<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/profilo.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/icon_img.png">
    <title>Animenthusiast - Profilo</title>
</head>

<body>
    <header>
        <nav>
            <div id='sx'>
                <h1>Animenthusiast</h1>
            </div>
            <div id='dx'>
                <a href="{{url('home')}}">Home</a>
                <a href="{{url('logout')}}">Logout</a><br>
            </div>
        </nav>
    </header>

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
                {{$tit->titolo}},
            @endforeach

            </p>
        </div>
    </main>
</body>

</html>