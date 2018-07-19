<div class="products">
<?php foreach ($goods as $good): ?>
    <div class="products__wrapper">
        <img class="products__img" src="<?=$good['imgPath']?>" alt="<?=$good['name']?>" class="product__image">
        <h1 class="products__name"><?=$good['name']?></h1>
        <p class="products__price">$ <?=$good['price']?></p>
    </div>
<?php endforeach; ?>
</div>
