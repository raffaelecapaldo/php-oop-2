<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                    <div class="card <?= strtolower($product->type); ?>">
                        <div class="img-card">
                            <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->name; ?></h5>
                            <div class="card-text">
                                <img class="icon" src="<?= $product->category->icon; ?>" alt="">
                                <p class="fw-bold">Maker: <?= $product->brand ?></p>
                                <p class="m-0">Category: <?= $product->category->name; ?></p>
                                <p class="m-0">Type: <?= $product->type; ?></p>
                                <?php if (method_exists($product, 'getColor')) : ?>
                                <?= $product->getColor(); ?>
                                <?php endif; ?>
                                <p>Price: <?= $product->price; ?></p>
                                <?php if (is_a($product, 'FoodProduct')) : ?>
                                    <p class="m-0">Expiration date: <?= $product->expdate; ?> </p>
                                    <p>Weight: <?= $product->weight; ?> </p>
                                <?php endif; ?>
                                <?php if (is_a($product, 'BedProduct')) : ?>
                                    <p class="m-0">Fabric: <?= $product->fabric; ?> </p>
                                    <p>Wash at: <?= $product->washingTemperature; ?> </p>
                                <?php endif; ?>
                                <?php if (is_a($product, 'ToyProduct')) : ?>
                                    <p class="m-0">Material: <?= $product->material; ?> </p>
                                    <p>Supervision required: <?= $product->requireSupervision ? '<span class="text-danger fw-bold">YES</span>' : '<span class="text-success fw-bold">NO</span>'; ?> </p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>