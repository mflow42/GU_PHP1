<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 21:15
 */

?>
<h1>Заказ: <?=$order['order_id']?></h1>

<div class="catalogue">
    <?php foreach ($order as $product): ?>
        <div class="catalogue__card">
            <div class="catalogue__card-wrapper">
                <a class="products__name" href="/product/card?id=<?=$product['id']?>">
                    <img class="products__img" src="<?=$product['imgPath']?>" alt="<?=$product['name']?>"
                         class="product__image">
                    <div class="catalogue__card-content">
                        <h1><?=$product['name']?></h1>
                        <p><?=$product['description']?></p>
                    </div>
                </a>
            </div>
            Количество товара: <?=$product['qty']?>

            <form action="order/change_product_qty" method="post">
                <div class="catalogue__inputs">
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input type="text" name="qty" value="<?=$product['qty']?>">
                    <input type="submit" value="Изменить количество">
                </div>
            </form>

            <form action="order/change_product_qty" method="post">
                <div class="catalogue__inputs">
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input type="submit" value="Удалить товар">
                </div>
            </form>
        </div>
    <?php endforeach; ?>
</div>
<br>
<br>