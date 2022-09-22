<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/profilo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navig.css')); ?>">
    <script src="<?php echo e(asset('js/navig.js')); ?>" defer="true"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/icon_img.png">
    <title>Animenthusiast - Profilo</title>
</head>

<nav id="nav_style">
        <div id='menu'>
            <img src='./images/welcome_letter.png' id='logo'>
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
    <main>
        <section id='profilo'>
            <div class="propic">
            </div>

            <div class='user'><?php echo e($nome); ?> <?php echo e($cognome); ?></div>
            <div class='username'>@ <?php echo e($username); ?></div>
            <div class='post_piaciuti'>
                Elementi piaciuti: <?php echo e($numero); ?>

            </div>
        </section>
        <div class='liked_tit'>
            <h1>ANIME PREFERITI:</h1>
            <p>
            <?php $__currentLoopData = $titolo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($tit->titolo); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
    </main>
</body>

</html><?php /**PATH D:\Program Files\xampp\htdocs\Animenthusiast\resources\views/profilo.blade.php ENDPATH**/ ?>