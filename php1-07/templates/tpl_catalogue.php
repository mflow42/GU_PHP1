<br>
<br>
<a href="/index.php">Назад</a><br>
<br>
<div class="catalogue">
    <?php foreach ($products as $product): ?>
        <div class="catalogue__card">
            <div class="catalogue__card-wrapper">
                <a class="products__name" href="/product.php?id=<?=$product['id']?>">
                    <img class="products__img" src="<?=$product['imgPath']?>" alt="<?=$product['name']?>"
                         class="product__image">
                    <div class="catalogue__card-content">
                        <div><?=$product['name']?></div>
                        <div><?=$product['description']?></div>
                    </div>
                </a>
            </div>
            <form action="add_to_cart.php" method="post">

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

