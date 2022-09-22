<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('css/spotify.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/navig.css')); ?>">
        <script src="<?php echo e(asset('js/spotify_api.js')); ?>" defer="true"></script>
        <script src="<?php echo e(asset('js/navig.js')); ?>" defer="true"></script>
        <link rel="icon" type="image/jpg" href="images/music_ic.png">
        <script type="text/javascript">
        const API_ROUTE = "<?php echo e(url('/')); ?>/"
        </script>   
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <title>AnimeSongs</title>
    </head>

    <nav id="nav_style">
        <div id='menu'>
            <img src='./images/welcome_letter.png' id='logo'>
            <h1 id="usern">@ <?php echo e($username); ?></h1>
            <div id='sezioni'>
            <a href="<?php echo e(url('home')); ?>"><div class="sezione" id="corrente">HOME</div></a>
            <a href="<?php echo e(url('logout')); ?>"><div class="sezione">LOGOUT</div></a>

            <img src="./images/menu-close.png" id='iconmenu' onclick="MenuMobile()">
            </div>
        </div>    

        <div id='mobile_menu'>
        <div id='sezioni_mobile'>
            <a href="<?php echo e(url('home')); ?>"><div class="sezione_mobile" id="corrente_mobile">HOME</div></a>
            <a href="<?php echo e(url('logout')); ?>"><div class="sezione_mobile">LOGOUT</div></a>
            </div>
        </div>
    </nav>

    <body>
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
</html><?php /**PATH D:\Program Files\xampp\htdocs\Animenthusiast\resources\views/spotify.blade.php ENDPATH**/ ?>