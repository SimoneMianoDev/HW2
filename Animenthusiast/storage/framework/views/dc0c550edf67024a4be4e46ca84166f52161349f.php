<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
        <script src="<?php echo e(asset('js/home.js')); ?>" defer="true"></script>
        <script src="<?php echo e(asset('js/likes.js')); ?>" defer="true"></script>
        <script type="text/javascript">
            const HOME_ROUTE = "<?php echo e(url('/')); ?>/";
            const csrf_token = "<?php echo e(csrf_token()); ?>";
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="icon" type="image/jpg" href="images/icon_img.png">
        <title>GUARDA QUESTI ANIME ORA!</title>
    </head>

    <nav class="navigazione">
        <a href="<?php echo e(url('home')); ?>">HOME</a>
        <a href="<?php echo e(url('logout')); ?>">LOGOUT</a>
        <a href="<?php echo e(url('spotify')); ?>">MUSICA</a>
        <a href="<?php echo e(url('profilo')); ?>">PROFILO</a>
    </nav>

    <header>
        <img src="./images/anime.png">
        <div id="overlay">
            <h1>I MIEI 5 ANIME PREFERITI</h1>
        </div>
    </header>

    <body>

        <section id="feed">

            <form name="search_content" id="search_content">        
                Visualizza il tuo anime preferito<br>
                <input type="text" id="element">
                <input type="submit" value="Cerca">
            </form>


            <article id='global-view'></article>

                <div class="griglia_post">
                    <h1>Dragon Ball Z</h1>
                    <p>
                        Son Goku, un bambino con la coda di scimmia e la forza smisurata, incontra un 
                        giorno una ragazza di nome Bulma. Ella è alla ricerca delle sette sfere del drago,
                        potenti oggetti magici che, se riuniti, permettono di evocare il drago Shenron, 
                        creatura che esaudisce un qualunque desiderio a colui che l'ha richiamato. Goku 
                        viene quindi persuaso da Bulma ad aiutarla nella ricerca delle sfere e i due partono 
                        per un lungo viaggio, nel corso del quale fanno numerosi incontri. In seguito Goku 
                        si sottopone agli allenamenti del Maestro Muten e partecipa a numerose edizioni del 
                        Torneo Tenkaichi, un campionato mondiale di arti marziali che si svolge ogni tre anni. 
                        Nel corso della sua crescita e del suo sviluppo, affronta numerosi nemici, tra cui Piccolo, 
                        figlio e reincarnazione di una creatura demoniaca, diventando così il combattente più forte 
                        della Terra.
                        Ormai adulto, Goku scopre di appartenere alla razza extraterrestre dei Saiyan, un crudele 
                        popolo di combattenti che lo aveva spedito sulla Terra ancora in fasce per conquistare il pianeta. 
                        Poco dopo il suo arrivo aveva però subito un trauma cranico, perdendo in questo modo il ricordo 
                        della missione e la sua natura aggressiva. Ciò nonostante il giovane decide di continuare a difendere 
                        il suo pianeta d'adozione dall'attacco di nemici sempre più forti. In questo modo, insieme alla sua 
                        famiglia e ai suoi amici, affronta Freezer, Cell e Majin Bu, ergendosi a protettore della Terra e dell'universo intero.
                    </p>
                    <strong>voto: 9</strong>
                    <img src="./images/db.png">
                    <div id="cf" class="like"></div>
                </div>

                <div class="griglia_post">
                    <h1>Naruto</h1>
                    <p>
                        Naruto Uzumaki è un ninja dodicenne del Villaggio della Foglia con 
                        il sogno di diventare hokage, il ninja più importante del villaggio. 
                        Naruto ha passato l'infanzia nell'emarginazione e, durante uno scontro 
                        con Mizuki, un ninja traditore, viene a scoprirne il motivo: dentro di 
                        lui è sigillata la Volpe a Nove Code, uno dei nove cercoteri, giganteschi 
                        demoni sovrannaturali. Dopo avere sconfitto Mizuki, Naruto viene promosso 
                        all'accademia ninja e viene integrato nel gruppo sette composto, oltre a lui,
                        da Sasuke Uchiha, Sakura Haruno e il maestro Kakashi Hatake.
                    </p>
                    <strong>voto: 10</strong>
                    <img src="./images/naruto.png">
                    <div id="cf" class="like"></div>
                </div>

                <div class="griglia_post">
                    <h1>Bleach</h1>
                    <p>
                        Bleach è un manga scritto e illustrato da Tite Kubo. Esso segue le avventure del giovane Ichigo Kurosaki, il quale riceve
                        accidentalmente poteri da shinigami da Rukia Kuchiki. Oltre ad assumersi l'incarico
                        di difendere gli esseri umani dagli spiriti maligni e di guidare le anime defunte verso l'aldilà, 
                        Ichigo viene coinvolto in una serie di scontri tra spiriti, che lo portano a esplorare vari regni
                        dell'aldilà e a scoprire di più sulle proprie origini.
                    </p>
                    <strong>voto: 9</strong>
                    <img src="./images/bleach.png">
                    <div id="cf" class="like"></div>
                </div>

                <div class="griglia_post">
                    <h1>Re:Zero - Starting Life in Another World</h1>
                    <p>
                        Catapultato in un mondo fantasy, il giovane hikikomori Subaru Natsuki viene 
                        aggredito da un gruppo di loschi banditi. Ad aiutarlo è una mezzelfa dai 
                        capelli argentati di nome Emilia, il cui obiettivo è diventare la prossima
                        regina del paese in cui si trovano, Lugunica. Scoprendo che la sua salvatrice
                        è sulle tracce di una giovane ladra che le ha rubato un oggetto, in segno di 
                        riconoscenza Subaru si offre di darle una mano mettendosi anche lui alla sua ricerca.
                        Sfortunatamente è la peggio a prendere il sopravvento sui due, e così la missione si 
                        conclude con la loro morte.
                        Nonostante ciò, Subaru si risveglia improvvisamente nello stesso posto in cui era stato 
                        evocato all'inizio: ben presto si renderà infatti conto che ha ricevuto il potere di tornare 
                        in vita ogni volta che morirà, riavvolgendo il tempo e riprendendo conoscenza in un momento
                        imprecisato del passato senza perdere i ricordi delle linee temporali precedenti. 
                        Consapevole dei vantaggi e svantaggi di una tale peculiarità, Subaru intraprende 
                        dunque una pericolosa avventura per salvare e difendere non solo Emilia, ma anche
                        altre persone con cui legherà lungo il cammino.
                    </p>
                    <strong>voto: 9</strong>
                    <img src="./images/rez.png">
                    <div id="cf" class="like"></div>
                </div>

                <div class="griglia_post">
                    <h1>One-Punch Man</h1>
                    <p>
                        Dopo tre anni di allenamento, un ragazzo venticinquenne di nome Saitama ha raggiunto il suo obiettivo: 
                        essere un eroe talmente forte da poter sconfiggere chiunque con un solo colpo. 
                        Tuttavia, essere diventato così potente ha reso talmente facile il ruolo di eroe 
                        a Saitama da renderlo perennemente annoiato e portarlo alla depressione. In seguito, 
                        con la conoscenza del cyborg Genos (che diventerà suo allievo), entrerà a far parte dell'Associazione Eroi, 
                        un'organizzazione che riunisce gli eroi della Terra con lo scopo di combattere criminali, mostri e disastri 
                        vari. Il nuovo obiettivo di Saitama diventa quello di scalare le classifiche dell'associazione e diventare uno 
                        degli eroi più popolari.
                    </p>
                    <strong>voto: 8</strong>
                    <img src="./images/opm.png">
                    <div id="cf" class="like"></div>
                </div>

        </section>


            <footer id='finale'> 
                <div>
                    <hr>
                        <p class="fin"><?php echo e($nome); ?> <?php echo e($cognome); ?> - anime enthusiast </p>
                </div>
            </footer>
    </body>

</html>
<?php /**PATH D:\Program Files\xampp\htdocs\Animenthusiast\resources\views/home.blade.php ENDPATH**/ ?>