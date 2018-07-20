<br>
<br>
<a href="/index.php">Назад</a><br>
<br>
<div class="catalogue">
    <?php foreach ($products as $product): ?>
        <div class="catalogue__card-wrapper products__wrapper">
            
            <a  class="products__name" href="/cart.php?id=<?=$product['id']?>">
                <img class="products__img" src="<?=$product['imgPath']?>" alt="<?=$product['name']?>"
                     class="product__image">
                <div class="catalogue__card-content">
                    <div><?=$product['name']?></div>
                    <div><?=$product['description']?></div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<br>
<br>
