<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 1:20
 */
?>
<h3>Товары в корзине:</h3>
<?php if (empty($basket)): ?>
    <div>Корзина пуста!</div>
<?php else: ?>
        <?php foreach ($basket as $item): ?>
            <div class="product">
                <span name="product__name" class="product__name"><?=$item['product']['name']?></span>
                <span name="product__count" class="product__count"><?=$item['count']?></span>
                <a href="/cart/remove_from_basket?id=<?=$item['product']['id']?>">Удалить из корзины</a>
            </div>
        <?php endforeach; ?>
        <br>
        <a href="/orders/add_order"><button>Оформить заказ</button></a>
<?php endif; ?>
<br>
<br>

