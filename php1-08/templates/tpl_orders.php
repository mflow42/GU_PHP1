<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 17:24
 */

?>
<h1>Заказы:</h1>
<h3>Текущие:</h3>
<?php

if (empty($orders)): ?>
    <div>Заказов пока нет.</div>
<?php else: ?>
    <?php foreach ($orders as $order): ?>
    <div>
        <?=$order['date']?> ::
        номер заказа: <?=$order['order_id']?> ::
        <a href="/orders/order?id=<?=$order['order_id']?>">Посмотреть заказ</a>
        <a href="/orders/remove?id=<?=$order['order_id']?>">Отменить заказ</a>
        </div>
    <?php endforeach; ?>
    <br>
<?php endif; ?>
<br>
<br>
<h3>Архив:</h3>


