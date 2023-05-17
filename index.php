<?php
include __DIR__ . '/Partials/header.php';
include __DIR__ . '/Database/db.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-6">
                    <div class="card <?= strtolower($product->type); ?>">
                        <div class="img-card">
                        <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                        </div>
                        <div class="card-body">
                                    <h5 class="card-title"><?= $product->name; ?></h5>
                                    <div class="card-text">
                                    <img class="icon" src="<?= $product->category->icon; ?>" alt="">
                                        <p>Maker: <?= $product->brand ?></p>
                                        <p>Category: <?= $product->category->name; ?></p>
                                        <p>Type: <?= $product->type; ?></p>
                                        <p>Price: <?= $product->price; ?></p>
                                        <?php if (is_a($product, 'FoodProduct')) : ?>
                                            <p>Expiration date: <?= $product->expdate; ?> </p>
                                            <p>Weight: <?= $product->weight; ?> </p>
                                            <?php endif; ?> 
                                            <?php if (is_a($product, 'BedProduct')) : ?>
                                            <p>Fabric: <?= $product->fabric; ?> </p>
                                            <p>Wash at: <?= $product->washingTemperature; ?> </p>
                                            <?php endif; ?> 
                                            <?php if (is_a($product, 'ToyProduct')) : ?>
                                            <p>Material: <?= $product->material; ?> </p>
                                            <p>Supervision <?= $product->requireSupervision; ?> </p>
                                            <?php endif; ?> 
                                    </div>
                             
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>