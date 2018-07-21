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
            <div class="name"><?=$item['product']['name']?></div>
            <div class="count"><?=$item['count']?></div>
            <a href="/cart/remove_from_basket?id=<?=$item['product']['id']?>">Удалить из корзины</a>
        </div>
    <?php endforeach; ?>
    <br>
    <button id="order">Оформить заказ</button>
<?php endif; ?>
<br>
<br>
<script>
    $(function () {
        $("#order").on('click', function () {
            console.log(this);
            let
            // let id = $(this).data('id');
            // let qty = $('#qty_input').val();
            // $.ajax({
            //     url: '/cart/add_to_cart',
            //     type: 'POST',
            //     data: {
            //         id: id,
            //         qty: qty
            //     },
            //     success: function (response) {
            //         response = JSON.parse(response);
            //         if (response.success == 'ok') {
            //             alert(response.message);
            //         }
            //     }
            // })
        })
    });
</script>

