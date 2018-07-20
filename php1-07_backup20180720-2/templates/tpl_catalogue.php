<div class="catalogue">
    <?php foreach ($products as $product): ?>
        <div class="catalogue__card-wrapper">
            <a href="/cart.php?id=<?=$product['id']?>">
                <div class="catalogue__card-content">
                    <div><?=$product['name']?></div>
                    <div><?=$product['description']?></div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
