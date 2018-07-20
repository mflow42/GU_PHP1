<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="products__wrapper">
            <img class="products__img" src="<?=$product['imgPath']?>" alt="<?=$product['name']?>"
                 class="product__image">
            <h1 class="products__name"><?=$product['name']?></h1>
            <p class="products__price">$ <?=$product['price']?></p>
        </div>
    <?php endforeach; ?>
</div>
