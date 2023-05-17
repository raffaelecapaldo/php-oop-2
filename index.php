<?php
include __DIR__ . '/Partials/header.php';
include __DIR__ . '/Database/db.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-6">
                    <div class="card">
                        <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                        <div class="card-body">
                            <div class="info d-flex justify-content-between">
                                <div class="info-text">
                                    <h5 class="card-title"><?= $product->name; ?></h5>
                                    <div class="card-text">
                                        <p>Category: <?= $product->category->name; ?></p>
                                        <p>Type: <?= $product->type; ?></p>
                                        <p>Price: <?= $product->price; ?></p>

                                    </div>
                                </div>
                                <div class="icons-info">
                                    <img class="icon" src="<?= $product->category->icon; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>