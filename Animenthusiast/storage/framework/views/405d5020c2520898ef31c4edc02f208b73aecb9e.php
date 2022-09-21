<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/profilo.css')); ?>">
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
                <a href="<?php echo e(url('home')); ?>">Home</a>
                <a href="<?php echo e(url('logout')); ?>">Logout</a><br>
            </div>
        </nav>
    </header>

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
                <?php echo e($tit->titolo); ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </p>
        </div>
    </main>
</body>

</html><?php /**PATH D:\Program Files\xampp\htdocs\Uni_Anime\resources\views/profilo.blade.php ENDPATH**/ ?>