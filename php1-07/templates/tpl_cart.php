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
        <div>
            <?=$item['product']['name']?>
            <?=$item['count']?>
            <a href="/basket/remove_from_basket?id=<?=$item['product']['id']?>">Удалить из корзины</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

