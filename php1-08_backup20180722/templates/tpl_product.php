<br>
<br>
<a href="/index">Назад</a>
<br>
<br>
<img src="<?=$product['imgPath']?>" alt="">
<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>

<!--<form action="basket/add_to_cart" method="post">-->
<!--    <input type="hidden" name="id" value="--><? //=$product['id']?><!--">-->
<!--    <input type="text" name="qty">-->
<!--    <input type="submit" value="Добавить в корзину">-->
<!--</form>-->
<input id="qty_input" type="text" name="qty">
<div>
    <button data-id="<?=$product['id']?>" id="add_to_card">Добавить в корзину</button>
</div>
<script>
    $(function () {
        $("#add_to_card").on('click', function () {
            let id = $(this).data('id');
            let qty = $('#qty_input').val();
            $.ajax({
                url: '/cart/add_to_cart',
                type: 'POST',
                data: {
                    id: id,
                    qty: qty
                },
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.success == 'ok') {
                        alert(response.message);
                    }
                }
            })
        })
    });
</script>