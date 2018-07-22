<br>
<br>
<a href="/">Назад</a><br>
<br>
<div class="catalogue">
    <?php foreach ($products as $product): ?>
        <div class="catalogue__card">
            <div class="catalogue__card-wrapper">
                <a class="products__name" href="product/card?id=<?=$product['id']?>">
                    <img class="products__img" src="<?=$product['imgPath']?>" alt="<?=$product['name']?>"
                         class="product__image">
                    <div class="catalogue__card-content">
                        <h1><?=$product['name']?></h1>
                        <p><?=$product['description']?></p>
                    </div>
                </a>
            </div>
            <form action="cart/add_to_cart" method="post">
                <div class="catalogue__inputs">
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input type="text" name="qty" value="1">
                    <input type="submit" value="Добавить в корзину">
                </div>
            </form>
        </div>
    <?php endforeach; ?>
</div>
<br>
<br>

