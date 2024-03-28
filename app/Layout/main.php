    <body>
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-12 col-sm-6 col-md-4">
                            <?php if ($product->isDog) : ?>
                                <h4>
                                    Categoria: <i class='fa-solid fa-dog'></i>
                                </h4>
                                <h5>Descrizione: <?php echo $product->description; ?> </h5>
                                <h5>Prezzo: <?php echo $product->price; ?> </h5>
                                <?php if ($product->training != 'Not Available') : ?>
                                    <h5>Tipo di Addestramento: <?php echo $product->training; ?> </h5>
                                <?php endif ?>
                                <?php if ($product->walking != 'Not Available') : ?>
                                    <h5>Tipo di oggetto da passeggio: <?php echo $product->walking; ?> </h5>
                                <?php endif ?>
                                <?php if ($product->kind != 'Not Available') : ?>
                                    <h5>Tipo articolo: <?php echo $product->kind; ?> </h5>
                                <?php endif ?>
                                <div class="imgContainer">
                                    <img src="<?php echo $product->img; ?>" , alt="">
                                </div>
                            <?php else : ?>
                                <h4>
                                    Categoria: <i class='fa-solid fa-cat'></i>
                                </h4>
                                <h5>Descrizione: <?php echo $product->description; ?> </h5>
                                <h5>Prezzo: <?php echo $product->price; ?> </h5>

                                <h5>Tipo di articolo: <?php echo $product->kind; ?> </h5>
                                <div class="imgContainer">
                                    <img src="<?php echo $product->img; ?>" , alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </main>
    </body>