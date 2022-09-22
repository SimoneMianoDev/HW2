<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(asset('css/spotify.css')); ?>">
        <script src="<?php echo e(asset('js/spotify_api.js')); ?>" defer="true"></script>
        <link rel="icon" type="image/jpg" href="images/music_ic.png">
        <script type="text/javascript">
        const API_ROUTE = "<?php echo e(url('/')); ?>/"
        </script>   
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <title>AnimeSongs</title>
    </head>

    <body>
        <header>
            <nav>
            <div id="sx">
                <h1>Animenthusiast - canzoni sugli anime</h1>
                <h1 id="usern">@ <?php echo e($username); ?></h1>
            </div>
                <div id="dx">
                    <a href="<?php echo e(url('home')); ?>">Home</a>
                    <a href="<?php echo e(url('logout')); ?>">Logout</a><br>
                </div>
            </nav>
        </header>

        <form name="cerca_canzoni" id="cerca_canzoni">        
            <div>Cerca la canzone associata al tuo anime preferito</div>
            <input type="text" id="testo">
            <input type="submit" id="invio" value="Cerca">
        </form>

        <main id="contenitore">
            <div class="visualizza">

            </div>
        </main>
    </body>
</html><?php /**PATH D:\Program Files\xampp\htdocs\Uni_Anime\resources\views/spotify.blade.php ENDPATH**/ ?>