    <body>
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-12 col-sm-6 col-md-4">
                            <h5>Categoria: <i class="<?php echo $product->icons; ?>"></i></h5>
                            <h5>Descrizione: <?php echo $product->description; ?> </h5>
                            <h5>Prezzo: <?php echo $product->price; ?> </h5>
                            <h5>Tipo di articolo: <?php echo $product->kind; ?> </h5>
                            <div class="imgContainer">
                                <img src="<?php echo $product->img; ?>" , width=100, alt="">
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </main>
    </body>