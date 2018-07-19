<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2018
 * Time: 23:48
 */
include 'kint.php';
?>
<?php foreach ($goods as $good): ?>
    <div class="product" data-id="<?=$good['id']?>" data-imgPath="<?=$good['imgPath']?>" data-name="<?=$good['name']?>"
         data-rating="<?=$good['rating']?>"
         data-price="<?=$good['price']?>">
        <div class="product__buttons">
            <div class="product__add">
                <i class="fas fa-shopping-cart color-white"></i>&nbsp;&nbsp;Add to cart
            </div>
            <div class="product__browse">
                <a href="singlepage.php" class="product__link">Browse more</a>
            </div>
        </div>
        <img src="<?=$good['imgPath']?>" alt="<?=$good['name']?>" class="product__image">
        <h2 class="product__name"><?=$good['name']?></h2>
        <p class="product__price">$ <?=$good['price']?></p>
    </div>
<?php endforeach; ?>