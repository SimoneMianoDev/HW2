<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lispour</title>
        <link rel="icon" type="image/png" href="images/welcome_letter.png">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@1,700&display=swap">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arvo', serif;
                font-weight: 200;
                height: 70vh;
                margin: 0;
            }

            .content {
                margin-top:100px;
                text-align: center;
            }

            .title_page{
                font-size: 84px;
                color: #feb236;
                margin-bottom: 30px;
            }

            .links a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            @media(max-width:430px){
                .title_page{
                    font-size: 75px;
                }
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title_page">
                ANIMENTHUSIAST
                </div>

                <div class="links">
                    <a href="<?php echo e(url('login')); ?>">Accedi</a>

                    <?php if(Route::has('signup')): ?>
                        <a href="<?php echo e(url('signup')); ?>">Registrati</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Uni_Anime\resources\views/welcome.blade.php ENDPATH**/ ?>