<br>
<a href="/">Назад</a><br>
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
            <a href="/product/remove?id=<?=$product['id']?>"><button>Удалить товар</button></a>
        </div>
    <?php endforeach; ?>
</div>
<!--разметка для формы загрузки картинок-->
<div class="gallery-upload">
    <h1>Модуль создания товара</h1>
    <form class="gallery__form" action="product/add" enctype="multipart/form-data" method="post">
        <input type="hidden" name="upload" value="image"/><br>
        <input type="text" name="name" id="" placeholder="Введите название"><label for="name"> Наименование товара</label>
        <br><input type="text" name="price" id="" placeholder="Введите цену"><label for="price"> Цена товара</label><br>
        <textarea name="description" rows="10" cols="40" id="" placeholder="Введите описание"></textarea><label for="description"> Описание товара</label><br>
        <label for="image">Добавить фотографию товара: </label><br>
        <input type="file" name="image" id=""><br><br>
        <input type="submit" value="Создать товар">
    </form>
</div>
